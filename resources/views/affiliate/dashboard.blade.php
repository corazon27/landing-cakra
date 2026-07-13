<x-layout.dashboard>
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Ringkasan Performa</h1>
        <p class="text-slate-500">Pantau perkembangan komisi kamu di sini.</p>
    </div>

    <!-- Grid Utama -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Card Komisi (Seperti di image_6584b6.png) -->
        <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl shadow-slate-200/40">
            <div class="flex justify-between items-start mb-4">
                <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center">
                    <i class="fas fa-wallet text-blue-600"></i>
                </div>
                <span class="bg-emerald-50 text-emerald-600 text-xs font-bold px-3 py-1 rounded-full">+12%</span>
            </div>
            <p class="text-slate-500 text-sm font-medium">Total Komisi</p>
            <h3 class="text-3xl font-extrabold text-slate-900 mt-1">Rp {{ number_format($totalKomisi, 0, ',', '.') }}
            </h3>
        </div>

        <!-- Card Klik (Baru) -->
        <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl shadow-slate-200/40">
            <div class="w-12 h-12 bg-orange-50 rounded-2xl flex items-center justify-center mb-4">
                <i class="fas fa-mouse-pointer text-orange-600"></i>
            </div>
            <p class="text-slate-500 text-sm font-medium">Total Klik Link</p>
            <h3 class="text-3xl font-extrabold text-slate-900 mt-1">{{ number_format($totalKlik, 0, ',', '.') }}</h3>
        </div>

        <!-- Card Referral Aktif (Baru) -->
        <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl shadow-slate-200/40">
            <div class="w-12 h-12 bg-purple-50 rounded-2xl flex items-center justify-center mb-4">
                <i class="fas fa-users text-purple-600"></i>
            </div>
            <p class="text-slate-500 text-sm font-medium">Referral Bergabung</p>
            <h3 class="text-3xl font-extrabold text-slate-900 mt-1">{{ $totalProyek }} <span
                    class="text-sm font-normal text-slate-400">Proyek</span></h3>
        </div>
    </div>

    <!-- Section Link & Grafik -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Komponen Link Referral dari image_6584b6.png dengan UI lebih lebar -->
        <div class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl shadow-slate-200/40">
            <h4 class="font-bold text-slate-900 mb-2">Promosikan Link Kamu</h4>
            <p class="text-sm text-slate-500 mb-6">Gunakan link ini di sosial media untuk mulai menghasilkan uang.</p>

            <div class="flex items-center gap-2 p-2 bg-slate-50 rounded-2xl border border-slate-200">
                <input type="text" id="referralLink" readonly value="{{ url('/?ref=' . Auth::user()->referral_code) }}"
                    class="bg-transparent border-none focus:ring-0 text-sm font-medium text-slate-600 flex-grow px-3">
                <button onclick="copyLink()"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-bold flex items-center justify-center gap-2 transition active:scale-95 shadow-lg shadow-blue-200 cursor-pointer">
                    <i class="fas fa-copy"></i>
                    <span>Salin Link</span>
                </button>
            </div>
        </div>

        <!-- Chart Ringkasan (Gunakan Chart.js) -->
        <div
            class="bg-white p-8 rounded-[32px] border border-slate-100 shadow-xl shadow-slate-200/40 text-center flex flex-col justify-center">
            <p class="text-slate-400 italic text-sm">Visualisasi Grafik Pertumbuhan Komisi Akan Tampil Di Sini</p>
        </div>
    </div>
    <script>
    function copyLink() {
        const linkInput = document.getElementById('referralLink');
        linkInput.select();
        linkInput.setSelectionRange(0, 99999); // Untuk perangkat mobile

        navigator.clipboard.writeText(linkInput.value).then(() => {
            // Anda bisa mengganti alert ini dengan library toast seperti SweetAlert2
            alert('Link Referral berhasil disalin ke clipboard!');
        });
    }
    </script>
</x-layout.dashboard>