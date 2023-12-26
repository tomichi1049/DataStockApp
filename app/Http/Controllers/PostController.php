<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Cloudinary;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $image_url = Cloudinary::upload($request->file('post[image]')->getRealPath())->getSecurePath();
        
        $input = $request['post'];
        $input += ['image_url' => $image_url]; 
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        //ここで編集フォームに記述した内容を$input_postに代入
        $post->fill($input_post)->save();
        //$input_postの内容をデータベースに保存（更新されたということ）
    
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
?>
