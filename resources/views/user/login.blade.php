@extends('user/body')

@section('content')
    <!-- card login -->
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 650px;">
        <div class="card shadow" style="width: 410px;">
            <div class="card-body">
                <h4 class="text-center" style="padding: 10px; color: #80B3FF; font-weight: bold; font-size: 45px ">LOGIN</h4>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Username or Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder= "Input Username or Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Input Password">
                    </div>

                    <a id="emailHelp" class="form-text" href="#">Lupa Password?</a>
                    <p><a id="emailHelp" class="form-text" href="{{  url('signup')  }}">Belum buat Akun? Sign Up</a></p>
                    <button type="login" class="btn btn-primary float-end">
                        <a href= "{{  url('home')  }}" style="text-decoration: none; color: white;">Login</a>
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection