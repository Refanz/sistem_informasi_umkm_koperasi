@extends('layouts.body')

@section('container')

<div class="row-1">
    <p id="text-login-1">Masuk</p>
    <p id="text-login-2">Sistem Informasi dan Pendaftaran Pelaku UMKM Kota Semarang</p>
</div>

<div class="row-2">
    <img src="{{ asset('/img/akun.png') }}" alt="akun">

    <div class="form-group-1">
        <form action="/login" method="post">
            @csrf
            <div class="input-group-1">
                <label  for="email">Email</label>
                <input id="email" type="text" name="email" width="250px">
            </div>
            <div class="input-group-2">
                <label  for="password">Password</label>
                <input id="password" type="password" name="password" width="250px">
            </div>
            <div class="row-4">
                <a href="#">Lupa Password?</a>
            </div>
            <button id="btn-login">Masuk</button>
        </form>
    </div>
</div>






@endsection

