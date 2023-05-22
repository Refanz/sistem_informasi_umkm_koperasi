@extends('layouts.main-admin')

@section('wrapper')

<div class="main-pages">
    <div class="container-fluid">
        <div class="header-data">
            <div class="card p-1 shadow card-data">
                <div class="d-flex align-items-center px-4">
                    <div class="card-body text-end">
                        <h2 class="text-center fw-bold">EDIT DATA ASSET</h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> {{ $errors->all()[0] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif --}}

        <form class="row g-3 mt-2" method="post" action="{{ route('editAsset', ['id' => $data[0]->id]) }}">
            @csrf
            <input type="hidden" name="id_usaha" value="{{ $id_usaha }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Tahun Asset</label>
                        <input type="text" class="form-control" name="tahun_aset" required value="{{ $data[0]->tahun}}"></input>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Jumlah Asset</label>
                        <input type="text" class="form-control" name="jumlah_aset" value="{{ $data[0]->jumlah_asset }}" required></input>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5 col-sm-5 col-md-3">
                    <button style="width: 100%" id="edit-data-asset" class="btn btn-primary" type="submit">Edit Data</button>
                </div>
                <div class="col-6 col-sm-5 col-md-3">
                    <button class="btn btn-danger" type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

