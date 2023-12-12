<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel database yang digunakan untuk model User (jika berbeda dari "users")
    protected $table = 'users';

    // Kolom yang dapat diisi massal (fillable) secara aman
    // protected $fillable = [
    //     'name', 'email','password', 
    // ];

    protected $guarded = ['id'];

    // Kolom yang harus disembunyikan (hidden) ketika di-serialized
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Mutator untuk menghash password sebelum menyimpannya
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
