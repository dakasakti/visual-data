<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/database', [DatabaseController::class,'index'])->name('database');
// untuk menampilkan data yang dipilih
Route::get('/database/{id}', [DatabaseController::class,'show', "title" => "Home"])->name('show');
// mengarahkan untuk menampilkan tampilan create
Route::get('/tambahdata', [DatabaseController::class,'tambahdata'])->name('tambahdata');
Route::get('/insertdata', [DatabaseController::class, 'insertdata'])->name('insertdata');
// untuk menyimpan data ke db
Route::post('/database', [DatabaseController::class,'store']);
// untuk menampilkan view form data edit
Route::get('/tampilkandata/{id}', [DatabaseController::class,'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [DatabaseController::class,'updatedata'])->name('updatedata');
// mengupdate data ke db
Route::put('/database/{id}', [DatabaseController::class,'update']);
// mendelete data
Route::get('/delete/{id}', [DatabaseController::class,'delete'])->name('delete');
Route::get('/diagram', [DatabaseController::class,'diagram'])->name('diagram');
//yajra datatable
Route::get('database/list', [DatabaseController::class, 'getDatabase'])->name('ajax');

// Route::get('/exportexcel' , [ExcelController::class, 'exportexcel'])->name('exportexcel');
// Route::post('/importexcel' , [ExcelController::class, 'importexcel'])->name('importexcel');

Route::get('/database-export', [ExcelController::class, 'export'])->name('database.export');
Route::post('/database-import', [ExcelController::class, 'import'])->name('database.import');


