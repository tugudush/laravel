<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
		return view('blog.index');
	} // end of public function index()
	
	public function post() {
		return view('blog.post');
	} // end of public function show()
} // end of class PostsController extends Controller
