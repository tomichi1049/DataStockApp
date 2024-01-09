<x-app-layout>
    <body>
        <h1 class="title text-4xl" >
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
                <img src="{{$post->image_url}}" alt="画像が読み込めません。"/>
            </div>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
            
            <div class="comment">
                
                <form class="comment" action={{"/comment/".$post->id}} method="post">
                    @csrf
                    <h3>コメント</h3>
                        <textarea class="input_comment" placeholder="コメントを入力してください。" name="comment"></textarea>
                        <input type="submit" name="submit" value="送信">
                </form>
                @foreach ($comments as $comment)
                <p>{{$comment->user->name}}</p>
                <p>{{$comment->comment}}</p>
                @endforeach
            </div>
            
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </div>
</x-app-layout>