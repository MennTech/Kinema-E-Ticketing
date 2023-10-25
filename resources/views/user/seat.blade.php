<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat</title>
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
     <!-- navbar -->
     <header class="navbar-light navbar-sticky header-static">
        <!-- Nav START -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-3 px-xl-5">
                <!-- Logo START -->
                <a class="navbar-brand" href="index.html">
                    <img class="light-mode-item navbar-brand-item" src="{{ asset('img/KINEMA-logo.png') }}" alt="logo">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-animation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">
                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll me-auto">
                        <!-- Nav item 1 Home -->
                        <li class="nav-item">
                            <a href="{{ url('home') }}" class="nav-link">Home</a>
                        </li>

                        <!-- Nav item 2 Food -->
                        <li class="nav-item">
                            <a href="{{ url('food') }}" class="nav-link">Food</a>
                        </li>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative">
                                <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                                <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                    <i class="fas fa-search fs-6 "></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <!-- Profile START -->
                <div class="ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="{{ url('profile') }}" id="profile" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="" aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="{{ asset('img/profile.png') }}" alt="avatar">
                    </a>
                </div>
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Nav END -->
    </header>

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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">
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
</body>
</html>