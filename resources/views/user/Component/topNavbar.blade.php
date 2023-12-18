<header class="sticky-top">
    <nav class="navbar navbar-expand-lg" style="background-color: #EFEFEF">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" >
                <img class="nav_logo"src="/img/kinema-copy.png" alt="" style="max-width: 120px">
            </a>
            <div class="navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-3"><a href="/" class="text-decoration-none text-primary-emphasis"><strong>Movie</strong></a></li>
                    <li class="nav-item px-3"><a href="/food" class="text-decoration-none text-primary-emphasis"><strong>Food</strong></a></li>
                    <li class="nav-item px-3"><a href="" class="text-decoration-none text-primary-emphasis"><strong>About</strong></a></li>
                </ul>
                @if (Auth::check())
                    <a href="/Profile" class="text-decoration-none d-flex justify-content-center align-items-center">
                        <p class="fw-semibold text-primary-emphasis mb-0 me-2">{{ Auth::user()->username }}</p>
                        <img src="/img/admin2.jpg" alt="" class="rounded-circle" style="max-width: 50px">
                    </a>
                @else
                    <a href="/login" class="btn btn-primary fw-bold"><i class="fa-solid fa-user"></i> Login</a>
                @endif
            </div>
        </div>
    </nav>
</header>