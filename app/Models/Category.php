<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function getLists()
    {
        $categories = Category::pluck('category_name', 'id');

        return $categories;
    }
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
