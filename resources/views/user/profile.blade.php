@extends('admin/dashboard')

@section('content')
    <div class="contents">
        <div class="row">
            <div class="col-12">
                {{-- Web --}}
                <div class="card mt-3 me-3 d-lg-block d-none">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 border-end">
                                <img src="img/{{ $foto_profile }}" alt="profile" class="rounded-circle w-100">
                            </div>
                            <div class="col-8">
                                <h1>Profile:</h1><br>
                                <p>Nama: {{ $name }}</p>
                                <p>Email: {{ $email }}</p>
                                <p>No Handphone: {{ $no_telp }}</p>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit Profile
                                  </button>
                                {{-- <a href="/Edit-Profile" class="button btn btn-warning float-end" role="button"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Mobile --}}
                <div class="card mt-3 d-block d-lg-none">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="img/{{ $foto_profile }}" alt="" class=" rounded-circle w-50">
                        </div>
                        <div class="row d-flex justify-content-between mt-3">
                            <div class="col-6">
                                <p>Nama:</p>
                            </div>
                            <div class="col-6">
                                <p class="d-flex justify-content-end">{{ $name }}</p>
                            </div>
                            
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-6">
                                <p>Email:</p>
                            </div>
                            <div class="col-6">
                                <p class="d-flex justify-content-end">{{ $email }}</p>
                            </div>
                            
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-6">
                                <p>No Hp:</p>
                            </div>
                            <div class="col-6">
                                <p class="d-flex justify-content-end">{{ $no_telp }}</p>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit Profile
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- Web --}}
                <div class="card mt-3 me-3  d-lg-block d-none">
                    <div class="card-body">
                        <a href="/Profile-MyTicket" class="button text-primary-emphasis"><i class="fa-solid fa-ticket"></i> My Ticket</a>
                    </div>
                </div>
                {{-- Mobile --}}
                <div class="card mt-3 d-block d-lg-none">
                    <div class="card-body">
                        <a href="/Profile-MyTicket" class="button text-primary-emphasis"><i class="fa-solid fa-ticket"></i> My Ticket</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- Web --}}
                <div class="card mt-3 me-3  d-lg-block d-none">
                    <div class="card-body">
                        <a href="/Profile-MyFood" class="button text-primary-emphasis"><i class="fa-solid fa-pizza-slice"></i> My Food</a>
                    </div>
                </div>
                {{-- Mobile --}}
                <div class="card mt-3 d-block d-lg-none">
                    <div class="card-body">
                        <a href="/Profile-MyFood" class="button text-primary-emphasis"><i class="fa-solid fa-pizza-slice"></i> My Food</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProfileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="editProfileModalLabel">Edit Profile</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label for="namaInput" class="form-label">Nama</label>
                        <input type="text" id="namaInput" value="{{ $name }}" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" id="emailInput" value="{{ $email }}" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="noHPInput" class="form-label">No Handphone</label>
                        <input type="number" id="noHPInput" value="{{ $no_telp }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#saveModal">Save</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="saveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="saveModalLabel">Save Changes ?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Apakah anda yakin ingin menyimpan perubahan ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editProfileModal">Cancel</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection