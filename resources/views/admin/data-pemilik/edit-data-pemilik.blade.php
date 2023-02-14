@extends('layouts.main-admin')

@section('wrapper')

<div class="main-pages">
    <div class="container-fluid">
        <div class="header-data">
            <div class="card p-1 shadow card-data">
                <div class="d-flex align-items-center px-4">
                    <div class="card-body text-end">
                        <h2 class="text-center fw-bold">EDIT DATA PEMILIK</h2>
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

        <form class="row g-3" method="post" action="{{ route('editPemilik', ['id' => $data[0]->id]) }}">
            @csrf
            <div class="col-md-6 ">
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_pemilik" placeholder="" required value="{{ $data[0]->nama_pemilik }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Sosial Media</label>
                    <input type="text" class="form-control" name="sosial_media" placeholder="" required  value="{{ $data[0]->sosial_media }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">No Hp</label>
                    <input type="text" class="form-control" name="no_telepon" placeholder="" required value="{{ $data[0]->no_telepon }}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan_pemilik" placeholder="" required value="{{ $data[0]->kelurahan_pemilik }}" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan_pemilik" placeholder="" required value="{{ $data[0]->kecamatan_pemilik }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="" required value="{{ $data[0]->email }}"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                    <select id="pendidikan" class="form-select" name="pendidikan_terakhir" required>
                        <option value=""> - </option>
                        <option value="S1">S1</option>
                        <option value="D3">D3</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SD">SD</option>
                    </select>
                </div>
            </div>
            <div class="col-md-8 mb-5">
                <div class="form-group">
                    <label class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" name="alamat_pemilik" rows="6" required>{{ $data[0]->alamat_pemilik }}</textarea>
                </div>
            </div>
            <div class="row">
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

