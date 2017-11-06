<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
  public function index() {
    $posts = Post::all();
    return view('blog.index', compact('posts'));
  } // end of public function index()

  public function post($id) {
    $post = Post::find($id);
    return view('blog.post', compact('post'));
  } // end of public function show()
} // end of class PostsController extends Controller
