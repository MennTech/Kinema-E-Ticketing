@extends('admin/dashboard')

@section('content')
<div class="content">
    <h1 class="text-primary-emphasis fw-bold" style="margin-top: 75px">Data Studio</h1>
    <div class="card mb-4">
        <div class="card-header">
            <button class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#tambahStudio">
                <i class="fa-regular fa-square-plus fa-lg"></i> Tambah
            </button>
            <!-- Modal Tambah -->
            <div class="modal fade" id="tambahStudio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Studio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('studio.store') }}" id="formTambahStudio" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <label for="inputStudio" class="form-label">Nama Studio</label>
                                        <input type="text" class="form-control inputNamaStudio" id="inputStudio" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="jumlahKursi" class="form-label">Jumlah Kursi</label>
                                        <input type="number" class="form-control inputJumlahKursi" id="jumlahKursi" name="seat" value="{{ old('seat') }}">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary saveButton" form="formTambahStudio">Save</button>
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
                        <th>Name</th>
                        <th>Jumlah Kursi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studio as $item)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->seat }}</td>
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
                                <form action="{{ route('studio.destroy', $item->id) }}" method="POST">
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
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Studio</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('studio.update', $item->id ) }}" id="formEditStudio_{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="inputStudio" class="form-label">Nama Studio</label>
                                                <input type="text" class="form-control inputNamaStudio" id="inputStudio" name="name" value="{{ old('name', $item->name) }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="jumlahKursi" class="form-label">Jumlah Kursi</label>
                                                <input type="number" class="form-control inputJumlahKursi" id="jumlahKursi" name="seat" value="{{ old('seat', $item->seat) }}">
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
                var namaStudioInput = modal.querySelector('.inputNamaStudio');
                var jumlahKursiInput = modal.querySelector('.inputJumlahKursi');

                // Validasi Input Kosong
                if (namaStudioInput.value.trim() == '' || jumlahKursiInput.value.trim() == '') {
                    event.preventDefault();
                    alert('Harap isi semua kolom sebelum menyimpan.');
                }
            });
        }
    });
</script>

@endsection