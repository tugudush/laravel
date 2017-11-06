<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('layouts.default.meta-essentials')
	@yield('meta-dynamic')
	@include('layouts.default.styles')
	
	@include('layouts.default.header-scripts')
</head>

<body>
	<header id="header">
		@include('layouts.default.header')
	</header>
	<div id="container">
		@yield('content')	
	</div><!--/container-->
	
	<footer id="footer">
		@include('layouts.default.footer')	
	</footer>
	@include('layouts.default.footer-scripts')
	@yield('page-specific-footer-scripts')
</body>

</html>