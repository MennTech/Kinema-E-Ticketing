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
                    <strong class="fs-2">LOGIN</strong>
                </div>

                @if (session('error'))
                    <div class="alert alert-danger" style="margin: 10px 24px 0px">
                        <b>Oops!</b> {{ session('error') }}
                    </div>
                @endif

                <div class="card-body p-4">
                    <form action="{{ route('actionLogin') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control mb-3" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control mb-3" id="password" required>
                        </div>
                        <button class="btn fw-bold text-white mb-3"id="button" type="submit">Login</button>
                        <p class="m-0">Belum Punya Akun ? <a href="/register">Register Disini!</a></p>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="/" class="mt-3 text-decoration-none text-white">> Back to Home <</a>
            </div>
        </div>
    </div>
@endsection