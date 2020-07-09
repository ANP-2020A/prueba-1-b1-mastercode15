<?php

use App\Customer;
use App\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('product', 'ProductController@index');
Route::get('product/{product}', 'ProductController@show');
Route::post('product', 'ProductController@store');
Route::put('product/{product}', 'ProductController@update');
Route::delete('product/{id}', 'ProductController@delete');

//customers
Route::get('customer', 'CustomerController@index');
Route::get('customer/{id}', 'CustomerController@show');
Route::post('customer', 'CustomerController@store');
Route::put('customer/{id}', 'CustomerController@update');
Route::delete('customer/{id}', 'CustomerController@delete');

//users
Route::get('user', 'UserController@index');
Route::get('user/{id}', 'UserController@show');
Route::post('user', 'UserController@store');
Route::put('user/{id}', 'UserController@update');
Route::delete('user/{id}', 'UserController@delete');
