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

Route::get('/', "ViewController@index")->middleware('auth');



Route::get('/faq', 'ViewController@faq')->name('faq');
Route::get('/privacy', 'ViewController@privacy')->name('privacy');

Route::prefix('article')->name('article.')->group(function () {
    Route::get('/', 'ArticleController@index')->name('index');
    Route::get('/new', 'ArticleController@create')->name('new')->middleware('auth');
    Route::post('/new', 'ArticleController@store')->name('store');
    Route::get('/{id}', 'ArticleController@show')->name('show');
    Route::get('/{id}/edit', 'ArticleController@edit')->name('edit');
    Route::post('/{id}/edit', 'ArticleController@update')->name('update');
    Route::post('/{id}/destroy', 'ArticleController@destoy')->name('destroy');
});

Route::prefix('comment')->name('comment.')->group(function () {
    Route::get('/', 'CommentController@index');
    Route::get('/new', 'CommentController@create')->middleware('auth');
    Route::post('/new', 'CommentController@store')->middleware('auth');
    Route::get('/{id}', 'CommentController@show');
    Route::get('/{id}/edit', 'CommentController@edit')->middleware('auth');
    Route::post('/{id}/edit', 'CommentController@update')->middleware('auth');
    Route::post('/{id}/destroy', 'CommentController@destoy')->middleware('auth');
});

Route::prefix('user')->name('user.')->group( function () {
    Route::get('/', 'UserController@index')->name('index');
    Route::get('/new', 'UserController@create')->name('new')->middleware('auth');
    Route::post('/new', 'UserController@store')->name('store')->middleware('auth');
    Route::get('/{id}', 'UserController@show')->name('show');
    Route::get('/{id}/edit', 'UserController@edit')->name('edit')->middleware('auth');
    Route::post('/{id}/edit', 'UserController@update')->name('update')->middleware('auth');
    Route::post('/{id}/destroy', 'UserController@destoy')->name('destroy')->middleware('auth');
});

Route::domain('{username}'.env('APP_DOMAIN').':8000')->group(function(){
    Route::get('/', 'UserComponent@show');
});

Route::group(['prefix' => 'likes'], function () {
    Route::post('/like', 'LikeController@like');
    Route::post('/unilike', 'LikeController@unlike');
});

Route::prefix('account')->name('account')->middleware('auth')->group(function(){
    Route::get('/', 'AccountController@show');
    Route::get('/edit', 'AccountController@edit')->name('.edit');
    Route::post('/edit', 'AccountController@show')->name('.save');
});

Route::post('/follow', 'FollowController@follow')->name('follow');
Route::delete('/unfollow', 'FollowController@unfollow')->name('unfollow');

// Solucionar el problema con mail -> sender
Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

Route::get('/home', 'ViewController@index')->name('home');
