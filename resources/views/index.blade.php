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
  Hello {{ $name }} {{ $message }}
  
  <h2>Tasks</h2>
  
  <ul>
  @foreach($tasks as $task)
    <li>{{ $task }}</li>
  @endforeach
  </ul>
  
</body>
</html>