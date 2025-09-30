@extends('admin.main')

@section('title', 'Testimoni')
@section('subtitle', 'Kelola data Testimoni Andalanku mulai dari menambah, mengedit, hingga menghapus produk yang tersedia.')

@section('content')
<div class="row d-flex justify-content-between align-items-center">
    <div class="mb-3 col-6">
        <input type="text" id="search-nama" class="form-control" placeholder="Cari berdasarkan nama testimoni...">
    </div>
    <div class="col-auto">
        <a href="#" class="btn btn-primary">
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
                        <th>Nama Client</th>
                        <th>Nama Perusahaan</th>
                        <th>Testimoni</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 50; $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>Client {{ $i + 1 }}</td>
                        <td>{{ ['PT Sejahtera', 'PT Anugrah', 'PT Hidayah', 'PT Syariah', 'PT Karya'][rand(0, 4)] }}</td>
                        <td>{{ ['Produknya sangat bagus', 'Saya sangat puas dengan produknya', 'Produknya sangat memuaskan', 'Produknya sangat berkualitas', 'Produknya sangat terjangkau'][rand(0, 4)] }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-sm btn-primary">
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
