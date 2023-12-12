<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
     function showLoginForm()
    {
        return view('auth.login',[
            "title" => "login",
            "active" => "login",
        ]);
    }
   public function authenticate(Request $request) :RedirectResponse
{
    $credentials = $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }

    return back()->with('loginError', 'Login failed!');
}

}
