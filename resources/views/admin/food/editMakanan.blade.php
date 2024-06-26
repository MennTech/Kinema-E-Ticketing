@extends('admin/dashboard')

@section('content')
<div class="content">
    <h1 class="text-primary-emphasis" style="margin-top: 75px">Tambah Makanan</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <div class="col-6">
                  <label for="namaMakananInput" class="form-label">Nama Makanan</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="namaMakananInput" name="nama" value="{{ old('nama', $food->nama) }}">
                  @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-3">
                  <label for="statusSelect" class="form-label">Status Makanan</label>
                  <select name="status" id="statusSelect" class="form-select">
                    <option value="" disabled>Pilih Status</option>
                    @if ($food->status == 'Ready')
                        <option value="Ready" selected>Ready</option>
                        <option value="Empty">Empty</option>
                    @else
                        <option value="Ready">Ready</option>
                        <option value="Empty" selected>Empty</option>
                    @endif
                  </select>
                  @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-3">
                  <label for="hargaInput" class="form-label">Harga Makanan</label>
                  <input type="number" class="form-control @error('harga') is-invalid @enderror" id="hargaInput" name="harga" value="{{ old('harga', $food->harga) }}" min="1">
                  @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                  </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                      <label for="gambarMakananInput" class="form-label">Gambar Makanan</label>
                      <input type="file" class="form-control @error('image') is-invalid @enderror" id="gambarMakananInput" name="image">
                      @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-success">
                    Save
                  </button>
                <a href="{{ route('food.index') }}" role="button" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>

{{-- <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
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
</div> --}}
@endsection