<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi Dinas Koperasi </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon/favicon.ico') }}" />
    
    <link rel="stylesheet" href="{{ asset('/css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    
    @if(Request::routeIs('login'))
        @include('parts.navbar-login')
    @else
        @include('parts.navbar-dashboard')
    @endif        

    <div class="container">
        @yield('container')
    </div>

</body>
</html>
