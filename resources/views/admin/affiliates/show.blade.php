@extends('components.layout.admin')
@section('title', 'Detail Performa Affiliator')

@section('header')
<a href="{{ route('admin.affiliates.index') }}" class="text-blue-600 hover:underline">Data Affiliator</a> / Detail
@endsection

@section('content')
<div class="space-y-6">
    <!-- Profil Singkat Card -->
    <div
        class="bg-white p-8 rounded-[32px] shadow-sm border border-slate-200 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex items-center gap-6">
            <div
                class="w-20 h-20 bg-blue-600 text-white rounded-3xl flex items-center justify-center text-3xl font-bold shadow-xl shadow-blue-100">
                {{ substr($affiliate->name, 0, 1) }}
            </div>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">{{ $affiliate->name }}</h2>
                <p class="text-slate-500">{{ $affiliate->email }}</p>
                <span
                    class="mt-2 inline-block bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-xs font-mono border border-slate-200">
                    ID: {{ $affiliate->referral_code }}
                </span>
            </div>
        </div>

        <div class="flex gap-4">
            <div class="text-center px-6 border-r border-slate-100">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Total Proyek</p>
                <h4 class="text-xl font-bold text-slate-900">{{ $affiliate->projects->count() }}</h4>
            </div>
            <div class="text-center px-6">
                <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Estimasi Komisi</p>
                <h4 class="text-xl font-bold text-emerald-600">Rp
                    {{ number_format($affiliate->projects->sum('commission_amount'), 0, ',', '.') }}</h4>
            </div>
        </div>
    </div>

    <!-- Daftar Proyek yang Dibawa -->
    <div class="bg-white rounded-[32px] shadow-sm border border-slate-200 overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h3 class="font-bold text-slate-800">Riwayat Proyek Referral</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Nama Proyek</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Nilai</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Komisi</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Status</th>
                        <th class="px-6 py-4 text-xs font-bold uppercase text-slate-500">Tanggal Deal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($affiliate->projects as $project)
                    <tr>
                        <td class="px-6 py-4 font-bold text-slate-900">{{ $project->project_name }}</td>
                        <td class="px-6 py-4 text-sm text-slate-600">Rp
                            {{ number_format($project->total_price, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 text-sm font-bold text-emerald-600">Rp
                            {{ number_format($project->commission_amount, 0, ',', '.') }}</td>
                        <td class="px-6 py-4">
                            @if($project->status == 'pending')
                            <span class="text-amber-500 text-xs font-bold uppercase tracking-tighter">Menunggu DP</span>
                            @elseif($project->status == 'development')
                            <span class="text-blue-500 text-xs font-bold uppercase tracking-tighter">Coding</span>
                            @else
                            <span class="text-emerald-500 text-xs font-bold uppercase tracking-tighter">Selesai</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-400">{{ $project->created_at->format('d/m/Y') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-12 text-center text-slate-400 italic">
                            Belum ada proyek yang dihasilkan oleh affiliator ini.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection