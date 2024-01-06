<x-app-layout>
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
                <img src="{{$post->image_url}}" alt="画像が読み込めません。"/>
            </div>
            
            <div class="comment">
                @foreach ($comment as $com)
                <form class="comment" action="/" method="post">
                    @csrf
                    <h3>コメント</h3>
                        <input class="post_id" value="{{ $com->post_id }}" type="hidden" name="post_id" />
                        <input class="user_id" value="{{ Auth::id() }}" type="hidden" name="user_id" />
                        <textarea class="input_comment" placeholder="コメントを入力してください。" name="comment"></textarea>
                        <input type="submit" name="submit" value="送信">
                </form>
                @endforeach
            </div>
            
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </div>
</x-app-layout>