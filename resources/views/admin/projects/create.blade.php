@extends('components.layout.admin')

@section('title', 'Tambah Proyek Baru')

@section('header', 'Input Data Deal Klien')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white rounded-[32px] shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-8 border-b border-slate-100 bg-slate-50/50">
            <h3 class="text-xl font-bold text-slate-800 text-center text-blue-600">Form Pencatatan Proyek</h3>
            <p class="text-slate-500 text-sm text-center">Hubungkan klien WhatsApp dengan affiliator yang tepat.</p>
        </div>

        <form action="{{ route('admin.projects.store') }}" method="POST" class="p-8 space-y-6">
            @csrf

            <!-- Dropdown Pilih Affiliator -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Sumber Referral (Affiliator)</label>
                <select name="affiliate_user_id"
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                    <option value="">-- Tanpa Referral (Klien Langsung) --</option>
                    @foreach($affiliates as $affiliate)
                    <option value="{{ $affiliate->id }}">{{ $affiliate->name }} ({{ $affiliate->referral_code }})
                    </option>
                    @endforeach
                </select>
                <p class="mt-2 text-[10px] text-slate-400 italic font-medium uppercase tracking-wider italic">*Cek kode
                    suffix di pesan WhatsApp klien untuk menentukan pilihan ini.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nama Klien -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Klien</label>
                    <input type="text" name="client_name" required placeholder="Contoh: Pak Budi - Toko Kelontong"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>

                <!-- Nama Proyek -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Jenis Proyek</label>
                    <input type="text" name="project_name" required placeholder="Contoh: Web Katalog Produk"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                </div>
            </div>

            <!-- Harga Proyek -->
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Total Nilai Proyek (Rp)</label>
                <div class="relative">
                    <span class="absolute left-4 top-3.5 text-slate-400 font-bold">Rp</span>
                    <input type="number" name="total_price" required placeholder="0"
                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition font-bold text-slate-900">
                </div>
                <p class="mt-2 text-[11px] text-blue-500 font-bold uppercase tracking-wider italic">*Sistem Cakra Admin
                    akan otomatis menghitung komisi 10% untuk affiliator.</p>
            </div>

            <hr class="border-slate-100">

            <!-- Tombol Submit -->
            <div class="flex items-center justify-between gap-4 pt-2">
                <a href="{{ route('admin.projects.index') }}"
                    class="text-slate-500 font-bold text-sm hover:text-slate-700 transition">Batal</a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-bold transition shadow-lg shadow-blue-200">
                    Simpan Proyek & Terbitkan Komisi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection