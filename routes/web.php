<?php

Route::get('/','IndexController@index');

//admin

Route::get('/admin','AdminController@index');

//ACCOUNT


Route::get('/account','AccountController@index');
Route::get('/account/{id}','AccountController@show');
Route::post('/account/{id}','AccountController@update');
Route::post('/login','AccountController@login');
Route::get('/logout','AccountController@logout');
Route::get('/resign','AccountController@resign');
Route::post('/resign','AccountController@resign');
Route::post('/password','AccountController@password');

// Dai Lý

Route::post('/daily','DaiLyController@create');
Route::POST('/daily/update','DaiLyController@update');

