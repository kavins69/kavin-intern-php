<!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div class='alert'>
    {{$error}}
    </div>
    @endforeach
@endif -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/create.css">
    <title>InternBlog</title>
</head>
<body>
    <form method="post" action="{{route('updateBlog',$data->id)}}">
        {{ csrf_field() }}
        @method('PUT')
    <h1>EDIT YOUR BLOG</h1>
    Title: <br><br><input id='title' type="text" name="title" required value="{{$data->title}}">
    @if($errors->has('title'))
        <div class="alert">
            <strong>{{$errors->first('title')}}</strong>
        </div>
    @endif
    <br><br>
    Blog: <br><br><textarea name="blog" rows="5" cols="40" required>{{$data->blog}}</textarea>
    @if($errors->has('blog'))
        <div class="alert">
            <strong>{{$errors->first('blog')}}</strong>
        </div>
    @endif
    <br><br>
    <input id='submit' type="submit" name="submit" value="Submit"> 
    </form>
</body>
</html>