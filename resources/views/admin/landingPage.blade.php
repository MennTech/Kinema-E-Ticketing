@extends('admin/dashboard')

@section('content')
    <div class="content">
        <h1 class="text-primary-emphasis fw-bold" style="margin-top: 75px">Dashboard</h1>
        <div class="d-flex flex-wrap justify-content-between align-items-center me-3">
            @foreach ($card as $item)
                <div class="card" style="width: 18rem">
                    <div class="card-body">
                        <div class="row inline g-3">
                            <div class="col-4 p-0">
                                <img src="img/{{ $item['images'] }}" class="rounded w-100">
                            </div>
                            <div class="col-auto pt-3">
                                <p>{{ $item['card_title'] }}</p>
                                @if ($item['card_title']==='Ticket Sale' || $item['card_title']==='Food Sale')
                                    <p>{{ $item['value'] }} PCS</p>
                                @elseif($item['card_title']==='Income Today' || $item['card_title']==='Income Total')
                                    <p>Rp. {{ number_format($item['value'],0,',') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card mb-4 mt-5 me-3 rounded bg-white">
            <div class="card-body">
                    <p class="fs-1 ps-3 text-primary-emphasis">User</p>
                    <div style="padding: 0px 10px">
                        <table id="tabelData" class="table table-hover" style="padding: 0px 10px;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>No Telp</th>
                                    <th>Create Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($table_value as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['no_telp'] }}</td>
                                    <td>{{ $item['create_date'] }}</td>
                                    <td><button class="btn btn-danger" type="button"  data-bs-toggle="modal" data-bs-target="#konfirmasiModal">Delete</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="deleteToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body bg-success text-white">
                    <i class="fa fa-check text-white"></i> Berhasil Hapus User
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