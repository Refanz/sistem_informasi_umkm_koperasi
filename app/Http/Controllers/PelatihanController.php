<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePelatihanRequest;
use App\Http\Requests\UpdatePelatihanRequest;
use Illuminate\Support\Facades\Route;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pelatihan = new Pelatihan;

        return view('admin.data-pelatihan')->with([
            'user' => Auth::user(),
            'columns' => Helper::getCountKolom($pelatihan->getTable()),
            'datas' => $pelatihan->all()
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
     * @param  \App\Http\Requests\StorePelatihanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePelatihanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pelatihan::where('id', $id)->get();

        return view('admin.data-pelatihan.edit-data-pelatihan')->with([
            'user' => Auth::user(),
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelatihanRequest  $request
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePelatihanRequest $request, Pelatihan $pelatihan)
    {
        $request->validate([
            'pengalaman_pelatihan' => 'required',
            'usulan_pelatihan' => 'required'
        ]);

        $id_pelatihan = Route::getCurrentRoute()->parameter('id');

        Pelatihan::where('id', $id_pelatihan)->update([
            'pengalaman_pelatihan' => $request->input('pengalaman_pelatihan'),
            'usulan_pelatihan' => $request->input('usulan_pelatihan')
        ]);

        return redirect()->route('dataPelatihan')->with('success', 'Data pelatihan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pelatihan::findOrFail($id);
        $data->delete();

        return redirect()->route('dataPelatihan')->with('success', 'Data pelatihan berhasil dihapus');
    }
}
