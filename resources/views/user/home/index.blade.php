@extends('user.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home/index.css') }}">

<section id="hero-section">
    <div class="container py-5 text-white">
        <div class="row">
            <div class="col-md-7 d-flex flex-column justify-content-center align-items-start" data-aos="fade-right" data-aos-duration="1000">
                <h1 style="font-weight: bold">SEMUA BISA JADI SPEKTAKULER,<br>KALAU ANDALANKU YANG URUS.</h1>
                <p>Alat Lengkap, Event Hebat!</p>
                <a href="#" class="mt-4 button-sewa">
                    <span>Sewa Sekarang</span><i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Animated line at the bottom -->
    <div id="progress-bar"></div>
</section>

@include('user.home.category')

@include('user.home.service')

@include('user.home.reason')

@include('user.home.client')

<script src="{{ asset('js/home/index.js') }}"></script>
@endsection
