@extends('layouts.main-admin')

@section('wrapper')

<div class="main-pages">
    <div class="container-fluid">
        <div class="header-data">
            <div class="card p-1 shadow card-data">
                <div class="d-flex align-items-center px-4">
                    <div class="card-body text-end">
                        <h2 class="text-center fw-bold">EDIT DATA USAHA</h2>
                    </div>
                </div>
            </div>
        </div>

        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> {{ $errors->all()[0] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form class="row g-3" method="post" action="{{ route('editUsaha', ['id' => $data[0]->id]) }}">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Nama Usaha</label>
                    <input type="text" class="form-control" placeholder="" name="nama_usaha" required value="{{ $data[0]->nama_usaha }}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Bidang Usaha</label>
                    <input type="text" class="form-control" placeholder="" name="bidang_usaha" required value="{{ $data[0]->bidang_usaha }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Jenis Produk</label>
                    <input type="text" class="form-control" placeholder="" name="jenis_produk" required value="{{ $data[0]->jenis_produk }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Izin Usaha</label>
                    <input type="text" class="form-control" placeholder="" name="izin_usaha" required value="{{ $data[0]->izin_usaha }}"/>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="form-label">Alamat Tempat Usaha</label>
                    <textarea type="text" class="form-control" rows="6" name="alamat_usaha" required>{{ $data[0]->alamat_usaha }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kelurahan Tempat Usaha</label>
                    <input type="text" class="form-control" placeholder="" name="kelurahan_usaha" required value="{{ $data[0]->kelurahan_usaha }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kecamatan Tempat Usaha</label>
                    <input type="text" class="form-control" placeholder="" name="kecamatan_usaha" required value="{{ $data[0]->kecamatan_usaha }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">NIB/OSS</label>
                    <input type="text" class="form-control" placeholder="" name="nib" required value="{{ $data[0]->nib_oss }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">No. Pendataan UMKM</label>
                    <input type="text" class="form-control" placeholder="" name="no_pendataan_umkm" required value="{{ $data[0]->no_pendataan_umkm }}"/>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Permodalan Usaha</label>
                    <input type="text" class="form-control" placeholder="" name="permodalan_usaha" required value="{{ $data[0]->permodalan_usaha }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Cakupan Wilayah Pemasaran</label>
                    <input type="text" class="form-control" placeholder="" name="cakupan_wilayah_pemasaran" required value="{{ $data[0]->cakupan_wilayah_pemasaran }}"/>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Jenis Pemasaran</label>
                    <input type="text" class="form-control" placeholder="" name="jenis_pemasaran" required value="{{ $data[0]->jenis_pemasaran }}"/>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label class="form-label">Permasalahan yang Dihadapi</label>
                    <textarea type="text" class="form-control" rows="6" name="permasalahan_usaha" required>{{ $data[0]->permasalahan_usaha}}</textarea>
                </div>
            </div> 
            <div class="row mt-4">
                <div class="col-6 col-sm-5 col-md-3">
                    <button id="tambah-data-umkm" class="btn btn-primary" type="submit">Edit Data</button>
                </div>
                <div class="col-6 col-sm-5 col-md-3">
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

