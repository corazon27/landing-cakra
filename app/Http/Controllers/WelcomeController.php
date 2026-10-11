<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // 1. Ambil 3 portfolio terbaru untuk bagian grid portofolio di beranda
        $portfolios = Portfolio::latest()->take(3)->get();

        // 2. Ambil portofolio yang memiliki isi testimoni untuk section testimoni
        $testimonialPortfolios = Portfolio::whereNotNull('testimoni_konten')
            ->where('testimoni_konten', '!=', '')
            ->latest()
            ->take(6) // Ambil maksimal 6 testimoni terbaru
            ->get();

        // Variasi style warna kartu (agar tetap estetik bergantian seperti aslinya)
        $bgStyles = [
            ['bg' => 'bg-slate-50/80', 'border' => 'border-slate-100', 'quote' => 'text-blue-500', 'avatar' => 'bg-blue-600'],
            ['bg' => 'bg-amber-50/40', 'border' => 'border-amber-100/60', 'quote' => 'text-amber-500', 'avatar' => 'bg-amber-600'],
            ['bg' => 'bg-emerald-50/40', 'border' => 'border-emerald-100/60', 'quote' => 'text-emerald-500', 'avatar' => 'bg-emerald-600'],
        ];

        // Format data dari database agar cocok dengan loop Blade yang sudah ada
        $testimonials = $testimonialPortfolios->map(function($item, $index) use ($bgStyles) {
            $style = $bgStyles[$index % count($bgStyles)];

            // Membuat inisial otomatis dari nama (Contoh: "Bu Hj. Nurhasanah" -> "BN" atau "Siska Amelia" -> "SA")
            $name = $item->testimoni_nama ?? 'Klien Cakra';
            $words = explode(' ', trim($name));
            $initials = '';
            if (count($words) >= 2) {
                $initials = strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
            } else {
                $initials = strtoupper(substr($name, 0, 2));
            }

            return [
                'content'  => $item->testimoni_konten,
                'name'     => $name,
                'role'     => $item->testimoni_jabatan ?: $item->klien_industri,
                'initials' => $initials,
                'bg'       => $style['bg'],
                'border'   => $style['border'],
                'quote'    => $style['quote'],
                'avatar'   => $style['avatar'],
            ];
        });

        // Kirim $portfolios dan $testimonials ke view welcome
        return view('welcome', compact('portfolios', 'testimonials'));
    }
}