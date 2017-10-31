<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
		return view('posts.index');
	} // end of public function index()
	
	public function show() {
		return view('posts.show');
	} // end of public function show()
} // end of class PostsController extends Controller
