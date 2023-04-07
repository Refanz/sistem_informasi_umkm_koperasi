<section class="sub-header">
    <nav>
        <a href="/umkm"><img src="{{ asset('/img/img-umkm/logo.png') }}" /></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="/umkm">HOME</a></li>
                <li><a href="/registrasi">PENDAFTARAN</a></li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1 style="text-transform: uppercase">
        {{ $active }}
    </h1>
</section>
