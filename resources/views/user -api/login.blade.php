<!DOCTYPE html>
<html lang= "en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        .navbar-nav {
            display: flex;
            align-items: center;
            margin-right: 10px; /* Sesuaikan jarak antara Login dan Sign Up */
        }
        .nav-item {
            margin-right: 1px; /* Sesuaikan jarak antara Login dan Sign Up */
        }
    </style>

</head>

<body style="background-color: #EFEFEF;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #FFFFFF;">
        <div class="container-fluid">
            <a class="navbar-brand col" href="#">
                <img src="/images/kinema_logo.png" width="105" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item text-left">
                        <a class="nav-link active" aria-current="page" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item text-left">
                        <a class="nav-link active" aria-current="page" href="{{ url('signup') }}">Sign Up</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Masukkan Pencarian Anda">
                    <button type="button" class="btn btn-primary" style="font-weight: bold;">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- card login -->
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 650px;">
        <div class="card shadow" style="width: 410px;">
            <div class="card-body">
                <h4 class="text-center" style="padding: 10px; color: #80B3FF; font-weight: bold; font-size: 45px ">LOGIN</h4>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Username or Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder= "Input Username or Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Input Password">
                    </div>

                    <a id="emailHelp" class="form-text" href="#">Lupa Password?</a>
                    <p><a id="emailHelp" class="form-text" href="{{  url('signup')  }}">Belum buat Akun? Sign Up</a></p>
                    <button type="login" class="btn btn-primary float-end">
                        <a href= "{{  url('home')  }}" style="text-decoration: none; color: white;">Login</a>
                    </button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>
