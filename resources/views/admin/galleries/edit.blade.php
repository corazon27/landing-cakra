@extends('components.layout.admin')

@section('header', 'Edit Galeri Dokumentasi')

@section('content')
<div class="max-w-2xl bg-white rounded-3xl shadow-sm border border-slate-100 p-8">
    <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Judul / Keterangan Foto</label>
            <input type="text" name="judul" value="{{ old('judul', $gallery->judul) }}" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-sm">
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Kategori (Opsional)</label>
            <input type="text" name="kategori" value="{{ old('kategori', $gallery->kategori) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-sm">
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Foto Saat Ini</label>
            <div class="mb-3">
                <img src="{{ asset('storage/galleries/' . $gallery->gambar) }}" class="w-32 h-20 object-cover rounded-2xl shadow-sm border border-slate-100">
            </div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Ganti Foto Baru (Opsional)</label>
            <input type="file" name="gambar" accept="image/*" class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-slate-100">
            <a href="{{ route('admin.galleries.index') }}" class="px-5 py-3 rounded-xl border border-slate-200 text-slate-600 text-sm font-semibold hover:bg-slate-50 transition">Batal</a>
            <button type="submit" class="px-5 py-3 rounded-xl bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition shadow-md shadow-blue-100">Perbarui Foto</button>
        </div>
    </form>
</div>
@endsection
