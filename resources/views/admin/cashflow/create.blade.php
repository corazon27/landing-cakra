@extends('components.layout.admin')

@section('title', 'Catat Transaksi')
@section('header', 'Tambah Catatan Arus Kas')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <form action="{{ route('admin.cashflow.store') }}" method="POST" class="p-8 space-y-6">
            @csrf

            <div class="grid grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700">Tanggal Transaksi</label>
                    <input type="date" name="transaction_date" value="{{ date('Y-m-d') }}" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                </div>
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-700">Tipe Transaksi</label>
                    <select name="type" required
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                        <option value="income">Uang Masuk (Pemasukan)</option>
                        <option value="expense">Uang Keluar (Pengeluaran)</option>
                    </select>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-bold text-slate-700">Nominal (Rp)</label>
                <input type="number" name="amount" placeholder="Contoh: 5000000" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition font-bold text-lg text-blue-600">
            </div>

            <div class="space-y-2">
                <label class="text-sm font-bold text-slate-700">Keterangan / Deskripsi</label>
                <textarea name="description" rows="3"
                    placeholder="Contoh: Closing Jasa Pembuatan Web Company Profile - Client A" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"></textarea>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-bold text-slate-700">Kategori</label>
                <select name="category" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition bg-white appearance-none cursor-pointer">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Project">Project (Closing/Web Dev)</option>
                    <option value="Operasional">Operasional (Biaya/Gaji/Tool)</option>
                </select>
            </div>

            <div class="pt-4 flex gap-3">
                <button type="submit"
                    class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-blue-200 transition">
                    Simpan Transaksi
                </button>
                <a href="{{ route('admin.cashflow.index') }}"
                    class="px-6 py-4 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold rounded-xl transition text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection