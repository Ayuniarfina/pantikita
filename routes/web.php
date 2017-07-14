<?php

Route::get('/', 'HomeController@index');

Route::get('/panti-list', 'UserPantiController@list');
Route::get('/panti-detail/{user_pantis}', 'UserPantiController@show');
Route::get('/userPanti/create', 'UserPantiController@create');
Route::post('/userPanti', 'UserPantiController@store');

Route::get('/donasi/create/{user_pantis}', 'DonasiController@create');
Route::post('/donasi', 'DonasiController@store');

Auth::routes();	

Route::get('/home', 'HomeController@index')->name('home');

//middleware
Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);
