<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  
  //protected $fillable = ['title', 'body'];
  public function comments() {
    return $this->hasMany(Comment::class);  
  } // end of public function comments()

  public function addComment($body) {

    $this->comments()->create(compact('body'));
    /*
    Comment::create([
      'post_id' => $this->id,
      'body' => $body
    ]);
    */
  } // end of public function addComment()
  
} // end of class Post extends Model
