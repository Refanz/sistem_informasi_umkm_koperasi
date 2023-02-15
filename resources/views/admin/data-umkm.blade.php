@extends('layouts.main-admin')

@section('wrapper')

{{ $no = 1 }}

<div class="main-pages">
    <div class="container-fluid">

        <div class="row mb-2">
            <div class="col-12">
                <h3 class="fw-bold tb-title">Data UMKM</h3>
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <div class="col-12">
                <form action="/data-umkm" method="GET" class="inline-form">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" name="tahun_download" placeholder="Tahun Data" required>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-success">Download</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="card p-3 shadow">
                    <table id="tb-pelatihan" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama_pemilik</th>
                                <th>alamat_pemilik</th>
                                <th>nama_usaha</th>
                                <th>alamat_usaha</th>
                                <th>pengalaman_pelatihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_pemilik }}</td>
                                <td>{{ $data->alamat_pemilik }}</td>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $data->alamat_usaha }}</td>
                                <td>{{ $data->pengalaman_pelatihan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

