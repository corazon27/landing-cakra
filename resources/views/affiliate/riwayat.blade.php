<x-layout.dashboard>
    <div class="mt-8 bg-white rounded-[32px] border border-slate-100 shadow-xl shadow-slate-200/40 overflow-hidden">
        <div class="p-8 border-b border-slate-50 flex justify-between items-center">
            <div>
                <h4 class="font-bold text-slate-900">Riwayat Proyek Referral</h4>
                <p class="text-sm text-slate-500 text-blue-600">Status pengerjaan klien yang kamu bawa.</p>
            </div>
            <a href="#" class="text-blue-600 text-sm font-bold hover:underline">Lihat Semua</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50">
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Klien / Proyek
                        </th>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Status</th>
                        <th class="px-8 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider text-right">
                            Komisi
                            Anda</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($recentProjects as $project)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-6">
                            <p class="font-bold text-slate-800">{{ $project->client_name }}</p>
                            <p class="text-xs text-slate-500">{{ $project->project_name }}</p>
                        </td>
                        <td class="px-8 py-6">
                            @if($project->status == 'pending')
                            <span
                                class="px-3 py-1 bg-amber-50 text-amber-600 rounded-full text-xs font-bold italic">Menunggu
                                DP</span>
                            @elseif($project->status == 'development')
                            <span
                                class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-bold italic font-medium uppercase tracking-wider">Proses
                                Coding</span>
                            @else
                            <span
                                class="px-3 py-1 bg-emerald-50 text-emerald-600 rounded-full text-xs font-bold italic font-medium uppercase tracking-wider">Selesai
                                / Cair</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right font-bold text-slate-900">
                            Rp {{ number_format($project->commission_amount, 0, ',', '.') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-8 py-12 text-center">
                            <div class="flex flex-col items-center">
                                <i class="fas fa-folder-open text-slate-200 text-4xl mb-4"></i>
                                <p class="text-slate-400 italic">Belum ada proyek referral yang tercatat.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout.dashboard>