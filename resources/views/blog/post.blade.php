@extends('layouts.blog.master')

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
  <div class="col-sm-8 blog-main">    
      <div class="blog-post">
        <h1 class="blog-post-title">{{ $post->title }}</h1>
        {!!$post->body!!}
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