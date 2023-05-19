@extends('layouts.main-admin')

@section('wrapper')


<div class="main-pages">
    <div class="container-fluid">
        {{-- <div class="row mb-2">
            <div class="col-1">
                <a href="/data-usaha" data-toggle="modal"><i style="font-size: 40px" class="fa fa-long-arrow-left fa-lg box-icon" aria-hidden="true"></i></a>
            </div>
        </div> --}}
        <div class="row mb-2">
            <div class="col-12">
                <h3 class="fw-bold tb-title">Detail Data Usaha</h3>
            </div>
        </div>

        {{-- Detail Asset --}}
        <div class="row mb-2">
            <h4>Data Asset</h4>
        </div>
        <div class="row mb-4">
            <div class="col-12 ">
                <div class="card p-3 shadow">
                    <table id="tb-asset" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>nama_usaha</th>
                                <th>jumlah_asset</th>
                                <th>tahun_asset</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @foreach($data->assets as $aset)
                            <tr>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $aset->jumlah_asset }}</td>
                                <td>{{ $aset->tahun }}</td>
                                <td>
                                    <a class="d-inline" href="{{ route('editAsset', ['id' => $aset->id, 'id_usaha' => $id_usaha]) }}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-lg box-icon" aria-hidden="true"></i></a>
                                    <button class="btn btn-icon btn-link p-0 btn-a mt-0" onclick="showAlert3('asset', {{ $aset->id }})">
                                        <i style="color: red" class="fa fa-trash fa-lg box-icon mb-2" aria-hidden="true"></i>
                                    </button>

                                    <form id="hapus-asset-{{ $aset->id }}" class="form-inline" action="{{ route('hapusAsset', ['id' => $aset->id]) }}" method="post">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Detail Omset --}}
        <div class="row mb-2">
            <h4>Data Omset</h4>
        </div>
        <div class="row mt-2 mb-4">
            <div class="col-12 ">
                <div class="card p-3 shadow">
                    <table id="tb-omset" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>nama_usaha</th>
                                <th>jumlah_omset</th>
                                <th>tahun_omset</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @foreach($data->funds as $omset)
                            <tr>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $omset->jumlah_modal }}</td>
                                <td>{{ $omset->tahun }}</td>
                                <td>
                                    <a class="d-inline" href="{{ route('editOmset', ['id' => $omset->id, 'id_usaha' => $id_usaha]) }}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-lg box-icon" aria-hidden="true"></i></a>
                                    <button class="btn btn-icon btn-link p-0 btn-a mt-0" onclick="showAlert3('omset', {{ $omset->id }})">
                                        <i style="color: red" class="fa fa-trash fa-lg box-icon mb-2" aria-hidden="true"></i>
                                    </button>

                                    <form id="hapus-omset-{{ $omset->id }}" class="form-inline" action="{{ route('hapusOmset', ['id' => $omset->id]) }}" method="post">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Detail Tenaga Kerja --}}
        <div class="row mb-2">
            <h4>Data Tenaga Kerja</h4>
        </div>
        <div class="row mt-2 mb-4">
            <div class="col-12 ">
                <div class="card p-3 shadow">
                    <table id="tb-tenaga-kerja" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>nama_usaha</th>
                                <th>jumlah_tenaga_kerja</th>
                                <th>tahun_tenaga_kerja</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @foreach($data->workers as $worker)
                            <tr>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $worker->jumlah_pekerja }}</td>
                                <td>{{ $worker->tahun }}</td>
                                <td>
                                    <a class="d-inline" href="{{ route('editTkerja', ['id' => $worker->id, 'id_usaha' => $id_usaha]) }}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-lg box-icon" aria-hidden="true"></i></a>
                                    <button class="btn btn-icon btn-link p-0 btn-a mt-0" onclick="showAlert3('tkerja', {{ $worker->id }})">
                                        <i style="color: red" class="fa fa-trash fa-lg box-icon mb-2" aria-hidden="true"></i>
                                    </button>

                                    <form id="hapus-tkerja-{{ $worker->id }}" class="form-inline" action="{{ route('hapusTkerja', ['id' => $worker->id]) }}" method="post">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Detail Kapasitas Produksi --}}
        <div class="row mb-2">
            <h4>Data Kapasitas Produksi</h4>
        </div>
        <div class="row mt-2 mb-4">
            <div class="col-12 ">
                <div class="card p-3 shadow">
                    <table id="tb-kapasitas-produksi" class="table table-striped nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>nama_usaha</th>
                                <th>jumlah_kproduksi</th>
                                <th>tahun_kproduksi</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @foreach($data->capacityProductions as $c_productions)
                            <tr>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $c_productions->jumlah_kapasitas_produksi }}</td>
                                <td>{{ $c_productions->tahun }}</td>
                                <td>
                                    <a class="d-inline" href="{{ route('editKproduksi', ['id' => $c_productions->id, 'id_usaha' => $id_usaha]) }}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-lg box-icon" aria-hidden="true"></i></a>
                                    <button class="btn btn-icon btn-link p-0 btn-a mt-0" onclick="showAlert3('kproduksi', {{ $c_productions->id }})">
                                        <i style="color: red" class="fa fa-trash fa-lg box-icon mb-2" aria-hidden="true"></i>
                                    </button>

                                    <form id="hapus-kproduksi-{{ $c_productions->id }}" class="form-inline" action="{{ route('hapusKproduksi', ['id' => $c_productions->id]) }}" method="post">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

