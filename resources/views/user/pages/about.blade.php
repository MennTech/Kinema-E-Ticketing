@extends('user/pages/landingPage')

@section('content')
    <style>
        .container_heading {
            position: relative;
            text-align: center;
        }
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 80%;
        }
        h2 {
            font-family: 'Montserrat', sans-serif
        }
    </style>
    {{-- About View --}}
    <div class="container_heading">
        <img src="https://asset-2.tstatic.net/muria/foto/bank/images/Ilustrasi-bioskop-nonton-bioskop171.jpg" alt="" style="width: 100%; height: auto; vertical-align: middle; margin-top: -100px;">
        <div class="content">
            <div class="heading justify-content-center">
                <h3>Nonton Film Bareng Siapa Aja</h3>
                <br>
                <h3>Nyaman dan Eksklusif di Kinema</h3>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="display-4 mb-4">Tentang KINEMA</h2>
                <p class="lead">Menyajikan pengalaman menonton film yang tak terlupakan.</p>
                <p>Di Kinema, kami menjadikan pengalaman menonton film lebih dari sekadar hiburan. Dari teknologi canggih hingga suasana yang elegan, kami memastikan setiap detik yang Anda habiskan di sini penuh dengan kesan tak terlupakan.</p>
            </div>
            <div class="col-lg-6">
                <img src="https://mmc.tirto.id/image/2019/03/25/ilustrasi-nonton-bioskop-istock---1_ratio-16x9.jpg" alt="Bioskop" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
@endsection