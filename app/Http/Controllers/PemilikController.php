<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Pemilik;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePemilikRequest;
use App\Http\Requests\UpdatePemilikRequest;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $pemilik = new Pemilik();

        $dataPemilik = Pemilik::all();

        return view('admin.data-pemilik')->with([
            'user'=> Auth::user(),
            'columns' => Helper::getCountKolom($pemilik->getTable()),
            'datas' => $dataPemilik
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePemilikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemilikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function show(Pemilik $pemilik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemilik $pemilik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemilikRequest  $request
     * @param  \App\Models\Pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemilikRequest $request, Pemilik $pemilik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemilik  $pemilik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemilik $pemilik)
    {
        //
    }
}
