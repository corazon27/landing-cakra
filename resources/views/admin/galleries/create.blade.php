@extends('components.layout.admin')

@section('header', 'Tambah Galeri Dokumentasi')

@section('content')
<div class="max-w-2xl bg-white rounded-3xl shadow-sm border border-slate-100 p-8">
    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Judul / Keterangan Foto</label>
            <input type="text" name="judul" value="{{ old('judul') }}" required placeholder="Contoh: Suasana Ruang Kerja Tim" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-sm">
            @error('judul') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Kategori (Opsional)</label>
            <input type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Contoh: Aktivitas Tim, Kantor" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-sm">
        </div>

        <div>
            <label class="block text-sm font-bold text-slate-700 mb-2">Upload File Foto</label>
            <input type="file" name="gambar" accept="image/*" required class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
            @error('gambar') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-slate-100">
            <a href="{{ route('admin.galleries.index') }}" class="px-5 py-3 rounded-xl border border-slate-200 text-slate-600 text-sm font-semibold hover:bg-slate-50 transition">Batal</a>
            <button type="submit" class="px-5 py-3 rounded-xl bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition shadow-md shadow-blue-100">Simpan Foto</button>
        </div>
    </form>
</div>
@endsection
