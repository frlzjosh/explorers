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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{id}', 'HomeController@showProfile')->name('profile.show');
Route::get('/profile', 'HomeController@getPage')->name('profile.index');
Route::resource('post', 'PostController');
Route::post('post/comment', 'PostController@createComment')->name('comment.create');