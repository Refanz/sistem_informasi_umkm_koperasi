@extends('layouts.main-admin')

@section('wrapper')

{{ $no = 1 }}

<div class="main-pages">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <h3 class="fw-bold tb-title">Data Usaha UMKM</h3>
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
                    <table id="tb-usaha" class="table table-striped dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>no</th>
                                @foreach(array_slice($columns, 2) as $kolom)
                                <th>{{ $kolom }}</th>
                                @endforeach
                                <th>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                          
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $data->bidang_usaha }}</td>
                                <td>{{ $data->jenis_produk }}</td>
                                <td>{{ $data->nib_oss }}</td>
                                <td>{{ $data->no_pendataan_umkm }}</td>
                                <td>{{ $data->alamat_usaha }}</td>
                                <td>{{ $data->kelurahan_usaha }}</td>
                                <td>{{ $data->kecamatan_usaha }}</td>
                                <td>{{ $data->cakupan_wilayah_pemasaran }}</td>
                                <td>{{ $data->jenis_pemasaran }}</td>
                                <td>{{ $data->izin_usaha }}</td>
                                <td>{{ $data->permodalan_usaha }}</td>
                                <td>{{ $data->permasalahan_usaha }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->updated_at }}</td>
                                <td>
                                    <a href="{{ route('detailUsaha', ['id' => $data->id]) }}"  data-toggle="modal"><i style="color: green;" class="fa fa-info-circle fa-lg box-icon" aria-hidden="true"></i></a>
                                    <a class="d-inline" href="{{ route('editUsaha', ['id' => $data->id]) }}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-lg box-icon" aria-hidden="true"></i></a>
                                    <button class="btn btn-icon btn-link p-0 btn-a mt-0" onclick="showAlert2({{ $data->id }})">
                                        <i style="color: red" class="fa fa-trash fa-lg box-icon mb-2" aria-hidden="true"></i>
                                    </button>
                                    
                                    <form id="hapus-form-{{ $data->id }}" class="form-inline" action="{{ route('hapusUsaha', ['id' => $data->id]) }}" method="post">
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

