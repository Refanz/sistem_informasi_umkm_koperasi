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
                                <th>nama_pemilik</th>
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
                                <td>{{ $data->nama_pemilik }}</td>
                                <td>{{ $data->pelatihan->pengalaman_pelatihan }}</td>
                                <td>{{ $data->pelatihan->usulan_pelatihan }}</td>
                                <td>{{ $data->pelatihan->created_at }}</td>
                                <td>{{ $data->pelatihan->updated_at }}</td>
                                <td>
                                    <a class="d-inline" href="{{ route('editPelatihan', ['id' => $data->id]) }}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-lg box-icon" aria-hidden="true"></i></a>
                                    <button class="btn btn-icon btn-link p-0 btn-a mt-0" onclick="showAlert2({{ $data->id }})">
                                        <i style="color: red" class="fa fa-trash fa-lg box-icon mb-2" aria-hidden="true"></i>
                                    </button>

                                    <form id="hapus-form-{{ $data->id }}" class="form-inline" action="{{ route('hapusPelatihan', ['id' => $data->id]) }}" method="post">
                                        @csrf
                                    </form>
                                </td>
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

