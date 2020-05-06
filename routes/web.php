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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/{id}', 'ProductController@show');
Route::post('/product', 'ProductController@manageSubmit')->middleware('auth');

Route::get('/checkout/{id}/{quantity}', 'CheckoutController@show')->middleware('auth');

Route::post('/order','OrderController@create')->middleware('auth');

Route::get('/orders', 'OrderController@index')->middleware('auth');

Route::get('/cart', 'CartController@index')->middleware('auth');


route::get('/category/{category_id}','CategoryController@show');

route::get('/admin','AdminController@index')->middleware('admin');
route::get('/admin/products','AdminController@productsIndex')->middleware('admin');
route::get('/admin/orders','AdminController@ordersIndex')->middleware('admin');
route::get('/admin/categories','AdminController@categoriesIndex')->middleware('admin');
route::get('/admin/users','AdminController@usersIndex')->middleware('admin');

route::post('/delete/product/{id}', 'ProductController@destroy')->middleware('admin');
route::post('/create/product/', 'ProductController@store')->middleware('admin');

route::post('/permission/user/{id}', 'AdminController@permissionUser')->middleware('admin');
route::post('/delete/user/{id}', 'AdminController@destroyUser')->middleware('admin');

route::get('/admin/product/{id}', 'AdminController@productIndex')->middleware('admin');
route::post('/modify/product/', 'ProductController@modify')->middleware('admin');

route::post('/create/category/', 'CategoryController@store')->middleware('admin');
route::post('/delete/category/{id}', 'CategoryController@destroy')->middleware('admin');

route::get('/admin/category/{id}', 'AdminController@categoryIndex')->middleware('admin');
route::post('/modify/category/', 'CategoryController@modify')->middleware('admin');

route::get('/admin/order/{id}', 'OrderController@Index')->middleware('admin');


route::get('/search', 'ProductController@searchIndex')->middleware('admin');
