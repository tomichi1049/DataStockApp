<x-app-layout>
    <div class="bg-indigo-50">
        <div class="w-[90%] m-auto">
        <h1 class="title text-3xl font-bold">
            {{$post->title}}
        </h1>
        <h2 class="category text-lg text-indigo-700">カテゴリー</h2>
        <p>{{$post->category}}</p>
        <div class="content">
            <div class="content__post">
                <h3 class="text-lg text-indigo-700">投稿者</h3>
                <p>{{$post->user}}</p>
                <h3 class="text-lg text-indigo-700">詳細</h3>
                <p>{{$post->text}}</p>
                <h3 class="text-lg text-indigo-700">写真</h3>
                <img class="w-2/4 h-2/4" src="{{$post->image_url}}" alt="画像が読み込めません。"/>
            </div><br><hr>
            <div class="edit text-lg underline"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
            <div class="footer underline">
                <a href="/">戻る</a>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>