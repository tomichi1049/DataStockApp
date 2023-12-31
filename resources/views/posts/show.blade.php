<x-app-layout>
    <body>
        <h1 class="title text-3xl">
            {{$post->title}}
        </h1>
        <h2 class="category text-lg">{{$post->category}}</h2>
        <div class="content">
            <div class="content__post">
                <h3 class="text-lg">投稿者</h3>
                <p>{{$post->user}}</p>
                <h3 class="text-lg">詳細</h3>
                <p>{{$post->text}}</p>
                <h3 class="text-lg">写真</h3>
                <img src="{{$post->image_url}}" alt="画像が読み込めません。"/>
            </div>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </div>
</x-app-layout>