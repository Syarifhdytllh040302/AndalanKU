@extends('user.shop.index')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/stuff/main.css') }}">

    <div class="container mb-5 mt-3">
        <div class="row my-2 d-flex justify-content-between align-items-center mb-3">
            <div class="col-6">
                <h5 class="text-muted m-0"><a href="{{ route('home') }}" class="text-decoration-none text-muted">Halaman Utama</a> / <span class="text-black">Nama Alat</span></h5>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{ route('homeProduct') }}" class="text-dark text-decoration-none">
                    <i class="fa-solid fa-arrow-left fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('img/index/dummy-image.jpg') }}" alt="Gambar Produk" class="w-100 border-2" style="object-fit: cover;">
            </div>
            <div class="col-lg-6">
                <h5 class="text-danger mb-4 mt-sm-4">Kategori Alat</h5>
                <div class="d-flex justify-content-between">
                    <h4 class="fw-semibold mb-0">Nama Alat</h4>
                    <h4 class="mb-0">4.7 <i class="fa-solid fa-star" style="color: gold"></i></h4>
                </div>
                <hr>
                <p class="text-muted">Deskripsi Singkat dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="gap-2 d-flex align-items-center">
                        <span class="fw-bold"><del>Rp 100.000</del></span> <span class="fw-bold fs-4 text-danger">Rp 90.000</span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex mb-3 justify-content-between">
                    <h4>Produk Terkait</h4>
                    <a href="{{ route('homeProduct') }}" class="text-decoration-none fw-semibold text-danger align-self-center">Lihat Semua</a>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-12 overflow-auto">
                        <div class="d-flex flex-row gap-3 flex-nowrap">
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                    <div class="card h-100 shadow-sm border-0 rounded-3">
                                        <!-- Gambar Produk -->
                                        <div class="card-img position-relative">
                                            <img src="{{ asset('img/index/dummy-image.jpg') }}"
                                                class="w-100 rounded-top-3"
                                                style="height: 280px; object-fit: cover;"
                                                alt="Nama Alat">

                                            <!-- Kategori -->
                                            <span class="badge bg-dark kategori-stuff m-2 px-3 py-2 rounded-2">
                                                Peralatan Ulang Tahun
                                            </span>

                                            <!-- Tombol Detail -->
                                            <a href="{{ route('detailProduct') }}"
                                                class="btn btn-danger btn-sm detail-hover position-absolute rounded-2 px-4 py-2 fw-semibold">Detail Barang
                                            </a>
                                        </div>

                                        <!-- Body Card -->
                                        <div class="card-body text-center">
                                            <!-- Nama Produk -->
                                            <h5 class="fw-semibold text-dark mb-2">Nama Barang</h5>

                                            <!-- Harga -->
                                            <div class="d-flex justify-content-center align-items-center gap-2 mb-2">
                                                <span class="text-muted text-decoration-line-through fw-semibold">
                                                    Rp {{ number_format(1200000, 0, ',', '.') }}
                                                </span>
                                                <span class="text-danger fs-5 fw-bold">
                                                    Rp {{ number_format(900000, 0, ',', '.') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
