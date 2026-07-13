@extends('components.layout.admin')

@section('title', 'Arus Kas')
@section('header', 'Manajemen Arus Kas')

@section('content')
<div class="space-y-6">
    <!-- Ringkasan Saldo -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 flex justify-between items-center">
        <div>
            <p class="text-sm text-slate-500 font-medium uppercase tracking-wider">Total Saldo Saat Ini</p>
            <h3 class="text-3xl font-black text-slate-900">Rp {{ number_format($currentBalance, 0, ',', '.') }}</h3>
        </div>
        <a href="{{ route('admin.cashflow.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-bold transition flex items-center gap-2 shadow-lg shadow-blue-200">
            <i class="fas fa-plus"></i> Catat Transaksi
        </a>
    </div>

    <!-- Tabel Riwayat -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-6 border-b border-slate-100">
            <h4 class="font-bold text-slate-800 text-lg">Riwayat Transaksi</h4>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-bold">
                    <tr>
                        <th class="p-4">Tanggal</th>
                        <th class="p-4">Keterangan / Kategori</th>
                        <th class="p-4">Saldo Awal</th>
                        <th class="p-4">Arus Uang</th>
                        <th class="p-4">Saldo Akhir</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($cashflows as $item)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="p-4 text-sm text-slate-600">
                            {{ $item->transaction_date->format('d M Y') }}
                        </td>
                        <td class="p-4">
                            <p class="text-sm font-bold text-slate-800">{{ $item->description }}</p>
                            <p class="text-xs text-slate-400">{{ $item->category ?? 'Umum' }}</p>
                        </td>
                        <td class="p-4 text-sm text-slate-500">
                            Rp {{ number_format($item->balance_before, 0, ',', '.') }}
                        </td>
                        <td class="p-4">
                            @if($item->type == 'income')
                            <div
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-600 border border-emerald-100 text-xs font-bold">
                                <i class="fas fa-arrow-down text-[10px]"></i>
                                + Rp {{ number_format($item->amount, 0, ',', '.') }}
                            </div>
                            @else
                            <div
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-rose-50 text-rose-600 border border-rose-100 text-xs font-bold">
                                <i class="fas fa-arrow-up text-[10px]"></i>
                                - Rp {{ number_format($item->amount, 0, ',', '.') }}
                            </div>
                            @endif
                        </td>
                        <td class="p-4">
                            <span class="text-sm font-black text-slate-900">
                                Rp {{ number_format($item->balance_after, 0, ',', '.') }}
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-12 text-center text-slate-400">
                            <i class="fas fa-receipt text-4xl mb-3 opacity-20"></i>
                            <p>Belum ada catatan transaksi keuangan.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($cashflows->hasPages())
        <div class="p-4 bg-slate-50 border-t border-slate-100">
            {{ $cashflows->links() }}
        </div>
        @endif
    </div>
</div>
@endsection