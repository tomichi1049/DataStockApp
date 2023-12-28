<x-app-layout>
        <h1>Thread Name</h1>
        <a href='/posts/create'>作成</a>
        
        <form action="/" class="search" method="get">
            @csrf
            <input type="text" name="title" placeholder="検索：タイトル" value="{{$keyword}}">
            <select name="post[category]">
                <option value="備品">備品</option>
                <option value="ポスター">ポスター</option>
                <option value="空間デザイン">空間デザイン</option>
                <option value="食材">食材</option>
                <option value="外部関係者">外部関係者</option>
                <option value="SIC">SIC</option>
                <option value="領収書">領収書</option>
                <option value="申請書">申請書</option>
                <option value="その他">その他</option>
            </select>
            <input type="submit" name="submit" value="検索">
        </form> 
        
        <div class='posts'>
            @foreach ($posts as $post)
            @if (strpos($post->title, $keyword) !== false) 
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h3 class='category'>{{$post->category}}</h3>
                    <p class='user'>{{ $post->user }}</p>
                    <p class='text'>{{ $post->text }}</p>
                    <p class='image'>{{ $post->image }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                </div>
            @else
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h3 class='category'>{{$post->category}}</h3>
                    <p class='user'>{{ $post->user }}</p>
                    <p class='text'>{{ $post->text }}</p>
                    <p class='image'>{{ $post->image }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                </div>
            @endif
            @endforeach
        </div>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        <br>
        <div class='show__user'>ユーザー名：{{ Auth::user()->name  }}</div>
</x-app-layout>