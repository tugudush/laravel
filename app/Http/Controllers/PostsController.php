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
    $ajax_enabled = true;
    return view('blog.create', compact('ajax_enabled'));
  } // end of public function show()
  
  public function store() {
    //dd(request()->all());
    $post = new Post;
    $post->title = request('title');
    $post->body = request('body');
    $post->save();
    //$response['is_success'] = true;
    //echo json_encode($response);
    return redirect('/');
  } // end of public function store()
  
  public function ajax_store() {
    $post = new Post;
    //$post->title = request('title');
    //$post->body = request('body');
    $post::create(request()->all());
    //$post->save();
    $response['is_success'] = true;
    echo json_encode($response);
  } // end of public function ajax_store()

} // end of class PostsController extends Controller
