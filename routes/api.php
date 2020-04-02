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

Route::group(['middleware' => ['cors']], function () {
    Route::get('wayang/search/{nama}','WayangController@search');
    Route::get('wayang','WayangController@index');
    Route::get('wayang/{id}','WayangController@show');
    Route::get('wayang/kategori/{kategori}','WayangController@searchByGolongan');
    Route::post('wayang','WayangController@create');
    Route::put('wayang/{id}','WayangController@update');
    Route::delete('wayang/{id}','WayangController@delete');
});
