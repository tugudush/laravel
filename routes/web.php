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

Route::get('/welcome', function () {
	return view('welcome');
}); // end of Route::get('/welcome', function ()

//Route::get('/', 'PostsController@index');
//Route::get('/posts', 'PostsController@index');
//Route::get('/posts/{post}', 'PostsController@show');

Route::get('/', 'PostsController@index');
Route::get('/blog', 'PostsController@index');
Route::get('/blog/posts', 'PostsController@index');
Route::get('/blog/add-post', 'PostsController@create');
Route::get('/blog/posts/create', 'PostsController@create');
Route::get('/blog/posts/{post}', 'PostsController@post');
Route::post('/blog/posts', 'PostsController@store');
Route::post('/blog/ajax_add_post', 'PostsController@ajax_store');
Route::post('/blog/posts/ajax_add_post', 'PostsController@ajax_store');