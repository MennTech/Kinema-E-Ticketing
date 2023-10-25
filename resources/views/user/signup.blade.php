@extends('user/body')

@section('content')
    <!-- isi sign up -->
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 700px;">
        <div class="card shadow" style="width: 510px;">
            <div class="card-body">
                <h4 class="text-center" style="padding: 10px; color: #80B3FF; font-weight: bold; font-size: 45px ">SIGN UP</h4>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="inputNama1" class="form-label">Nama User</label>
                        <input type="email" class="form-control" id="exampleInputName" placeholder= "Input Nama User">
                    </div>
                    <div class="mb-3">
                        <label for="inputNama1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Input Email" onblur="checkEmailValidity(this)">
                        <div id="error-message" style="color: red;"></div>
                    </div>

                    <script>
                        function checkEmailValidity(input) {
                            const email = input.value;
                            const errorMessage = document.getElementById('error-message');

                            if (email.includes('@')) {
                                // Alamat email valid
                                errorMessage.textContent = '';
                            } else {
                                // Alamat email tidak valid
                                errorMessage.textContent = 'Alamat email harus mengandung karakter "@"';
                                input.focus();
                            }
                        }
                    </script>

                    <div class="mb-3">
                        <label for="inputPassword1" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Input Password" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputNotelpon1" class="form-label">No Telepon</label>
                        <input type="notelp" class="form-control" id="exampleInputNoTelpon" placeholder="Input No Telepon">
                    </div>
                    <a id="emailHelp" class="form-text" href="{{  url('login') }}">Sudah buat akun? Log In</a>
                    <button type="login" class="btn btn-primary float-end">
                        <a href= "{{  url('login')  }}" style="text-decoration: none; color: white;">Sign Up</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection