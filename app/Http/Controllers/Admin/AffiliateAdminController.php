<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AffiliateUser;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class AffiliateAdminController extends Controller
{
    /**
     * Menampilkan daftar semua affiliator yang terdaftar.
     */
    public function index()
    {
        // Mengambil semua data affiliator, diurutkan dari yang terbaru
        // Kita juga bisa menggunakan paginate(10) jika datanya sudah banyak
        $affiliates = AffiliateUser::latest()->get();

        return view('admin.affiliates.index', compact('affiliates'));
    }

    /**
     * Melihat detail satu affiliator (Opsional: untuk melihat performa spesifik)
     */
    public function show($id)
    {
       // Mengambil data affiliator beserta proyek-proyek yang mereka bawa
        $affiliate = \App\Models\AffiliateUser::with('projects')->findOrFail($id);

        return view('admin.affiliates.show', compact('affiliate'));
    }

    /**
     * Menghapus affiliator jika diperlukan (Moderasi)
     */
    public function destroy($id)
    {
        $affiliate = AffiliateUser::findOrFail($id);
        $affiliate->delete();

        return redirect()->back()->with('success', 'Data affiliator berhasil dihapus.');
    }

    public function indexWithdrawals()
    {
        // Mengambil data withdrawal beserta data affiliator-nya
        // latest() agar pengajuan terbaru muncul paling atas
        $withdrawals = Withdrawal::with('affiliateUser')
            ->latest()
            ->paginate(15); // Gunakan paginate agar dashboard admin tidak berat jika data ribuan

        return view('admin.withdrawals.index', compact('withdrawals'));
    }

    public function approve($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        
        // Ubah status jadi success
        $withdrawal->update([
            'status' => 'success'
        ]);

        return back()->with('success', 'Permintaan dana berhasil disetujui. Saldo affiliator telah terpotong secara sistem.');
    }

    public function reject(Request $request, $id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        
        $withdrawal->update([
            'status' => 'rejected',
            'admin_note' => $request->note
        ]);

        return back()->with('error', 'Permintaan dana telah ditolak.');
    }
}