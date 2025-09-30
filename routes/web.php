<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home.home');
})->name('home');

Route::get('/produk', function () {
    return view('user.shop.stuff');
})->name('homeProduct');

Route::get('/detail', function () {
    return view('user.shop.detail');
})->name('detailProduct');

Route::get('/galeri', function () {
    return view('user.home.galeri.list');
})->name('listGaleri');

Route::prefix('admin')->group(function () {
    Route::get('login', function () {
        return view('admin.auth.login');
    });

    Route::post('authLogin', [AuthController::class, 'index'])->name('authLogin');

    Route::get('main', [DashboardController::class, 'index'])->name('mainDashboard');

    Route::get('produk', function () {
        return view('admin.management.produk.produk',['active' => 'produk']);
    })->name('adminProduct');

    Route::get('client', function () {
        return view('admin.management.client.client',['active' => 'client']);
    })->name('adminClient');

    Route::get('galeri', function () {
        return view('admin.management.galeri.galeri',['active' => 'galeri']);
    })->name('adminGaleri');

    Route::get('kategori', function () {
        return view('admin.management.kategori.kategori',['active' => 'kategori']);
    })->name('adminKategori');

    Route::get('testimoni', function () {
        return view('admin.management.testimoni.testimoni',['active' => 'testimoni']);
    })->name('adminTestimoni');

    Route::get('/tambah-produk', function () {
        return view('admin.management.produk.tambah',['active' => 'produk']);
    })->name('tambahProduk');

    Route::get('/edit-produk', function () {
        return view('admin.management.produk.edit',['active' => 'produk']);
    })->name('editProduk');
});
