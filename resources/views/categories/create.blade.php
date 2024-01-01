<x-app-layout>
        <h1>カテゴリー作成</h1>
        
        <form action="/categories/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>カテゴリ-名</h2>
                <input type="text" name="category[category_name]" placeholder="入力してください。" value="{{ old('category.category_name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('category.category_name') }}</p>
            <input type="submit" value="送信"/>
            </div>
        </form>
        
        <div class="categories">
        @foreach($category as $category_name)
        <!--CategoryContrllerのwith関数内にある'category'と$categoryが一致-->
            <p class='category_name'>{{$category_name->category_name}}</p>
        @endforeach
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>