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

Route::get('/', 'GeneralController@index');
Route::get('/about', 'GeneralController@about');
Route::get('/list', 'GeneralController@list');
Route::get('/show', 'GeneralController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
