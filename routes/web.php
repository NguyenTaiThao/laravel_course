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
    Route::group(['namespace'=>'Auth'], function () {
        Route::get('/login', "LoginController@login")->name('backend.login');
        Route::post('/login', "LoginController@postLogin");
    });
    Route::get('/dashboard', "BackendController@index")->name("index");
    
    Route::group(['prefix' =>'category', 'namespace'=>'Category'], function(){
        Route::get('/', "CategoryController@category")->name("category");
        Route::get('/add', "CategoryController@addcategory")->name("category.add");
        Route::get('/edit/{id}', "CategoryController@editcategory")->name("category.edit");
    });
    
    Route::group(["prefix"=>"user", 'namespace'=>'User'], function(){
        Route::get('/', "UserController@user")->name("user");
        Route::get('/add', "UserController@adduser")->name("user.add");
        Route::get('/edit', "UserController@edituser")->name("user.edit");
    });
    
    Route::group(["prefix"=>"product", 'namespace'=>'product'], function(){
        Route::get('/', "ProductController@product")->name("product");
        Route::get('/add', "ProductController@addproduct")->name("product.add");
        Route::post('/add', "ProductController@postaddproduct")->name("product.add");
        Route::get('/edit', "ProductController@editproduct")->name("product.edit");
    });
    
    Route::group(['prefix' => 'order','namespace'=>'order'], function () {
        Route::get('/order', "OrderController@order")->name("order");
        Route::get('/processed', "OrderController@processed")->name("processed");
    });
});
    


// route cho frontend
Route::group(['namespace'=>'frontend'], function(){
    route::get('/', 'FrontendController@index')->name("frontend.index");
    route::get('/about', 'FrontendController@about')->name("frontend.about");
    Route::group(['namespace' => 'cart'], function () {
        route::get('/cart', 'CartController@cart')->name("frontend.cart");
        route::get('/checkout', 'CartController@checkout')->name("frontend.checkout");
        route::get('/complete', 'CartController@complete')->name("frontend.complete");
    });
    route::get('/contact', 'FrontendController@contact')->name("frontend.contact");
    
    Route::group(['namespace' => 'product'], function () {
        route::get('/detail', 'ProductController@detail')->name("frontend.detail");
        route::get('/shop', 'ProductController@shop')->name("frontend.shop");
    });
});