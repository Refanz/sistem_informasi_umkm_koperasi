<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @if(Request::routeIs('umkm'))
        Home | UMKM
        @elseif(Request::routeIs('contact'))
        Contact | UMKM
        @elseif(Request::routeIs('about'))
        About | UMKM
        @elseif(Request::routeIs('registrasi'))
        Register | UMKM
        @endif
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap -->
    @if(Request::routeIs('registrasi'))
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('/css/umkm.css') }}" />
</head>

@if(Request::routeIs('registrasi'))
<body class="bg-regis">
    @else
    <body>
        @endif

        <div class="umkm-content">
            @if(Request::routeIs('umkm'))
            @include('parts.umkm.header-umkm')
            @else
            @include('parts.umkm.sub-header-umkm')
            @endif

            @yield('container')
        </div>

        @include('parts.umkm.footer-umkm')

        <!-- JavaScript for Toggle Menu -->
        <script>
            // JavaScript for Toggle Menu
            var navLinks = document.getElementById("navLinks");

            function showMenu() {
                navLinks.style.right = "0";
            }

            function hideMenu() {
                navLinks.style.right = "-200px";
            }

            // Button Reset
            const form = document.querySelector('form');
            form.querySelector('button[type="reset"]').addEventListener('click', (event) => {
                event.preventDefault();
                form.reset();
            });

        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('js/umkm/form.js') }}"></script>
    </body>
</html>

