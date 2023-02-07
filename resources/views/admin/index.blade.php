@extends('layouts.main-admin')

@section('wrapper')

<div class="main-pages">

    @include('parts.admin.search-admin')

    <div class="container-fluid">
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-md-6 col-lg-40">
                <div class="card p-2 shadow">
                    <div class="d-flex align-items-center px-4">
                        <i class="fa fa-eye float-start fa-3x py-auto" aria-hidden="true" style="color:#809EE0"></i>
                        <div class="card-body text-end">
                            <h2 class="card-title" style="color:#FB4141">56</h2>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-center fw-bold">Pengunjung Hari Ini</small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-40">
                <div class="card p-2 shadow">
                    <div class="d-flex align-items-center px-4">
                        <i class="fa fa-id-card-o fa-3x py-auto" aria-hidden="true" style="color:#809EE0"></i>
                        <div class="card-body text-end">
                            <h2 class="card-title" style="color:#FB4141">123.456</h2>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-start fw-bold">Jumlah Data UMKM Kota Semarang</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="charts">
            <div class="row g-3 mb-4">
                <div class="col-20 col-lg-30">
                    <div class="d-block rounded shadow bg-white p-3">
                        <canvas id="myChartOne"></canvas>
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-4">
                <div class="col-20 col-lg-30">
                    <div class="d-block rounded shadow bg-white p-3">
                        <canvas id="myChartTwo"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
