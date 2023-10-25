@extends('user/body')
@section('content')
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Fonts Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <style>
        header{
            position: relative;
            z-index: 1020;
            background: white;
        }
        .narbar-expand-x1{
            flex-wrap: nowrap;
            justify-content: flex-start;
        }
        .container-fluid{
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-brand-item{
            width: 150px;
        }
        .avatar-img{
            width: 20%;
        }
        .main{
            margin: auto;
            margin-bottom: 10px;
            background-color: #FFF;
            padding: 10px;
        }
        .box-seat{
            background-color: white;
            margin-left: 70px;
        }
        .movie-seat{
            margin-right: 10px;
            margin-left: 10px;
            overflow: auto;
        }
        .body{
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }
        tr{
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        th{
            width: 25px;
            text-align: left;
        }
    </style>
</head>
<body style="background-color: #FFDFDF;">
    <!-- Main START -->
    <div class="main">
        <div class="box-title">
            <hr>
            <div style="text-align: left; padding-left:10px; font-size: 12px; font-weight: bold;">PETUALANGAN SHERINA 2</div>
            <div style="font-size: 11px; text-align: left; padding-left: 10px; margin-bottom: 10px">
                <p>Cinema:
                    <span style="font-weight: bold">PAKUWON MALL KINEMA</span>
                </p>
                <p>Studio:
                    <span style="font-weight: bold">4</span>
                </p>
                <p>Date:
                    <span style="font-weight: bold">25-10-2023</span>, Time: 
                    <span style="font-weight: bold">12:15</span>
                </p>                 
            </div>
        </div>
        <div class="box-seat" style="max-width:90%; margin-top:60px">
            <div class="movie-seat">
                <table>
                    <!-- Seat START -->
                    <div class="body">
                        <tr>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    A
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    B
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    C
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    D
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    E
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                            <th>				
                                <a href="#" name="seats" id="link_A1" onclick="SelectSeat(this.id); return false;">
                                    <img src="{{ asset('img/seat_free.png') }}" id="seat_free">
                                </a>
                            </th>
                        </tr>
                    </div>
                    <!-- Seat END -->
                </table>
                <span style="text-align: center; font-size: 24px;">SCREEN</span>
                <hr>
                <!-- Button Trigger Modal -->
                <div class="btn-bayar">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">
                        Confirm Order
                    </button>
                    <button type="button" onclick="history.back()" class="btn btn-link">Cancel</button>
                </div>
                    <!-- Modal -->
                <div class="modal fade" id="paymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="paymentModalLabel">Metode Pembayaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <td>
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#cashlesspaymentModal" style="background-color: #FFDFDF;">
                                        Cashless
                                    </button>
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#qrispaymentModal" style="background-color: #FFDFDF;">
                                        Qris
                                    </button>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="cashlesspaymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cashlesspaymentModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <h5 class="modal-title" id="cashlesspaymentModalLabel">Pembayaran Berhasil</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="qrispaymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="qrispaymentModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('img/qris.png') }}" alt="qris">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main END -->

     <!-- (scripts and assets) -->
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection