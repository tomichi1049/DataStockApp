<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'user_id',
        'post_id',
    ];
    
    public function show(Request $request)
    {
        return view('posts.show')->with(['comment' => $comment]);
        //postsのshow.blade.phpのファイル→なぜか未定義と表示される
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
