<x-app-layout>
    <div class="bg-indigo-50">
        <div class="w-[90%] m-auto">
        <h1 class="text-3xl font-bold">データ投稿作成</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title text-lg">
                <h2 class="text-indigo-700">タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="category text-lg">
                <h3 class="text-indigo-700">カテゴリー</h3>
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
            </div>
            <div class="user text-lg">
                <h3 class="text-indigo-700">投稿者名</h3>
                <input type="text" name="post[user]" placeholder="氏名" value="{{ old('post.user') }}"/>
                <p class="user__error" style="color:red">{{ $errors->first('post.user') }}</p>
            </div>
            <div class="text text-lg">
                <h3 class="text-indigo-700">詳細</h3>
                <textarea name="post[text]" placeholder="内容を入力してください。" value="{{ old('post.text') }}"></textarea>
                <p class="text__error" style="color:red">{{ $errors->first('post.text') }}</p>
            </div>
            <div class="image text-lg">
                <h3 class="text-indigo-700">写真</h3>
                <input type="file" name="image"  accept="image/png, image/jpeg"/>
            </div>
            <br><hr>
            <input class="text-lg underline" type="submit" value="送信"/>
        </form>
        <div class="footer underline">
            <a href="/">戻る</a>
        </div>
        </div>
    </div>
</x-app-layout>