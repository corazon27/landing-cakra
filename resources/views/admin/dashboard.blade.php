@extends('components.layout.admin')

@section('title', 'Beranda Kendali Pusat')
@section('header', 'Ringkasan Statistik Cakra')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex items-center gap-5">
        <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl">
            <i class="fas fa-newspaper"></i>
        </div>
        <div>
            <p class="text-sm text-slate-500 font-medium">Total Artikel</p>
            <h3 class="text-2xl font-bold text-slate-800">{{ $stats['total_articles'] }}</h3>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex items-center gap-5">
        <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl">
            <i class="fas fa-eye"></i>
        </div>
        <div>
            <p class="text-sm text-slate-500 font-medium">Total Pembaca</p>
            <h3 class="text-2xl font-bold text-slate-800">{{ number_format($stats['total_views']) }}</h3>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex items-center gap-5">
        <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-2xl">
            <i class="fas fa-users"></i>
        </div>
        <div>
            <p class="text-sm text-slate-500 font-medium">Total Affiliator</p>
            <h3 class="text-2xl font-bold text-slate-800">{{ $stats['total_affiliates'] }}</h3>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div class="bg-slate-900 rounded-[2.5rem] p-10 text-white relative overflow-hidden">
        <div class="relative z-10">
            <h2 class="text-3xl font-bold mb-4">Halo, {{ Auth::user()->name }}! 👋</h2>
            <p class="text-slate-400 leading-relaxed mb-6">
                Selamat datang kembali di Kendali Pusat. Hari ini adalah waktu yang tepat untuk menulis artikel
                pancingan baru untuk meningkatkan trafik layanan pembuatan website Anda.
            </p>
            <a href="{{ route('admin.articles.create') }}"
                class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-bold transition">
                <i class="fas fa-pen-nib"></i> Mulai Menulis Artikel
            </a>
        </div>
        <i class="fas fa-shield-halved absolute -right-10 -bottom-10 text-[15rem] text-white/5"></i>
    </div>

    <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm">
        <h4 class="font-bold text-slate-800 mb-6 flex items-center gap-2">
            <i class="fas fa-lightbulb text-amber-500"></i> Tips SEO Hari Ini
        </h4>
        <ul class="space-y-4">
            <li class="flex gap-4">
                <div class="mt-1 text-blue-500"><i class="fas fa-check-circle"></i></div>
                <p class="text-sm text-slate-600">Gunakan kata kunci <strong>"Jasa Pembuatan Landing Page"</strong> pada
                    judul artikel untuk menarik klien UMKM.</p>
            </li>
            <li class="flex gap-4">
                <div class="mt-1 text-blue-500"><i class="fas fa-check-circle"></i></div>
                <p class="text-sm text-slate-600">Pastikan setiap artikel memiliki *Call to Action* (CTA) yang mengarah
                    ke WhatsApp admin.</p>
            </li>
            <li class="flex gap-4">
                <div class="mt-1 text-blue-500"><i class="fas fa-check-circle"></i></div>
                <p class="text-sm text-slate-600">Update portofolio terbaru di halaman artikel untuk meningkatkan
                    kepercayaan pengunjung.</p>
            </li>
        </ul>
    </div>
</div>
@endsection