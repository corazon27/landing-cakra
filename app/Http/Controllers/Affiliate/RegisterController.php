<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\AffiliateUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Tambahkan import ini untuk login otomatis
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    // File: app/Http/Controllers/Affiliate/RegisterController.php

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:affiliate_users',
            'whatsapp' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $firstName = explode(' ', trim($request->name))[0];
        
        $cleanName = strtoupper(preg_replace('/[^A-Za-z0-9]/', '', $firstName));

        $referralCode = 'CAKRA-' . $cleanName . rand(100, 999);

        while (AffiliateUser::where('referral_code', $referralCode)->exists()) {
            $referralCode = 'CAKRA-' . $cleanName . rand(100, 999);
        }

        $user = AffiliateUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'password' => Hash::make($request->password),
            'referral_code' => $referralCode,
        ]);

        // Kirim email verifikasi (Mailtrap)
        event(new Registered($user));

        // 2. Login secara manual ke guard affiliate agar session terbentuk
        Auth::guard('affiliate')->login($user);

        // 3. Redirect ke rute 'verification.notice' yang menampilkan verify-email.blade.php
        return redirect()->route('verification.notice');
        }
}