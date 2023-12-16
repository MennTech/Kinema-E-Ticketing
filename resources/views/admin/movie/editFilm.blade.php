@extends('admin/dashboard')

@section('content')
    <div class="content">
        <h1 class="text-primary-emphasis" style="margin-top: 75px">Edit Film</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route("movie.update", $movie->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="judulInput" class="form-label">Judul Film</label>
                            <input type="text" class="form-control @error('judul_film') is-invalid @enderror" id="judulInput" name="judul_film" value="{{ old('judul_film', $movie->judul_film) }}">
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
                                @php
                                    $selectedGenres = explode(', ', $movie->genre);
                                    print_r($selectedGenres);
                                @endphp
                                @foreach (['Action', 'Horor', 'Comedy', 'Sc-fi', 'Drama', 'Adventure', 'Crime', 'Biography', 'History', 'Romance'] as $genre)
                                    <option value="{{ $genre }}" @if(in_array($genre, $selectedGenres)) selected @endif>{{ $genre }}</option>
                                @endforeach
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
                            <input type="file" class="form-control @error('poster') is-invalid @enderror" id="posterInput" name="poster">
                            @error('poster')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-2">
                            <label for="durasiInput" class="form-label">Durasi Film</label>
                            <input type="number" class="form-control @error('durasi') is-invalid @enderror" id="durasiInput" name="durasi" value="{{ old('durasi', $movie->durasi) }}">
                            @error('durasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-2">
                            <label for="usiaInput" class="form-label">Rating Usia</label>
                            <input type="number" class="form-control @error('ratingUsia') is-invalid @enderror" id="usiaInput" name="ratingUsia" value="{{ old('ratingUsia', $movie->ratingUsia) }}">
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
                                <option value="Now Playing" @if ($movie->status=="Now Playing") selected @endif>Now Playing</option>
                                <option value="Coming Soon" @if ($movie->status=="Coming Soon") selected @endif>Coming Soon</option>
                                <option value="Not Show" @if ($movie->status=="Not Show") selected @endif>Not Show</option>
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
                            <input type="text" class="form-control @error('sutradara') is-invalid @enderror" id="sutradaraInput" name="sutradara" value="{{ old('sutradara', $movie->sutradara) }}">
                            @error('sutradara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="actorInput" class="form-label">Actor Film</label>
                            <input type="text" class="form-control  @error('actor') is-invalid @enderror" id="actorInput" name="actor" value="{{ old('actor', $movie->actor) }}">
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
                            <textarea class="form-control @error('sinopsis') is-invalid @enderror" id="sinopsisInput" rows="4" name="sinopsis">{{ old('sinopsis', $movie->sinopsis) }}</textarea>
                            @error('sinopsis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div> 
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ route('movie.index') }}" role="button" class="btn btn-danger">Cancel</a>
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
              <a href="/Data-Film" type="button" class="btn btn-primary">Save</a>
            </div>
          </div>
        </div>
    </div> --}}
@endsection