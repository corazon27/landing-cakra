<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // 1. Hitung Total Komisi dari proyek yang sudah selesai/tercatat
        $totalKomisi = Project::where('affiliate_user_id', $user->id)
            ->sum('commission_amount');

        // 2. Hitung Total Proyek (Referral yang jadi klien)
        $totalProyek = Project::where('affiliate_user_id', $user->id)
            ->count();

        $totalPendapatan = Project::where('affiliate_user_id', $user->id)
            ->where('status', 'completed') // Hanya yang sudah selesai
            ->sum('commission_amount');

            // 2. Total yang sudah pernah ditarik (dan sukses)
        $totalDitarik = Withdrawal::where('affiliate_user_id', $user->id)
            ->where('status', 'success')
            ->sum('amount');

        // 3. Saldo yang bisa ditarik saat ini
        $saldoTersedia = $totalPendapatan - $totalDitarik;

        // 3. Ambil Total Klik (Asumsi Anda punya kolom 'clicks' di tabel affiliate_users)
        $totalKlik = $user->clicks ?? 0;

        return view('affiliate.dashboard', compact(
            'saldoTersedia',
            'totalPendapatan',
            'totalKomisi', 
            'totalProyek', 
            'totalKlik'
        ));
    }
    
    public function riwayat()
    {
        $recentProjects = Project::where('affiliate_user_id', Auth::id())
            ->latest()
            ->paginate(5); // Hanya ambil 5 data per halaman (Server-side)

        return view('affiliate.riwayat', compact('recentProjects'));
    }

   public function withdrawPage()
    {
        $user = Auth::user();
        
        $totalPendapatan = Project::where('affiliate_user_id', $user->id)
            ->where('status', 'completed')
            ->sum('commission_amount');

        $totalDitarik = Withdrawal::where('affiliate_user_id', $user->id)
            ->where('status', 'success')
            ->sum('amount');

        $saldoTersedia = $totalPendapatan - $totalDitarik;

        // Pastikan ketiga variabel ini dikirim ke view
        return view('affiliate.withdraw', compact(
            'saldoTersedia', 
            'totalPendapatan', 
            'totalDitarik'
        ));
    }

    // Method 2: Untuk memproses input form
    public function processWithdraw(Request $request)
    {
        $user = Auth::user();
        
        // Hitung saldo ulang untuk validasi keamanan
        $totalPendapatan = Project::where('affiliate_user_id', $user->id)
            ->where('status', 'completed')
            ->sum('commission_amount');
        $totalDitarik = Withdrawal::where('affiliate_user_id', $user->id)
            ->where('status', 'success')
            ->sum('amount');
        $saldoTersedia = $totalPendapatan - $totalDitarik;

        $request->validate([
            'amount' => "required|numeric|min:50000|max:$saldoTersedia",
        ]);

        Withdrawal::create([
            'affiliate_user_id' => $user->id,
            'amount' => $request->amount,
            'status' => 'pending',
            'bank_name' => $user->bank_name,
            'account_number' => $user->account_number,
            'account_name' => $user->account_holder_name,
        ]);

        return redirect()->route('affiliate.withdraw')->with('success', 'Permintaan terkirim!');
    }    
}