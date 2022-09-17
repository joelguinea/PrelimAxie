@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-3">
  
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://watcher.guru/news/wp-content/uploads/2021/11/Axie-Infinity-DEX-1160x653.jpg.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://wallpaperaccess.com/full/6329154.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://www.noypigeeks.com/wp-content/uploads/2021/10/Axie-Infinity-Guide-NoypiGeeks.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>

@endsection

<style>
    img {
        width: 100%;
    }
</style>
