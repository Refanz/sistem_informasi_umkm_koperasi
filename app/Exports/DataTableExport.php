<?php

namespace App\Exports;

use App\Models\Umkm;
use App\Models\Pemilik;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataTableExport implements FromCollection,  WithMapping, WithHeadings
{
    
    use Exportable;

    // public function query()
    // {
    //     return Pemilik::query()
    //                     ->join('jobs', 'owners.id', '=', 'jobs.owner_id')
    //                     ->select('owners.*', 'jobs.*')
    //                     ->get();
    // }

    private $tahun;

    public function __construct($tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        // return Pemilik::join('jobs', 'owners.id', '=', 'jobs.owner_id')
        //                     ->join('trainings', 'owners.id', '=', 'trainings.owner_id')
        //                     ->join('funds', 'jobs.id', '=', 'funds.jobs_id')
        //                     ->join('assets', 'jobs.id', '=', 'assets.jobs_id')
        //                     ->join('workers', 'jobs.id', '=', 'workers.jobs_id')
        //                     ->join('capacity_productions', 'jobs.id', '=', 'capacity_productions.jobs_id')
        //                     ->where('assets.tahun', '=', '2020')
        //                     ->get();

        // return DB::table('owners')
        //                     ->join('jobs', 'owners.id', '=', 'jobs.owner_id')
        //                     ->join('trainings', 'owners.id', '=', 'trainings.owner_id')
        //                     ->join('funds', 'jobs.id', '=', 'funds.jobs_id')
        //                     ->join('assets', 'jobs.id', '=', 'assets.jobs_id')
        //                     ->join('workers', 'jobs.id', '=', 'workers.jobs_id')
        //                     ->join('capacity_productions', 'jobs.id', '=', 'capacity_productions.jobs_id')
        //                     ->select('owners.*', 'jobs.*', 'trainings.*', 'funds.*', 'assets.*', 'workers.*', 'capacity_productions.*')
        //                     ->where('assets.tahun', '=', '2020')
        //                     ->get();

        $data = Pemilik::join('jobs', 'owners.id', '=', 'jobs.owner_id')
                            ->join('trainings', 'owners.id', '=', 'trainings.owner_id')
                            ->join('funds', 'jobs.id', '=', 'funds.jobs_id')
                            ->join('assets', 'jobs.id', '=', 'assets.jobs_id')
                            ->join('workers', 'jobs.id', '=', 'workers.jobs_id')
                            ->join('capacity_productions', 'jobs.id', '=', 'capacity_productions.jobs_id')
                            ->where('funds.tahun', '=', $this->tahun)
                            ->where('assets.tahun', '=', $this->tahun)
                            ->where('workers.tahun', '=', $this->tahun)
                            ->where('capacity_productions.tahun', '=', $this->tahun)
                            ->get();

        return $data;
    }

    public function map($umkm):array
    {
        return [
            $umkm->nama_pemilik,
            $umkm->alamat_pemilik,
            $umkm->kelurahan_pemilik,
            $umkm->kecamatan_pemilik,
            $umkm->no_telepon,
            $umkm->email,
            $umkm->sosial_media,
            $umkm->pendidikan_terakhir,

            $umkm->nama_usaha,
            $umkm->bidang_usaha,
            $umkm->jenis_produk,
            $umkm->nib_oss,
            $umkm->no_pendataan_umkm,
            $umkm->alamat_usaha,
            $umkm->kelurahan_usaha,
            $umkm->kecamatan_usaha,
            $umkm->cakupan_wilayah_pemasaran,
            $umkm->jenis_pemasaran,
            $umkm->izin_usaha,
            $umkm->permodalan_usaha,
            $umkm->permasalahan_usaha,

            $umkm->jumlah_asset,
            $umkm->tahun,

            $umkm->jumlah_modal,
            $umkm->tahun,

            $umkm->jumlah_kapasitas_produksi,
            $umkm->tahun,

            $umkm->jumlah_pekerja,
            $umkm->tahun,

            $umkm->pengalaman_pelatihan,
            $umkm->usulan_pelatihan,
        ];
    }

    public function headings():array
    {
        return [
            'Nama Pemilik',
            'Alamat Pemilik',
            'Kelurahan Pemilik',
            'Kecamatan Pemilik',
            'No Telepon',
            'Email',
            'Sosial Media',
            'Pendidikan Terakhir',

            'Nama Usaha',
            'Bidang Usaha',
            'Jenis Produk',
            'NIB (OSS)',
            'No Pendataan UMKM',
            'Alamat Usaha',
            'Kelurahan Usaha',
            'Kecamatan Usaha',
            'Cakupan Wilayah Pemasaran',
            'Jenis Pemasaran',
            'Izin Usaha',
            'Permodalan Usaha',
            'Permasalahan Usaha',

            'Asset',
            'Tahun Asset',

            'Omset',
            'Tahun Omset',

            'Kapasitas Produksi',
            'Tahun Kapasitas Produksi',

            'Tenaga Pekerja',
            'Tahun Jumlah Tenaga Kerja',

            'Pengalaman Pelatihan',
            'Usulan Pelatihan',
        ];
    }
    
}
