<?php

namespace App\Http\Controllers;

use \App\Rental;
use \App\Category;
use \App\Item;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use \App\User;


class AdminController extends Controller
{
   

    public function showItems() {
    	$items = Item::all();
    	return view('admin.catalog_admin', compact('items'));
    }

    public function addItemForm() {
    	$categories = Category::all();
    	return view('admin.admin_add_items', compact('categories'));
    }

    public function addItem(Request $request) {
        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->category_id = $request->category;
        $item->quantity = $request->quantity;

        $image = $request->file('image');
        $image_name = time(). "." .$image->getClientOriginalExtension();

        $destination = "images/";

        $image->move($destination, $image_name);
        $item->image_url = $destination.$image_name;
        $item->save();

        Session::flash('success_message', 'Item added successfully');
        return redirect('/admin/catalog_admin');
    }

    public function itemDetails($id) {
        // dd($id);
        $item = Item::find($id);
        $categories = Category::all();
        return view('admin.admin_item_details', compact('item', 'categories'));
    }

    public function editItem($id, Request $request) {
        $item = Item::find($id);
        // dd($item);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->category_id = $request->category;
        $item->quantity = $request->quantity;

        $image = $request->file('image');

        if($request->file('image') != null) {
        $image_name = time(). "." .$image->getClientOriginalExtension();

        $destination = "images/";

        $image->move($destination, $image_name);
        $item->image_url = $destination.$image_name;

        }

        $item->save();
        
        Session::flash('success_message', 'Item edited successfully');
        return redirect('/admin/catalog_admin');


    }

    public function deleteItem($id, Request $request) {
        // dd($id);
        $item = Item::find($id);
        $item->delete();

        Session::flash('success_message', 'Item deleted successfully');
        return redirect('/admin/catalog_admin');



    }

    public function adminDash(){
        return view('admin.admin_dash');
    }

    public function showRentals() {
        $rentals = Rental::all();
        $users = User::all();
        return view('admin.admin_rentals', compact('rentals', 'users'));
    }

    public function showCustomers() {
        $users = User::all();
        return view('admin.admin_customers', compact('users'));
    }

    public function addMembersForm() {
        return view('admin.admin_add_members');
    }

    public function addMembers(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = 
        $user->password = $request->password;
        $user->admin = $request->admin;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;

        
        $user->save();

        Session::flash('success_message', 'Member added successfully');
        return redirect('/admin/members');
    }

    public function memberDetails($id) {
        // dd($id);
        $user = User::find($id);
        $categories = Category::all();
        return view('admin.admin_member_details', compact('user', 'categories'));
    }

    public function editMember($id, Request $request) {
        $user = User::find($id);
        // dd($item);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;


        $user->save();
        
        Session::flash('success_message', 'Member edited successfully');
        return redirect('/admin/members');


    }

    public function deleteMember($id, Request $request) {
        // dd($id);
        $user = User::find($id);
        $user->delete();

        Session::flash('success_message', 'Member deleted successfully');

        return redirect('/admin/members');
    }

    
}
