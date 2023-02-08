<nav class="navbar navbar-expand-md py-1">
    <div class="container-fluid">
        <button class="btn btn-default" id="btn-slider" type="button">
            <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand me-auto" href="/dashboard"><b>DASHBOARD</b></a>
        <ul class="nav ms-auto">
            <li class="nav-item dropstart">
                <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('/img/admin.png') }}" alt="user" class="img-user">
                </a>
                <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                    <div class="d-flex p-3 border-bottom mb-2">
                        <img src="{{ asset('/img/admin.png') }}" alt="user" class="img-user me-2">
                        <div class="d-block">
                            <p class="fw-bold m-0 lh-3">{{ $user->name }}</p>
                            <small>{{ $user->email }}</small>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profil.html">
                        <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                    </a>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-link dropdown-item">
                            <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
