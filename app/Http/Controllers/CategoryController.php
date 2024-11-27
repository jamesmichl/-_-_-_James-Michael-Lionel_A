<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('category',[
            "title" => 'List of categories',
            "categories" => Category::all()
        ]);
    }
    public function show(Category $category){
        return view('blog', [
                "title" => 'Categories ' . $category->name,
                "posts" => $category->post->load('category', 'author')
            ]);
    }
}
