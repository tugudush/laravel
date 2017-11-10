@extends('layouts.blog.full-width')

@section('header-php')
  <?php
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
    <?php
    $ajax_enabled = env('AJAX_ENABLED', false);    
    $action = ($ajax_enabled) ? '/blog/ajax_add_post' : '/blog/posts';
    ?>
    
    AJAX ENABLED: {{ $ajax_enabled }}
    
    @if(count($errors))
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><!--/.alert.alert-error-->
    @endif
    
    <div class="ajax-alert">
      
    </div><!--/.ajax-alert-->
    
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
            var response_obj = JSON.parse(response);
            
            var is_success = response_obj.is_success;            
            console.log('is_success: '+is_success);
            
            var error_message = response_obj.error_message;            
            
            if (typeof error_message !== 'undefined') {
              console.log('error_message: '+error_message);  
            } // end of if (typeof error_message !== 'undefined')
            
          }); // end of $.post(action, data, function()

        });// end of $('#add-post-form').submit(function(e)
      @else
        console.log('ajax disabled!');
      @endif
    }); // end of $(function()		
  </script>
@endsection