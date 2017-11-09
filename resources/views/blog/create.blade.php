@extends('layouts.blog.full-width')

@section('meta-dynamic')
  <title>Blog Posts</title>	
  <meta name="description" content="Blog posts">
  <meta name="author" content="Jerome Gomez">
  <meta name="keywords" content="">
@endsection

@section('content')  
  <div class="col-sm-8 blog-main">
    AJAX Enabled: {{ $ajax_enabled }}
    <?php
    $action = ($ajax_enabled) ? '/blog/ajax_add_post' : '/blog/posts'
    ?>
    <form id="add-post-form" action="{{ $action }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <input type="text" id="input_title" name="title" class="form-control" placeholder="Title"/>
      </div><!--/.form-group-->
      <div class="form-group">
        <textarea id="input_body" name="body" class="form-control" rows="8" placeholder="Content"></textarea>
      </div><!--/.form-group-->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection

@section('page-footer-scripts')  
  <script>
    $(function() {      
      @if($ajax_enabled)
        console.log('ajax enabled!');
        $('#add-post-form').submit(function(e) {
          e.preventDefault();
          console.log('form submitted!');

          var action = $(this).attr('action');
          console.log('action: '+action);

          var data = $(this).serializeArray();
          console.log(data);

          $.post(action, data, function(response) {
            console.log('response:');
            console.log(response);
          }); // end of $.post(action, data, function()

        });// end of $('#add-post-form').submit(function(e)
      @else
        console.log('ajax disabled!');
      @endif
    }); // end of $(function()		
  </script>
@endsection