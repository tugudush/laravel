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

  public static function archives() {
    return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) as "count"')      
    ->groupBy('year', 'month')
    ->orderByRaw('min(created_at) desc')
    ->get()
    ->toArray();
  } // end of public static function archives()

} // end of class Post extends Model
