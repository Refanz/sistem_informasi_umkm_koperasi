<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StoreFundRequest;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\UpdateFundRequest;

class FundController extends Controller
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
     * @param  \App\Http\Requests\StoreFundRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFundRequest $request)
    {
        $omset = new Fund();

        $request->validate([
            'tahun_omset' => 'required',
            'jumlah_omset' => 'required'
        ]);

        $uri = url()->previous();
        $uri_array = explode('/', $uri);
        $id_usaha = $uri_array[count($uri_array) - 1];

        $omset->jumlah_modal = $request->input('jumlah_omset');
        $omset->tahun = $request->input('tahun_omset');
        $omset->jobs_id = $id_usaha;
        $omset->saveOrFail();

        return redirect()->back()->with('success', 'Data omset berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function show(Fund $fund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Fund::where('id', $id)->get();

        $id_usaha = Request::query('id_usaha');

        return view('admin.data-detail-usaha.data-omset.edit-data-omset')->with([
            'user' => Auth::user(),
            'id_usaha' => $id_usaha,
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFundRequest  $request
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFundRequest $request, Fund $fund)
    {
        $request->validate([
            'tahun_omset' => 'required',
            'jumlah_omset' => 'required'
        ]);

        $id_usaha = $request->input('id_usaha');

        $id = Route::getCurrentRoute()->parameter('id');

        Fund::where('id', $id)->update([
            'tahun' => $request->input('tahun_omset'),
            'jumlah_modal' => $request->input('jumlah_omset')
        ]);

        return redirect()->route('detailUsaha', ['id' => $id_usaha])->with('success', 'Data omset berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Fund::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Data omset berhasil dihapus');
    }
}
