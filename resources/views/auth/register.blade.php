@extends('auth/dashboard')

@section('content')
    <style>
        #button:hover{
            background-color: #2c71d7;
        }
        #button{
            background-color: #052c65;
        }
    </style>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="col-4">
            <div class="card border-0">
                <div class="card-header text-white text-center" style="background-color: #052c65">
                    <strong class="fs-2">Register</strong>
                </div>

                @if (session('message'))
                    <div class="alert alert-danger" style="margin: 10px 24px 0px">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card-body p-4">
                    <form method="post" action="{{ route('actionRegister') }}">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" placeholder="Username" class="form-control @error('username') is-invalid @enderror {{ !$errors->has('username') ? 'mb-3' : '' }}" id="username">
                            @error('username')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="no_telp">No Telp</label>
                            <input type="number" name="no_telp" placeholder="No Telp" class="form-control @error('no_telp') is-invalid @enderror {{ !$errors->has('no_telp') ? 'mb-3' : '' }}" id="no_telp">
                            @error('no_telp')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror {{ !$errors->has('email') ? 'mb-3' : '' }}" id="email">
                            @error('email')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror {{ !$errors->has('password') ? 'mb-3' : '' }}" id="password">
                            @error('password')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn fw-bold text-white mb-3"id="button" type="submit">Register</button>
                        <p class="m-0">Sudah Punya Akun ? <a href="/login">Login Disini!</a></p>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/" class="mt-3 text-decoration-none text-white">> Back to Home <</a>
            </div>
        </div>
    </div>
@endsection