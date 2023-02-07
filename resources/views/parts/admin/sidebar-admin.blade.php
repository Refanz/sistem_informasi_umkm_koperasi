<div class="slider" id="sliders">
    <div class="slider-head">
        <div class="d-block pt-4 pb-3 px-3">
            <center>
                <img src="{{ asset('/img/admin.png') }}" alt="user" class="slider-img-user mb-2">
                <p class="fw-bold mb-0 lh-1 text-white">{{ $user->name }}</p>
                <small class="text-white">{{ $user->email }}</small>
            </center>
        </div>
    </div>
    <div class="slider-body px-1">
        <nav class="nav flex-column">
            <a class="nav-link px-3 active" href="/dashboard">
                <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Dashboard
            </a>
            <a class="nav-link px-3" href="/data-pemilik">
                <i class="fa fa-address-card fa-lg box-icon" href="#" aria-hidden="true"></i>Data Pemilik
            </a>
            <a class="nav-link px-3" href="/data-usaha">
                <i class="fa fa-bar-chart fa-lg box-icon" aria-hidden="true"></i>Data Usaha
            </a>
            <a class="nav-link px-3" href="/data-pelatihan">
                <i class="fa fa-calendar fa-lg box-icon" aria-hidden="true"></i>Data Pelatihan
            </a>
            <a class="nav-link px-3" href="/data-umkm">
                <i class="fa fa-download fa-lg box-icon" aria-hidden="true"></i>Download Data UMKM
            </a>
        </nav>
    </div>
</div>
