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

Route::get('/', 'PostController@index')->name('home.posts.index');
Route::get('/posts/{post}', 'PostController@show')->name('home.posts.show');

Auth::routes();

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'panel', 'namespace' => 'Panel'], function ()
{
    Route::get('/', function()
    {
        return redirect()->route('posts.index');
    });

    Route::resource('/posts', 'PostController', ['except' => ['show']]);
});