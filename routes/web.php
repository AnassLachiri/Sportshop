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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/{id}', 'ProductController@show');
Route::post('/product', 'ProductController@manageSubmit')->middleware('auth');

Route::get('/checkout/{id}/{quantity}', 'CheckoutController@show')->middleware('auth');

Route::post('/order','OrderController@create')->middleware('auth');

Route::get('/orders', 'OrderController@index')->middleware('auth');

Route::get('/cart', 'CartController@index')->middleware('auth');


