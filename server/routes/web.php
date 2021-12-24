<?php

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

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return redirect(route('login'));
});

/*---------------***************ADMIN ROUTES******************------------------*/
Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function () {

    /*---------------USERS------------------*/
    Route::resource('/user', 'Admin\userController');
    Route::get('/user-address/{id}', 'Admin\userController@editAddress')->name('admin.address.edit');
    Route::put('/user-address/{id}', 'Admin\userController@updateAddress')->name('admin.address.update');

    /*---------------ROLES------------------*/
    Route::resource('roles', 'Admin\roleController');

    /*---------------SEARCH------------------*/
    Route::post('/search', 'Admin\dashboardController@search')->name('admin.search');

    /*---------------DASHBOARD------------------*/
    Route::get('/dashboard', 'Admin\dashboardController@index')->name('admin.dashboard');

    /*---------------Products Routes------------------*/
    Route::resource('product', 'Admin\productController');


    /*---------------****ORDERS****------------------*/
    Route::get('orders', 'Admin\orderController@index')->name('order.index');
    Route::get('orders/{id}', 'Admin\orderController@show')->name('order.show');
    Route::delete('orders/{id}', 'Admin\orderController@destroy')->name('order.destroy');
    Route::delete('orders/orders-status/{id}', 'Admin\orderController@detailDestroy')->name('order.detail.destroy');
    Route::post('orders/update-status/{id}', 'Admin\orderController@status')->name('order.update_status');

    /*---------------SITE SETTINGS------------------*/
    Route::resource('/settings', 'Admin\settingController')->except([
        'create', 'show', 'edit', 'destroy'
    ]);

});

