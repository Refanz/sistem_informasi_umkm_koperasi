<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\UMKM;
use App\Models\Pemilik;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUMKMRequest;
use App\Http\Requests\UpdateUMKMRequest;
use App\Models\Asset;
use App\Models\Fund;
use App\Models\Pelatihan;
use App\Models\Usaha;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('admin.data-umkm.tambah-data-umkm')->with('user', Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUMKMRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUMKMRequest $request)
    {
        
        $request->validate([

            //Data Pemilik
            'nama_pemilik' => 'required',
            'sosial_media' => 'required',
            'no_telepon' => 'required',
            'kelurahan_pemilik' => 'required',
            'kecamatan_pemilik' => 'required',
            'email' => 'required',
            'pendidikan_terakhir' => 'required',
            'alamat_pemilik' => 'required',

            //Data Usaha
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
            'cakupan_wilayah_pemasaran'=> 'required',
            'jenis_pemasaran' => 'required',
            'permasalahan_usaha' => 'required',

            //Aset

            //Tenaga Kerja

            //Modal

            //Kapasitas Produksi

            //Data Pelatihan
            'pengalaman_pelatihan' => 'required',
            'usulan_pelatihan' => 'required'
        ]);

        $pemilik = new Pemilik();

        $dataPemilik = Helper::checkTable($pemilik);
        $idPemilik = Helper::getLastIdFromTable($pemilik);

        if (is_null($dataPemilik)) {
            $pemilik->id = 1;
        }

        $pemilik->id = $idPemilik;
        $pemilik->nama_pemilik = $request->input('nama_pemilik');
        $pemilik->alamat_pemilik = $request->input('alamat_pemilik');
        $pemilik->kelurahan_pemilik = $request->input('kelurahan_pemilik');
        $pemilik->kecamatan_pemilik = $request->input('kecamatan_pemilik');
        $pemilik->no_telepon = $request->input('no_telepon');
        $pemilik->email = $request->input('email');
        $pemilik->sosial_media = $request->input('sosial_media');
        $pemilik->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $pemilik->save();

        $usaha = new Usaha();

        $dataUsaha = Helper::checkTable($usaha);
        $idUsaha = Helper::getLastIdFromTable($usaha);

        if (is_null($dataUsaha)) {
            $usaha->id = 1;
        }

        $usaha->id = $idUsaha;
        $usaha->owner_id = $idPemilik;
        $usaha->nama_usaha = $request->input('nama_usaha');
        $usaha->bidang_usaha = $request->input('bidang_usaha');
        $usaha->jenis_produk = $request->input('jenis_produk');
        $usaha->nib_oss = $request->input('nib');
        $usaha->no_pendataan_umkm  = $request->input('no_pendataan_umkm');
        $usaha->alamat_usaha  = $request->input('alamat_usaha');
        $usaha->kelurahan_usaha = $request->input('kelurahan_usaha');
        $usaha->kecamatan_usaha = $request->input('kecamatan_usaha');
        $usaha->cakupan_wilayah_pemasaran = $request->input('cakupan_wilayah_pemasaran');
        $usaha->jenis_pemasaran = $request->input('jenis_pemasaran');
        $usaha->izin_usaha = $request->input('izin_usaha');
        $usaha->permodalan_usaha = $request->input('permodalan_usaha');
        $usaha->permasalahan_usaha = $request->input('permasalahan_usaha');
        $pemilik->usaha()->save($usaha);

        $pelatihan = new Pelatihan();
        $pelatihan->owner_id = $idPemilik;
        $pelatihan->pengalaman_pelatihan = $request->input('pengalaman_pelatihan');
        $pelatihan->usulan_pelatihan = $request->input('usulan_pelatihan');
        $pemilik->pelatihan()->save($pelatihan);

        $asset = new Asset();
        $jumlah_aset = $request->input('aset');
        $tahun_aset = $request->input('tahun_aset');
        $data_asset = [];
        $timestamp = now();

        foreach ($jumlah_aset as $index => $aset) {
            $tahun = $tahun_aset[$index];

            $data_asset[] = [
                'jobs_id' => $idUsaha,
                'jumlah_asset' => $aset,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }

        Asset::insert($data_asset);

        return redirect('/tambah-data-umkm')->with('success', 'Data berhasil ditambah');
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
