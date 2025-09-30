<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->emailUser;
        $password = $request->passUser;

        if ($username == 'admin@gmail.com' && $password == 'admin') {
            // Login berhasil, redirect ke dashboard
            return redirect()->route('mainDashboard');
        }

        // Login gagal, kembali ke halaman login dengan pesan error
        return back()->with('error', 'Email atau password salah!');
    }
}
