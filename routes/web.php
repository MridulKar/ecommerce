<?php

use Illuminate\Support\Facades\Route;

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





/* ------Front End------- */
Route::view('/layout','layout');
//Route::view('/home','home');
Route::get('/','homecontroller@index');
Route::get('/catagory_product/{catagory_id}','product_catagory_controller@catagory_product');
Route::get('/view_product/{product_id}','productcontroller@view_product');
Route::get('/product_brand/{brand_id}','product_catagory_controller@product_brand');
Route::post('/add_to_cart','addtocartcontroller@add_to_cart');
Route::get('/showcart','addtocartcontroller@showcart');
Route::get('/deletecart/{Id}','addtocartcontroller@deletecart');
Route::post('/update_cart','addtocartcontroller@update_cart');
Route::get('/cart','addtocartcontroller@index');
Route::get('/checkout','checkoutcontroller@index');
Route::post('/customer_signup','checkoutcontroller@signup');
Route::get('/customer_checkout','checkoutcontroller@checkout');
Route::get('/customer_logout','checkoutcontroller@logout');
Route::post('/customer_login','checkoutcontroller@login');
Route::post('/save_checkout','checkoutcontroller@save');
Route::get('/payment','checkoutcontroller@payment');
Route::post('/payment_done','checkoutcontroller@payment_done');
Route::get('/order','checkoutcontroller@order');





/*-----backend------*/
Route::get('/logout','Admin_logout@logout');
Route::view('/admin_login','Admin_login');

Route::post('/admin-dashboard','admin_login@verify');

Route::middleware(['sessioncheck'])->group(function(){

Route::view('/dashboard','dashboard');
Route::view('/admin_layout','Admin_layout');


/*-----catagory------*/
Route::get('/addcatagory','catagorycontroller@index');
Route::get('/allcatagory','catagorycontroller@allcatagory');
Route::post('/insert','catagorycontroller@insert');
Route::get('/unactive/{catagory_id}','catagorycontroller@unactive');
Route::get('/active/{catagory_id}','catagorycontroller@active');
Route::get('/edit/{catagory_id}','catagorycontroller@edit');
Route::post('/edit/update/{catagory_id}','catagorycontroller@update');
Route::get('/delete/{catagory_id}','catagorycontroller@delete');

/*-----Brand------*/
Route::get('/addbrand','brandcontroller@index');
Route::get('/allbrand','brandcontroller@show');
Route::post('/insertbrand','brandcontroller@insertbrand');
Route::get('/unactivebrand/{brand_id}','brandcontroller@unactivebrand');
Route::get('/activebrand/{brand_id}','brandcontroller@activebrand');
Route::get('/editbrand/{brand_id}','brandcontroller@editbrand');
Route::post('/editbrand/updatebrand/{brand_id}','brandcontroller@updatebrand');
Route::get('/deletebrand/{brand_id}','brandcontroller@deletebrand');

/*-----product------*/
Route::get('/addproduct','productcontroller@index');
Route::post('/insertproduct','productcontroller@insertproduct');
Route::get('/allproduct','productcontroller@show');

Route::get('/unactiveproduct/{product_id}','productcontroller@unactiveproduct');
Route::get('/activeproduct/{product_id}','productcontroller@activeproduct');

Route::get('/deleteproduct/{product_id}','productcontroller@deleteproduct');

/*-----Slide------*/
Route::get('/addslide','slidecontroller@index');
Route::post('/insertslide','slidecontroller@insertslide');
Route::get('/allslide','slidecontroller@allslide');

Route::get('/unactiveslide/{slide_id}','slidecontroller@unactiveslide');
Route::get('/activeslide/{slide_id}','slidecontroller@activeslide');
Route::get('/deleteslide/{slide_id}','slidecontroller@deleteslide');
Route::get('/manage_order','show_ordercontroller@index');

});
