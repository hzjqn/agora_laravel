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

Route::group(['middleware'=>'auth'],function () {
        Route::get('/', "ViewController@index");
    }
);


Route::get('/faq')->name('faq');
Route::get('/privacy')->name('privacy');
Route::get('/javascript', function(){
    return view('js');
});

Route::group(['prefix' => 'articles'], function () {
    Route::get('/', 'ArticleController@index')->name('articles');
    Route::get('/new', 'ArticleController@create');
    Route::post('/new', 'ArticleController@store');
    Route::get('/{id}', 'ArticleController@show');
    Route::get('/{id}/edit', 'ArticleController@edit');
    Route::post('/{id}/edit', 'ArticleController@update');
    Route::post('/{id}/destroy', 'ArticleController@destoy');
});

Route::group(['prefix' => 'comments'], function () {
    Route::get('/', 'CommentController@index');
    Route::get('/new', 'CommentController@create')->middleware('auth');
    Route::post('/new', 'CommentController@store')->middleware('auth');
    Route::get('/{id}', 'CommentController@show');
    Route::get('/{id}/edit', 'CommentController@edit')->middleware('auth');
    Route::post('/{id}/edit', 'CommentController@update')->middleware('auth');
    Route::post('/{id}/destroy', 'CommentController@destoy')->middleware('auth');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index');
    Route::get('/new', 'UserController@create')->middleware('auth');
    Route::post('/new', 'UserController@store')->middleware('auth');
    Route::get('/{id}', 'UserController@show');
    Route::get('/{id}/edit', 'UserController@edit')->middleware('auth');
    Route::post('/{id}/edit', 'UserController@update')->middleware('auth');
    Route::post('/{id}/destroy', 'UserController@destoy')->middleware('auth');
});

Route::group(['prefix' => 'likes'], function () {
    Route::post('/like/{id}', 'LikeController@like');
    Route::post('/unilike/{id}', 'LikeController@unlike');
});

Route::get('/account', 'AccountController@show')->name('account')->middleware('auth');

Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

Route::get('/home', 'ViewController@index')->name('home');
