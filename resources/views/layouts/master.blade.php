<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('layouts.meta-essentials')
	@yield('meta-dynamic')
	@include('layouts.styles')
	
	@include('layouts.header-scripts')
</head>

<body>
	<header id="header">
		@include('layouts.header')
	</header>
	<div id="container">
		@yield('content')	
	</div><!--/container-->
	
	<footer id="footer">
		@include('layouts.footer')	
	</footer>
	@include('layouts.footer-scripts')
	@yield('page-specific-footer-scripts')
</body>

</html>