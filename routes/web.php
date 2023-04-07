<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\UsahaController;
use App\Models\UMKM;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/data-pemilik', [PemilikController::class, 'index'])->middleware('auth')->name('dataPemilik');
Route::post('/data-pemilik/hapus/{id}', [PemilikController::class , 'destroy'])->name('hapusPemilik');
Route::get('/data-pemilik/edit/{id}', [PemilikController::class , 'edit'])->middleware('auth')->name('editPemilik');
Route::post('/data-pemilik/edit/{id}', [PemilikController::class , 'update'])->name('editPemilik');

Route::get('/tambah-data-umkm', [UMKMController::class, 'create'])->middleware('auth');
Route::post('/tambah-data-umkm', [UMKMController::class, 'store']);

Route::get('/umkm', [UMKMController::class, 'index'])->withoutMiddleware('auth')->name('umkm');
Route::get('/registrasi', [UMKMController::class, 'registrasi'])->name('registrasi');
Route::get('/about', [UMKMController::class, 'about'])->name('about');
Route::get('/contact', [UMKMController::class, 'contact'])->name('contact');
Route::post('/tambah-umkm-user', [UMKMController::class, 'tambahUmkm'])->withoutMiddleware(['auth'])->name('tambahUmkmUser');

Route::get('/data-usaha', [UsahaController::class, 'index'])->middleware('auth')->name('dataUsaha');
Route::get('/data-usaha/detail/{id}', [UsahaController::class, 'detailDataUsaha'])->middleware('auth')->name('detailUsaha');
Route::post('/data-usaha/hapus/{id}', [UsahaController::class, 'destroy'])->middleware('auth')->name('hapusUsaha');
Route::get('/data-usaha/edit/{id}', [UsahaController::class, 'edit'])->middleware('auth')->name('editUsaha');
Route::post('/data-usaha/edit/{id}', [UsahaController::class, 'update'])->name('editUsaha');

Route::get('/data-pelatihan', [PelatihanController::class, 'index'])->middleware('auth')->name('dataPelatihan');
Route::get('/data-pelatihan/edit/{id}', [PelatihanController::class, 'edit'])->middleware('auth')->name('editPelatihan');
Route::post('/data-pelatihan/edit/{id}', [PelatihanController::class, 'update'])->name('editPelatihan');
Route::post('/data-pelatihan/hapus/{id}', [PelatihanController::class, 'destroy'])->name('hapusPelatihan');

Route::get('/data-download-umkm', [UMKMController::class, 'downloadUMKM'])->middleware('auth')->name('dataDownloadUMKM');
Route::get('/data-umkm', [UMKMController::class, 'exportToExcel'])->name('dataUMKM');

Route::get('/umkm/data-kelurahan', [UMKMController::class, 'getDataPemilik'])->middleware('auth');



