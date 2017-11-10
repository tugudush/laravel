<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Post;


class PostsController extends Controller
{
  public function index() {
    //$posts = Post::all();
    $posts = Post::latest()->get();
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('blog.index', compact('posts'));
  } // end of public function index()

  public function post($id) {
    $post = Post::find($id);
    return view('blog.post', compact('post'));
  } // end of public function show()
  
  public function create() {
    //$ajax_enabled = false;
    //return view('blog.create', compact('ajax_enabled'));
    return view('blog.create');
  } // end of public function show()
  
  public function store() {
    //dd(request()->all());
    
    $this->validate(request(), [
      'title' => 'required',
      'body'  => 'required'
    ]); // end of $this->validate(request(), [
    
    $post = new Post;
    $post->title = request('title');
    $post->body = request('body');
    $post->save();    
    return redirect('/');
  } // end of public function store()
  
  public function ajax_store() {
    try {
      //$post::create(request()->all());
      $post = new Post;
      $post->title = request('title');
      $post->body = request('body');
      
      if(empty($post->title) || empty($post->body)) {
        $response['is_success'] = false;
        $response['error_message'] = 'Please fill up the required fields';
      } // end of if(empty($post->title) || empty($post->body))
      else { // if not empty
        $post->save();
        $response['is_success'] = true;
      } // end of else if not empty
      
    } // end of elseif(!count($errors))    
    catch(QueryException $e) {
      $response['error_message'] = $e->getMessage();
      $response['is_success'] = false;
    }
    echo json_encode($response);
  } // end of public function ajax_store()

} // end of class PostsController extends Controller
