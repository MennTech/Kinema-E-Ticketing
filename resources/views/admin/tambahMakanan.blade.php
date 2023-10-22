@extends('admin/dashboard')

@section('content')
<div class="content">
    <h1 class="text-primary-emphasis" style="margin-top: 75px">Tambah Makanan</h1>
    <div class="card">
        <div class="card-body">
            <form action="">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="namaMakananInput" class="form-label">Nama Makanan</label>
                        <input type="text" class="form-control" id="namaMakananInput">
                    </div>
                    <div class="col-3">
                        <label for="stockInput" class="form-label">Stock Makanan</label>
                        <input type="number" class="form-control" id="stockInput">
                    </div>
                    <div class="col-3">
                        <label for="hargaInput" class="form-label">Harga Makanan</label>
                        <input type="number" class="form-control" id="hargaInput">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="gambarMakananInput" class="form-label">Gambar Makanan</label>
                        <input type="file" class="form-control" id="gambarMakananInput" accept=".jpg, .jpeg">
                    </div>
                </div>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#saveModal">
                    Save
                  </button>
                <a href="/Data-Makanan" type="button" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="saveModalLabel">Save Changes</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah anda yakin ingin menyimpan data ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <a href="/Data-Makanan" type="button" class="btn btn-primary">Save</a>
        </div>
      </div>
    </div>
</div>
@endsection