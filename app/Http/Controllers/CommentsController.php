<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post) {
      $this->validate(request(), [      
        'comment_box' => 'required'
      ]); // end of $this->validate(request(), [

      $post->addComment(request('comment_box'));

      return back();

    } // end of public function store()
} // end of class CommentsController extends Controller
