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
}
