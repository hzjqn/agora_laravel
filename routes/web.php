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
    return view('js/string');
});

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

Route::group(['prefix' => 'likes'], function () {
    Route::post('/like', 'LikeController@like');
    Route::post('/unilike', 'LikeController@unlike');
});

Route::group(['prefix' => 'follow'], function () {
    Route::post('/follow', 'FollowController@follow')->name('follow');
    Route::post('/unfollow', 'FollowController@unfollow');
});

Route::prefix('account')->name('account')->middleware('auth')->group(function(){
    Route::get('/', 'AccountController@show');
    Route::get('/edit', 'AccountController@edit')->name('.edit');
    Route::post('/edit', 'AccountController@show')->name('.save');
});


// Solucionar el problema con mail -> sender
Auth::routes();
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

Route::get('/home', 'ViewController@index')->name('home');
