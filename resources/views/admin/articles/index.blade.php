@extends('components.layout.admin')

@section('title', 'Kelola Artikel')
@section('header', 'Manajemen Artikel & Konten SEO')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-bold text-slate-800">Daftar Artikel</h2>
        <p class="text-slate-500 text-sm">Gunakan artikel sebagai pancingan pengunjung dari Search Engine.</p>
    </div>
    <a href="{{ route('admin.articles.create') }}"
        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-xl font-bold transition flex items-center gap-2">
        <i class="fas fa-plus"></i> Tulis Artikel Baru
    </a>
</div>

{{-- Alert Success di luar kontainer tabel agar tidak terpotong --}}
@if(session('success'))
<div
    class="bg-emerald-100 border border-emerald-200 text-emerald-700 px-6 py-4 rounded-2xl mb-6 flex items-center gap-3">
    <i class="fas fa-check-circle"></i>
    <span class="font-bold">{{ session('success') }}</span>
</div>
@endif

<form action="{{ route('admin.articles.index') }}" method="GET" class="mb-6 flex items-center gap-3">
    <div class="relative flex-1 md:flex-none">
        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>

        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul atau isi..."
            class="w-full md:w-80 pl-11 pr-10 py-3 bg-white border border-slate-200 rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition shadow-sm">

        {{-- Tombol Reset (X) --}}
        @if(request('search'))
        <a href="{{ route('admin.articles.index') }}"
            class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-red-500 transition"
            title="Bersihkan Pencarian">
            <i class="fas fa-times-circle text-lg"></i>
        </a>
        @endif
    </div>

    <button type="submit"
        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-2xl font-bold shadow-lg shadow-blue-100 transition-all hover:-translate-y-0.5">
        Cari
    </button>
</form>

<div class="bg-white rounded-[2rem] shadow-sm border border-slate-200 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead class="bg-slate-50 border-b border-slate-200">
            <tr>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase">Artikel</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-center">Status</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-center">Views</th>
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase text-right">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @forelse($articles as $article)
            <tr class="hover:bg-slate-50 transition">
                <td class="px-6 py-4">
                    <div class="flex items-center gap-4">
                        @if($article->thumbnail)
                        <img src="{{ asset('storage/' . $article->thumbnail) }}"
                            class="w-14 h-14 object-cover rounded-xl shadow-sm border border-slate-100 flex-shrink-0">
                        @else
                        <div
                            class="w-14 h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 flex-shrink-0">
                            <i class="fas fa-image"></i>
                        </div>
                        @endif

                        <div>
                            <p class="font-semibold text-slate-800 line-clamp-1">{{ $article->title }}</p>
                            <p class="text-xs text-slate-400">/{{ $article->slug }}</p>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 text-center">
                    <span
                        class="px-3 py-1 rounded-full text-[10px] font-bold {{ $article->status == 'published' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' }}">
                        {{ strtoupper($article->status) }}
                    </span>
                </td>
                <td class="px-6 py-4 text-center text-slate-500 text-sm">
                    <i class="fas fa-eye mr-1 opacity-50"></i> {{ number_format($article->views) }}
                </td>
                <td class="px-6 py-4 text-right flex justify-end gap-2">
                    {{-- Tombol Edit --}}
                    <a href="{{ route('admin.articles.edit', $article->id) }}"
                        class="text-blue-600 hover:bg-blue-50 p-2.5 rounded-xl transition">
                        <i class="fas fa-edit"></i>
                    </a>

                    {{-- Tombol Delete --}}
                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:bg-red-50 p-2.5 rounded-xl transition">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-6 py-16 text-center text-slate-400">
                    <i class="fas fa-newspaper text-5xl mb-4 block opacity-10"></i>
                    <p class="font-medium text-slate-500">Belum ada artikel yang dibuat.</p>
                    <p class="text-sm">Klik tombol "Tulis Artikel Baru" untuk mulai membuat konten.</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">
        {{ $articles->links() }}
    </div>
</div>
@endsection