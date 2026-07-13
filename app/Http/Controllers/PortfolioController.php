<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Ambil semua data portfolio untuk galeri utama
        $portfolios = Portfolio::latest()->get();

        // Hitung total data untuk keperluan Schema ItemList Google secara dinamis
        $totalItems = $portfolios->count();

        return view('portofolio.index', compact('portfolios', 'totalItems'));
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