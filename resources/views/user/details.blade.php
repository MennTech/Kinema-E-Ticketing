@extends('user/body')

@section('content')
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <style>
        header{
            position: relative;
            z-index: 1020;
            background: white;
        }
        .narbar-expand-x1{
            flex-wrap: nowrap;
            justify-content: flex-start;
        }
        .container-fluid{
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-brand-item{
            width: 150px;
        }
        .avatar-img{
            width: 20%;
        }
        .gt-cover{
            position: absolute;
            background-size: cover;
            width: 100%;
            height: 55%;
            margin-top: -445px;
        }
        .gt-img-poster{
            border-radius: 15px;
            margin-top: 50px;
            width: 200px;
            height: 300px;
        }
        .gt-flex-container{
            width: 1520px;
            padding: 0 100px;
            margin: 0 auto;
            justify-content: space-evenly;
            flex-wrap: wrap;
            display: flex;
        }
        .gt-details{
            width: 880px;
        }
        h1{
            color: white;
        }
        .gt-items{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .gt-icon{
            border: 1px solid;
            color: white;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            border-radius: 50%;
            padding: 10px;
            box-sizing: border-box;
        }
        .list-group{
            margin-top: 445px;
            margin-left: 250px;
            width: 1000px;
        }
    </style>
</head>
<body style="background-color: #FFDFDF;">
    <!-- navbar -->
    <header class="navbar-light navbar-sticky header-static">
        <!-- Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-3 px-xl-5">
                <!-- Logo START -->
                <a class="navbar-brand" href="#">
                    <img class="light-mode-item navbar-brand-item" src="{{ asset('img/KINEMA-logo.png') }}" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">
                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">
                        <!-- Nav item 1 Home -->
                        <li class="nav-item">
                            <a href="{{ url('home') }}" class="nav-link">Home</a>
                        </li>

                        <!-- Nav item 2 Food -->
                        <li class="nav-item">
                            <a href="{{ url('food') }}" class="nav-link">Food</a>
                        </li>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative">
                                <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                                <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                    <i class="fas fa-search fs-6 "></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <!-- Profile START -->
                <div class="ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="{{ url('profile') }}" id="profile" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="" aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="{{ asset('img/profile.png') }}" alt="avatar">
                    </a>
                </div>
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Nav END -->
    </header>

    <!-- Main START -->
    <main class="gt-main">
        <div class="gt-page-wrapper">
            <!-- Main Header START -->
            <div class="gt-title-overview gt-style-1">
                <div class="gt-cover" style="background-image: url(&quot;https://asset.tix.id/wp-content/uploads/2023/09/wnpGCjmUJtbKAo8m2cRQ0Pcy519.jpg&quot;);">
                    <div class="gt-flex-container">
                        <div class="gt-poster">
                            <img class="gt-img-poster" width="300" height="441" src="{{ asset('img/sherina-poster.jpg') }}" 
                                class="attachment-noxe-title-poster-2 size-noxe-title-poster-2 gt-lazy-load loaded" alt="PETUALANGAN SHERINA 2" decoding="async" 
                                data-src="{{ asset('img/sherina-poster.jpg') }}" data-ll-status="loaded">
                        </div>
                        <!-- Details START -->
                        <div class="gt-details gt-part-1">
                            <h1>PETUALANGAN SHERINA 2</h1>
                            <div class="gt-mini-summary" style="color: white;">
                                <p>Genre: Musikal, Drama</p>
                                <p>Pemeran: Sherina Munaf, Derby Romeo, Isyana Saraswati, Randy Danistha, Kelly Tandiono, Ardit Erwandha</p>
                                <p>Sutradara: Riri Riza</p>
                                <p>Rating Usia: SU</p>
                                <p>SHERINA (Sherina Munaf) dan SADAM (Derby Romero), dua teman kecil yang lama terpisah, bertemu kembali di Kalimantan untuk pelepasliaran 
                                    orang utan. Reuni manis terhenti ketika anak orang utan bernama SAYU dicuri sekelompok orang.
                                </p>
                                <p>Sherina dan Sadam harus berusaha menemukan kembali kebersamaan, demi menyelamatkan Sayu dan juga kelangsungan persahabatan mereka 
                                    yang baru saja tumbuh kembali. Sebuah sekuel dari film legendaris, bernuansa musikal dengan sentuhan aksi petualangan.
                                </p>
                            </div>
                            <div class="gt-items">
                                <div class="gt-circular-items">
                                    <div class="gt-item gt-watch-trailer">
                                        <div class="gt-button gt-style-3 gt-dark">
                                            <a data-fancybox="" href="https://web3.21cineplex.com/movie-trailer/13PSA2.mp4">
                                            <div class="gt-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play">
                                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                                </svg>
                                            </div>
                                            <span>Watch the Trailer</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="gt-dotted-items" style="color:white">
                                <div class="gt-item gt-time">2h 6min</div>
                            </div>
                        </div>
                        <!-- Details END -->
                    </div>
                </div>
            </div>
            <!-- Main Header END -->
		    <ul class="list-group">
                <li class="list-group-item" style="border-color: #FFFFFF">
                    <div class="mall-name" style="display:block">
                        <a href="#" class="nav-link">PAKUWON MALL</a>
                    </div>
                    <div class="time-price" style="margin-top:10px;">
                        <div class="col-xs-7" style="text-align:left">25-10-2023</div>
                        <div class="col-xs-5" style="text-align-right">
                            <span class="p_price">Rp 35.000</span>
                        </div>
                        <p class="p_time">
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:5px; margin-top:15px" href="{{ url('seat') }}" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                12:15
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="{{ url('seat') }}" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                14:30
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="{{ url('seat') }}" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                16:45
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="{{ url('seat') }}" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                19:00
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="{{ url('seat') }}" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                21:15
                            </a>
                        </p>
                    </div>
                    <div class="time-price" style="margin-top:10px;">
                        <div class="col-xs-7" style="text-align:left">26-10-2023</div>
                        <div class="col-xs-5" style="text-align-right">
                            <span class="p_price">Rp 35.000</span>
                        </div>
                        <p class="p_time">
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:5px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                12:15
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                14:30
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                16:45
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                19:00
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                21:15
                            </a>
                        </p>
                    </div>
                    <div class="time-price" style="margin-top:10px;">
                        <div class="col-xs-7" style="text-align:left">27-10-2023</div>
                        <div class="col-xs-5" style="text-align-right">
                            <span class="p_price">Rp 35.000</span>
                        </div>
                        <p class="p_time">
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:5px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                12:15
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                14:30
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                16:45
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                19:00
                            </a>
                            <a class="btn btn-outline-primary div_schedule" style="border-color: #337ab7; font-size:14px; margin-left:10px; margin-top:15px" href="#" 
                                onclick="confirmDialog('sid=&amp;cinema_id=YGYSTUD&amp;movie_id=13PSA2&amp;date_show=25-10-2023&amp;time_show=18:45&amp;studio_id=4&amp;ticket_price=35000&amp;find_by=2');">
                                21:15
                            </a>
                        </p>
                    </div>
                </li>
            </ul>
		</div>
    </main>
    <!-- Main END -->

    <!-- (scripts and assets) -->
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection