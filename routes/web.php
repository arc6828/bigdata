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

Route::resource('product', 'ProductController');
Route::resource('product', 'ProductController');
Route::resource('product', 'ProductController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('export', 'ExportController');
Route::resource('export_2hs', 'Export_2hsController');
Route::resource('export_2hs_time', 'Export_2hs_timeController');