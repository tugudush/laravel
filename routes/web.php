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

// View Posts
Route::get('/', ['as' => 'index', 'uses' => 'PostsController@index']);
Route::get('/posts', 'PostsController@index');

// Add Post Form
Route::get('/posts/create', ['as' => 'add-post', 'uses' => 'PostsController@create']);

// Single Post
Route::get('/posts/{post}', 'PostsController@post');

// Add Post Process
Route::post('/posts', 'PostsController@store');
Route::post('/posts/ajax_add_post', 'PostsController@ajax_store');

// Add Comment Process
Route::post('/posts/{post}/comments', 'CommentsController@store');
//Route::post('/ajax_add_comment', 'CommentsController@ajax_store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
