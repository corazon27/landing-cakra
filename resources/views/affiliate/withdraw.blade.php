<x-layout.dashboard>
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-slate-800">Tarik Komisi</h1>
            <p class="text-slate-500 text-blue-600">Cairkan pendapatan Anda ke rekening pribadi.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-2 space-y-6">
                <div class="bg-white rounded-[32px] border border-slate-100 shadow-xl shadow-slate-200/40 p-8">

                    @if(session('success'))
                    <div
                        class="mb-6 p-4 bg-emerald-50 text-emerald-600 rounded-2xl text-sm font-bold flex items-center gap-3">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="mb-6 p-4 bg-red-50 text-red-600 rounded-2xl text-sm font-bold">
                        <ul class="list-disc ml-4">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('affiliate.withdraw-store') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Nominal Penarikan</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-5 top-1/2 -translate-y-1/2 font-bold text-slate-400">Rp</span>
                                    <input type="number" name="amount"
                                        class="w-full pl-12 pr-6 py-4 bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-blue-500 font-bold text-slate-800 placeholder:text-slate-300"
                                        placeholder="0" min="50000" max="{{ $saldoTersedia }}">
                                </div>
                                <p class="mt-2 text-xs text-slate-400 italic">* Minimal penarikan Rp 50.000</p>
                            </div>

                            <div class="p-6 bg-blue-50 rounded-[24px] border border-blue-100">
                                <div class="flex items-center gap-4 mb-3 text-blue-600">
                                    <i class="fas fa-university text-xl"></i>
                                    <span class="font-bold text-sm uppercase tracking-wider">Tujuan Transfer</span>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <p class="text-[10px] text-blue-400 font-bold uppercase">Bank</p>
                                        <p class="font-bold text-slate-800">{{ Auth::user()->bank_name ?: '-' }}</p>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-blue-400 font-bold uppercase">Nomor Rekening</p>
                                        <p class="font-bold text-slate-800">{{ Auth::user()->account_number ?: '-' }}
                                        </p>
                                    </div>
                                    <div class="col-span-2">
                                        <p class="text-[10px] text-blue-400 font-bold uppercase">Atas Nama</p>
                                        <p class="font-bold text-slate-800">
                                            {{ Auth::user()->account_holder_name ?: Auth::user()->name }}</p>
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full py-5 bg-blue-600 hover:bg-blue-700 text-white rounded-2xl font-bold shadow-lg shadow-blue-200 transition-all active:scale-95 cursor-pointer group">
                                Konfirmasi & Tarik Komisi
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-slate-900 rounded-[32px] p-8 text-white shadow-xl shadow-slate-200">
                    <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mb-2">Saldo Tersedia</p>
                    <h3 class="text-3xl font-bold mb-6">Rp {{ number_format($saldoTersedia, 0, ',', '.') }}</h3>

                    <div class="space-y-4 pt-6 border-t border-slate-800">
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-slate-400 text-blue-600">Total Pendapatan</span>
                            <span class="text-sm font-bold">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-slate-400 text-blue-600">Sudah Dicairkan</span>
                            <span class="text-sm font-bold text-emerald-400">Rp
                                {{ number_format($totalDitarik, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>

                <div class="bg-amber-50 rounded-[24px] p-6 border border-amber-100">
                    <div class="flex gap-3">
                        <i class="fas fa-info-circle text-amber-500 mt-1"></i>
                        <p class="text-xs text-amber-700 leading-relaxed italic">
                            Proses pencairan dana memakan waktu <strong>1-3 hari kerja</strong>. Pastikan data rekening
                            Anda sudah benar di menu Pengaturan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.dashboard>