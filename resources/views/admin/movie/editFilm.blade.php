@extends('admin/dashboard')

@section('content')
    <div class="content">
        <h1 class="text-primary-emphasis" style="margin-top: 75px">Edit Film</h1>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="judulInput" class="form-label">Judul Film</label>
                            <input type="text" class="form-control" id="judulInput" placeholder="{{ $_GET['judul'] }}">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Genre Film</label>
                            <style>
                                .select2-selection {
                                    padding-bottom: 12px!important;
                                }
                            </style>
                            <select name="genre[]" class="form-select" id="genreInput" multiple>
                                @php
                                    $genre = explode(',', $_GET['genre']);
                                @endphp
                                @foreach ($genre as $item)
                                    <option value="{{ $item }}" selected>{{ $item }}</option>
                                @endforeach
                                <option value="Action">Action</option>
                                <option value="Horor">Horor</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Sc-fi">Sc-fi</option>
                                <option value="Drama">Drama</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Crime">Crime</option>
                                <option value="Biography">Biography</option>
                                <option value="History">History</option>
                                <option value="Romance">Romance</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="posterInput" class="form-label">Poster Film</label>
                            <input type="file" class="form-control" id="posterInput" accept=".jpg, .jpeg">
                        </div>
                        <div class="col-2">
                            <label for="durasiInput" class="form-label">Durasi Film</label>
                            <input type="number" class="form-control" id="durasiInput" placeholder="{{ $_GET['durasi'] }}">
                        </div>
                        <div class="col-2">
                            <label for="usiaInput" class="form-label">Rating Usia</label>
                            <input type="number" class="form-control" id="usiaInput" placeholder="{{ $_GET['ratingUsia'] }}">
                        </div>
                        <div class="col-2">
                            <label for="statusInput" class="form-label">Status</label>
                            <select name="statusFilm" id="statusInput" class="form-select">
                                <option value="{{ $_GET['status'] }}">{{ $_GET['status'] }}</option>
                                <option value="">Pilih Status</option>
                                <option value="Now Playing">Now Playing</option>
                                <option value="Coming Soon">Coming Soon</option>
                                <option value="Not Show">Not Show</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="sutradaraInput" class="form-label">Sutradara Film</label>
                            <input type="text" class="form-control" id="sutradaraInput" placeholder="{{ $_GET['sutradara'] }}">
                        </div>
                        <div class="col-6">
                            <label for="actorInput" class="form-label">Actor Film</label>
                            <input type="text" class="form-control" id="actoriInput" placeholder="{{ $_GET['actor'] }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="sinopsisInput" class="form-label">Sinopsis Film</label>
                            <textarea class="form-control" id="sinopsisInput" rows="4" placeholder="{{ $_GET['sinopsis'] }}"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#saveModal">
                        Save
                      </button>
                    <a href="/Data-Film" type="button" class="btn btn-danger">Cancel</a>
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
              <a href="/Data-Film" type="button" class="btn btn-primary">Save</a>
            </div>
          </div>
        </div>
    </div>
@endsection