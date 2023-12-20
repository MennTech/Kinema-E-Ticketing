@extends('admin/dashboard')

@section('content')
    <div class="content">
        <h1 class="text-primary-emphasis fw-bold" style="margin-top: 75px">Dashboard</h1>
        <div class="d-flex flex-wrap justify-content-between align-items-center me-3">
            {{-- Card 1 --}}
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <div class="row inline g-3">
                        <div class="col-4 p-0">
                            <img src="/img/ticket.jpg" alt="" class="rounded w-100">
                        </div>
                        <div class="col-auto pt-3 ms-2">
                            <p>Ticket Sale</p>
                            <p>{{ $jumlahTiket }} PCS</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Card 2 --}}
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <div class="row inline g-3">
                        <div class="col-4 p-0">
                            <img src="/img/income.jpg" alt="" class="rounded w-100">
                        </div>
                        <div class="col-auto pt-3">
                            <p>Income Ticket</p>
                            <p>Rp {{ number_format($totalPendapatanTiket) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Card 3 --}}
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <div class="row inline g-3">
                        <div class="col-4 p-0">
                            <img src="/img/food.jpg" alt="" class="rounded w-100">
                        </div>
                        <div class="col-auto pt-3">
                            <p>Food Sale</p>
                            <p>{{ $jumlahMakanan }} PCS</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Card 4 --}}
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <div class="row inline g-3">
                        <div class="col-4 p-0">
                            <img src="/img/income.jpg" alt="" class="rounded w-100">
                        </div>
                        <div class="col-auto pt-3">
                            <p>Income Food</p>
                            <p>Rp {{ number_format($totalPendapatanMakanan) }}</p>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->no_telp }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->created_at))}}</td>
                                    <td>{{ $item->active === 1 ? "Active" : "Not Active" }}</td>
                                    <td><button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#konfirmasiModal" data-user="{{ json_encode('$item') }}">Delete</button></td>
                                </tr>
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
                                          <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                              <button class="btn btn-primary" type="submit" data-bs-dismiss="modal" id="deleteToastBtn">Save</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                </div>
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
@endsection