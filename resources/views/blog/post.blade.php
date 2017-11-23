@extends('layouts.blog.full-width')

@section('header-php')
  <?php
  $ajax_enabled = env('AJAX_ENABLED', false);    
  //$action = ($ajax_enabled) ? '/ajax_add_comment' : '/posts/'.$post->id.'/comments';
  $action = '/posts/'.$post->id.'/comments';
  $body_id = 'page-single-post';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>Single Post</title>	
  <meta name="description" content="Single post">
  <meta name="author" content="Jerome Gomez">
  <meta name="keywords" content="">
@endsection

@section('content')
  <div class="col-sm-12 blog-main">
      <div class="blog-post">

        <h1 class="blog-post-title">{{ $post->title }}</h1>
        {!!$post->body!!}
        
        <hr>
        
        <div class="comments">
          <ul class="list-group">
            @foreach($post->comments as $comment)
              <li class="list-group-item">
                <span class="comment-body">
                  {{ $comment->body }}
                </span><!--/.comment-body-->
                <span class="comment-date">
                  {{ $comment->created_at->diffForHumans() }}
                </span><!--/.comment-date-->
              </li>
            @endforeach
          </ul><!--/.list-group-->          
        </div><!--/.comments-->

        <hr>

        @include('layouts.blog.errors')

        <div class="card">
          <div class="card-block">
            <form action="{{ $action }}" method="post">
              {{ csrf_field() }}
              {{--  <input type="hidden" name="post_id" value="{{ $post->id }}">  --}}
              <div class="form-group">
                <textarea name="comment_box" class="comment-box form-control" rows="5" placeholder="Comment"></textarea>
              </div><!--/.form-group-->
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
              </div><!--/.form-group-->
            </form>
          </div><!--/.card-block-->
        </div><!--/.card-->

      </div><!--/.blog-post-->    
  </div><!--/.blog-main-->
@endsection

@section('page-specific-footer-scripts')
  <script>
    $(function() {
      var page_title = $('html').find('title').text();
      console.log("Hi! I'm a page specific footer script for " + page_title);		
    }); // end of $(function()		
  </script>
@endsection