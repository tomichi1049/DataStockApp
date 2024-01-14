<x-app-layout>
    <div class="bg-indigo-50 bg-cover justify-center">
        <div class="w-[90%] m-auto">
        <h1 class="text-4xl text-indigo-700 text-center font-bold">Thread Name</h1>
        <div class="text-center">
            <a class="text-lg underline" href='/posts/create'>投稿作成</a><br>
        </div>
        <!--<a class="text-lg underline" href='/categories/create'>カテゴリー作成</a>-->
        
        <form action="/" class="search text-center" method="get">
            @csrf
            <input type="text" name="keyword" placeholder="検索：タイトル">
            <!--<select name="sectin">
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
        </form> <br><hr>
        
        <div class='searchresult text-center'>
        @if(!is_null($keywords))
            @if($keywords->count()>0)
            @foreach($keywords as $row)
                <h2 class='title text-xl transition'>
                    <a class="text-red-400" href="/posts/{{ $row->id }}">検索結果：{{ $row->title }}</a>
                </h2>
            @endforeach
            <hr>
            @else
                <p class='title text-xl text-red-400'>該当する投稿は見つかりませんでした。</p>
            @endif
        @endif
        </div>
        
        <div class='posts'>
            @foreach ($posts as $post)
                <h2 class='title text-xl underline'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <h3 class='category'>{{$post->category}}</h3>
                <p class='user'>{{ $post->user }}</p>
                <!--<p class='text'>{{ $post->text }}</p>
                <p class='image'>{{ $post->image }}</p>-->
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="text-gray-400 underline" type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
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
        <div class='show__user text-right'>ユーザー名：{{ Auth::user()->name  }}</div>
        </div>
    </div>
</x-app-layout>