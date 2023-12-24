<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Database</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__category'>
                    <h3>カテゴリー</h3>
                    <select name='post[category]' value="{{ $post->category }}">
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
                <div class='content__user'>
                    <h3>投稿者名</h3>
                    <input type='text' name='post[user]' value="{{ $post->user }}">
                </div>
                <div class='content__text'>
                    <h3>詳細</h3>
                    <textarea name='post[text]' >{{ $post->text }}</textarea>
                </div>
                <div class='content__image'>
                    <h3>写真</h3>
                    <input type='file' name='post[image]' value="{{ old('post.image') }}"  accept="image/png, image/jpeg">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</html>