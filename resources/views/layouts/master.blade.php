<!DOCTYPE html>
<html>

<head>
	<title>My Application</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	@include('layouts.styles')	
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
		@include('layouts.scripts')
	</footer>
</body>

</html>