@extends('layouts.blog.full-width')

@section('header-php')
  <?php
  $body_id = 'page-home';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>Blog Posts</title>	
  <meta name="description" content="Blog posts">
  <meta name="author" content="Jerome Gomez">
  <meta name="keywords" content="">
@endsection

@section('content')
  <div class="col-sm-12 blog-main">
    @foreach($posts as $post)
      <div class="blog-post">
        <a href="/blog/posts/{{ $post->id }}"><h2 class="blog-post-title">{{ $post->title }}</h2></a>
        {{--  <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>  --}}
        <p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }}</p>
        {!!$post->body!!}
      </div><!--/.blog-post-->
    @endforeach
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