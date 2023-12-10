@extends('user/pages/landingPage')

@section('content') 
    {{-- <style>
        /* .nav-link {
            transition: opacity 0.3s ease; /* Menambahkan efek transisi */
        /* } */

        /* .nav-link.tab-link.active {
            opacity: 1; /* Opaqueness penuh saat aktif */
        /* } */

        /* .nav-link.tab-link:not(.active) {
            opacity: 0.6; Transparansi pada tab tidak aktif */
        /* } */
    </style> --}}
    
    <div id="carouselExampleAutoplaying" class="carousel slide mx-auto mt-2 " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1_1.jpg" class="d-block w-100" alt="..." style="max-height: 550px">
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="..." style="max-height: 550px">
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" class="d-block w-100" alt="..." style="max-height: 550px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div>
        <h1 class="text-center text-primary-emphasis" style="margin-top: 65px">Choose Your Movie</h1>
        <h3 class="p-2 text-white mt-5" style="max-width: 180px; background-color: #052c65;">Now Playing</h3>
        <div class="mt-3">
            <div class="row">
                @foreach ($table_film as $item)
                    @if ($item['status'] == "Now Playing")
                        <div class="col-3 mt-3 mb-2 float-start">
                            <a href="/detail"><img src="img/{{ $item['poster_film'] }}" alt="" class="w-100"></a>
                            <h5 class="text-center mt-2">{{ $item['judul_film'] }}</h5>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <h3 class="p-2 text-white mt-5" style="max-width: 190px; background-color: #052c65;">Coming Soon</h3>
        <div class="mt-3">
            <div class="row">
                @foreach ($table_film as $item)
                    @if ($item['status'] == "Coming Soon")
                        <div class="col-3 mt-3 mb-2 float-start">
                            <a href=""><img src="img/{{ $item['poster_film'] }}" alt="" class="w-100"></a>
                            <h5 class="text-center mt-2">{{ $item['judul_film'] }}</h5>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- <div class="navbar-collapse mt-5 mx-auto" style="max-width: 400px">
            <ul class="nav-tabs d-flex justify-content-between p-0" style="list-style-type: none">
                <li class="nav-item">
                    <a href="?tab=nowplaying" class="nav-link tab-link @if($tab == 'nowplaying') active @endif" data-status="nowplaying"><h4>Now Playing</h4></a>
                </li>
                <li class="nav-item">
                    <a href="?tab=comingsoon" class="nav-link tab-link @if($tab == 'comingsoon') active @endif" data-status="comingsoon"><h4>Coming Soon</h4></a>
                </li>
            </ul>
        </div>
        <div class="container mt-4 mb-5 rounded" style="max-width: 1000px;background-color: #F5F5F5">
            <div class="row" id="film-container">
                <!-- Film akan dimuat di sini berdasarkan tab -->
                @foreach ($filtered_films as $item)
                    <div class="col-3 mt-3 mb-2">
                        <a href=""><img src="img/{{ $item['poster_film'] }}" alt="" class="w-100"></a>
                        <h5 class="text-center mt-2">{{ $item['judul_film'] }}</h5>
                    </div>
                @endforeach
            </div>
        </div> --}}
        <h1 class="text-center text-primary-emphasis mb-5" style="margin-top: 65px">Book You Ticket Now !</h1>
    </div>

    {{-- <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var currentTab = "{{ $tab }}"; // Added to capture the current tab
    
        //     // Menggunakan jQuery untuk kesederhanaan, pastikan Anda menyertakan jQuery di halaman Anda.
        //     $('.tab-link').on('click', function() {
        //         var status = $(this).data('status');
        //         // Memanggil fungsi untuk memuat film berdasarkan status
        //         // loadFilmByStatus(status);
        //     });
    
        //     // Memuat film saat halaman pertama kali dimuat
        //     // loadFilmByStatus(currentTab);
        // });
    
        // function loadFilmByStatus(status) {
        //     // Menyiapkan URL dengan status yang akan dimuat
        //     var url = 'img/'; // Ganti dengan URL yang sesuai
        //     $('#film-container').empty(); // Mengosongkan kontainer film sebelum memuat data baru
    
        //     // Melakukan iterasi pada data film dan menambahkannya ke dalam kontainer
        //     // @foreach ($table_film as $item)
        //     //     @if ($item['status'] == "Now Playing")
        //     //         if (status == 'nowplaying') {
        //     //             $('#film-container').append(`<div class="col-3 mt-3 mb-2">
        //     //                 <a href=""><img src="${url}${$item['poster_film']}" alt="" class="w-100"></a>
        //     //                 <h5 class="text-center mt-2">${$item['judul_film']}</h5>
        //     //             </div>`);
        //     //         }
        //     //     @elseif ($item['status'] == "Coming Soon")
        //     //         if (status == 'comingsoon') {
        //     //             $('#film-container').append(`<div class="col-3 mt-3 mb-2">
        //     //                 <a href=""><img src="${url}${$item['poster_film']}" alt="" class="w-100"></a>
        //     //                 <h5 class="text-center mt-2">${$item['judul_film']}</h5>
        //     //             </div>`);
        //     //         }
        //     //     @endif
        //     // @endforeach
        // }
    </script> --}}
    
@endsection