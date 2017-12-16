@extends('layouts.blog.master')

@section('header-php')
  <?php
  $ajax_enabled = env('AJAX_ENABLED', false);    
  $action = ($ajax_enabled) ? '/posts/ajax_add_post' : '/posts';
  $body_id = 'page-add-post';
  $body_class = '';
  ?>
@endsection
 
@section('meta-dynamic')
  <title>Add Post</title>	
  <meta name="description" content="Blog posts">
  <meta name="author" content="Jerome Gomez">
  <meta name="keywords" content="">
@endsection

@section('content')  
  <div class="col-sm-8 blog-main">
    
    AJAX ENABLED: {{ $ajax_enabled }}
    
    @include('layouts.blog.errors')
    
    <div id="ajax-alert">
      
    </div><!--/.ajax-alert-->
    
    <form id="add-post-form" action="{{ $action }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <div class="input-group">
          <input type="text" id="input_title" name="title" class="form-control" placeholder="Title" required />
          <span class="input-group-addon">*</span>
        </div>
      </div><!--/.form-group-->
      <div class="form-group">
        <textarea id="input_body" name="body" class="form-control" rows="8" placeholder="Content" required></textarea>
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
            var response_obj = JSON.parse(response);
            
            var is_success = response_obj.is_success;            
            console.log('is_success: '+is_success);
            $('#ajax-alert').html('post submitted');
            
            var error_message = response_obj.error_message;            
            
            if (typeof error_message !== 'undefined') {
              console.log('error_message: '+error_message);
              $('#ajax-alert').addClass('alert');
              $('#ajax-alert').addClass('alert-danger');
              $('#ajax-alert').html(error_message);
            } // end of if (typeof error_message !== 'undefined')
            
          }); // end of $.post(action, data, function()

        });// end of $('#add-post-form').submit(function(e)
      @else
        console.log('ajax disabled!');
      @endif
    }); // end of $(function()		
  </script>
@endsection