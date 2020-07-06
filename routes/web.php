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

// route cho backend
Route::group(['prefix'=>"backend",'namespace'=>'backend'], function(){

    Route::get('/dashboard', "BackendController@index")->name("index");
    
    Route::group(['prefix' =>'category'], function(){
        Route::get('/', "BackendController@category")->name("category");
        Route::get('/add', "BackendController@addcategory")->name("category.add");
        Route::get('/edit', "BackendController@editcategory")->name("category.edit");
    });
    
    Route::group(["prefix"=>"user"], function(){
        Route::get('/', "BackendController@user")->name("user");
        Route::get('/add', "BackendController@adduser")->name("user.add");
        Route::get('/edit', "BackendController@edituser")->name("user.edit");
    });
    
    Route::group(["prefix"=>"product"], function(){
        Route::get('/', "BackendController@product")->name("product");
        Route::get('/add', "BackendController@addproduct")->name("product.add");
        Route::get('/edit', "BackendController@editproduct")->name("product.edit");
    });
    
    Route::get('/order', "BackendController@order")->name("order");
    Route::get('/processed', "BackendController@processed")->name("processed");
});
    


// route cho frontend
Route::group(['namespace'=>'frontend'], function(){
    route::get('/', 'FrontendController@index')->name("frontend.index");
    route::get('/about', 'FrontendController@about')->name("frontend.about");
    route::get('/cart', 'FrontendController@cart')->name("frontend.cart");
    route::get('/checkout', 'FrontendController@checkout')->name("frontend.checkout");
    route::get('/complete', 'FrontendController@complete')->name("frontend.complete");
    route::get('/contact', 'FrontendController@contact')->name("frontend.contact");
    route::get('/detail', 'FrontendController@detail')->name("frontend.detail");
    route::get('/shop', 'FrontendController@shop')->name("frontend.shop");
});