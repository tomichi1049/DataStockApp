<x-app-layout>
        <h1>Thread Name</h1>
        <a href='/posts/create'>投稿作成</a><br>
        <a href='/categories/create'>カテゴリー作成</a>
        
        <form action="/" class="search" method="get">
            @csrf
            <input type="text" name="keyword" placeholder="検索：タイトル">
            <!--<select name="post[category]">
                <option value="備品">備品</option>
                <option value="ポスター">ポスター</option>
                <option value="空間デザイン">空間デザイン</option>
                <option value="食材">食材</option>
                <option value="外部関係者">外部関係者</option>
                <option value="SIC">SIC</option>
                <option value="領収書">領収書</option>
                <option value="申請書">申請書</option>
                <option value="その他">その他</option>
            </select>-->
            <input type="submit" name="submit" value="検索">
        </form> 
        
        <div class='searchresult'>
        @if(!is_null($keywords))
            @if($keywords->count()>0)
            @foreach($keywords as $row)
                <h2 class='title'>
                    <a href="/posts/{{ $row->id }}">{{ $row->title }}</a>
                </h2>
            @endforeach
            <hr>
            @else
                <p>該当する投稿は見つかりませんでした。</p>
            @endif
        @endif
        </div>
        
        <div class='posts'>
            @foreach ($posts as $post)
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <h3 class='category'>{{$post->category}}</h3>
                <p class='user'>{{ $post->user }}</p>
                <p class='text'>{{ $post->text }}</p>
                <p class='image'>{{ $post->image }}</p>
                <hr>
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