@extends('admin.main')

@section('title', 'Client')
@section('subtitle', 'Kelola data Client Andalanku mulai dari menambah, mengedit, hingga menghapus produk yang tersedia.')

@section('content')
<div class="row d-flex justify-content-between align-items-center">
    <div class="mb-3 col-6">
        <input type="text" id="search-nama" class="form-control" placeholder="Cari berdasarkan client produk...">
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
                        <th>Logo Client</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 50; $i++)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>Client {{ $i + 1 }}</td>
                        <td><img src="{{ asset('img/index/client/Kemnaker.png') }}" class="img-fluid" alt="Logo Client" width="150"/></td>
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
