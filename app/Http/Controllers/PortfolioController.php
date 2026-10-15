<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\Gallery;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        $totalItems = $portfolios->count();

        // 1. Ambil data galeri dokumentasi dari database
        $galleries = Gallery::latest()->take(12)->get();

        // 2. Ambil portofolio yang memiliki isi testimoni
        $testimonialPortfolios = Portfolio::whereNotNull('testimoni_konten')
            ->where('testimoni_konten', '!=', '')
            ->latest()
            ->take(6)
            ->get();

        // Variasi warna background avatar agar menarik
        $avatarColors = ['bg-blue-500', 'bg-indigo-500', 'bg-amber-500', 'bg-rose-500', 'bg-emerald-500'];

        // Format data testimoni dari database
        $testimonials = $testimonialPortfolios->map(function($item, $index) use ($avatarColors) {
            $name = $item->testimoni_nama ?? 'Klien Cakra';
            $words = explode(' ', trim($name));
            if (count($words) >= 2) {
                $initials = strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
            } else {
                $initials = strtoupper(substr($name, 0, 2));
            }

            return [
                'nama'     => $name,
                'peran'    => $item->testimoni_jabatan ?: $item->klien_industri,
                'inisial'  => $initials,
                'bg'       => $avatarColors[$index % count($avatarColors)],
                'quote'    => $item->testimoni_konten,
            ];
        });

        // 3. Kirim $portfolios, $totalItems, $galleries, dan $testimonials ke view
        return view('portofolio.index', compact('portfolios', 'totalItems', 'galleries', 'testimonials'));
    }

    public function show($slug)
    {
        // Cari portfolio berdasarkan slug, jika tidak ada langsung lempar ke 404
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

        // Pastikan kolom JSON di-decode jika belum dikonfigurasi cast di Model
        // Jika di Model portfolio sudah ada protected $casts = ['tech_stack' => 'array', ...], baris di bawah ini tidak perlu.
        if (is_string($portfolio->pain_points)) $portfolio->pain_points = json_decode($portfolio->pain_points, true);
        if (is_string($portfolio->tech_stack)) $portfolio->tech_stack = json_decode($portfolio->tech_stack, true);
        if (is_string($portfolio->fitur_utama)) $portfolio->fitur_utama = json_decode($portfolio->fitur_utama, true);

        return view('portofolio.show', compact('portfolio'));
    }
}