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

        <form class="row g-3" method="post" action="{{ route('editPelatihan', ['id' => $data[0]->id]) }}">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pelatihan yang Pernah Diikuti</label>
                    <textarea type="text" class="form-control" rows="6" name="pengalaman_pelatihan" required>{{ $data[0]->pengalaman_pelatihan}}</textarea>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label class="form-label">Usulan Pelatihan</label>
                    <textarea type="text" class="form-control" name="usulan_pelatihan" rows="6" required>{{ $data[0]->usulan_pelatihan }}</textarea>
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

