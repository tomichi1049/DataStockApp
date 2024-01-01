<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\CategoryRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
        
    public function create(Request $request, Category $category_name)
    {
        return view('categories.create')->with(['category' => $category_name->get()]);  
    }
}
