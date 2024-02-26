<?php

namespace App\Http\Controllers;

use App\Models\UserNew;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function index()
    {
        return view('sesi.index', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $infologin = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($infologin)) {
            $user = Auth::user();

            if (Auth::user()->hasRole('admin')) {
                //
            }

            return redirect('/database')->with('bisalogin', $user->name . ' Berhasil login');
        }

        return redirect('/sesi')->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/sesi')->with('berhasil', 'Berhasil logout');
    }

    public function register()
    {
        return view('sesi.register', [
            'title' => 'Register',
            "active" => "Register",
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:255',
            'role' => 'required|in:user,admin'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ];

        $user = UserNew::create($data);

        $roleName = $request->input('role');
        $role = Role::where('name', $roleName)->first();

        if ($role) {
            $user->assignRole($role);
        }

        return redirect('/sesi')->with('berhasil', 'Register berhasil silahkan login');
    }
}
