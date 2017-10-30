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
	$name = 'World!';
	$message = 'How are you?';
	return view('index', compact('name'));
}); // end of Route::get('/', function ()

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{id}', 'TasksController@show');
Route::get('/welcome', function () {
	return view('welcome');
}); // end of Route::get('/welcome', function ()
