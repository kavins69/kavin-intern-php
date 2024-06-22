<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/create.css">
    <title>InternBlog</title>
</head>
<body>
    <form method="post" action="http://127.0.0.1:8000/store">
        {{ csrf_field() }}
    <h1>POST YOUR BLOG</h1>
    Title: <br><br><input id='title' type="text" name="title" required><br><br>
    Blog: <br><br><textarea name="blog" rows="5" cols="40" required></textarea><br><br>
    <input id='submit' type="submit" name="submit" value="Submit"> 
    </form>
</body>
</html>