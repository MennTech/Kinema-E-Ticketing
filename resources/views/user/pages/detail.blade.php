@extends('user/pages/landingPage')

@section('content')
    <div class="container border my-3" style="max-width: 830px;">
        <div class="row p-2">
            <div class="col-3">
                <img src="img/{{ $table_film['poster_film'] }}" alt="" class="w-100 mt-3">
            </div>
            <div class="col-9">
                <p class="text-primary-emphasis fw-bold fs-4 mt-3 mb-1">{{ $table_film['judul_film'] }}</p>
                <p class="text-primary-emphasis mb-1">Genre: {{ $table_film['genre'] }}</p>
                <p class="text-primary-emphasis mb-1">
                    <i class="fa-solid fa-clock"></i> 
                    {{ $table_film['durasi'] }} Minutes | Rating Usia: <strong>{{ $table_film['ratingUsia'] }}+</strong>
                </p>
                <p class="text-primary-emphasis mb-1">Sutradara: {{ $table_film['sutradara'] }}</p>
                <p class="text-primary-emphasis mb-2">Actor: <br> {{ $table_film['actor'] }}</p>
                <p class="text-primary-emphasis">Sinopsis: <br> {{ $table_film['sinopsis'] }}</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <p class="fw-semibold">KINEMA HOUSE</p>
            <div class="col-6">
                <p>{{ $jadwal['tanggal'] }}</p>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <p class="fw-semibold">Rp {{ $jadwal['harga'] }}</p>
            </div>
        </div>
        @foreach ($jadwal['jam'] as $item)
            <button type="button" class="btn bg-body-secondary me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">{{ $item }}</button>
        @endforeach
        <hr>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #242333">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Pilih Kursi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #242333">
                    
                </div>
                <div class="modal-footer" style="background-color: #242333">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Bayar</button>
                </div>
            </div>
        </div>
    </div>
@endsection