<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UMKMController;
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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('data-pemilik', [DashboardController::class, 'dataPemilik'])->middleware('auth')->name('dataPemilik');
Route::get('data-pelatihan', [DashboardController::class, 'dataPelatihan'])->middleware('auth')->name('dataPelatihan');
Route::get('data-usaha', [DashboardController::class, 'dataUsaha'])->middleware('auth')->name('dataUsaha');

Route::get('/umkm', [UMKMController::class, 'index'])->name('umkm');
Route::get('/registrasi', [UMKMController::class, 'registrasi'])->name('registrasi');
Route::get('/about', [UMKMController::class, 'about'])->name('about');
Route::get('/contact', [UMKMController::class, 'contact'])->name('contact');


