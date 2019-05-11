<?php

Route::get('/','IndexController@index');
Route::post('/login','AccountController@login');
Route::get('/resign','AccountController@resign');
Route::post('/resign','AccountController@resign');
//admin

Route::get('/admin','AdminController@index');

//ACCOUNT
Route::get('/account','AccountController@logout');

