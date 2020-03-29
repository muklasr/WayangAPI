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

Route::get('/', function () {
    return view('welcome');
});

Route::get('wayang','WayangController@index');
Route::post('wayang','WayangController@create');
Route::put('wayang/{id}','WayangController@update');
Route::delete('wayang/{id}','WayangController@delete');