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

Route::get('/', function () {
    return view('welcome');
});

//練習用
// Route::get('hello', 'HelloController@index');
// Route::post('hello', 'HelloController@post');
// Route::get('hello/other', 'HelloController@other');

Route::get('/user', 'Admin\AdminUserController@index')->name('user.list');
Route::get('/product', 'Ec\ProductController@index')->name('product.list');
Route::get('/product/search', 'Ec\ProductController@productSearch')->name('product.search');
Route::get('/cart', 'Ec\CartController@showCartProducts')->name('cart.showProducts');
Route::post('/cart/{product_id}}', 'Ec\CartController@putCartProduct')->name('cart.putProduct');
Route::get('/cart/delete', 'Ec\CartController@deleteCartProduct')->name('cart.deleteProduct');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
