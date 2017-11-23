<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use App\Comment;

class CommentsController extends Controller
{
    public function store() {
      
      $this->validate(request(), [        
        'comment_box'  => 'required'
      ]); // end of $this->validate(request(), [

      $comment = new Comment;
      $comment->post_id = request('post_id');
      $comment->body = request('comment_box');
      $comment->save();

      return redirect('/posts/'.$comment->post_id);

    } // end of public function store()
} // end of class CommentsController extends Controller
