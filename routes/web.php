<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => ['auth', 'admin']], function() {
// 	Route::get('/admin', function () {
//     	return view('admin.catalog_admin');
// 	});

// });

//user route
Route::get('/menu/catalog', 'ItemController@showItems');
Route::get('menu/mycart', 'ItemController@showCart');
Route::delete('/cart/clearcart', 'ItemController@clearCart');
Route::get('/checkout', 'ItemController@checkout');
Route::get('/transaction_complete', 'ItemController@checkout');
Route::get('/orders', 'ItemController@showOrders');






//admin route
Route::middleware("admin")->group(function () {
	Route::get('/admin/catalog_admin', 'AdminController@showItems');
	Route::post('/admin/catalog_admin/add_product', 'AdminController@addItem');
	Route::get('/admin/catalog_admin/add_product', 'AdminController@addItemForm');
	Route::get('/admin/admin_dash', 'AdminController@adminDash');
	Route::get('/admin/rentals', 'AdminController@showRentals');
	Route::get('/admin/members', 'AdminController@showCustomers');	
	Route::get('/admin/members/add_members', 'AdminController@addMembersForm');
	Route::post('/admin/members/add_members', 'AdminController@addMembers');

	// admin route with wild card
	Route::get('/admin/catalog_admin/{id}', 'AdminController@itemDetails');
	Route::patch('/admin/catalog_admin/{id}/edit', 'AdminController@editItem');
	Route::delete('/admin/catalog_admin/{id}/delete', 'AdminController@deleteItem');
	Route::get('/admin/members/{id}', 'AdminController@memberDetails');
	Route::patch('/admin/members/{id}/edit', 'AdminController@editMember');
	Route::delete('/admin/members/{id}/delete', 'AdminController@deleteMember');

});


// Route::get('/admin/admin_add_product', 'AdminController@addItem');



//user route with wildcard
Route::get('/product/{id}/details', 'ItemController@itemDetails');
Route::post('/cart/{id}', 'ItemController@addToCart');
Route::delete('/mycart/{id}/delete', 'ItemController@deleteCartItem');
Route::patch('/mycart/{id}/changeQty', 'ItemController@changeItemQty');
Route::get('/menu/categories/{id}', 'CategoryController@findItems');
Route::delete('/delete_order/{id}', 'ItemController@deleteOrder');
Route::get('/restore_order/{id}', "ItemController@restoreOrder");





