@extends('components.layout.admin')

@section('title', 'Kelola Galeri')
@section('header', 'Kelola Galeri Dokumentasi')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-bold text-slate-800">Daftar Foto Galeri</h2>
    <a href="{{ route('admin.galleries.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl text-sm font-semibold transition flex items-center gap-2 shadow-sm">
        <i class="fas fa-plus"></i> Tambah Foto Baru
    </a>
</div>

@if(session('success'))
    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl text-sm font-medium">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-3xl shadow-sm border border-slate-100 overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-slate-50 text-slate-500 text-xs font-bold uppercase tracking-wider border-b border-slate-100">
                <th class="p-4 pl-6">No</th>
                <th class="p-4">Foto</th>
                <th class="p-4">Judul / Keterangan</th>
                <th class="p-4">Kategori</th>
                <th class="p-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
            @forelse($galleries as $index => $gallery)
            <tr class="hover:bg-slate-50/50 transition">
                <td class="p-4 pl-6 font-semibold">{{ $galleries->firstItem() + $index }}</td>
                <td class="p-4">
                    <img src="{{ asset('storage/galleries/' . $gallery->gambar) }}" class="w-16 h-12 object-cover rounded-xl shadow-sm border border-slate-100">
                </td>
                <td class="p-4 font-bold text-slate-900">{{ $gallery->judul }}</td>
                <td class="p-4">
                    <span class="bg-blue-50 text-blue-700 text-xs px-3 py-1 rounded-full font-bold">
                        {{ $gallery->kategori ?? 'Umum' }}
                    </span>
                </td>
                <td class="p-4">
                    <div class="flex items-center justify-center gap-2">
                        <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center hover:bg-amber-100 transition shadow-sm">
                            <i class="fas fa-pen text-xs"></i>
                        </a>
                        <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-9 h-9 rounded-xl bg-red-50 text-red-600 flex items-center justify-center hover:bg-red-100 transition shadow-sm cursor-pointer">
                                <i class="fas fa-trash text-xs"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-8 text-center text-slate-400 font-medium">Belum ada data galeri dokumentasi kerja.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="p-4 border-t border-slate-100">
        {{ $galleries->links() }}
    </div>
</div>
@endsection
