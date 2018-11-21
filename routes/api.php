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

Route::get('article', 'ArticleController@indexByApi');
Route::get('article/{id}', 'ArticleController@showByApi');
Route::post('article', 'ArticleController@createByApi');
Route::put('article/{id}', 'ArticleController@createByApi')->middleware('auth:api');
Route::delete('article/{id}', 'ArticleController@deleteByApi')->middleware('auth:api');
