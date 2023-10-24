@extends('admin/dashboard')

@section('content')
<link href="https://fonts.cdnfonts.com/css/code-39" rel="stylesheet">
<div class="row">
    <div class="col-lg-12 col-12">
        <div class="card mt-3 me-3">
            <div class="card-body">
                <p>Makanan: Popcorn Large</p>
                <p>1 Pcs</p>
                <p>Rp30.000</p>
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
          <label style="font-family: Code39;font-size: 100px;font-weight: normal;font-style: normal;display: flex;justify-content: center">ABC-123</label>
        </div>
      </div>
    </div>
  </div>
@endsection