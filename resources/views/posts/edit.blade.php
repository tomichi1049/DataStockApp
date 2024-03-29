<x-app-layout>
    <div class="bg-indigo-50">
        <div class="w-[90%] m-auto">
        <h1 class="title text-3xl font-bold">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2 class="text-lg text-indigo-700">タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__category'>
                    <h3 class="text-lg text-indigo-700">カテゴリー</h3>
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
                    <h3 class="text-lg text-indigo-700">投稿者名</h3>
                    <input type='text' name='post[user]' value="{{ $post->user }}">
                </div>
                <div class='content__text'>
                    <h3 class="text-lg text-indigo-700">詳細</h3>
                    <textarea name='post[text]' >{{ $post->text }}</textarea>
                </div>
                <div class='content__image'>
                    <h3 class="text-lg text-indigo-700">写真</h3>
                    <input type='file' name='post[image]' value="{{ old('post.image') }}"  accept="image/png, image/jpeg">
                </div><br><hr>
                <input class="underline" type="submit" value="保存">
            </form>
        </div>
        </div>
    </div>
</x-app-layout>