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

Route::get('/', 'PagesController@index');
Route::get('/offers', 'PagesController@offers')->name('offers');
Route::get('/promotions', 'PagesController@promotions')->name('promotions');

Route::resource('offers', 'OffersController');
Auth::routes();