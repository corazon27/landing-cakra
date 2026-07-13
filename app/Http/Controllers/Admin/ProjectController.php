<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AffiliateUser;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. Ambil data proyek dari database
        // Kita gunakan with('affiliateUser') agar tidak 'N+1 query problem' saat memanggil nama affiliator
        $projects = \App\Models\Project::with('affiliateUser')->latest()->get();

        // 2. Kembalikan ke view dengan membawa data projects
        return view('admin.projects.index', compact('projects'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil data affiliator untuk pilihan di dropdown form
        $affiliates = \App\Models\AffiliateUser::all();
        return view('admin.projects.create', compact('affiliates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'project_name' => 'required',
            'total_price' => 'required|numeric',
        ]);

        // Hitung komisi (misal 10%)
        $commission = $request->total_price * 0.10;

        \App\Models\Project::create([
            'affiliate_user_id' => $request->affiliate_user_id, // Bisa kosong jika klien mandiri
            'client_name' => $request->client_name,
            'project_name' => $request->project_name,
            'total_price' => $request->total_price,
            'commission_amount' => $commission,
            'status' => 'pending', // Default: Menunggu DP
        ]);

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil dicatat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = \App\Models\Project::findOrFail($id);

        $affiliates = \App\Models\AffiliateUser::all();

        // 3. Kirim kedua variabel ke view
        return view('admin.projects.edit', compact('project', 'affiliates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Cari data dulu (Wajib!)
        $project = \App\Models\Project::findOrFail($id);

        // Validasi dengan pesan kustom (opsional untuk debug)
        $request->validate([
            'client_name'   => 'required|string|max:255',
            'project_name'  => 'required|string|max:255',
            'total_price'   => 'required|numeric',
            'status'        => 'required|in:pending,development,completed', // Pastikan status sesuai pilihan
        ]);

        // Hitung komisi 10%
        $commission = $request->total_price * 0.10;

        // Gunakan update dengan pengaman
        $project->update([
            // Jika di form edit tidak ada pilihan affiliator, kita tetap pakai yang lama
            'affiliate_user_id' => $request->affiliate_user_id ?? $project->affiliate_user_id,
            'client_name'       => $request->client_name,
            'project_name'      => $request->project_name,
            'total_price'       => $request->total_price,
            'commission_amount' => $commission,
            'status'            => $request->status,
        ]);

        // Redirect dengan notifikasi
        return redirect()->route('admin.projects.index')->with('success', 'Data proyek berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    // 1. Cari data proyek berdasarkan ID sebelum dihapus
    $project = \App\Models\Project::findOrFail($id);

    // 2. Jalankan perintah hapus
    $project->delete();

    // 3. Redirect kembali ke halaman utama dengan pesan sukses
    return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil dihapus selamanya!');
}
}