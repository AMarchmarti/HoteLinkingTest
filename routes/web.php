<?php


Route::get('/', 'PagesController@index');
Route::get('/offers', 'PagesController@offers');
Route::get('/MisOfertas', 'PagesController@myoffers');

Route::resource('offers', 'OffersController');
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
