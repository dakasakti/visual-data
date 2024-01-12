<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahDataController;

/*
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
|
| Web Routes
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    return 'Test route is working!';
});


Route::get('/', [HomeController::class, 'index']);


Route::get('/database', [DatabaseController::class, 'index'])->name('database')->middleware('isLogin');
// untuk menampilkan data yang dipilih
Route::get('/database/{id}', [DatabaseController::class, 'show', "title" => "Home"])->name('show');
// mengarahkan untuk menampilkan tampilan create
Route::get('/tambahdata', [TambahDataController::class, 'tambahdata'])->name('tambahdata');
Route::get('/tampilkan-create-form', [TambahDataController::class, 'tampilkanCreateForm']);
Route::post('/insertdata', [TambahDataController::class, 'insertdata'])->name('insertdata');

// untuk menyimpan data ke db
Route::post('/database', [DatabaseController::class, 'store']);
// untuk menampilkan view form data edit
Route::get('/tampilkandata/{id}', [DatabaseController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DatabaseController::class, 'updatedata'])->name('updatedata');

Route::put('/database/{id}', [DatabaseController::class, 'update']);

Route::get('/delete/{id}', [DatabaseController::class, 'delete'])->name('delete');

Route::get('/diagram', [DatabaseController::class, 'diagram'])->name('diagram');

Route::get('/database-export', [ExcelController::class, 'export'])->name('database.export');
Route::post('/database-Import', [ExcelController::class, 'import'])->name('database.import');

Route::get('sesi', [SessionController::class, 'index'])->middleware('isGuest');
Route::post('sesi/login', [SessionController::class, 'login'])->middleware('isGuest');
Route::get('sesi/logout', [SessionController::class, 'logout']);
Route::get('sesi/register', [SessionController::class, 'register'])->middleware('isGuest');
Route::post('sesi/create', [SessionController::class, 'create'])->middleware('isGuest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/database/search', [SearchController::class, 'search'])->name('search');
