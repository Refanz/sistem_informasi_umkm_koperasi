<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index')->with([
            'user' => Auth::user(),
            'count' => Pemilik::count()
        ]);
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
        
    }

    public function tambahDataUMKM()
    {
        
    }
}
