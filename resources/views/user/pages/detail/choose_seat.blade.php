@extends('user.pages.landingPage')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/seat.css') }}">
    <div class="align-items-center d-flex flex-column justify-content-center mt-5">
        <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>Available</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat sold"></div>
            <small>Sold</small>
        </li>
        </ul>
            <div class="screen"></div>
            @php
                $modulus = $schedule->studio->seat%8;
            @endphp
            @for($i = 65; $i < floor(($schedule->studio->seat/8))+65; $i++)
            <div class="row">
                @for($x = 1; $x <= 8; $x++)
                <div class="seat {{ chr($i) . $x }} @if(in_array(chr($i) . $x, $seatCheck)) sold @endif" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="{{ chr($i) . $x }}"></div>
                @endfor
            </div>
            @endfor
            @if($modulus != 0)
            <div class="row">
                @for($ix = $i; $ix < $i+$modulus; $ix++)
                <div class="seat {{ chr($ix) . $x }} @if(in_array(chr($ix) . $x, $seatCheck)) sold @endif" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="{{ chr($ix) . $x }}"></div>
                @endfor
            </div>
            @endif
        </div>

        <p class="text justify-content-center d-flex">
        Kamu sudah memilih <span id="count">0</span> seat dengan total harga Rp. <span id="total">0</span>,00.-
        </p>
        <p class="text justify-content-center d-flex">Seat yang dipilih: <span id="seats"></span></p>

        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-primary" id="checkout" onclick="onSubmit()" disabled>Checkout</button>
        </div>
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body bg-success text-white">
                    <i class="fa fa-check text-white"></i> Berhasil Beli Ticket
                </div>
            </div>
        </div>
    </div>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        const container = document.querySelector(".container");
        const seats = document.querySelectorAll(".row .seat:not(.sold)");
        const count = document.getElementById("count");
        const total = document.getElementById("total");
        const seatPick = document.getElementById("seats");
        const movieSelect = document.getElementById("movie");
        const checkout = document.getElementById("checkout");

        populateUI();

        let ticketPrice = 35000;

        function onSubmit(){
            const selectedSeats = document.querySelectorAll(".row .seat.selected");

            const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

            const selectedSeatsCount = selectedSeats.length;

            const selectedSeatsNumber = [...selectedSeats].map((seat) => seat.classList[1]);

            const selectedSeatsPrice = selectedSeatsCount * ticketPrice;

            $.ajax({
                url: "/order_ticket",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id_user": "{{ Auth::user()->id }}",
                    "id_schedule": "{{ $schedule->id }}",
                    "seat": selectedSeatsNumber,
                    "quantity": selectedSeatsCount,
                    "total_price": selectedSeatsPrice
                },
                success: function(response){
                    console.log(response);
                    window.location.href = "{{ route('my_ticket') }}";
                },
                error: function(response){
                    console.log(response);
                }
            });
        }

        function updateSelectedCount() {
            const selectedSeats = document.querySelectorAll(".row .seat.selected");
            const selectedSeatsNumber = [...selectedSeats].map((seat) => seat.classList[1]);
            const selectedSeatsCount = selectedSeats.length;
            seatPick.innerText = selectedSeatsNumber;
            count.innerText = selectedSeatsCount;
            total.innerText = new Intl.NumberFormat("id-ID").format(selectedSeatsCount * ticketPrice);
            if (selectedSeatsCount > 0) {
                checkout.disabled = false;
            } else {
                checkout.disabled = true;
            }
        }


        function populateUI() {
            const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

            if (selectedSeats !== null && selectedSeats.length > 0) {
                seats.forEach((seat, index) => {
                if (selectedSeats.indexOf(index) > -1) {
                    console.log(seat.classList.add("selected"));
                }
                });
            }
        }

        container.addEventListener("click", (e) => {
        if (
            e.target.classList.contains("seat") &&
            !e.target.classList.contains("sold")
        ) {
            e.target.classList.toggle("selected");

            updateSelectedCount();
        }
        });

        updateSelectedCount();

        const toastTrigger = document.getElementById('checkout')
        const toastLiveExample = document.getElementById('liveToast')

        if (toastTrigger) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
            toastTrigger.addEventListener('click', () => {
                toastBootstrap.show()
            })
        }
    </script>
@endsection