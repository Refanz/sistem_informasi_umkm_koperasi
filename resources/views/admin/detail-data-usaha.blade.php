@extends('layouts.main-admin')

@section('wrapper')

<div class="main-pages">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-1">
                <a href="/data-usaha" data-toggle="modal"><i style="font-size: 40px" class="fa fa-long-arrow-left fa-lg box-icon" aria-hidden="true"></i></a>
            </div>
        </div>
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
                                <th>no</th>
                                <th>nama_usaha</th>
                                <th>jumlah_asset</th>
                                <th>tahun_asset</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @foreach($data->assets as $aset)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $aset->jumlah_asset }}</td>
                                <td>{{ $aset->tahun }}</td>
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
                                <th>no</th>
                                <th>nama_usaha</th>
                                <th>jumlah_omset</th>
                                <th>tahun_omset</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @foreach($data->funds as $omset)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $omset->jumlah_modal }}</td>
                                <td>{{ $omset->tahun }}</td>
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
                                <th>no</th>
                                <th>nama_usaha</th>
                                <th>jumlah_asset</th>
                                <th>tahun_asset</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @foreach($data->workers as $worker)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $worker->jumlah_pekerja }}</td>
                                <td>{{ $worker->tahun }}</td>
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
                                <th>no</th>
                                <th>nama_usaha</th>
                                <th>jumlah_asset</th>
                                <th>tahun_asset</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            @foreach($data->capacityProductions as $c_productions)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $c_productions->jumlah_kapasitas_produksi }}</td>
                                <td>{{ $c_productions->tahun }}</td>
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

