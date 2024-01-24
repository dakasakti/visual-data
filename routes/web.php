<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahDataController;
use App\Http\Controllers\UpdateContoller;
use Illuminate\Queue\Connectors\DatabaseConnector;

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



Route::middleware(['isLogin'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::post('/database', [DatabaseController::class, 'store']);
    
    Route::get('/database', [DatabaseController::class, 'index'])->name('database');
    Route::get('/database/{id}', [DatabaseController::class, 'show', "title" => "Home"])->name('show');

    // tambah data
    Route::get('/tambahdata', [TambahDataController::class, 'tambahdata'])->name('tambahdata');
    Route::get('/tampilkan-create-form', [TambahDataController::class, 'tampilkanCreateForm']);
    Route::post('/insertdata', [TambahDataController::class, 'insertdata'])->name('insertdata');


    // untuk update
    Route::get('/tampilkandata/{id}', [UpdateContoller::class, 'tampilkandata'])->name('tampilkandata');
    Route::post('/updatedata/{id}', [UpdateContoller::class, 'updatedata'])->name('updatedata');
    Route::put('/database/{id}', [DatabaseController::class, 'update']);
    
    Route::get('/database-export', [ExcelController::class, 'export'])->name('database.export');
    Route::post('/database-Import', [ExcelController::class, 'import'])->name('database.import');
    

    Route::get('/delete/{id}', [DatabaseController::class, 'delete'])->name('delete');

    Route::get('/diagram', [DatabaseController::class, 'diagram'])->name('diagram');

});


Route::middleware(['isGuest'])->group(function(){

    Route::get('sesi', [SessionController::class, 'index']);
    Route::post('sesi/login', [SessionController::class, 'login']);
    Route::get('sesi/logout', [SessionController::class, 'logout']);
    Route::get('sesi/register', [SessionController::class, 'register'])->name('register');
    Route::post('sesi/create', [SessionController::class, 'create']);
});



Route::get('/filter-data', [DatabaseController::class, 'filter'])->name('filter');
