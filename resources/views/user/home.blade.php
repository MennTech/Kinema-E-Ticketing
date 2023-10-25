@extends('user/body')

@section('content')
<div class="ps-2">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/image1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/image2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/images/image3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="col-md-4">
        <h2 class="mt-5" style="padding: 10px;"><strong>Welcome, Gojo Satoru</strong></span></h2>
            <select id="inputState" class="form-select" style="float: right;">
                <option>KINEMA Galeria Mall Jogja</option>
            </select>
    </div>
    
    <div class= "col-md-4">
        <h2 class="mt-5" style="padding: 10px;"><strong>Sedang Tayang</strong></h2>
            <div style="overflow-x: scroll; white-space: nowrap; width: 100vw; display: flex;">
                <img src="/images/movie1.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie2.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie3.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie4.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie5.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie6.png" class="card-img-top" style="margin-right: 1%;">
            </div>
    
        <h2 class="mt-5" style="padding: 10px;"><strong>Coming Soon</strong></h2>
            <div style="overflow-x: scroll; white-space: nowrap; width: 100vw; display: flex;">
                <img src="/images/movie7.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie8.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie9.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie10.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie11.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie12.png" class="card-img-top" style="margin-right: 1%;">
                <img src="/images/movie13.png" class="card-img-top" style="margin-right: 1%;">
            </div>
    </div>
</div>
@endsection