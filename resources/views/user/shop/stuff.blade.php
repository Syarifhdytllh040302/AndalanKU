@extends('user.shop.index')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/stuff/main.css') }}">

    <div class="container">
        <div class="row align-items-center my-4">
            <div class="col-md-4 col-sm-12">
                <h5 class="text-muted m-0"><a href="{{ route('home') }}" class="text-decoration-none text-muted">Halaman Utama</a> / <span class="text-black">Peralatan</span></h5>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="input-group">
                    <input type="text" name="search" id="search" placeholder="Cari Alat" class="form-control">
                    <button class="btn-danger btn">
                        <i class="fa fa-search text-white"></i>
                        Cari Sekarang
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 py-2" style="height: fit-content;">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-9 d-flex align-items-center p-2 w-100 justify-content-between border rounded-2">
                        <!-- Info jumlah -->
                        <div class="flex-grow-1 pe-3">
                            <p class="m-0 ps-1">Menampilkan 12 Alat dari 9999 Alat</p>
                        </div>

                        <!-- Dropdown sort -->
                        <div class="flex-shrink-0" style="min-width: 250px;">
                            <div class="dropdown w-100 d-flex justify-content-end">
                                <button class="btn btn-dark text-white dropdown-toggle d-flex justify-content-between align-items-center gap-2"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Urut Berdasarkan <i class="fa-solid fa-filter"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow w-100">
                                    <li><a class="dropdown-item" href="#">Terbaru</a></li>
                                    <li><a class="dropdown-item" href="#">Terlama</a></li>
                                    <li><a class="dropdown-item" href="#">Harga: Rendah ke Tinggi</a></li>
                                    <li><a class="dropdown-item" href="#">Harga: Tinggi ke Rendah</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 p-0">
                        @for ($i = 0; $i < 12; $i++)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
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
            <div class="col-lg-3 d-flex flex-column gap-2 mb-3">
                <!-- Kategori Harga -->
                <div class="row mx-2">
                    <button class="accordion-btn bg-dark text-white py-2 px-4 w-100 justify-content-between d-flex align-items-center border-0 rounded-2">
                        <span>Kategori Harga</span>
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <div class="accordion-content">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <label class="d-flex align-items-center gap-2">
                                    <input type="checkbox"><span class="fw-medium">Rp 0 - Rp 100.000</span>
                                </label>
                            </li>
                            <li class="mb-2">
                                <label class="d-flex align-items-center gap-2">
                                    <input type="checkbox"><span class="fw-medium">Rp 100.000 - Rp 500.000</span>
                                </label>
                            </li>
                            <li class="mb-2">
                                <label class="d-flex align-items-center gap-2">
                                    <input type="checkbox"><span class="fw-medium">Rp 500.000+</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

