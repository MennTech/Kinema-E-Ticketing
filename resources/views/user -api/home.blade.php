<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

    </script>

    <style>
        .card-img-top {
            width: 50%; 
            border-radius: 15px; 
        }

        .carousel-inner img {
            width: 45%; 
        }
    </style>
</head>

<body style="background-color: #EFEFEF;">
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
                        <nav class="navbar bg-body-tertiary" style="background-color: #FFFFFF;">
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

    <!-- fotoo -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/image1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/image2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/image3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="col-md-4">
        <h2 class="mt-5" style="padding: 10px;"><strong>Welcome, Gojo Satoru</strong></span></h2>
            <select id="inputState" class="form-select" style="float: right;">
                <option selected>Pilih Lokasi Anda</option>
                <option>KINEMA Galeria Mall Jogja</option>
            </select>
    </div>

    <div class= "col-md-4">
        <h2 class="mt-5" style="padding: 10px;"><strong>Sedang Tayang</strong></h2>
            <div style="overflow-x: scroll; white-space: nowrap; width: 100vw; display: flex;">
                <img src="/images/movie1.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie2.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie3.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie4.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie5.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie6.png" class="card-img-top" style="margin-right: 1%;">
            </div>

        <h2 class="mt-5" style="padding: 10px;"><strong>Coming Soon</strong></h2>
            <div style="overflow-x: scroll; white-space: nowrap; width: 100vw; display: flex;">
                <img src="/images/movie7.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie8.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie9.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie10.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie11.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie12.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie13.png" class="card-img-top" style="margin-right: 1%;">
            </div>
    </div>

</body>
</html>
