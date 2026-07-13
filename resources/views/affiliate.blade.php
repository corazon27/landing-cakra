<x-layout.app>

    {{-- Header & Breadcrumbs Section --}}
    <section class="relative pt-28 md:pt-36 pb-12 md:pb-24 bg-white overflow-hidden">

        {{-- 🛠️ 1. LAYER BACKGROUND KHUSUS MOBILE (< md) --}}
        {{-- Diubah menjadi auto_100% agar menutupi seluruh tinggi section, dan digeser ke kanan penuh agar teks di kiri tetap aman dibaca --}}
        <div class="absolute inset-0 bg-no-repeat pointer-events-none z-0
            bg-[length:auto_100%] bg-[position:right_center]
            md:hidden" style="background-image: url('{{ asset('images/hero-affiliate.webp') }}');">
        </div>

        {{-- 🛠️ 2. LAYER BACKGROUND KHUSUS DESKTOP (>= md) --}}
        {{-- Mempertahankan kode bawaan desktop Anda yang sudah rapi --}}
        <div class="absolute inset-0 hidden md:block bg-cover bg-right bg-no-repeat pointer-events-none z-0"
            style="background-image: url('{{ asset('images/hero-affiliate.webp') }}');">
        </div>

        {{-- 💡 3. GRADIENT OVERLAY (Penyelamat Kontras Teks Mobile) --}}
        {{-- Memberikan efek blur tipis dan sedikit kelembutan warna di mobile agar teks deskripsi affiliate di kiri-atas dijamin tajam --}}
        <div class="absolute inset-0 bg-white/75 md:bg-transparent backdrop-blur-[1px] md:backdrop-blur-none pointer-events-none z-1"
            aria-hidden="true"></div>


        <div class="max-w-6xl mx-auto px-5 md:px-10 relative z-10">
            <div class="max-w-6xl mx-auto text-center mb-6 md:mb-10">
                <x-breadcrumb :items="[]" current="Affiliate" />
            </div>

            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                <div class="w-full md:w-1/2 z-10" data-aos="fade-right">
                    <span
                        class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-[10px] md:text-xs font-bold uppercase tracking-wider">
                        🔥 Peluang Cuan Tanpa Modal
                    </span>

                    <h1
                        class="text-3xl md:text-5xl font-extrabold mt-4 md:mt-6 mb-4 md:mb-6 leading-tight text-slate-900">
                        Hasilkan Komisi <span class="text-blue-600">10%</span> dari Setiap Klien yang Kamu
                        Rekomendasikan.
                    </h1>

                    <p class="text-base md:text-lg text-slate-600 mb-6 md:mb-8 leading-relaxed">
                        Tanpa perlu punya produk, ngoding, atau skill teknis. Cukup rekomendasikan jasa pembuatan
                        website <strong>Cakra Inovasi Digital</strong> ke relasi bisnis kamu. Kami yang handle semuanya,
                        kamu tinggal terima komisi.
                    </p>

                    <div class="bg-orange-50 border border-orange-100 rounded-xl p-4 mb-8 inline-block">
                        <p class="text-xs md:text-sm text-orange-800 font-semibold">
                            🎁 <span class="font-bold">PROMO:</span> 50 Pendaftar pertama dapat tambahan bonus komisi 5%
                            di closing perdana!
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('affiliate.register') }}"
                            class="bg-blue-600 text-white px-7 py-3.5 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200 text-center">
                            Daftar Sekarang (Gratis)
                        </a>
                        <a href="#cara-kerja"
                            class="bg-white border-2 border-slate-200 text-slate-600 px-8 py-4 rounded-2xl font-bold hover:bg-slate-50 transition text-center">
                            Lihat Cara Kerjanya
                        </a>
                    </div>
                </div>

                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <!-- <div
                        class="block md:hidden w-full rounded-[24px] overflow-hidden bg-gradient-to-tr from-slate-50 to-blue-50/50 p-3 border border-slate-100">
                        <div class="w-full overflow-hidden rounded-[18px]">
                            <img src="{{ asset('images/hero-affiliate.webp') }}"
                                class="w-full h-auto object-cover object-right scale-125 origin-right transform translate-x-[-5%]"
                                alt="Program Affiliate Cakra Inovasi Digital">
                        </div>
                    </div> -->

                    <div class="hidden md:block h-[480px] lg:h-[580px] pointer-events-none"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="cara-kerja" class="py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-5 md:px-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Cara Kerjanya Super Simpel 🚀</h2>
                <p class="text-slate-500 max-w-2xl mx-auto leading-relaxed">
                    Tidak perlu repot cari bahan jualan atau pusing urus klien cerewet. Kamu fokus sebarkan info,
                    sisanya kami yang urus dari A sampai Z.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-10 rounded-[32px] border border-slate-200 bg-white hover:shadow-xl hover:shadow-blue-50 transition duration-300 group text-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:-translate-y-2 transition duration-300">
                        <span class="text-3xl font-black">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Daftar & Ambil Link</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Gabung jadi affiliate kami 100% gratis. Kamu akan mendapatkan link referral unik dan akses
                        dashboard transparan.
                    </p>
                </div>

                <div class="p-10 rounded-[32px] border border-slate-200 bg-white hover:shadow-xl hover:shadow-emerald-50 transition duration-300 group text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:-translate-y-2 transition duration-300">
                        <span class="text-3xl font-black">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Bagikan Promosi</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Share ke WhatsApp teman, grup UMKM, atau relasi bisnismu yang sedang membutuhkan jasa pembuatan
                        website profesional.
                    </p>
                </div>

                <div class="p-10 rounded-[32px] border border-slate-200 bg-white hover:shadow-xl hover:shadow-orange-50 transition duration-300 group text-center"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-6 mx-auto group-hover:-translate-y-2 transition duration-300">
                        <span class="text-3xl font-black">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Terima Komisi</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Setiap kali ada bisnis yang deal bikin website dari referensimu, komisi langsung cair ke
                        rekening kamu.
                    </p>
                </div>
            </div>

            <div class="flex flex-col items-center mt-18 w-full" data-aos="fade-up">
                <a href="{{ route('affiliate.register') }}"
                    class="inline-flex items-center gap-3 bg-white border-2 border-blue-600 text-blue-600 px-10 py-4 rounded-full font-bold text-lg hover:bg-blue-600 hover:text-white transition-all duration-300 shadow-lg hover:shadow-blue-200 group">
                    Mulai Sekarang & Ambil Link Kamu
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <p class="mt-4 text-slate-400 text-sm font-medium italic">Gabung bersama 500+ affiliate lainnya</p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-900 text-white overflow-hidden relative">
        <div class="max-w-6xl mx-auto px-5 md:px-10 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-5/12" data-aos="fade-right">
                    <h2 class="text-3xl lg:text-5xl font-bold mb-6">Berapa yang Bisa Kamu Dapatkan? 💰</h2>
                    <p class="text-slate-400 text-lg mb-8 leading-relaxed">
                        Bayangkan kalau kamu bisa closing klien besar. Jasa pembuatan sistem website memiliki nilai
                        project yang tinggi. <strong>Komisi 10% itu sangat lumayan!</strong>
                    </p>
                    <div class="inline-block bg-white/10 px-6 py-3 rounded-xl border border-white/20">
                        <p class="text-sm text-slate-300">Target yang paling cocok:</p>
                        <p class="font-bold text-white mt-1">UMKM, Restoran, Toko Baju, Klinik, atau Jasa Ekspedisi.</p>
                    </div>
                </div>

                <div class="md:w-7/12 w-full" data-aos="fade-left">
                    <div class="bg-white/5 border border-white/10 rounded-3xl p-8 backdrop-blur-sm">
                        <div class="space-y-6">
                            <div class="flex justify-between items-center border-b border-white/10 pb-4">
                                <div>
                                    <h4 class="font-bold text-lg">1 Klien Website</h4>
                                    <p class="text-sm text-slate-400">Rata-rata project Rp 5.000.000</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs text-slate-400 mb-1">Komisi Kamu</p>
                                    <p class="text-2xl font-black text-emerald-400">Rp 500.000</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center border-b border-white/10 pb-4">
                                <div>
                                    <h4 class="font-bold text-lg">5 Klien Website</h4>
                                    <p class="text-sm text-slate-400">Total project Rp 25.000.000</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs text-slate-400 mb-1">Komisi Kamu</p>
                                    <p class="text-2xl font-black text-emerald-400">Rp 2.500.000</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold text-lg">10 Klien Website</h4>
                                    <p class="text-sm text-slate-400">Total project Rp 50.000.000</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs text-slate-400 mb-1">Komisi Kamu</p>
                                    <p class="text-3xl font-black text-yellow-400">Rp 5.000.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-sm text-slate-500 mt-6 italic">
                        *Angka di atas adalah ilustrasi. Semakin besar project klien, semakin tebal dompetmu!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-5 md:px-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-slate-900 mb-4">Kenapa Program Ini Menarik?</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">Sangat cocok untuk Freelancer, Digital Marketer, Mahasiswa,
                    atau siapa saja yang punya banyak relasi bisnis.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-8 rounded-[24px] bg-blue-50/50 border border-blue-100" data-aos="fade-up"
                    data-aos-delay="0">
                    <div class="text-3xl mb-4">🚫</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Tanpa Modal</h3>
                    <p class="text-slate-600 text-sm">Tidak perlu stok barang, tidak ada biaya pendaftaran. 100% Gratis.
                    </p>
                </div>
                <div class="p-8 rounded-[24px] bg-emerald-50/50 border border-emerald-100" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="text-3xl mb-4">😌</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Tanpa Ribet</h3>
                    <p class="text-slate-600 text-sm">Desain, revisi, setup server, dan garansi error, kami yang handle
                        semuanya.</p>
                </div>
                <div class="p-8 rounded-[24px] bg-orange-50/50 border border-orange-100" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="text-3xl mb-4">📈</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Potensi Besar</h3>
                    <p class="text-slate-600 text-sm">Di era digital, hampir semua bisnis dan UMKM pasti butuh website
                        profesional.</p>
                </div>
                <div class="p-8 rounded-[24px] bg-purple-50/50 border border-purple-100" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="text-3xl mb-4">📱</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Komisi Transparan</h3>
                    <p class="text-slate-600 text-sm">Ada dashboard khusus buat pantau klik dan komisi kamu. Gak ada
                        yang disembunyikan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-4xl mx-auto px-5 md:px-10">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-slate-900">FAQ (Menghilangkan Keraguan) ❓</h2>
            </div>

            <div class="space-y-4" data-aos="fade-up">
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                    <h4 class="font-bold text-slate-900 text-lg mb-2">Apakah saya harus punya skill jualan atau IT?</h4>
                    <p class="text-slate-600">Sama sekali tidak. Tugas kamu hanya merekomendasikan atau membagikan link.
                        Jika relasimu tertarik, tim ahli kami yang akan presentasi dan *closing* mereka.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                    <h4 class="font-bold text-slate-900 text-lg mb-2">Bagaimana dan kapan komisi saya dibayar?</h4>
                    <p class="text-slate-600">Komisi 10% akan langsung ditransfer ke rekeningmu maksimal 2x24 jam
                        setelah klien melakukan pembayaran lunas kepada kami.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                    <h4 class="font-bold text-slate-900 text-lg mb-2">Apakah sistemnya harus selalu pakai link?</h4>
                    <p class="text-slate-600">Tidak wajib. Kalau kamu punya teman yang mau bikin web, kamu bisa langsung
                        chat ke WhatsApp kami dan konfirmasi manual: *"Halo min, ini teman saya atas nama X mau bikin
                        web"*. Komisi tetap akan masuk ke kamu!</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                    <h4 class="font-bold text-slate-900 text-lg mb-2">Apakah daftar ini benar-benar gratis?</h4>
                    <p class="text-slate-600">Ya, 100% GRATIS selamanya. Tidak ada biaya tersembunyi, apalagi biaya
                        pendaftaran.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="daftar" class="py-24">
        <div class="max-w-5xl mx-auto px-5 md:px-10">
            <div data-aos="zoom-in" data-aos-duration="1000"
                class="bg-blue-600 rounded-[2.5rem] p-12 lg:p-16 text-center relative overflow-hidden shadow-2xl shadow-blue-900/20">
                <div
                    class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-blue-500 opacity-50 blur-3xl">
                </div>
                <div
                    class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-blue-700 opacity-50 blur-3xl">
                </div>

                <div class="relative z-10 text-white">
                    <h2 class="text-3xl lg:text-5xl font-extrabold mb-6 leading-tight">
                        Mulai Sekarang & Dapatkan<br>Komisi Pertamamu!
                    </h2>
                    <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">
                        Jangan tunggu nanti, setiap bisnis butuh website. Kalau kamu tidak merekomendasikan sekarang,
                        orang lain yang akan ambil peluang ini duluan.
                    </p>
                    <a href="{{ route('affiliate.register') }}"
                        class="inline-block px-12 py-5 bg-yellow-400 text-slate-900 font-extrabold text-lg rounded-2xl shadow-xl hover:bg-yellow-300 hover:scale-105 transition-all transform duration-300">
                        DAFTAR AFFILIATE SEKARANG (GRATIS)
                    </a>
                    <p class="mt-6 text-sm text-blue-200">
                        Ayo gabung, dapatkan link kamu, dan mulai hasilkan cuan dari 1 klien pertamamu!
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>