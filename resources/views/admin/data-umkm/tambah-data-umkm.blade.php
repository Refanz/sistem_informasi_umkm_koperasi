@extends('layouts.main-admin')

@section('wrapper')


<div class="main-pages">
    <div class="container-fluid">

        <div class="header-data">
            <div class="card p-1 shadow card-data">
                <div class="d-flex align-items-center px-4">
                    <div class="card-body text-end">
                        <h2 class="text-center fw-bold">DATA UMKM</h2>
                    </div>
                </div>
            </div>
        </div>

        <form class="row g-3" method="post" action="/tambah-data-umkm">

            {{-- Data Diri --}}
            <h3>Data Diri</h3>

            <div class="col-md-6 ">
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Sosial Media</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">No Hp</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                    <select id="pendidikan" class="form-select">
                        <option> - </option>
                        <option>S1</option>
                        <option>D3</option>
                        <option>SMA</option>
                        <option>SMP</option>
                        <option>SD</option>
                    </select>
                </div>
            </div>
            <div class="col-md-7 mb-5">
                <div class="form-group">
                    <label class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>

            {{-- Data Usaha --}}
            <h3>Data Usaha</h3>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Nama Usaha</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            {{-- <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Aset (2020)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Aset (2021)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div> --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Bidang Usaha</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div id="omset">
                <div class="row-omset" style="display: inline-flex" id = "row-0">
                    <div class="col-md-4 me-2">
                        <div class="form-group">
                            <label class="form-label">Omset</label>
                            <input type="text" name="omset[]" class="form-control" placeholder="" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Tahun Omset</label>
                            <input type="number" nama="tahun_omset[]" class="form-control" placeholder="" />
                        </div>
                    </div>
                    <div class="col-md-1 pad-40">
                        <i class="fa fa-plus fa-lg box-icon" href="#"  onclick="tambahFieldOmset()"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Jenis Produk</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Kapasitas Produk (2020)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Kapasitas Produk (2021)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">NIB/OSS</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Tenaga Kerja (2020)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Tenaga Kerja (2021)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">No. Pendaftaran UMKM</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Izin Usaha</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label">Pemodalan Usaha</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Cakupan Wilayah Pemasaran</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Jenis Pemasaran</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Alamat Tempat Usaha</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>

            <div class="col-md-6 mb-5">
                <div class="form-group">
                    <label class="form-label">Permasalahan yang Dihadapi</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>

            {{-- Data Pelatihan --}}
            <h3>Data Pelatihan</h3>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pelatihan yang Pernah Diikuti</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label class="form-label">Usulan Pelatihan</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>
            <div class="col-5 col-sm-5 col-md-2">
                <button id="tambah-data-umkm" class="btn btn-primary" type="submit">Tambah Data</button>
            </div>
            <div class="col-5 col-sm-5 col-md-2">
                <button class="btn btn-danger" type="reset">Reset</button>
            </div>
        </form>
    </div>
</div>

@endsection

