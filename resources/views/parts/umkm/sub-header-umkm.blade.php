<section class="sub-header" style="background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url({{ asset('img/img-umkm/banner.jpg') }})" ">
    <nav>
        <a href=" /"><img src="{{ asset('img/img-umkm/logo.png') }}" /></a>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/registrasi">Pendaftaran</a></li>
            <li><a href="/contact">Kontak</a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    @if(Request::routeIs('registrasi'))
    <h1>Daftarkan Usaha Anda</h1>
    @elseif(Request::routeIs('contact'))
    <h1>Hubungi Kami</h1>
    @endif
    
</section> <!-- End Sub Header -->

