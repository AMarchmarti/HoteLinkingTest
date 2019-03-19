<?php


Route::get('/', 'PagesController@index');
Route::get('/offers', 'PagesController@offers');
Route::get('/promotions', 'PagesController@promotions');

Route::resource('offers', 'OffersController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
