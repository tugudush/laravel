@extends('layouts.master')

@section('meta-dynamic')
	<title>Blog Posts</title>	
	<meta name="description" content="Laravel test">
	<meta name="author" content="Jerome Gomez">
	<meta name="keywords" content="">
@endsection

@section('content')
	List blog posts...
@endsection

@section('page-specific-footer-scripts')
	<script>
		$(function() {
			var page_title = $('html').find('title').text();
			console.log("Hi! I'm a page specific footer script for " + page_title);		
		}); // end of $(function()		
	</script>
@endsection