<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('author', [
            "title" => "Users",
            "authors" => User::all(),
        ]);
    }
    public function show(User $author){
        return view('blog', [
            "title" => 'Author ' . $author->name,
            "author" => $author->name,
            "posts" => $author->post->load('category', 'author')
        ]);
    }
}
