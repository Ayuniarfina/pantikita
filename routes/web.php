<?php

Route::get('/', 'UserPantiController@index');
Route::get('/userPanti/create', 'UserPantiController@create');
Route::post('/userPanti', 'UserPantiController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
