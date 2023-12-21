@extends('user/pages/landingPage')

@section('content')
    <div class="container border my-3" style="max-width: 830px;">
        <div class="row p-2">
            <div class="col-3">
                <img src="{{ asset('poster_film/' . $movie->poster) }}" class="rounded-start" alt="..." style="width: 180px; height: 260px;margin-top: 26px">
            </div>
            <div class="col-9">
                <p class="text-primary-emphasis fw-bold fs-4 mt-3 mb-1">{{ $movie->judul_film }}</p>
                <p class="text-primary-emphasis mb-1">Genre: {{ $movie->genre }}</p>
                <p class="text-primary-emphasis mb-1">
                    <i class="fa-solid fa-clock"></i> 
                    {{ $movie->durasi }} Minutes | Rating Usia: <strong>{{ $movie->ratingUsia }}+</strong>
                </p>
                <p class="text-primary-emphasis mb-1">Sutradara: {{ $movie->sutradara }}</p>
                <p class="text-primary-emphasis mb-2">Actor: <br> {{ $movie->actor }}</p>
                <p class="text-primary-emphasis">Sinopsis: <br> {{ $movie->sinopsis }}</p>
            </div>
        </div>
        <hr>
        @if($movie->status == 'Now Playing')
            @if(isset($schedule))
            <div class="row">
                <p class="fw-semibold">KINEMA HOUSE</p>
                <div class="col-6">
                    <p>{{ $schedule->date }}</p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <p class="fw-semibold">Rp {{ number_format('35000') }}</p>
                </div>
            </div>
            @php $count_time = 0; @endphp
            @foreach($time as $item)
                @if(new DateTime() < new DateTime($schedule->date . ' ' . $item->time))
                    @php $count_time++; @endphp
                    <a href="@if(Auth::check()) /choose_seat/{{$item->id}} @else /login @endif" class="btn bg-body-secondary me-2" role="button">{{ date('H:i', strtotime($item->time)) }}</a>
                @endif
            @endforeach
            @if($count_time == 0)
                <div class="row">
                    <div class="col-12">
                        <p>Tidak ada jadwal yang tersedia</p>
                    </div>
                </div>
            @endif
            <hr>
            @else
            <div class="row mb-4">
                <p class="fw-semibold">KINEMA HOUSE</p>
                <div class="col-6">
                    <p>Belum ada jadwal</p>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    @if ($movie->status == "Now Playing")    
                        <p class="fw-semibold">Rp {{ number_format('35000') }}</p>
                    @endif
                </div>
            </div>
            @endif
        @endif
    </div>
@endsection