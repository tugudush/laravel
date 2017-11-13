@extends('layouts.blog.full-width')

@section('header-php')
  <?php
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