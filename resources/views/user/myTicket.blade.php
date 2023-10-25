@extends('user/body')

@section('content')
<style>
  @font-face{
    font-family: 'Code39';
    src: url('/css/Code39Azalea.woff') format('woff');
  }
</style>
    <div class="row">
        <div class="col-12">
          {{-- Web --}}
            <div class="card mt-3 me-3 d-lg-block d-none">
                <div class="card-body">
                  <p>Judul : Avengers End Game</p>
                  <p>Jam Tayang: 09.00-12.00 WIB</p>
                  <p>Seat: A1</p>
                    <hr>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barcodeModal">
                        Barcode
                    </button>
                </div>
            </div>
            {{-- Mobile --}}
            <div class="card mt-3 d-block d-lg-none">
              <div class="card-body">
                <p>Judul : Avengers End Game</p>
                <p>Jam Tayang: 09.00-12.00 WIB</p>
                <p>Seat: A1</p>
                <hr>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#barcodeModal">
                    Barcode
                </button>
              </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="barcodeModal" tabindex="-1" aria-labelledby="barcodeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <label style="font-family: 'Code39';font-size: 100px;font-weight: normal;font-style: normal;display: flex;justify-content: center">*12345*</label>
            </div>
          </div>
        </div>
      </div>
@endsection