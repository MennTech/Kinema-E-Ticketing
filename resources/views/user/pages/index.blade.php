@extends('user/pages/landingPage')

@section('content') 
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
                @foreach ($movie as $item)
                    @if ($item->status == "Now Playing")
                        <div class="col-3 mt-3 mb-2 float-start">
                            <a href="/detail/{{ $item->id }}"><img src="poster_film/{{ $item->poster }}" alt="" style="width: 305px; height: 450px;"></a>
                            <h5 class="text-center mt-2">{{ $item->judul_film }}</h5>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <h3 class="p-2 text-white mt-5" style="max-width: 190px; background-color: #052c65;">Coming Soon</h3>
        <div class="mt-3">
            <div class="row">
                @foreach ($movie as $item)
                    @if ($item->status == "Coming Soon")
                        <div class="col-3 mt-3 mb-2 float-start">
                            <a href="/detail/{{ $item->id }}"><img src="poster_film/{{ $item->poster }}" alt="" style="width: 305px; height: 450px;"></a>
                            <h5 class="text-center mt-2">{{ $item->judul_film }}</h5>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <h1 class="text-center text-primary-emphasis mb-5" style="margin-top: 65px">Book You Ticket Now !</h1>
    </div>
@endsection