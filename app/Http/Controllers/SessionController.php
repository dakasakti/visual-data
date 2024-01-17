<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
            return redirect('/database')->with('bisalogin', Auth::user()->name . ' Berhasil login');
        } else {
            return redirect('/sesi')->with('loginError', 'Login failed!');
        }
    }


    function logout()
    {
        try {
            Auth::logout();
            return redirect('/sesi')->with('berhasil', 'Logout berhasil silahkan login');
        } catch (\Exception $e) {
            Log::error('Error during logout: ' . $e->getMessage());
            return redirect('/database')->with('logout', 'Terjadi kesalahan saat logout');
        }
    }



    public function register()
    {
        return view('sesi.register', [
            'title' => 'Register',
            "active" => "Register",

        ]);
    }


    function create(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255|regex:/^[A-Z][a-z]+$/',
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
}
