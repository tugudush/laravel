@extends('layouts.blog.full-width')

@section('meta-dynamic')
  <title>Blog Posts</title>	
  <meta name="description" content="Blog posts">
  <meta name="author" content="Jerome Gomez">
  <meta name="keywords" content="">
@endsection

@section('content')
  <div class="col-sm-8 blog-main">
    <form action="/blog/posts" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <input type="text" id="title" name="title" class="form-control" placeholder="Title"/>
      </div><!--/.form-group-->
      <div class="form-group">
        <textarea id="body" name="body" class="form-control" rows="8" placeholder="Content"></textarea>
      </div><!--/.form-group-->
      <button type="submit" class="btn btn-primary">Submit</button>      
    </form>
  </div>
@endsection

@section('page-specific-footer-scripts')
  <script>
    $(function() {
      var page_title = $('html').find('title').text();
      console.log("Hi! I'm a page specific footer script for " + page_title);		
    }); // end of $(function()		
  </script>
@endsection