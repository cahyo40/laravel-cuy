<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','AdminController@index');

//admin
Route::get('/si-admin','AdminController@login');
Route::post('/si-admin','AdminController@proLogin')->name('loginAdmin');

Route::get('/si-admin/{token}','AdminController@index');
Route::get('/si-admin/{token}/logout','AdminController@logout');
