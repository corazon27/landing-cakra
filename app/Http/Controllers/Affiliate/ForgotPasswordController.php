<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\AffiliateUser;

class ForgotPasswordController extends Controller
{
    // 1. Tampilkan Halaman Form Minta Link Reset
    public function showLinkRequestForm()
    {
        return view('affiliate.auth.forgot-password');
    }

    // 2. Proses Kirim Email Reset Password via Mailtrap
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:affiliate_users,email', // Pastikan nama tabel users/affiliates sesuai
        ], [
            'email.exists' => 'Alamat email tidak terdaftar di sistem kami.'
        ]);

        $token = Str::random(64);

        // Simpan atau update token ke dalam tabel bawaan laravel 'password_reset_tokens'
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => Hash::make($token),
                'created_at' => now()
            ]
        );

        $actionUrl = route('password.reset', ['token' => $token, 'email' => $request->email]);

        // Kirim email menggunakan view template html beralaskan Mailtrap config Anda
        Mail::send('emails.forgot-password', ['actionUrl' => $actionUrl], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Akun Affiliate - Cakra Inovasi');
        });

        return back()->with('success', 'Kami telah mengirimkan link reset password ke email kamu!');
    }

    // 3. Tampilkan Form Pembuatan Password Baru
    public function showResetForm(Request $request, $token)
    {
        return view('affiliate.auth.reset-password', [
            'token' => $token,
            'email' => $request->email
        ]);
    }

    // 4. Proses Eksekusi Update Password Baru ke Database
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:affiliate_users,email', // Pastikan nama tabel affiliate_users sesuai
            'password' => 'required|min:8|confirmed',
        ], [
            'password.confirmed' => 'Konfirmasi password baru tidak cocok.'
        ]);

        $resetData = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        // Validasi kecocokan token hancuran Hash
        if (!$resetData || !Hash::check($request->token, $resetData->token)) {
            return back()->withErrors(['email' => 'Token reset password tidak valid atau sudah kedaluwarsa.']);
        }

        // Update Password User
        $user = AffiliateUser::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Hapus token agar tidak bisa digunakan kembali (Sekali pakai)
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->route('affiliate.login')->with('success', 'Password kamu berhasil diperbarui! Silakan masuk.');
    }
}