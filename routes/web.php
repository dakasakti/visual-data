<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'index']);

Route::get('/database', [DatabaseController::class, 'index'])->name('database');
// untuk menampilkan data yang dipilih
Route::get('/database/{id}', [DatabaseController::class, 'show', "title" => "Home"])->name('show');
// mengarahkan untuk menampilkan tampilan create
Route::get('/tambahdata', [TambahDataController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [TambahDataController::class, 'insertdata'])->name('insertdata');

// untuk menyimpan data ke db
Route::post('/database', [DatabaseController::class, 'store']);
// untuk menampilkan view form data edit
Route::get('/tampilkandata/{id}', [DatabaseController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DatabaseController::class, 'updatedata'])->name('updatedata');
// mengupdate data ke db
Route::put('/database/{id}', [DatabaseController::class, 'update']);
// mendelete data
Route::get('/delete/{id}', [DatabaseController::class, 'delete'])->name('delete');
Route::get('/diagram', [DatabaseController::class, 'diagram'])->name('diagram');

Route::get('/database-export', [ExcelController::class, 'export'])->name('database.export');
Route::post('/database-Import', [ExcelController::class, 'import'])->name('database.import');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

// Menampilkan formulir pendaftaran
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
// Menangani pendaftaran
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('home');
 });