@extends('components.layout.admin')

@section('title', 'Kelola Proyek')

@section('header', 'Manajemen Proyek & Dealing')

@section('content')
<div class="space-y-6">
    <!-- Header & Action -->
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Daftar Proyek</h2>
            <p class="text-slate-500 text-sm">Pantau status pengerjaan dan komisi mitra di sini.</p>
        </div>
        <a href="{{ route('admin.projects.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-2xl font-bold transition shadow-lg shadow-blue-200 flex items-center gap-2 text-sm">
            <i class="fas fa-plus"></i> Tambah Proyek Baru
        </a>
    </div>

    <!-- Stats Ringkasan Kecil (Opsional) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Menunggu DP</p>
            <h4 class="text-2xl font-bold text-slate-800">{{ $projects->where('status', 'pending')->count() }}</h4>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Proses Coding</p>
            <h4 class="text-2xl font-bold text-blue-600">{{ $projects->where('status', 'development')->count() }}</h4>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
            <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Total Komisi Keluar</p>
            <h4 class="text-2xl font-bold text-emerald-600">Rp
                {{ number_format($projects->where('status', 'completed')->sum('commission_amount'), 0, ',', '.') }}</h4>
        </div>
    </div>

    <!-- Table Card -->
    @if(session('success'))
    <div
        class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-600 rounded-2xl font-bold flex items-center gap-3">
        <i class="fas fa-check-circle"></i>
        {{ session('success') }}
    </div>
    @endif
    <div class="bg-white rounded-[32px] shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Proyek & Klien</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Affiliator</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Nilai Proyek</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Status</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($projects as $project)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-6 py-5">
                            <div class="font-bold text-slate-900">{{ $project->project_name }}</div>
                            <div class="text-xs text-slate-500">Klien: {{ $project->client_name }}</div>
                        </td>
                        <td class="px-6 py-5">
                            @if($project->affiliateUser)
                            <div class="flex items-center gap-2">
                                <span
                                    class="text-sm font-medium text-slate-700">{{ $project->affiliateUser->name }}</span>
                                <span
                                    class="text-[10px] bg-blue-50 text-blue-600 px-2 py-0.5 rounded-full border border-blue-100 uppercase font-bold">
                                    {{ $project->affiliateUser->referral_code }}
                                </span>
                            </div>
                            @else
                            <span class="text-xs text-slate-400 italic">Tanpa Referral (Direct)</span>
                            @endif
                        </td>
                        <td class="px-6 py-5">
                            <div class="text-sm font-bold text-slate-900">Rp
                                {{ number_format($project->total_price, 0, ',', '.') }}</div>
                            <div class="text-[10px] text-emerald-600 font-bold">Komisi: Rp
                                {{ number_format($project->commission_amount, 0, ',', '.') }}</div>
                        </td>
                        <td class="px-6 py-5">
                            @if($project->status == 'pending')
                            <span
                                class="bg-amber-50 text-amber-600 px-3 py-1 rounded-full text-xs font-bold border border-amber-100">Menunggu
                                DP</span>
                            @elseif($project->status == 'development')
                            <span
                                class="bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-xs font-bold border border-blue-100">Proses
                                Coding</span>
                            @else
                            <span
                                class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded-full text-xs font-bold border border-emerald-100">Selesai
                                / Cair</span>
                            @endif
                        </td>
                        <td class="px-6 py-5 text-right">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('admin.projects.edit', $project->id) }}"
                                    class="p-2 text-slate-400 hover:text-blue-600 transition">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus data proyek ini?')">
                                    @csrf @method('DELETE')
                                    <button class="p-2 text-slate-400 hover:text-red-600 transition">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-16 text-center text-slate-400">
                            <i class="fas fa-briefcase text-4xl mb-4 opacity-20"></i>
                            <p>Belum ada proyek yang dicatat.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection