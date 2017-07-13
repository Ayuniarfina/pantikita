<?php

Route::get('/', 'UserPantiController@index');
Route::get('/userPanti/create', 'UserPantiController@create');
Route::post('/userPanti', 'UserPantiController@store');

Route::get('/', 'DonasiController@index');
Route::get('/donasi/create', 'DonasiController@create');
Route::post('/donasi', 'DonasiController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
