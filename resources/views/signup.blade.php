<!DOCTYPE html>
<html lang= "en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar bg-body-tertiary" style="background-color: #FFFFFF;">
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <a class="navbar-brand col" href="#">
                        <img src="/images/kinema_logo.png" width="105" height="40">
                    </a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Masukkan Pencarian Anda">
                            <button type="button" class="btn btn-primary" style="font-weight: bold;">Cari</button>
                            <!-- <button type="button" class="btn primary" type="submit">Cari</button> -->
                        </form>

                    <!-- di dalemnya swipenya -->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" href="login.blade.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="signup.blade.php">Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="welcome.blade.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Tiket Anda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Pesan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </nav>
    </nav>

    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 650px;">
        <div class="card shadow" style="width: 410px;">
            <div class="card-body">
                <h4 class="text-center" style="padding: 10px; color: #80B3FF; font-weight: bold; font-size: 45px ">SIGN UP</h4>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="email" class="form-control" id="exampleInputName" placeholder= "Input Nama">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="password" class="form-control" id="exampleInputEmail" placeholder="Input Email">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail" placeholder="Input Password">
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                        <input type="password" class="form-control" id="exampleInputEmail" placeholder="Input No Telepon">
                        <!-- data-bs-toggle="tooltip" data-bs-title="Default tooltip" -->
                        <!-- <div id="signup" class= "form-text" href= "signup.blade.php">Belum punya akun? Klik disini</div>  -->
                    </div>
                    <a id="emailHelp" class="form-text" href="login.blade.php">Sudah buat akun? Log In</a>
                    <button type="login" class="btn btn-primary float-end">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
