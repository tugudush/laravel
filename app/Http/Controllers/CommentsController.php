<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post) {
      $this->validate(request(), [      
        'comment_box' => 'required'
      ]); // end of $this->validate(request(), [

      $post_id = $post->id;
      $user_id = auth()->id();
      $comment = new Comment;
      $comment->user_id = $user_id;
      $comment->post_id = $post_id;
      $comment->body = request('comment_box');
      $comment->save();
      
      //$post->addComment(request('comment_box'), $user_id);   

      return back();

    } // end of public function store()
} // end of class CommentsController extends Controller
