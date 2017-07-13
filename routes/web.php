<?php

Route::get('/', 'HomeController@index');


Route::get('/panti-list', 'UserPantiController@list');
Route::get('/panti-detail/{user_pantis}', 'UserPantiController@show');
Route::get('/userPanti/create', 'UserPantiController@create');
Route::post('/userPanti', 'UserPantiController@store');

Route::get('/donasi/create', 'DonasiController@create');
Route::post('/donasi', 'DonasiController@store');

Auth::routes();	