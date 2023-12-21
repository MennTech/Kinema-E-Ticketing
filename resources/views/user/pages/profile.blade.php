@extends('user/pages/landingPage')

@section('content')
    <style>
        .profile-picture-container {
            position: relative;
            cursor: pointer;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            transition: opacity 0.3s ease;
            border-radius: 50%;
        }

        .profile-picture-container:hover .overlay {
            opacity: 1;
        }
    </style>
    <div class="contents mb-3">
        <div class="row">
            <div class="col-12">
                {{-- Web --}}
                <div class="card mt-3 me-3 d-lg-block d-none">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 border-end">
                                <form action="{{ route('profile.updateProfileImage') }}" method="post" enctype="multipart/form-data" id="profile-form">
                                    @csrf
                                    @method('PUT')
                                    <label for="profile-picture" class="profile-picture-container">
                                        @if ($user->profile_picture == null)
                                            <img src="{{ asset('/avatar/user2.jpg') }}" alt="profile" id="profile-image" style="border-radius: 50%;width: 185px; height: 185px;">
                                        @else
                                            <img src="{{ asset('/avatar/'.$user->profile_picture) }}" alt="profile" id="profile-image" style="border-radius: 50%;width: 185px; height: 185px;">
                                        @endif
                                        <div class="overlay">
                                            <i class="fa-solid fa-image"></i>
                                        </div>
                                    </label>
                                    <input type="file" id="profile-picture" style="display: none" name="profile_picture" onchange="updateProfileImage()" accept="image/*">
                                </form>
                            </div>
                            <div class="col-8">
                                <h1>Profile:</h1><br>
                                <p>Username: {{ $user->username }}</p>
                                <p>Email: {{ $user->email }}</p>
                                <p>No Handphone: {{ $user->no_telp }}</p>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit Profile
                                  </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Mobile --}}
                <div class="card mt-3 d-block d-lg-none">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('/avatar/'.$user->profile_picture) }}" alt="profile" style="border-radius: 50%; width: 270px; height: 270px;">
                        </div>
                        <div class="row d-flex justify-content-between mt-3">
                            <div class="col-6">
                                <p>Username:</p>
                            </div>
                            <div class="col-6">
                                <p class="d-flex justify-content-end">{{ $user->username }}</p>
                            </div>
                            
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-6">
                                <p>Email:</p>
                            </div>
                            <div class="col-6">
                                <p class="d-flex justify-content-end">{{ $user->email }}</p>
                            </div>
                            
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-6">
                                <p>No Hp:</p>
                            </div>
                            <div class="col-6">
                                <p class="d-flex justify-content-end">{{ $user->no_telp }}</p>
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
                        <a href="{{ route('my_ticket') }}" class="button text-primary-emphasis text-decoration-none"><i class="fa-solid fa-ticket"></i> My Ticket</a>
                    </div>
                </div>
                {{-- Mobile --}}
                <div class="card mt-3 d-block d-lg-none">
                    <div class="card-body">
                        <a href="{{ route('my_ticket') }}" class="button text-primary-emphasis text-decoration-none"><i class="fa-solid fa-ticket"></i> My Ticket</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- Web --}}
                <div class="card mt-3 me-3  d-lg-block d-none">
                    <div class="card-body">
                        <a href="{{ route('my_food') }}" class="button text-primary-emphasis text-decoration-none"><i class="fa-solid fa-pizza-slice"></i> My Food</a>
                    </div>
                </div>
                {{-- Mobile --}}
                <div class="card mt-3 d-block d-lg-none">
                    <div class="card-body">
                        <a href="{{ route('my_food') }}" class="button text-primary-emphasis text-decoration-none"><i class="fa-solid fa-pizza-slice"></i> My Food</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <a href="{{ route('actionLogout') }}" class="btn btn-danger">Logout</a>
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
                <form action="{{ route('profile.update') }}" method="POST" id="formProfile">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <label for="usernameInput" class="form-label">Username</label>
                            <input type="text" id="usernameInput" value="{{ $user->username }}" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="noHPInput" class="form-label">No Handphone</label>
                            <input type="number" id="noHPInput" value="{{ $user->no_telp }}" class="form-control" name="no_telp">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" form="formProfile">Save</button>
            </div>
          </div>
        </div>
    </div>

    <script>
        function updateProfileImage() {
            document.getElementById('profile-form').submit();
        }

        document.addEventListener('DOMContentLoaded', function () {
            var formProfile = document.getElementById('formProfile');

            formProfile.addEventListener('submit', function (event) {
            var usernameInput = document.getElementById('usernameInput');
            var noHPInput = document.getElementById('noHPInput');

            if (usernameInput.value.trim() === '' || noHPInput.value.trim() === '') {
                alert('Username and No Handphone cannot be empty.');
                event.preventDefault();
            }else if (!/^(08)\d{10}$/.test(noHPInput.value)) {
                alert('Invalid phone number format. It should start with "08" and have 12 digits.');
                event.preventDefault();
            }
            });
        });
    </script>
@endsection