@extends('components.layout.admin')

@section('title', 'Data Affiliator')

@section('header', 'Manajemen Affiliasi')

@section('content')
<div class="space-y-6">
    <!-- Header Page -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Daftar Affiliator</h2>
            <p class="text-slate-500 text-sm">Kelola dan pantau semua mitra yang membantu pemasaran jasa Anda.</p>
        </div>
        <div class="bg-blue-50 text-blue-600 px-4 py-2 rounded-lg font-semibold text-sm border border-blue-100">
            Total: {{ $affiliates->count() }} Affiliator
        </div>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500 tracking-wider">Affiliator</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500 tracking-wider">Kode Referral
                        </th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500 tracking-wider text-center">
                            Total Proyek</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500 tracking-wider">Tanggal
                            Bergabung</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500 tracking-wider text-right">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($affiliates as $affiliate)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center font-bold text-slate-600">
                                    {{ substr($affiliate->name, 0, 1) }}
                                </div>
                                <div>
                                    <div class="font-bold text-slate-900">{{ $affiliate->name }}</div>
                                    <div class="text-xs text-slate-500">{{ $affiliate->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="font-mono bg-blue-50 text-blue-700 px-2 py-1 rounded border border-blue-100 text-sm">
                                {{ $affiliate->referral_code }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-center font-semibold text-slate-700">
                            {{ $affiliate->projects->count() }} Proyek
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500">
                            {{ $affiliate->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                {{-- Tombol Detail --}}
                                <a href="{{ route('admin.affiliates.show', $affiliate->id) }}"
                                    class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                    title="Lihat Detail Performa">
                                    <i class="fas fa-chart-line"></i>
                                </a>

                                {{-- Tombol Hapus dengan Konfirmasi --}}
                                <form action="{{ route('admin.affiliates.destroy', $affiliate->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus affiliator ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                        title="Hapus Akun">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <i class="fas fa-users-slash text-slate-300 text-4xl"></i>
                                <p class="text-slate-400">Belum ada affiliator yang mendaftar.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection