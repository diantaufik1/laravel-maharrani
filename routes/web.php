<?php

use App\Http\Controllers\BukumenuController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReservasidataController;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MenuController::class, 'index']);

Route::get('/profil', function () {
    return view('pengunjung/profil', [
        "title" => "Profil"
    ]);
});

Route::get('/maps', function () {
    return view('pengunjung/maps', [
        "title" => "Maps"
    ]);
});

Route::get('/reservasi', [ReservasiController::class, 'index']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'store']);

// Route::get('/reservasidata', function () {
//     return view('dashboard.index', [
//         'title' => 'Reservasi'
//     ]);
// })->middleware('auth');

Route::resource('/reservasidata', ReservasidataController::class);
// Route::get('/exportexcel', ReservasiExport::class, 'export');
// Route::get('/export/', [ReservasiController::class, 'export']);
// Route::get('users/export/', [ReservasiController::class, 'export']);
Route::get('export', [ExcelController::class, 'export']);

Route::resource('/bukumenudata', BukumenuController::class)->middleware('auth');
Route::post('/bukumenuu', [BukumenuController::class, 'urutan']);

Route::resource('/promo', PromoController::class)->middleware('auth');
Route::post('/promo1', [PromoController::class, 'urutan']);
