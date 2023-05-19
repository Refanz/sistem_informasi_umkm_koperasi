<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Usaha;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUsahaRequest;
use App\Http\Requests\UpdateUsahaRequest;
use App\Models\Pemilik;
use Illuminate\Support\Facades\Route;

class UsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usaha = new Usaha();

        // $data_usaha = DB::table('jobs')
        //                 ->join('assets', 'jobs.id', '=', 'assets.jobs_id')
        //                 ->join('funds', 'jobs.id', '=', 'funds.jobs_id')
        //                 ->join('workers', 'jobs.id', '=', 'workers.jobs_id')
        //                 ->join('capacity_productions', 'jobs.id', '=', 'capacity_productions.jobs_id')
        //                 ->select('jobs.*', 'assets.*',
        //             )->get();

        // $dataUsaha = Usaha::with(['assets', 'funds'])->get();

        // $data_usaha = Usaha::all();

        //$data_pemilik_usaha = Pemilik::with(['usaha'])->get();

        $data_pemilik_usaha = Pemilik::join('jobs', 'owners.id', '=', 'jobs.owner_id')
                        ->select('owners.nama_pemilik', 'jobs.*')
                        ->get();

        return view('admin.data-usaha')->with([
            'user' => Auth::user(),
            'columns' => Helper::getCountKolom($usaha->getTable()),
            'datas' => $data_pemilik_usaha
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
     * @param  \App\Http\Requests\StoreUsahaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsahaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function show(Usaha $usaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Usaha::where('id', $id)->get();

        return view('admin.data-usaha.edit-data-usaha')->with([
            'user' => Auth::user(),
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsahaRequest  $request
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsahaRequest $request, Usaha $usaha)
    {
        $request->validate([
            'nama_usaha' => 'required',
            'bidang_usaha' => 'required',
            'jenis_produk' => 'required',
            'izin_usaha' => 'required',
            'alamat_usaha' => 'required',
            'kelurahan_usaha' => 'required',
            'kecamatan_usaha' => 'required',
            'nib' => 'required',
            'no_pendataan_umkm' => 'required',
            'permodalan_usaha' => 'required',
            'cakupan_wilayah_pemasaran' => 'required',
            'jenis_pemasaran' => 'required',
            'permasalahan_usaha' => 'required',
        ]);

        $id_usaha = Route::getCurrentRoute()->parameter('id');

        Usaha::where('id', $id_usaha)->update([
            'nama_usaha' => $request->input('nama_usaha'),
            'bidang_usaha' => $request->input('bidang_usaha'),
            'jenis_produk' => $request->input('jenis_produk'),
            'nib_oss' => $request->input('nib'),
            'no_pendataan_umkm' => $request->input('no_pendataan_umkm'),
            'alamat_usaha' => $request->input('alamat_usaha'),
            'kelurahan_usaha' => $request->input('kelurahan_usaha'),
            'kecamatan_usaha' => $request->input('kecamatan_usaha'),
            'cakupan_wilayah_pemasaran' => $request->input('cakupan_wilayah_pemasaran'),
            'jenis_pemasaran' => $request->input('jenis_pemasaran'),
            'izin_usaha' => $request->input('izin_usaha'),
            'permodalan_usaha' => $request->input('permodalan_usaha'),
            'permasalahan_usaha' => $request->input('permasalahan_usaha')
        ]);

        return redirect()->route('dataUsaha')->with('success', 'Data usaha berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Usaha::findOrFail($id);
        $data->delete();

        return redirect()->route('dataUsaha')->with('success', 'Data usaha berhasil dihapus');
    }

    public function detailDataUsaha($id)
    {
        // $data = Usaha::join('assets', 'jobs.id', '=', 'assets.jobs_id')
        //             ->join('funds', 'jobs.id', '=', 'funds.jobs_id')
        //             ->select('jobs.nama_usaha', 'assets.*', 'funds.*')
        //             ->where('jobs.id', $id)
        //             ->distinct()
        //             ->get();

        $id_usaha = Route::getCurrentRoute()->parameter('id');

        $datas = Usaha::with(['assets', 'funds', 'workers', 'capacityProductions'])->where('id', $id)->get();

        return view('admin.detail-data-usaha')->with([
            'user' => Auth::user(),
            'id_usaha' => $id_usaha,
            'datas' => $datas
        ]);
    }
}
