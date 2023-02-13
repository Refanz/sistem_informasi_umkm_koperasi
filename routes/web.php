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
Route::get('/data-pelatihan', [PelatihanController::class, 'index'])->middleware('auth')->name('dataPelatihan');
Route::get('/data-usaha', [UsahaController::class, 'index'])->middleware('auth')->name('dataUsaha');
Route::get('/data-download-umkm', [DashboardController::class, 'dataDownloadUMKM'])->middleware('auth')->name('dataDownloadUMKM');
Route::get('/data-pemilik', [PemilikController::class, 'index'])->middleware('auth')->name('dataPemilik');

Route::get('/tambah-data-umkm', [UMKMController::class, 'create'])->middleware('auth');
Route::post('/tambah-data-umkm', [UMKMController::class, 'store']);
Route::get('/umkm', [UMKMController::class, 'index'])->name('umkm');
Route::get('/registrasi', [UMKMController::class, 'registrasi'])->name('registrasi');
Route::get('/about', [UMKMController::class, 'about'])->name('about');
Route::get('/contact', [UMKMController::class, 'contact'])->name('contact');


