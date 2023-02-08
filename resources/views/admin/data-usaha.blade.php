@extends('layouts.main-admin')

@section('wrapper')

<div class="main-pages">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <h3 class="fw-bold tb-title">Data Usaha UMKM</h3>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <a class="btn btn-primary" href="data-pelatihan/tambah-data-usaha">Tambah</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 ">
                <div class="card p-3 shadow">
                <table id="tb-usaha" class="table table-striped dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Pemilik</th>
                            <th>Nama Usaha</th>
                            <th>Bidang Usaha</th>
                            <th>Jenis Produk</th>
                            <th>Alamat</th>
                            <th>Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>NIB/OSS</th>
                            <th>No. Pendataan UMKM</th>
                            <th>Aset 2020</th>
                            <th>Aset 2021</th>
                            <th>Omset 2020</th>
                            <th>Omset 2021</th>
                            <th>Kapasitas Produksi 2020</th>
                            <th>Kapasitas Produksi 2021</th>
                            <th>Tenaga Kerja 2020</th>
                            <th>Tenaga Kerja 2021</th>
                            <th>Cakupan Wilayah Pemasaran</th>
                            <th>Jenis Pemasaran</th>
                            <th>Izin Usaha</th>
                            <th>Pemodalan Usaha</th>
                            <th>Permasalahan yang dihadapi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Yanto</td>
                        <td>Jamal MakeUp</td>
                        <td>Kuliner</td>
                        <td>Makanan</td>
                        <td>Tambakharjo RT 05/ RW 02</td>
                        <td>Tambakharjo</td>
                        <td>Semarang Barat</td>
                        <td>002233468697</td>
                        <td>002368942332</td>
                        <td>Rp5.000.000</td>
                        <td>Rp12.000.000</td>
                        <td>Rp15.000.000</td>
                        <td>Rp21.000.000</td>
                        <td>100Kg</td>
                        <td>100Kg</td>
                        <td>12</td>
                        <td>25</td>
                        <td>Dalam Kota, Nasional</td>
                        <td>Penjualan langsung, online</td>
                        <td>NIB/OSS, NPWP, PIRT</td>
                        <td>Modal Sendiri</td>
                        <td>Sulit mencari ruko kosong</td>

                        <td>
                            <a href="#tambahdata" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#hapusdata" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
                        </td>
                    </tbody>
                </table>
                </div>
            </div>

        </div>

        @endsection

