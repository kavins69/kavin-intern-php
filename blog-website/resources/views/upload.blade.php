<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/upload.css">
    <title>InternBlog</title>
</head>
<body>
    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>POST YOUR BLOG</h1>
        Title: <br><br><input id='title' type="text" name="title" required value="{{old('title')}}">
        @if($errors->has('title'))
        <div class="alert">
            <strong>{{$errors->first('title')}}</strong>
        </div>
        @endif
        <br><br>
        <label for="file">Choose a file:</label><br>
        <input type="file" name="blog" id="file"><br><br>
        @if($errors->has('file'))
        <div class="alert">
            <strong>{{$errors->first('file')}}</strong>
        </div>
        @endif
        <br><br><br>
        <input type="submit" id='submit' required value="Upload">
    </form>
</body>
</html>