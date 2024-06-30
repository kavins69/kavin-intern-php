<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='/css/views.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>
    <div class='alert'>{{session()->get('message')}}</div>
    <div class="content">
    <h1>Read the Blogs</h1>
    <div class="blogcontain">
    @foreach($data as $key=>$datas)
    <a href='{{route("viewsroute","$datas->id")}}'>
    <div class="blogview">
    <p>TITLE : {{$datas->title}}</p>
    <p>Blog : 
    <?php
    if(strlen($datas->blog) > 80) {
        echo substr($datas->blog, 0, 80) . '... CLICK TO READ MORE';
    } else {
        echo $datas->blog;
    }
    ?>
    </p>
    </div>
    </a>
    <form action="{{route('deleteBlog',$datas->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button><i class="fa fa-trash-o"></i></button>
    </form>
    @endforeach
    </div>
    </div>
</body>
</html>