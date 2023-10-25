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
        img{
            vertical-align: middle;
        }
        li{
            margin-left: 15px;
            margin-top: 9px;
            display: flex;
        }
        .main{
            margin: auto;
            margin-bottom: 10px;
            max-width: 850px;
            background-color: #FFF;
            padding: 10px;
            margin-top: 50px;
        }
        .title{
            color: white; 
            font-size: 20px;
        }
        span{
            color: black;
            font-weight: bold;
        }
        .btn{
            font-size: 16px;
        }
        .list-group{
            list-style: none;
        }
        .food_bevarage_img{
            width: 150px;
            height: 200px;
            margin-right: 10px;
        }
        .list-group-item{
            position: relative;
            display: block;
            padding: 10px 15px;
            width: 620px;
        }
        .row{
            margin-right: -15px;
            margin-left: -15px;
        }
        .btn-bayar{
            margin-left: 520px;
        }
        .qris{
            width: 20%;
        }
    </style>
</head>
<body style="background-color: #FFDFDF;">

    <div class="main">
        <div class="title">
            <p style="margin-bottom: 1px"><span>Food & Bevarage - PAKUWOM MALL KINEMA</span></p>
            <!-- Button back home -->
            <button type="button" onclick="history.back()" class="btn btn-link"><< Back</button>
        </div>
        <hr>
        <div class="nav nav-tabs">Food & Bevarage</div>
        <div class="tab-content" id="tab">
            <div class="tap-pane" role="tabpanel" aria-labelledby="food_bevarage-tab">
                <ul class="list-group">
                    <li class="outer"style="background-color: #f5f5f5;">
                        <a class="image-link pull-left gap-left" href="{{ asset('img/combo1.jpg') }}"> 
                            <img src="{{ asset('img/combo1.jpg') }}" class="food_bevarage_img">
                        </a>
                        <ul class="list-group" style="overflow-x: hidden">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <input class="form-check-input" type="checkbox" value="combo1" id="flexCheckDefault">
                                        Cornell Combo 1 with Matcha Latte
                                        <div style="font-size: 9pt; margin-left: 20px">
                                            1 Popcorn Cornell (S) + 1 Matcha Latte
                                        </div>
                                    </div>
                                    <div class="col-sm-2" style="text-align: right;">Rp 70.000</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="outer"style="background-color: #f5f5f5;">
                        <a class="image-link pull-left gap-left" href="{{ asset('img/combo2.jpg') }}"> 
                            <img src="{{ asset('img/combo2.jpg') }}" class="food_bevarage_img">
                        </a>
                        <ul class="list-group" style="overflow-x: hidden">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <input class="form-check-input" type="checkbox" value="combo2" id="flexCheckDefault">
                                        Cornell Combo 2 with Milo Dinosaurs
                                        <div style="font-size: 9pt; margin-left: 20px">
                                            1 Popcorn Cornell (S) + 1 Milo Dinosaurs
                                        </div>
                                    </div>
                                    <div class="col-sm-2" style="text-align: right;">Rp 80.000</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="outer"style="background-color: #f5f5f5;">
                        <a class="image-link pull-left gap-left" href="{{ asset('img/combo3.jpg') }}"> 
                            <img src="{{ asset('img/combo3.jpg') }}" class="food_bevarage_img">
                        </a>
                        <ul class="list-group" style="overflow-x: hidden">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <input class="form-check-input" type="checkbox" value="combo2" id="flexCheckDefault">
                                        Cornell Combo 3 with Hojicha Latte
                                        <div style="font-size: 9pt; margin-left: 20px">
                                            1 Popcorn Cornell (S) + 1 Hojicha Latte
                                        </div>
                                    </div>
                                    <div class="col-sm-2" style="text-align: right;">Rp 70.000</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="outer"style="background-color: #f5f5f5;">
                        <a class="image-link pull-left gap-left" href="{{ asset('img/serbu1.jpg') }}"> 
                            <img src="{{ asset('img/serbu1.jpg') }}" class="food_bevarage_img">
                        </a>
                        <ul class="list-group" style="overflow-x: hidden">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <input class="form-check-input" type="checkbox" value="serbu1" id="flexCheckDefault">
                                        Serbu 1 with Soft Drink (S)
                                        <div style="font-size: 9pt; margin-left: 20px">
                                            1 Popcorn Salt + 1 Soft Drink (S)
                                        </div>
                                    </div>
                                    <div class="col-sm-2" style="text-align: right;">Rp 25.000</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="outer"style="background-color: #f5f5f5;">
                        <a class="image-link pull-left gap-left" href="{{ asset('img/serbu2.jpg') }}"> 
                            <img src="{{ asset('img/serbu2.jpg') }}" class="food_bevarage_img">
                        </a>
                        <ul class="list-group" style="overflow-x: hidden">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <input class="form-check-input" type="checkbox" value="serbu2" id="flexCheckDefault">
                                        Serbu 2 with Soft Drink (S)
                                        <div style="font-size: 9pt; margin-left: 20px">
                                            1 Popcorn Sweet + 1 Soft Drink (S)
                                        </div>
                                    </div>
                                    <div class="col-sm-2" style="text-align: right;">Rp 25.000</div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Button Trigger Modal -->
                <div class="btn-bayar">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">
                        Bayar
                    </button>
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

    <!-- (scripts and assets) -->
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection