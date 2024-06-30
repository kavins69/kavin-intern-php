<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/viewblog.css">
    <title>InternBlog</title>
</head>
<body>
    <h1>{{$data->title}}</h1>
    <p>
        {{$data->blog}}
        <button type="button" onClick='window.location.href = "http://127.0.0.1:8000/views/{{(string)$data->id}}/edit";'>EDIT BLOG</button>
    </p>
</body>
</html>