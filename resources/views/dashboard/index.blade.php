@extends('layouts.body')

@section('container')

<div class="sidebar">

    <div class="r-1">

        <img src="{{ asset('/img/admin.png') }}" alt="">
        <div class="text-container">
            <p id="text-1">Selamat Datang</p>
            <p id="text-2">Admin!</p>
        </div>

    </div>

    <div class="sidebar-menu">
        <div class="r-2">
            <a href="#">Home</a>
        </div>
    </div>

</div>

@endsection
