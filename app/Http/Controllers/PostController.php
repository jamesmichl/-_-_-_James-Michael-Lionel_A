<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        if(request('category') !== null){
            $category = Category::where('slug', request('category'))->get('name')[0]->name ?? '';
            $title = 'Blog in ' . $category;
        }elseif(request('author') !== null){
            $author = User::where('name', request('author'))->get('name')[0]->name ?? '';
            $title = 'Blog by ' . $author;
        }
        return view('blog',[
            "title" => $title ?? "Blog",
            "posts" => Post::latest()->filter(request(['search', 'author', 'category']))->paginate(2)->withQueryString()
        ]);
    }
    public function show(Post $post){
        return view('post',[
            "title" => 'Single Post',
            "post" => $post
        ]);
    }
}
