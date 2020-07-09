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


Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('product', 'ProductController@index');
Route::get('product/{product}', 'ProductController@show');
//middleware JWT
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('product', 'ProductController@store');
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::delete('product/{id}', 'ProductController@update');
    Route::delete('product/{id}', 'ProductController@delete');
    Route::post('customer', 'CustomerController@store');
    Route::get('customer', 'CustomerController@index');
    Route::get('customer/{id}', 'CustomerController@show');
    Route::delete('customer/{id}', 'CustomerController@delete');
 });












