<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Rental;
use App\Status;
use \App\User;

class ItemController extends Controller
{
    public function showItems() {
    	$items = Item::all();

        $stockLevel = "In Stock";

    	return view('items.catalog', compact('items', 'stockLevel'));
    }

    public function itemDetails($id) {
    	$item = Item::find($id);

        if ($item->quantity > 4) {
            $stockLevel = "In Stock";
        } elseif ($item->quantity <= 3 && $item->quantity > 0) {
            $stockLevel = "Low Stock";
        } else {
            $stockLevel = "Not available";
        }
        


    	return view('items.item_details', compact('item', 'stockLevel'));
    }

    public function addToCart($id, Request $request) {
    	// dd($id);
        $items = Item::all();
    	if (Session::has('cart')) {
    		$cart = Session::get('cart');

    		// dd($cart);

    	} else {
    		$cart = [];
    	}
        $quantity = $request->quantity;
        $items = Item::find($id);

        if ($quantity <= $items->quantity) {
        	if (isset($cart[$id])) {
        		$cart[$id] += $request->quantity;


        	} else {
        		$cart[$id] = $request->quantity;
        	}
        	Session::put('cart', $cart);
        	$item = Item::find($id);
            Session::flash('success_message', "$request->quantity of $item->name has been successfully added to your cart!");
    	   return Redirect::back();


        } else {
            
            Session::flash('message', "Item is out of stock");
            return Redirect::back();

        }

    }

     public function showCart() {

           $item_cart = [];
           $total = 0;
           // dd($item_cart);

           $line_items = [];
           $user = Auth::user();

           if(Session::has('cart')) {
               $cart = Session::get('cart');
           // dd($cart);

                   foreach($cart as $id => $quantity) {
                       $item = Item::find($id);
                       $item->quantity = $quantity;
                       $item->subtotal = $item->price * $quantity;

                       $total += $item->subtotal;

                       $item_cart[] = $item;

                       $line_items[] = [
                            'name' => $item->name,
                            'description' => $item->description,
                            'images' => ['https://example.com'],
                            'amount'=> str_replace(".", "", $item->price),
                            'currency' => 'usd',
                            'quantity' => (int)$quantity
                        ];

                   }

                   \Stripe\Stripe::setApiKey('sk_test_EWR9FtmaOVnCrrrPrih3iIAd00ennTPY2A');

            $stripe_session = \Stripe\Checkout\Session::create([
              'payment_method_types' => ['card'],
              'customer_email' => $user->email,
              'line_items' => $line_items,
              'success_url' => 'https://scootanywhere.herokuapp.com/transaction_complete',
              'cancel_url' => 'https://scootanywhere.herokuapp.com/menu/mycart',
            ]);

            $CHECKOUT_SESSION_ID = $stripe_session['id'];
            return view("items.cart_content", compact('item_cart', 'total', 'CHECKOUT_SESSION_ID'));

        }

        return view('items.cart_content', compact('item_cart', 'total'));
    }

    public function clearCart() {
        Session::forget('cart');
        return Redirect('/menu/catalog');
    }

    public function deleteCartItem($id) {
        // dd($id);
        $item = Item::find($id);
        Session::forget("cart.$id");
        Session::flash('success_message', "Your $item->name item was successfully deleted");
        if (Session::get('cart') != []) {
            return back();
        } else {
            Session::forget('cart');
            return back();
        }
        
    }

    public function changeItemQty($id, Request $request) {
        $cart = Session::get('cart');
        $cart[$id] = $request->quantity;
        Session::put('cart', $cart);
        // dd($cart);
        return back();
    }

    public function checkout() {
        // dd("hello");
        $order = new Rental;

        //we need to make sure that the user that's trying to checkout is logged in. else, we would encouner an error with Auth::user
        $order->user_id = Auth::user()->id;
        $order->total = 0; // set initial value of total to 0
        $order->status_id = 1; //default value of status id = 1(pending)


        $total = 0;

        //create a new order
        $order->save();
        // dd(Session::get('cart'));
        foreach(Session::get('cart') as $item_id => $inventory) {
        // $order is the reference to the Order model. items()->attach() is a function that allows us to inert the item to our pivot table item_order for that specific order_id along with any pivot columns that we want to include, in this case, quantity column
        // attach(id from partner table, pivot columns)
            $order->items()->attach($item_id, ['inventory'=>$inventory]);
            //attach method means to insert to the pivot table
            //syntax attach(yung other fk, [other columns you want to include])

            //uopdate order total
            $item = Item::find($item_id);
            // dd($item);
            $total += $item->price * $inventory;
        // dd($order);
        }
        //save the total of the current order
        $order->total = $total;
        $order->save();

        $quantity = 0;

        foreach(Session::get('cart') as $item_id => $inventory) {
            $order->items()->attach($item_id, ['inventory'=>$inventory]);
            $item = Item::find($item_id);
            $quantity = $item->quantity - $inventory;
        }

        $item->quantity = $quantity;
        $item->save();

        //remove the current session cart and return to catalog
        Session::forget('cart');
        return view('orders.order_confirmation', compact('order'));
    }

    public function showOrders() {
        // $orders = Order::all();
        $orders = Rental::where("rentals.user_id", Auth::user()->id)->get();
        $statuses = Status::all();
        return view('orders.order_history', compact('orders', 'statuses'));
    }

    public function deleteOrder($id) {
        $order = Rental::find($id);
        $order->delete();
        return back()
        ->with('delete_message', "Order #$id has been successfully deleted!")
        ->with('undo_url', "/restore_order/$id")
        ->with('status', 'danger');

    }

    public function restoreOrder($id) {
        //only deleted orders
        $order = Rental::onlyTrashed()
        ->where('id', $id)
        ->first(); //get method returns a collection

        $order->restore();
        Session::flash("success_message", "Order #$order->id has been restored!");
        return back();
    }





}


