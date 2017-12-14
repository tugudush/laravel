<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  
    //protected $fillable = ['title', 'body'];
    public function comments() {
        return $this->hasMany(Comment::class);  
    } // end of public function comments()

    public function user() {
        return $this->belongsTo(User::class);
    } // end of public function user()
  
    public function addComment($body, $user_id) {

        //$this->comments()->create(compact('body'));
                
        Comment::create([
            'post_id' => $this->id,
            'user_id' => $user_id,
            'body' => $body            
        ]);
        
    } // end of public function addComment()

} // end of class Post extends Model
