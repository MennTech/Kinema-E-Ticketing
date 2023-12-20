@extends('user/pages/landingPage')

@section('content')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    {{-- Food View --}}
    <div class="container border my-3" style="max-width: 830px;">
        <p class="fw-semibold fs-5">Food - KINEMA HOUSE</p>
        <hr>
        <div class="row pb-3">
            @foreach ($foods as $item)
                <div class="col-12">
                    <div class="card my-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <img src="image_food/{{ $item->image }}" alt="" style="width: 109px; height: 109px;">
                                </div>
                                <div class="col-10">
                                    <p class="fw-medium">{{ $item->nama }}</p>
                                    <p class="fw-medium" >Harga: Rp {{ $item->harga }}</p>
                                    <input type="hidden" class="harga" value="{{ $item->harga }}">
                                    <input type="hidden" class="nama" value="{{ $item->nama }}">
                                    <hr>
                                    <div class="row">
                                        <div class="col-1 pe-0">
                                            <button class="btn btn-light border-0 increment"><i class="fa-solid fa-plus"></i></button>
                                        </div>
                                        <div class="col-1 pe-0 ps-0">
                                            <input type="number" class="form-control bg-white text-center jumlah" disabled value="0">
                                        </div>
                                        <div class="col-1 ps-0 ms-1">
                                            <button class="btn btn-light border-0 decrement"><i class="fa-solid fa-minus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row">
            <div class="col-6">
                <p class="fs-4 fw-semibold mb-0" id="total">Total: Rp 0</p>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary mb-0 float-end" id="btnBayar" onclick="onSubmit({{ Auth::user()->id ?? 0 }})" disabled>Bayar</button>
            </div>
        </div>
        <hr>
    </div>

    <script>
        let increments = document.querySelectorAll('.increment');
        let decrements = document.querySelectorAll('.decrement');
        let jumlahs = document.querySelectorAll('.jumlah');
        let harga = document.querySelectorAll('.harga');
        let nama = document.querySelectorAll('.nama');
        let btnBayar = document.querySelector('#btnBayar');
        let totalHarga = document.querySelector('#total');
        let total=0;
        let food = {};
    
        increments.forEach(function(increment, index) {
            increment.addEventListener('click', function() {
                jumlahs[index].value = parseInt(jumlahs[index].value) + 1;
                decrements[index].disabled = false;
                total = total + (1 * harga[index].value);
                let foodName = nama[index].value;

                food[foodName] = {
                    "nama": foodName,
                    "jumlah": parseInt(jumlahs[index].value),
                    "harga": parseInt(harga[index].value) * parseInt(jumlahs[index].value)
                };
                totalHarga.innerHTML = "Total: Rp " + total;
                if (total <= 0) {
                    btnBayar.disabled = true;
                } else {
                    btnBayar.disabled = false;
                }
            });
        });
    
        decrements.forEach(function(decrement, index) {
            decrement.addEventListener('click', function(){
                jumlahs[index].value = parseInt(jumlahs[index].value) - 1;
                decrements[index].disabled = jumlahs[index].value <= 0;
                total = total - (harga[index].value * 1);
                let foodName = nama[index].value;

                food[foodName] = {
                    "nama": foodName,
                    "jumlah": parseInt(jumlahs[index].value),
                    "harga": parseInt(harga[index].value) * parseInt(jumlahs[index].value)
                };
                totalHarga.innerHTML = "Total: Rp " + total;
                if (total <= 0) {
                    btnBayar.disabled = true;
                } else {
                    btnBayar.disabled = false;
                }
            });

        });
    
        jumlahs.forEach(function(jumlah, index) {
            decrements[index].disabled = jumlah.value <= 0;
        });

        function onSubmit(id) {
            if (id != 0) {
                $.ajax({
                    url: "/order_food",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id_user": id,
                        "food": food,
                        "total": total
                    },
                    success: function(response){
                        console.log(response);
                        window.location.href = "{{ route('home') }}";
                    },
                    error: function(response){
                        console.log(response);
                    }
                });
            } else {
                window.location.href = "{{ route('login') }}";
            }
        }

    </script>
@endsection