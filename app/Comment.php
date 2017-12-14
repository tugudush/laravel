<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body'];

    public function post() {
        return $this->belongsTo(Post::class);
    } // end of public function post()

    public function user() {
        return $this->belongsTo(User::class);
    } // end of public function user()
  
} // end of class Comment extends Model
