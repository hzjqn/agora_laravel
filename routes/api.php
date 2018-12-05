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

Route::get('article', '_ArticleController@index');
Route::get('article/{id}', '_ArticleController@show');
Route::post('article/new', '_ArticleController@create');
Route::put('article/{id}', '_ArticleController@create')->middleware('auth:api');
Route::delete('article/{id}', '_ArticleController@delete')->middleware('auth:api');


Route::prefix('comment')->group(function(){
    Route::post('/comment', '_CommentController@create')->middleware('auth:api')->name('.create');
    Route::delete('/comment/{id}/delete', '_CommentController@create')->middleware('auth:api')->name('.delete');
});