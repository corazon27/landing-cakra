<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use App\Models\Gallery;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        $totalItems = $portfolios->count();
        $galleries = Gallery::latest()->get();

        // Ubah dari 'portofolio.index' (frontend) ke view admin:
        return view('admin.portfolio.index', compact('portfolios', 'totalItems', 'galleries'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        // 1. Validasi Input Utama + Tabs
        $request->validate([
            'judul' => 'required|string|max:255',
            'filter' => 'required|string',
            'kategori' => 'required|string',
            'klien_industri' => 'required|string',
            'durasi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
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

            // Validasi untuk Tabs & Carousel Images
            'tabs' => 'nullable|array',
            'tabs.*.judul_tab' => 'required|string',
            'tabs.*.deskripsi' => 'required|string',
            'tabs.*.fitur_poin' => 'nullable|array',
            'tabs.*.images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $data = $request->except('gambar', 'tabs');

        // 2. Proses Gambar Utama (Mockup)
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time().'_'.uniqid().'.webp';
            $manager = new ImageManager(new Driver);
            $image = $manager->read($file)->toWebp(80);
            Storage::disk('public')->put('portofolio/'.$filename, (string) $image);
            $data['gambar'] = $filename;
        }

        // 3. Proses Data Tabs & Upload Carousel Images per Tab
        $processedTabs = [];
        if ($request->has('tabs')) {
            foreach ($request->tabs as $index => $tabInput) {
                $imagesList = [];

                // Cek jika ada upload gambar carousel di tab ini
                if ($request->hasFile("tabs.{$index}.images")) {
                    foreach ($request->file("tabs.{$index}.images") as $imgFile) {
                        $imgFilename = time().'_'.uniqid().'.webp';
                        $manager = new ImageManager(new Driver);
                        $convertedImg = $manager->read($imgFile)->toWebp(80);
                        Storage::disk('public')->put('portofolio/tabs/'.$imgFilename, (string) $convertedImg);
                        $imagesList[] = $imgFilename;
                    }
                }

                // Jika sedang edit dan ada gambar lama yang dipertahankan (opsional)
                if (isset($tabInput['existing_images'])) {
                    $imagesList = array_merge($imagesList, $tabInput['existing_images']);
                }

                $processedTabs[] = [
                    'judul_tab' => $tabInput['judul_tab'],
                    'deskripsi' => $tabInput['deskripsi'],
                    'fitur_poin' => $tabInput['fitur_poin'] ?? [],
                    'images' => $imagesList
                ];
            }
        }
        $data['tabs'] = $processedTabs;

        // 4. Simpan ke Database
        Portfolio::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil diterbitkan dengan sistem Multi-Tab!');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'filter' => 'required|string',
            'kategori' => 'required|string',
            'klien_industri' => 'required|string',
            'durasi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
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

            'tabs' => 'nullable|array',
            'tabs.*.judul_tab' => 'required|string',
            'tabs.*.deskripsi' => 'required|string',
            'tabs.*.fitur_poin' => 'nullable|array',
            'tabs.*.images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $data = $request->except('gambar', 'tabs');

        // Update Gambar Utama jika ada
        if ($request->hasFile('gambar')) {
            if ($portfolio->gambar) {
                Storage::disk('public')->delete('portofolio/'.$portfolio->gambar);
            }
            $file = $request->file('gambar');
            $filename = time().'_'.uniqid().'.webp';
            $manager = new ImageManager(new Driver);
            $image = $manager->read($file)->toWebp(80);
            Storage::disk('public')->put('portofolio/'.$filename, (string) $image);
            $data['gambar'] = $filename;
        }

        // Proses Tabs & Carousel Images saat Update
        $processedTabs = [];
        if ($request->has('tabs')) {
            foreach ($request->tabs as $index => $tabInput) {
                // Ambil gambar lama yang dicentang untuk dipertahankan
                $imagesList = $tabInput['existing_images'] ?? [];

                // Upload gambar carousel baru jika ada
                if ($request->hasFile("tabs.{$index}.images")) {
                    foreach ($request->file("tabs.{$index}.images") as $imgFile) {
                        $imgFilename = time().'_'.uniqid().'.webp';
                        $manager = new ImageManager(new Driver);
                        $convertedImg = $manager->read($imgFile)->toWebp(80);
                        Storage::disk('public')->put('portofolio/tabs/'.$imgFilename, (string) $convertedImg);
                        $imagesList[] = $imgFilename;
                    }
                }

                $processedTabs[] = [
                    'judul_tab' => $tabInput['judul_tab'],
                    'deskripsi' => $tabInput['deskripsi'],
                    'fitur_poin' => $tabInput['fitur_poin'] ?? [],
                    'images' => $imagesList
                ];
            }
        }
        $data['tabs'] = $processedTabs;

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        if ($portfolio->gambar) {
            Storage::disk('public')->delete('portofolio/'.$portfolio->gambar);
        }
        // Hapus file gambar carousel tabs jika diperlukan...
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil dihapus!');
    }
}