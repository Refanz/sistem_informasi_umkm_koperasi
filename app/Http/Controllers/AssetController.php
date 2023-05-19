<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use Illuminate\Support\Facades\Request;

class AssetController extends Controller
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
     * @param  \App\Http\Requests\StoreAssetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Asset::where('id', $id)->get();

        //$id_usaha = Route::getCurrentRoute()->parameter('id');

        $id_usaha = Request::query('id_usaha');

        return view('admin.data-detail-usaha.edit-data-aset')->with([
            'user' => Auth::user(),
            'id_usaha' => $id_usaha,
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetRequest  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetRequest $request, Asset $asset)
    {
        $request->validate([
            'tahun_aset' => 'required',
            'jumlah_aset' => 'required'
        ]);

        $id_usaha = $request->input('id_usaha');

        $id = Route::getCurrentRoute()->parameter('id');

        Asset::where('id', $id)->update([
            'tahun' => $request->input('tahun_aset'),
            'jumlah_asset' => $request->input('jumlah_aset')
        ]);

        return redirect()->route('detailUsaha', ['id' => $id_usaha])->with('success', 'Data asset berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Asset::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data asset berhasil dihapus');
    }
}
