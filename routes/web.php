<?php

Route::get('/','IndexController@index');

//admin

Route::get('/admin','AdminController@index');
Route::get('/admin/donhang/{id}','AdminController@chitiet');

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


//product
Route::post('/sanpham','ProductController@store');
Route::post('/theloai','TheLoaiSanPhamController@store');
Route::post('/product/update','ProductController@update');
Route::get('/product/delete/{id}','ProductController@destroy');

//single product
Route::get('/product','SingleProductController@index');

//cart
Route::get('/addcart','CartController@create');
Route::get('/cart','CartController@index');
Route::get('/deletecart','CartController@destroy');
Route::get('/deleteallcart','CartController@delete');
Route::post('/thanhtoan','CartController@thanhtoan');

