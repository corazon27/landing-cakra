<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver; // Menggunakan driver GD bawaan PHP

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'judul' => 'required|string|max:255',
            'filter' => 'required|string',
            'kategori' => 'required|string',
            'klien_industri' => 'required|string',
            'durasi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072', // Maksimal 3MB
            'deskripsi_singkat' => 'required|string',
            'pain_points' => 'required|array',
            'tech_stack' => 'required|array',
            'fitur_utama' => 'required|array',
            'impact_stat_1' => 'required|string',
            'impact_desc_1' => 'required|string',
            'impact_stat_2' => 'required|string',
            'impact_desc_2' => 'required|string',
            'impact_stat_3' => 'required|string',
            'impact_desc_3' => 'required|string',
        ]);

        $data = $request->except('gambar');

        // 2. PROSES AUTO-CONVERT WEBP (Intervention Image v3)
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            
            // Membuat nama file unik baru dengan ekstensi .webp
            $filename = time() . '_' . uniqid() . '.webp';
            
            // Inisialisasi Image Manager dengan driver GD
            $manager = new ImageManager(new Driver());
            
            // Baca gambar asli, lalu encode/konversi langsung ke format WebP dengan kualitas 80% (Seimbang antara tajam & ringan)
            $image = $manager->read($file)->toWebp(80);
            
            // Simpan gambar hasil konversi ke folder local storage (storage/app/public/portfolio)
            Storage::disk('public')->put('portfolio/' . $filename, (string) $image);
            
            // Masukkan nama file baru ke dalam array data database
            $data['gambar'] = $filename;
        }

        // 3. Simpan ke database (Slug akan terisi otomatis lewat Model Booting kita sebelumnya)
        portfolio::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'portfolio baru berhasil dikonversi ke WebP dan diterbitkan!');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        // Validasi opsional untuk gambar saat update
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            // Tambahkan validasi lain sesuai kebutuhan store...
        ]);

        $data = $request->except('gambar');

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($portfolio->gambar) {
                Storage::disk('public')->delete('portfolio/' . $portfolio->gambar);
            }

            // Proses convert gambar baru ke WebP
            $file = $request->file('gambar');
            $filename = time() . '_' . uniqid() . '.webp';
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file)->toWebp(80);
            
            Storage::disk('public')->put('portfolio/' . $filename, (string) $image);
            $data['gambar'] = $filename;
        }

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'portfolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        
        // Hapus file gambar fisik agar tidak memenuhi memori server
        if ($portfolio->gambar) {
            Storage::disk('public')->delete('portfolio/' . $portfolio->gambar);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'portfolio berhasil dihapus!');
    }
}