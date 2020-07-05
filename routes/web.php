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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
