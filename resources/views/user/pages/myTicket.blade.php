@extends('user/pages/landingPage')

@section('content')
<style>
  @font-face{
    font-family: 'Code39';
    src: url('/css/Code39Azalea.woff') format('woff');
  }
</style>
    <div class="row mb-3">
      @if (session('message'))
          <div class="alert alert-danger" style="margin-top: 20px">
              {{ session('message') }}
          </div>
      @endif
      @foreach ($ticket as $item)    
        <div class="col-12">
          {{-- Web --}}
            <div class="card mt-3 me-3 d-lg-block d-none">
                <div class="card-body">
                  <p>Judul : {{ $item->schedule->movie->judul_film }}</p>
                  <p>Jam Tayang: {{ $item->schedule->time }} WIB</p>
                  <p>Studio : {{ $item->schedule->studio->name }}</p>
                  <p>Seat: {{ $item->seat }}</p>
                    <hr>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barcodeModal_{{ $item->id }}">
                        Barcode
                    </button>
                </div>
            </div>
            {{-- Mobile --}}
            <div class="card mt-3 d-block d-lg-none">
              <div class="card-body">
                <p>Judul : {{ $item->schedule->movie->judul_film }}</p>
                <p>Jam Tayang: {{ $item->schedule->time }} WIB</p>
                <p>Studio : {{ $item->schedule->studio->name }}</p>
                <p>Seat: {{ $item->seat }}</p>
                <hr>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barcodeModal_{{ $item->id }}">
                    Barcode
                </button>
              </div>
            </div>
        </div>
        <div class="modal fade" id="barcodeModal_{{ $item->id }}" tabindex="-1" aria-labelledby="barcodeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <label style="font-family:'Code39';font-size: 100px;font-weight: normal;font-style: normal;display: flex;justify-content: center">*{{ $item->id. '' . $item->id_user }}*</label>
                </div>
              </div>
            </div>
          </div>
      @endforeach
    </div>
@endsection