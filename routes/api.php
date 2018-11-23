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

Route::get('article', 'ArticleController@_index');
Route::get('article/{id}', 'ArticleController@_show');
Route::post('article', 'ArticleController@_create');
Route::put('article/{id}', 'ArticleController@_create')->middleware('auth:api');
Route::delete('article/{id}', 'ArticleController@_delete')->middleware('auth:api');
