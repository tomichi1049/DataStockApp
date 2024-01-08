<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        // ログインしていなかったらログインページに遷移する（この処理を消すとログインしなくてもページを表示する）
        $this->middleware('auth');
    }
    
    public function show(Comment $comment)
    {
        return view('posts.show')->with(['comment' => $comment->get()]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    //ここではコメントを保存するだけ？Postのshowで表示
    public function store(Request $request, Comment $comment)
    {
        $comment = new Comment();
        $comment->comment = $request->comment ?? 'デフォルトのコメント';
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id ?? 0;
        $comment->save();

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $comment = Comment::find($request->post_id);
        $comment->delete();
        return redirect('/');
    }
}
