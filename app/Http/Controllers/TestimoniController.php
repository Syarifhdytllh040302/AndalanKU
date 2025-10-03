<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TestimoniController
{
    public function home(){
        $active = "testimoni";
        $data = Cache::remember('testimoni_list', now()->addMinutes(10), function () {
            return Testimoni::all()->sortByDesc('created_at');
        });
        return view('admin.management.testimoni.testimoni', compact('active', 'data'));
    }

    public function tambah(){
        $active = "testimoni";
        return view('admin.management.testimoni.tambah', compact('active'));
    }

    public function store(Request $request){
        $testimoni = new Testimoni();

        $testimoni->nama_client = $request->nama_testimoni;
        $testimoni->nama_perusahaan = $request->nama_perusahaan;
        $testimoni->testimoni = $request->testimoni;

        Cache::forget('testimoni_list');

        $testimoni->save();

        return redirect()->route('adminTestimoni')->with('success', 'Testimoni berhasil ditambahkan');
    }

    public function edit($id){
        $testimoni = Testimoni::find($id);
        $active = 'testimoni';

        return view('admin.management.testimoni.edit', compact('testimoni', 'active'));
    }

    public function update(Request $request, $id){
        $testimoni = Testimoni::find($id);

        $testimoni->nama_client = $request->nama_testimoni;
        $testimoni->nama_perusahaan = $request->nama_perusahaan;
        $testimoni->testimoni = $request->testimoni;

        $testimoni->update();

        Cache::forget('testimoni_list');

        return redirect()->route('adminTestimoni')->with('success', 'Testimoni berhasil diubah');
    }

    public function delete($id){
        Testimoni::find($id)->delete();

        Cache::forget('testimoni_list');

        return redirect()->route('adminTestimoni')->with('success', 'Testimoni Berhasil dihapus');
    }
}
