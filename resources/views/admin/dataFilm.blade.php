@extends('admin/dashboard')

@section('content')
<div class="content">
    <h1 class="text-primary-emphasis" style="margin-top: 75px">Data Film</h1>
    <div class="card">
        <div class="card-header">
            <a type="button" class="btn btn-success float-end" href="/Tambah-Film">
                <i class="fa-regular fa-square-plus fa-lg"></i> Tambah
            </a>
        </div>
        <div style="padding: 0px 10px;margin-top: 10px">
            <table id="tabelData" class="cell-border table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Poster Film</th>
                        <th>Judul Film</th>
                        <th>Genre</th>
                        <th>Durasi</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($table_film as $item)
                    <tr data-no="{{ $loop->iteration }}" data-judul="Judul: {{ $item['judul_film'] }}" data-genre="Genre: {{ $item['genre'] }}" 
                        data-durasi="Durasi: {{ $item['durasi'] }}" data-sutradara="Sutradara: {{ $item['sutradara'] }}" data-actor="Actor: {{ $item['actor'] }}" 
                        data-sinopsis="Sinopsis: {{ $item['sinopsis'] }}" data-poster="{{ $item['poster_film'] }}">
                        <th>{{ $loop->iteration }}</th>
                        <td class="poster_cell"><img src="img/{{ $item['poster_film'] }}" alt="" class="w-25"></td>
                        <td>{{ $item['judul_film'] }}</td>
                        <td>{{ $item['genre'] }}</td>
                        <td>{{ $item['durasi'] }}</td>
                        <td><a id="detailFilm" data-bs-toggle="modal" data-bs-target="#detailsFilmModal" style="cursor: pointer"><i
                            class="fa-solid fa-circle-info text-primary fa-2x"></i></a></td>
                        <td>
                            <a href="/Edit-Film?judul={{ $item['judul_film'] }}&genre={{ $item['genre'] }}&durasi={{ $item['durasi'] }}&sutradara={{ $item['sutradara'] }}&actor={{ $item['actor'] }}&sinopsis={{ $item['sinopsis'] }}&poster={{ $item['poster_film'] }}" class="button"><i class="fa-solid fa-pen-to-square text-warning fa-lg"></i></a>
                            <a href="#" class="button" id="deleteToastBtn"><i class="fa-solid fa-trash text-danger fa-lg"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="deleteToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body bg-success text-white">
                        <i class="fa fa-check text-white"></i> Berhasil Hapus Film
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detailsFilmModal" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="detailsFilmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailsFilmModalLabel">Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-3">
                        <img id="modalPoster" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <p id="modalJudul"></p>
                        <p id="modalGenre"></p>
                        <p id="modalDurasi"></p>
                        <p id="modalSutradara"></p>
                        <p id="modalActor"></p>
                        <p id="modalSinopsis"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection