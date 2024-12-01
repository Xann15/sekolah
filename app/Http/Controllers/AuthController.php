<?php

namespace App\Http\Controllers;

use App\User; // Pastikan untuk mengimpor model User dengan benar
use App\ProfileMadrasah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        $profile_madrasah = ProfileMadrasah::first();
        return view('auth.login', compact('profile_madrasah'));
    }

    // Menampilkan halaman register
    public function register()
    {
        $profile_madrasah = ProfileMadrasah::first();

        return view('auth.register', compact('profile_madrasah'));
    }

    // Proses autentikasi saat login
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/admin/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Proses penyimpanan user baru (register)
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm-password' => 'required|same:password'
        ]);

        // Menyiapkan data untuk disimpan ke dalam database
        $data = $request->except('confirm-password');
        $data['password'] = Hash::make($request->password);

        // Membuat user baru
        User::create($data);

        // Redirect ke halaman login setelah sukses register
        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
