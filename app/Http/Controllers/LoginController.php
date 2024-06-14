<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('login');
    }

    // Menangani proses autentikasi
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            return redirect()->intended('home');
        }

        // Autentikasi gagal
        return redirect('login')->withErrors(['login' => 'Login details are not valid']);
    }

    // Menangani logout
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
