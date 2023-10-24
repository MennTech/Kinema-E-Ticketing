<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <style>
        .header{
            background-color: white;
            height: 20%;
            position: fixed;
        }
        .flex-container-full{
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
        }
        .menu{
            margin-right: 20px;
            margin-top: 10px;
            display: flex;
        }
        img{
            vertical-align: middle;
        }
        li{
            margin-left: 15px;
            margin-top: 9px;
            display: flex;
        }
        .cover{
            width: 100%;
            height: 55%;
            position: absolute;
        }
        .poster img{
            border-radius: 15px;
        }
        h1{
            color: white;
        }
        p{
            color: white;
            max-width: 1000px;
        }
        .poster{
            margin-top: 90px;
            margin-left: 50px;
        }
        .details{
            margin-top: 10px;
            margin-left: 50px;
        }
        .items{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin: 40px -10px -10px;
        }
        .trailers-items{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin: -7px;
            position: relative;
        }
        .icon{
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
        span{
            margin-left: 50px;
        }
        table{
            align: center;
        }
    </style>
</head>
<body style="background-color: #FFDFDF;">
    <!-- navbar -->
    <nav class="header">
        <div class="flex-container-full">
            <div class="item-group">
                <div class="item-logo">
                    <img width="146" height="100" src="{{ asset('img/KINEMA-logo.png') }}" alt="Logo">
                </div>
            </div>
            <ul class="menu">
                <li><a href="{{ url('welcome') }}">Beranda</a></li>
                <li><a href="{{ url('food') }}">Food</a></li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Input" aria-label="Search">
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                <ul class="profile">
                    <li><a href="{{ url('profile') }}"></a></li>
                </ul>
            </button>
        </div>
    </nav>

    <main class="main">
        <div class="page-wrapper">
            <div class="title-overview">
                <div class="cover" style="background-image: url(&quot;https://asset.tix.id/wp-content/uploads/2023/09/wnpGCjmUJtbKAo8m2cRQ0Pcy519.jpg&quot;);">
                    <div class="d-flex justify-content-evenly">
                        <div class="poster">
                        <img width="210" height="300" src="{{ asset('img/sherina-poster.jpg') }}"
                                 class="attachment-noxe-title-poster-2 size-noxe-title-poster-2 gt-lazy-load loaded" alt="PETUALANGAN SHERINA 2"
                                 decoding="async" data-src="{{ asset('img/sherina-poster.jpg') }}" data-ll-status="loaded">
                        </div>
                        <div class="details">
                            <h1>PETUALANGAN SHERINA 2</h1>
                            <div class="information">
                                <p>Genre: Musikal</p>
                                <p>Sutradara: Riri Riza</p>
                                <p>Rating Usia: SU</p>
                            </div>
                            <div class="synopsis">
                                <p>SHERINA (Sherina Munaf) dan SADAM (Derby Romero), dua teman kecil yang lama terpisah, bertemu kembali di Kalimantan untuk pelepasliaran orang utan. 
                                    Reuni manis terhenti ketika anak orang utan bernama SAYU dicuri sekelompok orang.</p>
                                <p>Sherina dan Sadam harus berusaha menemukan kembali kebersamaan, demi menyelamatkan Sayu dan juga kelangsungan persahabatan mereka yang baru 
                                    saja tumbuh kembali. Sebuah sekuel dari film legendaris, bernuansa musikal dengan sentuhan aksi petualangan.
                                </p>
                            </div>
                            <div class="items">
                                <div class="trailers-items">
                                    <div class="item watch-trailer">
                                        <a data-fancybox href="https://web3.21cineplex.com/movie-trailer/13PSA2.mp4">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-play">
                                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                                </svg>
                                            </div>
                                            <span>Watch the Trailer</span>
                                        </a>
                                    </div>
                                </div>
                                <p>2h 6min</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group">
                <div class="Mall-Name" style="display:block">
                    <a href="#">PAKUWON MALL KINEMA</a>
                    <div class="float-right">
                        <a href="{{ url('/food') }}" class="header-option" style="font-size: 1rem; color: #005350">
                            <span class="glyphicon glyphicon-cutlery glyphicon_child" style="margin-right: 5px"></span>
                            Food
                        </a>
                    </div>
                </div>
                <div class="Datetime_Price" style="margin-top: 10px;">
                    <!-- Add more content as needed -->
                </div>
            </div>
        </div>
    </main>

    <!-- (scripts and assets) -->
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>