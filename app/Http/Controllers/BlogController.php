<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
  public function index() {
    $posts = Post::all();
    return view('blog.index', compact('posts'));
  } // end of public function index()

  public function post($id) {
    $post = Post::find($id);
    return view('blog.post');
  } // end of public function show()
}
