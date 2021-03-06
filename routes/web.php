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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::resource('drivers', 'DriverController');

Route::resource('vehicles', 'VehicleController');

Route::resource('orders', 'OrderController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('approved', 'AprroveController');





