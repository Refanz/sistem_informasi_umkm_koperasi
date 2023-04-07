@extends('layouts.main-login')

@section('container')

<p class="fw-bold text-center mt-4" style="font-size: 20px;">MASUK</p>
<p class="fw-bold text-center" style="font-size: 15px;">SISTEM INFORMASI DAN PENDAFTARAN PELAKU UMKM KOTA SEMARANG</p>

@isset($login_error)
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
            <i class="bi bi-exclamation-triangle-fill" style="font-size: 13px"></i>
            <div style="margin-left: 10px; font-size: 13px">
                Email/Password yang anda masukkan salah!
            </div>
                <button style="font-size: 10px" type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endisset

<div class="card m-auto mb-3 rounded-4 border-0" style="width: 340px; height: 350px; background: #EBF0F6">
    <div class="card-body">
        <div class="text-center">
            <img src="{{ asset('/img/akun.png') }}" alt="akun" width="65px" height="65px">
        </div>

        <form class="row p-5" action="/login" method="post">
            @csrf
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-sm rounded-3" id="email" placeholder="" name="email" required>
            </div>
            <div class="col-md-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control form-control-sm rounded-3" id="password" placeholder="" name="password" required>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-primary btn-sm" type="submit" style="width: 125px">Masuk</button>
            </div>
        </form>
    </div>
</div>
{{-- <div class="row-1">
    <p id="text-login-1">Masuk</p>
    <p id="text-login-2">Sistem Informasi dan Pendaftaran Pelaku UMKM Kota Semarang</p>
</div>

<div class="row-2">
    <img src="{{ asset('/img/akun.png') }}" alt="akun">

<div class="form-group-1">
    <form action="/login" method="post">
        @csrf
        <div class="input-group-1">
            <label for="email">Email</label>
            <input id="email" type="text" name="email" width="250px" placeholder="Email" required>
        </div>
        <div class="input-group-2">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" width="250px" placeholder="Password" required>
        </div>
        <button id="btn-login">Masuk</button>
    </form>
</div>
</div> --}}

@endsection

