<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('product', 'ProductController');
Route::get('product/hinhanhsanpham/{id}','HinhAnhSPController@destroy');
Route::get('cart/{id}/{soluong}','CartController@update');