@extends('layouts.main-admin')

@section('wrapper')

{{ $no = 1 }}

<div class="main-pages">
    <div class="container-fluid">

        <div class="row mb-2">
            <div class="col-12">
                <h3 class="fw-bold tb-title">Data Pelatihan UMKM</h3>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <a class="btn btn-primary" href="/tambah-data-umkm">Tambah</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="card p-3 shadow">
                    <table id="tb-pelatihan" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>no</th>
                                @foreach(array_slice($columns, 2) as $kolom)
                                <th>{{ $kolom }}</th>
                                @endforeach
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->pengalaman_pelatihan }}</td>
                                <td>{{ $data->usulan_pelatihan }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->updated_at }}</td>
                                <td></td>
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

