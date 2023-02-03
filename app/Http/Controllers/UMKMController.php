<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use App\Http\Requests\StoreUMKMRequest;
use App\Http\Requests\UpdateUMKMRequest;

class UMKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('umkm.index');
    }

    public function registrasi()
    {
        return view('umkm.registrasi')->with('active', 'registrasi');
    }

    public function contact()
    {
        return view('umkm.contact')->with('active', 'contact');
    }

    public function about()
    {
        return view('umkm.about')->with('active', 'about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUMKMRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUMKMRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UMKM  $uMKM
     * @return \Illuminate\Http\Response
     */
    public function show(UMKM $uMKM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UMKM  $uMKM
     * @return \Illuminate\Http\Response
     */
    public function edit(UMKM $uMKM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUMKMRequest  $request
     * @param  \App\Models\UMKM  $uMKM
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUMKMRequest $request, UMKM $uMKM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UMKM  $uMKM
     * @return \Illuminate\Http\Response
     */
    public function destroy(UMKM $uMKM)
    {
        //
    }
}
