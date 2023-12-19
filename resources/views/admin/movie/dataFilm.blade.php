@extends('admin/dashboard')

@section('content')
<div class="content">
    <h1 class="text-primary-emphasis fw-bold" style="margin-top: 75px">Data Film</h1>
    <div class="card mb-4">
        <div class="card-header">
            <a type="button" class="btn btn-success float-end" href="{{ route('movie.create') }}">
                <i class="fa-regular fa-square-plus fa-lg"></i> Tambah
            </a>
        </div>
        <div style="padding: 0px 10px;margin-top: 10px;">
            <table id="tabelData" class="cell-border table-hover hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Poster Film</th>
                        <th>Judul Film</th>
                        <th>Genre</th>
                        <th>Durasi</th>
                        <th>Status</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movie as $item)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td class="poster_cell"><img src="{{ asset('poster_film/'.$item->poster) }}" alt="" class="w-25"></td>
                        <td>{{ $item->judul_film }}</td>
                        <td>{{ $item->genre }}</td>
                        <td>{{ $item->durasi }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#detailsFilmModal_{{ $item->id }}" class="border-0 bg-transparent">
                                <i class="fa-solid fa-circle-info text-primary fa-2x"></i>
                            </button>
                        </td>
                        <td>
                            <a href="{{ route('movie.edit', $item->id) }}" role="button" class="btn">
                                <i class="fa-solid fa-pen-to-square text-warning fa-lg"></i>
                            </a>
                            <button class="border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#konfirmasiModal" data-details="{{ json_encode($item) }}"><i class="fa-solid fa-trash text-danger fa-lg"></i></button>
                        </td>
                    </tr>
                    <div class="modal fade" id="detailsFilmModal_{{ $item->id }}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailsFilmModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-bold text-primary-emphasis" id="detailsFilmModalLabel">Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="background-color: #F2F7FF">
                                    <div class="row g-2">
                                        <div class="col-3">
                                            <img src="{{ asset('poster_film/'.$item->poster) }}" alt="" class="w-100">
                                        </div>
                                        <div class="col-9">
                                            <p class="mb-1">Status: {{ $item->status }}</p>
                                            <p class="mb-1">Judul: {{ $item->judul_film }}</p>
                                            <p class="mb-1">R:{{ $item->ratingUsia }}+</p>
                                            <p class="mb-1">Genre: {{ $item->genre }}</p>
                                            <p class="mb-1"><i class="fa-solid fa-clock"></i> {{ $item->durasi }} minute</p>
                                            <p class="mb-1">Sutradara: {{ $item->sutradara }}</p>
                                            <p class="mb-1">Actor: <br> {{ $item->actor }}</p>
                                            <p class="mb-1">Sinopsis: <br> {{ $item->sinopsis }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="konfirmasiModalLabel">Delete Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Apakah anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <form action="{{ route('movie.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary" type="submit" data-bs-dismiss="modal" id="deleteToastBtn">Yakin</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
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
@endsection