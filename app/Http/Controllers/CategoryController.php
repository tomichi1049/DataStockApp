<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\CategoryRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
        
    public function create(Request $request, Category $category_name)
    {
        
        
        return view('categories.create')->with(['category' => $category_name->get()]);  
    }
    
    /*==================================
    検索フォームのみ表示(show)
    public function show(Request $request)
    {
        //フォームを機能させるために各情報を取得し、viewに返す
        $category = new MCategory;
        $categories = $category->getLists();
        $searchWord = $request->input('searchWord');
        $categoryId = $request->input('categoryId');

        return view('searchproduct', [
            'categories' => $categories,
            'searchWord' => $searchWord,
            'categoryId' => $categoryId
        ]);
    }
    ==================================*/
}
