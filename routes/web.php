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
Route::get('show/{id}', 'GeneralController@show')->name("show");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function() {
    Route::get('campsite/create', 'Admin\CampsiteController@add');
    Route::post('campsite/create', 'Admin\CampsiteController@create');
    Route::get('campsite', 'Admin\CampsiteController@index');
    Route::get('campsite/edit', 'Admin\CampsiteController@edit');
    Route::post('campsite/edit', 'Admin\CampsiteController@update');
    Route::get('campsite/delete', 'Admin\CampsiteController@delete'); 
});
