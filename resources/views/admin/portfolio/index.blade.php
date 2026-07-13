@extends('components.layout.admin')

@section('title', 'Kelola Portfolio')
@section('header', 'Daftar Portfolio Proyek')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="p-6 border-b border-slate-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-slate-900">Semua Portfolio</h2>
            <p class="text-sm text-slate-500 mt-1">Total proyek yang tampil di halaman depan website Anda.</p>
        </div>
        <div>
            <a href="{{ route('admin.portfolio.create') }}"
                class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2.5 rounded-xl transition shadow-sm shadow-blue-600/10 text-sm">
                <i class="fas fa-plus"></i> Tambah Portfolio
            </a>
        </div>
    </div>

    @if(session('success'))
    <div
        class="mx-6 mt-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-xl flex items-center gap-3 text-sm">
        <i class="fas fa-check-circle text-green-500 text-base"></i>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr
                    class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-600 uppercase tracking-wider">
                    <th class="py-4 px-6 w-24">Mockup</th>
                    <th class="py-4 px-6">Nama Proyek / Kategori</th>
                    <th class="py-4 px-6">Klien & Durasi</th>
                    <th class="py-4 px-6">Filter SEO</th>
                    <th class="py-4 px-6 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 text-sm text-slate-700">
                @forelse($portfolios as $p)
                <tr class="hover:bg-slate-50/80 transition-colors">
                    <td class="py-4 px-6">
                        @if($p->gambar)
                        <img src="{{ asset('storage/portofolio/' . $p->gambar) }}" alt="Mockup"
                            class="w-16 aspect-video object-cover rounded-lg border border-slate-200 shadow-2xs">
                        @else
                        <div
                            class="w-16 aspect-video bg-slate-100 border border-slate-200 rounded-lg flex items-center justify-center text-slate-400">
                            <i class="fas fa-image text-lg"></i>
                        </div>
                        @endif
                    </td>
                    <td class="py-4 px-6">
                        <div class="font-bold text-slate-900">{{ $p->judul }}</div>
                        <div class="text-xs text-slate-500 mt-0.5 flex items-center gap-1.5">
                            <span
                                class="bg-slate-100 text-slate-600 px-2 py-0.5 rounded font-medium">{{ $p->kategori }}</span>
                            <span class="text-slate-300">•</span>
                            <span class="font-mono text-slate-400">{{ $p->slug }}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <div class="font-medium text-slate-800">{{ $p->klien_industri }}</div>
                        <div class="text-xs text-slate-400 mt-0.5"><i class="far fa-clock mr-1"></i>{{ $p->durasi }}
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-100">
                            {{ $p->filter }}
                        </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.portfolio.edit', $p->id) }}"
                                class="p-2 text-slate-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                title="Edit Data">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.portfolio.destroy', $p->id) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus portfolio ini? File gambar fisik juga akan dihapus permanent dari server.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="p-2 text-slate-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                    title="Hapus Data">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="py-12 px-6 text-center text-slate-400">
                        <div class="flex flex-col items-center justify-center gap-2">
                            <i class="fas fa-folder-open text-4xl text-slate-300"></i>
                            <p class="font-medium">Belum ada data portfolio.</p>
                            <a href="{{ route('admin.portfolio.create') }}"
                                class="text-sm text-blue-600 hover:underline mt-1">Buat portfolio pertama Anda</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($portfolios->hasPages())
    <div class="p-6 border-t border-slate-200 bg-slate-50">
        {{ $portfolios->links() }}
    </div>
    @endif
</div>
@endsection