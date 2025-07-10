<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin() {
        return view('input.login');
    }

    public function showRegister() {
        return view('input.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 0, // default user
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Cek apakah email terdaftar
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->with('error', 'Akun belum terdaftar');
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

        // Redirect sesuai role
            if (Auth::user()->role === 1) {
                return redirect()->intended('/')->with('success', 'Berhasil login sebagai Admin.');
            }
            return redirect()->route('home')->with('success', 'Berhasil login.');
        }
        // Ganti from withErrors → with('error', ...) agar bisa dibaca oleh <x-alert>
        return back()->with('error', 'Email atau password salah');
    }


    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
