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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('cors')->get('wayang','WayangController@index');
Route::middleware('cors')->post('wayang','WayangController@create');
Route::middleware('cors')->put('wayang/{id}','WayangController@update');
Route::middleware('cors')->delete('wayang/{id}','WayangController@delete');
