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
                                <th>nama_pemilik</th>
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
                                <td>{{ $data->nama_pemilik }}</td>
                                <td>{{ $data->usaha->nama_usaha }}</td>
                                <td>{{ $data->usaha->bidang_usaha }}</td>
                                <td>{{ $data->usaha->jenis_produk }}</td>
                                <td>{{ $data->usaha->nib_oss }}</td>
                                <td>{{ $data->usaha->no_pendataan_umkm }}</td>
                                <td>{{ $data->usaha->alamat_usaha }}</td>
                                <td>{{ $data->usaha->kelurahan_usaha }}</td>
                                <td>{{ $data->usaha->kecamatan_usaha }}</td>
                                <td>{{ $data->usaha->cakupan_wilayah_pemasaran }}</td>
                                <td>{{ $data->usaha->jenis_pemasaran }}</td>
                                <td>{{ $data->usaha->izin_usaha }}</td>
                                <td>{{ $data->usaha->permodalan_usaha }}</td>
                                <td>{{ $data->usaha->permasalahan_usaha }}</td>
                                <td>{{ $data->usaha->created_at }}</td>
                                <td>{{ $data->usaha->updated_at }}</td>
                                <td>
                                    <a href="{{ route('detailUsaha', ['id' => $data->usaha->id]) }}"  data-toggle="modal"><i style="color: green;" class="fa fa-info-circle fa-lg box-icon" aria-hidden="true"></i></a>
                                    <a class="d-inline" href="{{ route('editUsaha', ['id' => $data->usaha->id]) }}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-lg box-icon" aria-hidden="true"></i></a>
                                    <button class="btn btn-icon btn-link p-0 btn-a mt-0" onclick="showAlert2({{ $data->usaha->id }})">
                                        <i style="color: red" class="fa fa-trash fa-lg box-icon mb-2" aria-hidden="true"></i>
                                    </button>
                                    
                                    <form id="hapus-form-{{ $data->usaha->id }}" class="form-inline" action="{{ route('hapusUsaha', ['id' => $data->id]) }}" method="post">
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

