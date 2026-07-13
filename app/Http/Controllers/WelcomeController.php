<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Ambil 3 portfolio terbaru dari database
        $portfolios = Portfolio::latest()->take(3)->get();

        // Kirim data ke view welcome
        return view('welcome', compact('portfolios'));
    }
}