<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>create Database</title>
    </head>
    <body>
        <h1>データ投稿作成</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="category">
                <h3>カテゴリー</h3>
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
            <div class="user">
                <h3>投稿者名</h3>
                <input type="text" name="post[user]" placeholder="氏名" value="{{ old('post.user') }}"/>
                <p class="user__error" style="color:red">{{ $errors->first('post.user') }}</p>
            </div>
            <div class="text">
                <h3>詳細</h3>
                <textarea name="post[text]" placeholder="内容を入力してください。"value="{{ old('post.text') }}"></textarea>
                <p class="text__error" style="color:red">{{ $errors->first('post.text') }}</p>
            </div>
            <div class="image">
                <h3>写真</h3>
                <input type="file" name="post[image]"  accept="image/png, image/jpeg"/>
            </div>
            <br>
            <input type="submit" value="送信"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>