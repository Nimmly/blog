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

use \App\Http\PostsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts','PostsController@index')->name('all-posts');
Route::get('/posts/create', 'PostsController@create')->name('create-post');
Route::get('/posts/{id}', 'PostsController@show')->name('single-post');
Route::post('/posts','PostsController@store');
Route::post('/posts/{post_id}/comments', 'CommentsController@store')->name('comments-post');
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');
Route::get('/logout', 'LoginController@logout');
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('users/{id}', 'UsersController@show')->name('users');