<!DOCTYPE html>
<html>

<head>
	<title>Laravel</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
</head>

<body>
	<h1>Laravel Template</h1>
	@if(isset($name) && isset($message))
		Hello {{ $name }} {{ $message }}
	@endif
</body>

</html>