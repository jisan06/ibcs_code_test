<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([ 'namespace' => 'Api'], function () {
    Route::get('products', 'productController@allProducts');
    Route::get('products/{id}', 'productController@show');
    Route::post('user/registration', 'RegisterController@create');
    Route::post('user/login', 'LoginController@login');
    Route::post('products/search', 'productController@search');
});

Route::group([
    'middleware' => 'api',
    'namespace' => 'Api',
], function ($router) {
    Route::post('orders/checkout', 'checkOutController@store');
    Route::post('orders', 'orderController@customerOrderList');
    Route::post('logout', 'LoginController@logout');

});


