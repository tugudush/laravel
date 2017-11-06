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
  
  public function create() {
    return view('blog.create');
  } // end of public function show()
  
  public function store() {
    //dd(request()->all());
    $post = new Post;
    $post->title = request('title');
    $post->body = request('body');
    $post->save();
    return redirect('/');
  }
} // end of class PostsController extends Controller
