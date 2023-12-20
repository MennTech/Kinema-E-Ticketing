@extends('admin/dashboard')

@section('content')
<h1 class="text-primary-emphasis fw-bold" style="margin-top: 75px">Data Schedule</h1>
<div class="card mb-4">
    <div class="card-header">
        <button class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#tambahSchedule">
            <i class="fa-regular fa-square-plus fa-lg"></i> Tambah
        </button>
        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahSchedule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="staticBackdropLabel">Tambah Schedule</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('schedule.store') }}" id="formTambahSchedule" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <label for="judulFilmSelect" class="form-label">Nama Film</label>
                                    <select name="id_movie" id="judulFilmSelect" class="form-select judulFilm">
                                        <option value="" disabled selected>Pilih Film</option>
                                        @foreach ($movies as $item)
                                            <option value="{{ $item->id }}">{{ $item->judul_film }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="namaStudio" class="form-label">Nama Studio</label>
                                    <select name="id_studio" id="namaStudio" class="form-select studioSelect">
                                        <option value="" disabled selected>Pilih Studio</option>
                                        @foreach ($studios as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="tanggalTayang" class="form-label">Tanggal Tayang</label>
                                    <input type="date" id="tanggalTayang" class="form-control tanggal" name="date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="jamTayang" class="form-label">Jam Tayang</label>
                                    <input type="time" id="jamTayang" class="form-control jam" name="time">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary saveButton" form="formTambahSchedule">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="padding: 0px 10px;margin-top: 10px;">
        <table id="tabelData" class="cell-border table-hover hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Movie</th>
                    <th>Nama Studio</th>
                    <th>Jadwal Tayang</th>
                    <th>Jam Tayang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedule as $item)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->movie->judul_film }}</td>
                    <td>{{ $item->studio->name }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->time }}</td>
                    <td>
                        <button class="border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#editModal_{{ $item->id }}"><i class="fa-solid fa-pen-to-square text-warning fa-lg"></i></button>
                        <button class="border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#konfirmasiModal_{{ $item->id }}"><i class="fa-solid fa-trash text-danger fa-lg"></i></button>
                    </td>
                </tr>
                <!-- Modal Hapus-->
                <div class="modal fade" id="konfirmasiModal_{{ $item->id }}" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
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
                            <form action="{{ route('schedule.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-primary" type="submit" data-bs-dismiss="modal" id="deleteToastBtn">Yakin</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Modal Edit-->
                <div class="modal fade" id="editModal_{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-bold" id="staticBackdropLabel">Edit Schedule</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('schedule.update', $item->id ) }}" id="formEditStudio_{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="judulFilmSelect" class="form-label">Nama Film</label>
                                            <select name="id_movie" id="judulFilmSelect" class="form-select judulFilm">
                                                <option disabled>Pilih Film</option>
                                                @foreach ($movies as $movie)
                                                    <option value="{{ $movie->id }}" @if ($movie->id == $item->id_movie) selected @endif>{{ $movie->judul_film }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="namaStudio" class="form-label">Nama Studio</label>
                                            <select name="id_studio" id="namaStudio" class="form-select studioSelect">
                                                <option disabled>Pilih Studio</option>
                                                @foreach ($studios as $studio)
                                                <option value="{{ $studio->id }}" @if ($studio->id == $item->id_studio) selected @endif>{{ $studio->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="tanggalTayang" class="form-label">Tanggal Tayang</label>
                                            <input type="date" id="tanggalTayang" class="form-control tanggal" name="date" value="{{ $item->date }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="jamTayang" class="form-label">Jam Tayang</label>
                                            <input type="time" id="jamTayang" class="form-control jam" name="time" value="{{ $item->time }}">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary saveButton" form="formEditStudio_{{ $item->id }}">Save</button>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var saveButtons = document.getElementsByClassName('saveButton');

        for (var i = 0; i < saveButtons.length; i++) {
            saveButtons[i].addEventListener('click', function (event) {
                // Get the parent modal for the clicked button
                var modal = event.target.closest('.modal');
                console.log(modal);

                // Find input elements within the modal
                var namaStudioInput = modal.querySelector('.studioSelect');
                var judulFilmSelect = modal.querySelector('.judulFilm');
                var tanggalTayangInput = modal.querySelector('.tanggal');
                var jamTayangInput = modal.querySelector('.jam');

                // Validasi Input Kosong
                if (namaStudioInput.value.trim() == '' || judulFilmSelect.value.trim() == '' || tanggalTayangInput.value.trim() == '' || jamTayangInput.value.trim() == '') {
                    event.preventDefault();
                    alert('Harap isi semua kolom sebelum menyimpan.');
                }

                // Validasi tanggal
                var today = new Date.now();
                var selectedDate = new Date(tanggalTayangInput.value);

                if (selectedDate < today) {
                    event.preventDefault();
                    alert('Tanggal tayang tidak boleh tanggal kemarin atau hari sebelumnya.');
                    return;
                }

                // Validasi jam
                var currentTime = today.getHours() * 60 + today.getMinutes();
                var selectedTime = parseInt(jamTayangInput.value.split(':')[0]) * 60 + parseInt(jamTayangInput.value.split(':')[1]);

                if (selectedTime < currentTime) {
                    event.preventDefault();
                    alert('Jam tayang tidak boleh sebelum jam sekarang.');
                    return;
                }
            });
        }
    });
</script>
@endsection