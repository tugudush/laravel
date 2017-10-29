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

Route::get('/tasks', function () {
	$tasks = DB::table('tasks')->get();
	return view('tasks.index', compact('tasks'));
}); // end of Route::get('/', function ()

Route::get('/tasks/{task}', function($id) {
	//dd($id);
	$tasks = DB::table('tasks')->find($id);
	return view('tasks.show', compact('tasks'));
}); // end of Route::get('/tasks/{task}', function($id)

Route::get('/welcome', function () {
	return view('welcome');
}); // end of Route::get('/welcome', function ()
