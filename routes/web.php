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

//Route::get('/', function () {
//    return view('welcome');
//});


//frontend route
Route::get('/eshop','ShopController@index')->name('resources.home');
Route::get('/resources/shop_left_sidebar2','ShopController@sidebar2')->name('resources.sidebar2');
Route::get('/resources/shop_product/{product}','ShopController@sp')->name('resources.shop_product');
Route::get('/resources/shop_billing','ShopController@bl')->name('resources.shop_billing');
Route::get('/resources/login','ShopController@login')->name('resources.login');
Route::post('/resources/customer/login','ShopController@login_customer')->name('customer.login');
Route::get('/resources/customer/logout','ShopController@logout_customer')->name('customer.logout');
Route::get('/resources/register','ShopController@register')->name('resources.register');
Route::post('/resources/customer','ShopController@register_customer')->name('customer.register');
Route::get('/resources/contact','ShopController@contact')->name('resources.contact');
Route::post('/resources/search','ShopController@search')->name('resources.search');
Route::post('/resources/sorting','ShopController@sorting')->name('resources.sorting');

Route::post('/resources/shop_add_cart','CartController@addcart')->name('resources.addcart');
Route::get('/resources/shop_cart','CartController@index')->name('resources.cart');
Route::get('/resources/remove_cart/{id}','CartController@remove')->name('resources.cart_remove');
Route::post('/resources/shipping_info','ShippingController@store')->name('shipping.store');
Route::get('/resources/payment','CheckoutController@payment_info')->name('payment.form');
Route::post('/resources/new_order','CheckoutController@saveOrderInfo')->name('payment.store');
Route::get('/checkout/complete-order','CheckoutController@complete')->name('order.complete');
Route::get('/resources/shop_product/category/{id}','ShopController@category_products')->name('category.products');
Route::get('/resources/shop_product/brand/{id}','ShopController@brand_products')->name('brand.products');
Route::get('/resources/shop_product/supplier/{id}','ShopController@supplier_products')->name('supplier.products');
Route::get('/resources/shop_product/sub_category/{id}','ShopController@sub_category_products')->name('sub_category.products');




//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//backend
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'HomeController@index');
    Route::get('/users/{user}/profile', 'HomeController@showProfile')->name('admin.profile');
    Route::get('/', 'HomeController@index');

    Route::get('/categories/trash','CategoryController@trash')->name('categories.trash');
    Route::get('/categories/trash/{id}/restore','CategoryController@restore')->name('categories.restore');
    Route::delete('/categories/trash/{id}/delete','CategoryController@delete')->name('categories.delete');
    Route::resource('/categories','CategoryController');

    Route::get('/products/trash', 'ProductController@trash')->name('products.trash');
    Route::get('/products/status/{id}/change', 'ProductController@changeStatus')->name('products.status');
    Route::get('/products/trash/{id}/restore','ProductController@restore')->name('products.restore');
    Route::delete('/products/trash/{id}/delete','ProductController@delete')->name('products.delete');
    Route::resource('/products','ProductController');

    Route::resource('/brands', 'BrandController');


    Route::get('/sub_categories/trash','Sub_categoryController@trash')->name('sub_categories.trash');
    Route::get('/sub_categories/trash/{id}/restore','Sub_categoryController@restore')->name('sub_categories.restore');
    Route::delete('/sub_categories/trash/{id}/delete','Sub_categoryController@delete')->name('sub_categories.delete');
    Route::resource('/sub_categories', 'Sub_categoryController');

    Route::resource('/suppliers', 'SupplierController');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/products/order/manage','OrderController@manageOrder')->name('manage.order');
    Route::get('/products/order/view/{id}','OrderController@viewOrderDetail')->name('view-order-detail');
    Route::get('/products/change/order/status/{id}','OrderController@changeOrderStatus')->name('change-status-order-detail');
    Route::get('/products/delete/order/{id}','OrderController@deleteOrder')->name('delete-order-detail');
    Route::get('/products/order/{id}/invoice','OrderController@OrderInvoice')->name('order.invoice');
});


//authetication route

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/users/{user}/profile', 'ShowProfile')->name('users.profile');


