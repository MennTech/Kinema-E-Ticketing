@extends('admin/dashboard')

@section('content')
    <div class="content">
        <h1 class="text-primary-emphasis" style="margin-top: 75px">Data Film</h1>
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa-regular fa-square-plus fa-lg"></i> Tambah
                  </button>
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
                        <tr>
                            <th>{{ $item['no'] }}</th>
                            <td class="poster_cell"><img src="img/{{ $item['poster_film'] }}" alt="" class="w-25"></td>
                            <td>{{ $item['judul_film'] }}</td>
                            <td>{{ $item['genre'] }}</td>
                            <td>{{ $item['durasi'] }}</td>
                            <td><a href="" class="button"><i class="fa-solid fa-circle-info text-primary fa-2x"></i></a></td>
                            <td>
                                <a href="#" class="button"><i class="fa-solid fa-pen-to-square text-warning fa-lg"></i></a> 
                                <a href="#" class="button"><i class="fa-solid fa-trash text-danger fa-lg"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection