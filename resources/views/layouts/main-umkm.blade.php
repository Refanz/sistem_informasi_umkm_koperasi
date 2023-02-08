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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('/css/umkm.css') }}" />
</head>

<body>

    <div class="umkm-content">
        @if(Request::routeIs('umkm'))
            @include('parts.umkm.header-umkm')
        @else
            @include('parts.umkm.sub-header-umkm')
        @endif    

        @yield('container')
    </div>



    


    <!-- JavaScript for Toggle Menu -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }

    </script>
</body>
</html>

