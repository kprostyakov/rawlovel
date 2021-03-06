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
Route::get('cars', 'CarController@index');
Route::get('cars/{car}', 'CarController@show');
Route::post('cars', 'CarController@store');
Route::put('cars/{car}', 'CarController@update');
Route::delete('cars/{car}', 'CarController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
