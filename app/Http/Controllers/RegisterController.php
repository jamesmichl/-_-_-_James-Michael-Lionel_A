<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            "title" => "Register",
            
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:255',
            'username' => 'required|max:50|min:4|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect('/dashboard')->with('success', 'Welcome New User,!' . $request->input('name'));
    }
}
