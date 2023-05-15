<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Blogs created</h1>
     @foreach($Table as $tables)
  
    <li><a href="/show/{{ $tables->id }}">{{ $tables->name }}</a></li>
    @endforeach
</body>
</html>