@extends('layouts.blog.master')

@section('meta-dynamic')
	<title>Single Blog Post</title>	
	<meta name="description" content="Laravel test">
	<meta name="author" content="Jerome Gomez">
	<meta name="keywords" content="">
@endsection

@section('content')
	<h1>A place to show the post.</h1>
	<a href="/posts">Back to blogs posts...</a>
@endsection


@section('page-specific-footer-scripts')
	<script>
		$(function() {
			var page_title = $('html').find('title').text();
			console.log("Hi! I'm a page specific footer script for " + page_title);		
		}); // end of $(function()		
	</script>
@endsection