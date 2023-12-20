<header class="sticky-top">
    <nav class="navbar navbar-expand-lg" style="background-color: #EFEFEF">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" >
                <img class="nav_logo"src="/img/kinema-copy.png" alt="" style="width: 105px">
            </a>
            <div class="navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-3"><a href="{{ route('home') }}" class="text-decoration-none text-primary-emphasis" style="font-size: 17px"><strong>Movie</strong></a></li>
                    <li class="nav-item px-3"><a href="{{ route('food') }}" class="text-decoration-none text-primary-emphasis" style="font-size: 17px"><strong>Food</strong></a></li>
                    <li class="nav-item px-3"><a href="{{ route('about') }}" class="text-decoration-none text-primary-emphasis" style="font-size: 17px"><strong>About</strong></a></li>
                </ul>
                @if (Auth::check())
                    <a href="{{ route('profile') }}" class="text-decoration-none d-flex justify-content-center align-items-center">
                        <p id="username" class="fw-bold text-primary-emphasis mb-0 me-2" style="font-size: 16px">{{ Auth::user()->username }}</p>
                        @if (Auth::user()->profile_picture == null)
                            <img src="{{ asset('/avatar/user2.jpg') }}" alt="..." style="width: 40px; border-radius: 50%; height: 40px">
                        @else
                            <img src="{{ asset('/avatar/'.Auth::user()->profile_picture) }}" alt="" style="width: 40px; border-radius: 50%; height: 40px">
                        @endif
                    </a>
                @else
                    <a href="/login" class="btn btn-primary fw-bold"><i class="fa-solid fa-user"></i> Login</a>
                @endif
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var usernameElement = document.getElementById("username");
    
            if (usernameElement) {
                var username = usernameElement.innerText;
    
                if (username.length > 6) {
                    usernameElement.style.overflow = "hidden";
                    usernameElement.style.whiteSpace = "nowrap";
                    usernameElement.style.textOverflow = "ellipsis";
                    usernameElement.style.maxWidth = "6ch";
                }
            }
        });
    </script>
</header>