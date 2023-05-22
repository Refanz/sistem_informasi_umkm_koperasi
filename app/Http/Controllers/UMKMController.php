<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use App\Models\UMKM;
use App\Models\Asset;
use App\Models\Usaha;
use App\Models\Worker;
use App\Helpers\Helper;
use App\Models\Pemilik;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Exports\DataTableExport;
use App\Models\CapacityProduction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreUMKMRequest;
use App\Http\Requests\UpdateUMKMRequest;
use Exception;
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
        return view('umkm.registrasi')->with('active', 'pendaftaran');
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
            'cakupan_wilayah_pemasaran' => 'required',
            'jenis_pemasaran' => 'required',
            'permasalahan_usaha' => 'required',

            //Aset
            'aset' => 'required',
            'tahun_aset' => 'required',

            //Modal
            'omset' => 'required',
            'tahun_omset' => 'required',

            //Tenaga Kerja
            'tenaga_kerja' => 'required',
            'tahun_tenaga_kerja' => 'required',

            //Kapasitas Produksi
            'kapasitas_produksi' => 'required',
            'tahun_kapasitas_produksi' => 'required',

            //Data Pelatihan
            'pengalaman_pelatihan' => 'required',
            'usulan_pelatihan' => 'required'
        ]);

        //Data Pemilik
        $pemilik = new Pemilik();

        $dataPemilik = Helper::checkTable($pemilik);
        $id_pemilik = Helper::getLastIdFromTable($pemilik);

        if (is_null($dataPemilik)) {
            $pemilik->id = 1;
        }

        $pemilik->id = $id_pemilik;
        $pemilik->nama_pemilik = $request->input('nama_pemilik');
        $pemilik->alamat_pemilik = $request->input('alamat_pemilik');
        $pemilik->kelurahan_pemilik = $request->input('kelurahan_pemilik');
        $pemilik->kecamatan_pemilik = $request->input('kecamatan_pemilik');
        $pemilik->no_telepon = $request->input('no_telepon');
        $pemilik->email = $request->input('email');
        $pemilik->sosial_media = $request->input('sosial_media');
        $pemilik->pendidikan_terakhir = $request->input('pendidikan_terakhir');


        //Data Usaha
        $usaha = new Usaha();

        $data_usaha = Helper::checkTable($usaha);
        $id_usaha = Helper::getLastIdFromTable($usaha);

        if (is_null($data_usaha)) {
            $usaha->id = 1;
        }

        $usaha->id = $id_usaha;
        $usaha->owner_id = $id_pemilik;
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


        //Data Pelatihan
        $pelatihan = new Pelatihan();
        $pelatihan->owner_id = $id_pemilik;
        $pelatihan->pengalaman_pelatihan = $request->input('pengalaman_pelatihan');
        $pelatihan->usulan_pelatihan = $request->input('usulan_pelatihan');



        // Data Asset
        $asset = new Asset();
        $jumlah_aset = $request->input('aset');
        $tahun_aset = $request->input('tahun_aset');
        $data_asset = [];
        $timestamp = now();

        foreach ($jumlah_aset as $index => $aset) {
            $tahun = $tahun_aset[$index];

            $data_asset[] = [
                'jobs_id' => $id_usaha,
                'jumlah_asset' => $aset,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }



        //Data Omset
        $omset = new Fund();
        $jumlah_omset = $request->input('omset');
        $tahun_omset = $request->input('tahun_omset');
        $data_omset = [];

        foreach ($jumlah_omset as $index => $omset) {
            $tahun = $tahun_omset[$index];

            $data_omset[] = [
                'jobs_id' => $id_usaha,
                'jumlah_modal' => $omset,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }



        //Data Kapasitas Produksi
        $kapasitas_produksi = new CapacityProduction();
        $jumlah_kapasitas_produksi = $request->input('kapasitas_produksi');
        $tahun_kapasitas_produksi = $request->input('tahun_kapasitas_produksi');
        $data_kapasitas_produksi = [];

        foreach ($jumlah_kapasitas_produksi as $index => $kproduk) {
            $tahun = $tahun_kapasitas_produksi[$index];

            $data_kapasitas_produksi[] = [
                'jobs_id' => $id_usaha,
                'jumlah_kapasitas_produksi' => $kproduk,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }



        //Data Tenaga Kerja
        $tenaga_kerja = new Worker();
        $jumlah_tenaga_kerja = $request->input('tenaga_kerja');
        $tahun_tenaga_kerja = $request->input('tahun_tenaga_kerja');
        $data_tenaga_kerja = [];

        foreach ($jumlah_tenaga_kerja as $index => $tkerja) {
            $tahun = $tahun_tenaga_kerja[$index];

            $data_tenaga_kerja[] = [
                'jobs_id' => $id_usaha,
                'jumlah_pekerja' => $tkerja,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }

        try {
            $pemilik->save();
            $pemilik->usaha()->save($usaha);
            $pemilik->pelatihan()->save($pelatihan);
            $usaha->assets()->insert($data_asset);
            $usaha->funds()->insert($data_omset);
            $usaha->capacityProductions()->insert($data_kapasitas_produksi);
            $usaha->workers()->insert($data_tenaga_kerja);

            return redirect('/tambah-data-umkm')->with('success', 'Data UMKM berhasil ditambah');
        } catch (Exception $e) {
            return redirect('/tambah-data-umkm')->with('errors', $e->getMessage());
        }
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

    public function downloadUMKM()
    {
        //$datas = Pemilik::with(['usaha', 'pelatihan'])->get();

        $datas = Pemilik::join('jobs', 'owners.id', '=', 'jobs.owner_id')
            ->join('trainings', 'owners.id', '=', 'trainings.owner_id')
            ->select('owners.*', 'jobs.*', 'trainings.*')
            ->get();

        return view('admin.data-umkm')->with([
            'user' => Auth::user(),
            'datas' => $datas
        ]);
    }

    public function exportToExcel(Request $request)
    {
        // return redirect()->route('dataDownloadUMKM')->with('tahun', $request->tahun_download);
        $tahun_download = $request->input('tahun_download');

        return Excel::download(new DataTableExport($tahun_download), 'data-dinkop-' . now() . '.xlsx');
    }

    public function getDataPemilik()
    {
        // $data_kelurahan = Pemilik::select('kelurahan_pemilik')
        //                             ->distinct()
        //                             ->get();

        $data_kelurahan = Pemilik::select('kelurahan_pemilik', DB::raw('count(*) as total'))
            ->groupBy('kelurahan_pemilik')
            ->get();

        $data_kecamatan = Pemilik::select('kecamatan_pemilik', DB::raw('count(*) as total'))
            ->groupBy('kecamatan_pemilik')
            ->get();

        return response()->json([
            'data_kelurahan' => $data_kelurahan,
            'data_kecamatan' => $data_kecamatan,
        ]);
    }

    public function tambahUmkm(StoreUMKMRequest $request)
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
            'cakupan_wilayah_pemasaran' => 'required',
            'jenis_pemasaran' => 'required',
            'permasalahan_usaha' => 'required',

            //Aset
            'aset' => 'required',
            'tahun_aset' => 'required',

            //Modal
            'omset' => 'required',
            'tahun_omset' => 'required',

            //Tenaga Kerja
            'tenaga_kerja' => 'required',
            'tahun_tenaga_kerja' => 'required',

            //Kapasitas Produksi
            'kapasitas_produksi' => 'required',
            'tahun_kapasitas_produksi' => 'required',

            //Data Pelatihan
            'pengalaman_pelatihan' => 'required',
            'usulan_pelatihan' => 'required'
        ]);

        //Data Pemilik
        $pemilik = new Pemilik();

        $dataPemilik = Helper::checkTable($pemilik);
        $id_pemilik = Helper::getLastIdFromTable($pemilik);

        if (is_null($dataPemilik)) {
            $pemilik->id = 1;
        }

        $pemilik->id = $id_pemilik;
        $pemilik->nama_pemilik = $request->input('nama_pemilik');
        $pemilik->alamat_pemilik = $request->input('alamat_pemilik');
        $pemilik->kelurahan_pemilik = $request->input('kelurahan_pemilik');
        $pemilik->kecamatan_pemilik = $request->input('kecamatan_pemilik');
        $pemilik->no_telepon = $request->input('no_telepon');
        $pemilik->email = $request->input('email');
        $pemilik->sosial_media = $request->input('sosial_media');
        $pemilik->pendidikan_terakhir = $request->input('pendidikan_terakhir');


        //Data Usaha
        $usaha = new Usaha();

        $data_usaha = Helper::checkTable($usaha);
        $id_usaha = Helper::getLastIdFromTable($usaha);

        if (is_null($data_usaha)) {
            $usaha->id = 1;
        }

        $usaha->id = $id_usaha;
        $usaha->owner_id = $id_pemilik;
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


        //Data Pelatihan
        $pelatihan = new Pelatihan();
        $pelatihan->owner_id = $id_pemilik;
        $pelatihan->pengalaman_pelatihan = $request->input('pengalaman_pelatihan');
        $pelatihan->usulan_pelatihan = $request->input('usulan_pelatihan');



        // Data Asset
        $asset = new Asset();
        $jumlah_aset = $request->input('aset');
        $tahun_aset = $request->input('tahun_aset');
        $data_asset = [];
        $timestamp = now();

        foreach ($jumlah_aset as $index => $aset) {
            $tahun = $tahun_aset[$index];

            $data_asset[] = [
                'jobs_id' => $id_usaha,
                'jumlah_asset' => $aset,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }



        //Data Omset
        $omset = new Fund();
        $jumlah_omset = $request->input('omset');
        $tahun_omset = $request->input('tahun_omset');
        $data_omset = [];

        foreach ($jumlah_omset as $index => $omset) {
            $tahun = $tahun_omset[$index];

            $data_omset[] = [
                'jobs_id' => $id_usaha,
                'jumlah_modal' => $omset,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }



        //Data Kapasitas Produksi
        $kapasitas_produksi = new CapacityProduction();
        $jumlah_kapasitas_produksi = $request->input('kapasitas_produksi');
        $tahun_kapasitas_produksi = $request->input('tahun_kapasitas_produksi');
        $data_kapasitas_produksi = [];

        foreach ($jumlah_kapasitas_produksi as $index => $kproduk) {
            $tahun = $tahun_kapasitas_produksi[$index];

            $data_kapasitas_produksi[] = [
                'jobs_id' => $id_usaha,
                'jumlah_kapasitas_produksi' => $kproduk,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }



        //Data Tenaga Kerja
        $tenaga_kerja = new Worker();
        $jumlah_tenaga_kerja = $request->input('tenaga_kerja');
        $tahun_tenaga_kerja = $request->input('tahun_tenaga_kerja');
        $data_tenaga_kerja = [];

        foreach ($jumlah_tenaga_kerja as $index => $tkerja) {
            $tahun = $tahun_tenaga_kerja[$index];

            $data_tenaga_kerja[] = [
                'jobs_id' => $id_usaha,
                'jumlah_pekerja' => $tkerja,
                'tahun' => $tahun,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ];
        }

        try {
            $pemilik->save();
            $pemilik->usaha()->save($usaha);
            $pemilik->pelatihan()->save($pelatihan);
            $usaha->assets()->insert($data_asset);
            $usaha->funds()->insert($data_omset);
            $usaha->capacityProductions()->insert($data_kapasitas_produksi);
            $usaha->workers()->insert($data_tenaga_kerja);

            return redirect('/registrasi')->with('sukses', 'Data UMKM berhasil ditambah');
        } catch (Exception $e) {
            return redirect('/registrasi')->with('gagal', $e->getMessage());
        }
    }
}
