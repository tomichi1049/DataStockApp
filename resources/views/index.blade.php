<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Database</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Thread</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='post'>{{ $post->post }}</h2>
                    <h3 class='title'>{{$post->title}}</h3>
                    <h3 class='category'>{{$post->category}}</h3>
                    <p class='user'>{{ $post->user }}</p>
                    <p class='text'>{{ $post->text }}</p>
                    <p class='photo'>{{ $post->photo }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>