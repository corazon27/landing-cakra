<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman login kendali pusat.
     */
    public function showLoginForm()
    {
        // Cek jika admin sudah login, langsung lempar ke dashboard
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Menangani proses masuk (Login).
     */
    public function login(Request $request)
    {
        // 1. Validasi input: hanya butuh username dan password
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        // 2. Eksekusi login menggunakan guard 'admin'
        // 'remember' digunakan jika Anda mencentang "Ingat sesi saya" di form
        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            
            // Regenerasi session untuk keamanan (mencegah session fixation)
            $request->session()->regenerate();

            // Berhasil login! Masuk ke management center
            return redirect()->intended(route('admin.dashboard'));
        }

        // 3. Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'username' => 'Identitas administrator tidak cocok dengan data kami.',
        ])->onlyInput('username');
    }

    /**
     * Menangani proses keluar (Logout).
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}