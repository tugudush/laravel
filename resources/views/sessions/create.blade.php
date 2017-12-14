@extends('layouts.blog.full-width')

@section('header-php')
  <?php
  $body_id = 'page-register';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>User Registration</title>	
  <meta name="description" content="User Registration">
  <meta name="author" content="Jerome Gomez">
  <meta name="keywords" content="">
@endsection

@section('content')
  <div class="col-sm-12">
    <h1>Registration</h1>

    <form>
      {{ csrf_field() }}

      <div class="form-group">
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
      </div><!--/.form-group-->

      <div class="form-group">
        <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
      </div><!--/.form-group-->

      <div class="form-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      </div><!--/.form-group-->

      <div class="form-group">
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Login</button>
      </div><!--/.form-group-->

    </form>
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