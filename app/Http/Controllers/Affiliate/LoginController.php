<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AffiliateUser;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // 1. Validasi Input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. Percobaan Login menggunakan guard 'affiliate'
        if (Auth::guard('affiliate')->attempt($credentials)) {
            $request->session()->regenerate();

            // Jika berhasil, arahkan ke dashboard affiliate
            return redirect()->intended('/affiliate/dashboard');
        }

        // 3. Jika gagal, balikkan dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password yang kamu masukkan salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('affiliate')->logout();

        // $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/affiliate/login');
    }
}