<?php

namespace App\Http\Controllers;

use App\Models\UserNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('layouts.profile', [
            'title' => 'Profile'
        ]);
    }

    public function update_profile(Request $request)
    {

        //cari id user siapa yang mau ganti photo/ email/ nama
        $user_id = Auth::user()->id;
        $user = UserNew::find($user_id);

        $request->validate([
            'images' => 'mimes:png,jpg,jpeg,svg',
            'email' => 'unique:users,email,' . $user_id,
        ]);


        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        //kalo user mau ganti photo if ini bakal jalan

        //bikin dulu nama defaultnya misalnya image
        if ($request->hasFile('images')) {
            //user udah  request nih otomatis namanya bakal default yang udah dikasih diatas
            $images = $request->file('images');
            // bikin variabel baru buat ganti nama image defaultnya (biar ga error kalo semuanya namanya sama) -> namanya diganti sesuai nama photo id usernya
            $ubah_nama_image = 'profile_image_' . $user_id . '.' . $images->getClientOriginalExtension();
            //image ini udah ada di folder public buat nyimpen semua foto
            $images->move(public_path('images'), $ubah_nama_image);
            $user->image = $ubah_nama_image;
        }

        $user->save();

        return redirect('/profile')->with('success', 'Profile berhasil diupdate');
    }
}
