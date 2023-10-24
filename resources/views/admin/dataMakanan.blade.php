@extends('admin/dashboard')

@section('content')
<div class="content">
    <h1 class="text-primary-emphasis fw-bold" style="margin-top: 75px">Data Makanan</h1>
    <div class="card mb-4">
        <div class="card-header">
            <a type="button" class="btn btn-success float-end" href="/Tambah-Makanan">
                <i class="fa-regular fa-square-plus fa-lg"></i> Tambah
              </a>
        </div>
        <div style="padding: 0px 10px;margin-top: 10px">
            <table id="tabelData" class="cell-border table-hover hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar Makanan</th>
                        <th>Nama Makanan</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tabel_makanan as $item)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td class="poster_cell"><img src="img/{{ $item['gambar_makanan'] }}" alt="" style="width: 20%"></td>
                        <td>{{ $item['nama_makanan'] }}</td>
                        <td>{{ $item['stock'] }}</td>
                        <td>Rp. {{ number_format($item['harga'],0,',') }}</td>
                        <td>
                            <a href="/Edit-Makanan?nama={{ $item['nama_makanan'] }}&stock={{ $item['stock'] }}&harga={{ $item['harga'] }}&gambar={{ $item['gambar_makanan'] }}"
                            class="button"><i class="fa-solid fa-pen-to-square text-warning fa-lg"></i></a> 
                            <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#konfirmasiModal"><i class="fa-solid fa-trash text-danger fa-lg"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="deleteToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body bg-success text-white">
                        <i class="fa fa-check text-white"></i> Berhasil Hapus Makanan
                    </div>
                </div>
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
          <button class="btn btn-primary" type="button" data-bs-dismiss="modal" id="deleteToastBtn">Save</button>
          {{-- <a href="/Data-Film" type="button" class="btn btn-primary" id="deleteToastBtn">Save</a> --}}
        </div>
      </div>
    </div>
</div>
@endsection