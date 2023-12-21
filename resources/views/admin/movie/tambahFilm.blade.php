@extends('admin.dashboard')

@section('content')
    <div class="content">
        <h1 class="text-primary-emphasis" style="margin-top: 75px">Tambah Film</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="judulInput" class="form-label">Judul Film</label>
                            <input type="text" class="form-control @error('judul_film') is-invalid @enderror" id="judulInput" name="judul_film" value="{{ old('judul_film') }}">
                            @error('judul_film')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="genreInput">Genre Film</label>
                            <style>
                                .select2-selection {
                                    padding-bottom: 12px!important;
                                }
                            </style>
                            <select name="genre[]" class="form-select @error('genre') is-invalid @enderror" id="genreInput" multiple>
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
                            @error('genre')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="posterInput" class="form-label">Poster Film</label>
                            <input type="file" class="form-control @error('poster') is-invalid @enderror" id="posterInput" name="poster" >
                            @error('poster')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-2">
                            <label for="durasiInput" class="form-label">Durasi Film</label>
                            <input type="number" class="form-control @error('durasi') is-invalid @enderror" id="durasiInput" name="durasi" value="{{ old('durasi') }}" min="1">
                            @error('durasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-2">
                            <label for="usiaInput" class="form-label">Rating Usia</label>
                            <input type="number" class="form-control @error('ratingUsia') is-invalid @enderror" id="usiaInput" name="ratingUsia" value="{{ old('ratingUsia') }}" min="1">
                            @error('ratingUsia')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-2">
                            <label for="statusInput" class="form-label">Status</label>
                            <select name="status" id="statusInput" class="form-select @error('status') is-invalid @enderror">
                                <option value="">Pilih Status</option>
                                <option value="Now Playing">Now Playing</option>
                                <option value="Coming Soon">Coming Soon</option>
                                <option value="Not Show">Not Show</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="sutradaraInput" class="form-label">Sutradara Film</label>
                            <input type="text" class="form-control @error('sutradara') is-invalid @enderror" id="sutradaraInput" name="sutradara" value="{{ old('sutradara') }}">
                            @error('sutradara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="actorInput" class="form-label">Actor Film</label>
                            <input type="text" class="form-control  @error('actor') is-invalid @enderror" id="actorInput" name="actor" value="{{ old('actor') }}">
                            @error('actor')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="sinopsisInput" class="form-label">Sinopsis Film</label>
                            <textarea class="form-control  @error('sinopsis') is-invalid @enderror" id="sinopsisInput" rows="4" name="sinopsis" value="{{ old('sinopsis') }}"></textarea>
                            @error('sinopsis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div> 
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">
                        Save
                      </button>
                    <a href="{{ route('movie.index') }}" role="button" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection