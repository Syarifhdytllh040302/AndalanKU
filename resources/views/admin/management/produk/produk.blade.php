@extends('admin.main')

@section('title', 'Produk')
@section('subtitle', 'Kelola data produk Andalanku mulai dari menambah, mengedit, hingga menghapus produk yang tersedia.')

@section('content')
<div class="row d-flex justify-content-between align-items-center">
    <div class="col-6">
        <input type="text" id="search-nama" class="form-control" placeholder="Cari berdasarkan nama produk...">
    </div>

    <div class="col-auto">
        <a href="{{ route('tambahProduk') }}" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i>
            <span class="fw-semibold">Tambah Data</span>
        </a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12">
        <div class="table-responsive">
            <table id="produk-table" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 50; $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>Produk {{ $i + 1 }}</td>
                        <td>Ini deskripsi produk ke-{{ $i + 1 }}</td>
                        <td>{{ ['Elektronik', 'Fashion', 'Makanan', 'Alat Rumah', 'Kesehatan'][rand(0, 4)] }}</td>
                        <td>Rp {{ number_format(rand(100000, 999999), 0, ',', '.') }}</td>
                        <td><img src="{{ asset('img/index/dummy-image.jpg') }}" class="img-fluid" alt="Gambar Produk" width="55"/></td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('editProduk') }}" class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
