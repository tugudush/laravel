<!DOCTYPE html>
<html>

<head>
	<title>Laravel</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
</head>

<body>	
	<h1>Tasks</h1>

	<ul>
		@foreach($tasks as $task)
		<li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
		@endforeach
	</ul>

</body>

</html>