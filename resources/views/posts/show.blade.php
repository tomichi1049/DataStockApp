<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>show Database</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{$post->title}}
        </h1>
        <h2 class="category">{{$post->category}}</h2>
        <div class="content">
            <div class="content__post">
                <h3>投稿者</h3>
                <p>{{$post->user}}</p>
                <h3>詳細</h3>
                <p>{{$post->text}}</p>
                <h3>写真</h3>
                <p>{{$post->image}}</p>
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </div>
    </body>
</html>