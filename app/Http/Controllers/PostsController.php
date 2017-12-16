<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Post;

class PostsController extends Controller
{

  public function __construct() {
    $this->middleware('auth', [
      'except' => ['index', 'post']
    ]);
  } // end of public function __construct()

  public function index() {    
    //$posts = Post::all();    
    $posts = Post::latest();
    
    if (!empty(request('month'))) {      
      $month = request('month');
      $month = Carbon::parse($month)->month;
      $posts->whereMonth('created_at', $month);
    }

    if (!empty(request('year'))) {      
      $year = request('year');
      $year = Carbon::parse($year)->year;
      $posts->whereYear('created_at', $year);
    }

    $posts = $posts->get();

    // $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) as "count"')      
    //   ->groupBy('year', 'month')
    //   ->orderByRaw('min(created_at) desc')
    //   ->get()
    //   ->toArray();

    //$archives = Post::archives();

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
    $post->user_id = auth()->id();
    //$post->published = true;
    $post->save();
    
    return redirect('/');
  } // end of public function store()
  
  public function ajax_store() {
    try {
      //$post::create(request()->all());
      $post = new Post;
      $post->title = request('title');
      $post->body = request('body');
      $post->user_id = auth()->id();
      //$post->published = true;
      
      if(empty($post->title) || empty($post->body)) {
        $response['is_success'] = false;
        $response['error_message'] = 'Please fill up all the input fields.';
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