<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function showRegistrationForm() 
    {
        return view('auth.register',[
            "title" => "Register",
            "active" => "Register",
        ]);
    }

    public function store(Request $request)
    {

       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] =bcrypt($validatedData['password']);
        $validatedData['password'] =Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/login')->with('berhasil', 'Registration successful! Please login');
    }

}
