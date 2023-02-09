<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index')->with('user', Auth::user());
    }

    public function dataDownloadUMKM()
    {
        return view('admin.data-umkm')->with('user', Auth::user());
    }

    public function dataPelatihan()
    {
        return view('admin.data-pelatihan')->with('user', Auth::user());
    }

    public function dataUsaha()
    {
        return view('admin.data-usaha')->with('user', Auth::user());
    }

    public function tambahDataUMKM()
    {
        return view('admin.data-umkm.tambah-data-umkm')->with('user', Auth::user());
    }
}
