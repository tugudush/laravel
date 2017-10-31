<!DOCTYPE html>
<html>

<head>
	<title>My Application</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
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
</body>

</html>