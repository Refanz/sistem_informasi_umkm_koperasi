<?php

namespace App\Http\Controllers;

use App\Models\CapacityProduction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreCapacityProductionRequest;
use App\Http\Requests\UpdateCapacityProductionRequest;

class CapacityProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCapacityProductionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCapacityProductionRequest $request)
    {
        $kapasitas_produksi = new CapacityProduction();

        $request->validate([
            'tahun_kproduksi' => 'required',
            'jumlah_kproduksi' => 'required'
        ]);

        $uri = url()->previous();
        $uri_array = explode('/', $uri);
        $id_usaha = $uri_array[count($uri_array) - 1];

        $kapasitas_produksi->jumlah_kapasitas_produksi = $request->input('jumlah_kproduksi');
        $kapasitas_produksi->tahun = $request->input('tahun_kproduksi');
        $kapasitas_produksi->jobs_id = $id_usaha;
        $kapasitas_produksi->saveOrFail();

        return redirect()->back()->with('success', 'Data kapasitas produksi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CapacityProduction  $capacityProduction
     * @return \Illuminate\Http\Response
     */
    public function show(CapacityProduction $capacityProduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CapacityProduction  $capacityProduction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = CapacityProduction::where('id', $id)->get();

        $id_usaha = Request::query('id_usaha');

        return view('admin.data-detail-usaha.data-kproduksi.edit-data-kproduksi')->with([
            'user' => Auth::user(),
            'id_usaha' => $id_usaha,
            'data' => $data
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCapacityProductionRequest  $request
     * @param  \App\Models\CapacityProduction  $capacityProduction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCapacityProductionRequest $request, CapacityProduction $capacityProduction)
    {
        $request->validate([
           'tahun_kapasitas_produksi' => 'required',
           'jumlah_kapasitas_produksi' => 'required' 
        ]);

        $id_usaha = $request->input('id_usaha');

        $id = Route::getCurrentRoute()->parameter('id');

        CapacityProduction::where('id', $id)->update([
            'tahun' => $request->input('tahun_kapasitas_produksi'),
            'jumlah_kapasitas_produksi' => $request->input('jumlah_kapasitas_produksi')
        ]);

        return redirect()->route('detailUsaha', ['id' => $id_usaha])->with('success', 'Data kapasitas produksi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CapacityProduction  $capacityProduction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CapacityProduction::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data kapasitas produksi berhasil dihapus');
    }
}
