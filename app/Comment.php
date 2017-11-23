<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  //protected $fillable = ['post_id','body'];
  public function post() {
    return $this->belongsTo(Post::class);
  } // end of public function post()
} // end of class Comment extends Model
