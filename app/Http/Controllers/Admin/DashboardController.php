<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() {
        $stats = [
            'total_articles' => \App\Models\Article::count(),
            'total_views' => \App\Models\Article::sum('views'),
            'total_affiliates' => \App\Models\AffiliateUser::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}