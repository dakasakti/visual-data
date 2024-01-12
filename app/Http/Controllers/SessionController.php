<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index()
    {
        return view('sesi.index', [
            'title' => 'Login'
        ]);
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password 
        ];

        if (Auth::attempt($infologin)) {
            dd('Login successful');
            return redirect('/database')->with('success', 'Berhasil login');
        } else {
            return redirect('/sesi')->with('loginError', 'Login failed!');
        }
    }
}
function logout()
{
    Auth::logout();
    return redirect('/sesi')->with('berhasil', 'Logout berhasil silahkan login');
}

function register()
{
    return view('sesi.register', [
        "title" => "Register",
        "active" => "Register",
    ]);
}


function create(Request $request)
{

    $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|min:3|max:255|unique:users',
        'email' => 'required|email:dns|unique:users',
        'password' => 'required|min:5|max:255'
    ]);

    $data = [
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ];
    User::create($data);

    $infologin = [
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ];

    return redirect('/sesi')->with('berhasil', 'Register berhasil silahkan login');
}
