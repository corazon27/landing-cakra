<x-layout.app>

    @php
    $title = 'Jasa Pembuatan Website Toko Online & Kasir Digital (POS) | Cakra Inovasi Digital';
    $metaDescription = 'Solusi sistem kasir digital (POS) dan toko online untuk UMKM. Kelola stok, transaksi penjualan,
    dan laporan keuangan real-time dari HP. Cakra Inovasi Digital, Magelang. Tinggalkan rekap manual! Jasa pembuatan
    sistem Point of Sales (POS) & kasir digital untuk F&B, retail, dan jasa. Pantau stok, shift, & omset real-time.
    Konsultasi gratis!';
    $metaKeywords = 'website toko online, sistem kasir digital, POS UMKM, manajemen stok, web developer
    Magelang, Jawa Tengah, jasa pembuatan sistem kasir, web POS indonesia, point of sales custom, aplikasi kasir web,
    software
    kasir umkm, sistem kasir toko, kasir restoran, developer POS indonesia, solusi kasir digital, integrasi pembayaran
    online, laporan penjualan real-time, dashboard kasir online, sistem inventaris toko, manajemen produk digital, web
    kasir responsif, aplikasi kasir berbasis web';
    $ogType = 'website';
    $breadcrumbs = [
    ['name' => 'Layanan', 'url' => url('/layanan')],
    ['name' => 'Website Toko Online / POS', 'url' => url('/layanan/web-kasir')],
    ];
    @endphp

    @php
    $faqsData = [
    ['question' => 'Apakah sistem mendukung berbagai metode pembayaran?', 'answer' => 'Ya. Sistem kami dirancang
    fleksibel untuk mendukung tunai, transfer bank, dan e-wallet. Integrasi payment gateway dapat disesuaikan sesuai
    kebutuhan bisnis Anda saat pengembangan.'],
    ['question' => 'Apakah data penjualan dan stok saya aman?', 'answer' => 'Ya. Seluruh data dicadangkan harian secara
    otomatis dengan enkripsi SSL penuh antara toko dan server.'],
    ['question' => 'Bagaimana jika saya atau karyawan kesulitan menggunakannya?', 'answer' => 'Kami menyediakan video
    tutorial, layanan konsultasi teknis, dan buku panduan operasional PDF untuk memastikan tim Anda mahir menggunakan
    sistem.'],
    ['question' => 'Apakah sistem ini bisa digunakan di HP atau Tablet?', 'answer' => 'Sangat bisa. Website POS ini
    dibangun responsif dan mendukung Android, iOS, tablet, hingga PC kasir.'],
    ['question' => 'Dapatkah sistem mengelola banyak cabang (Multi-outlet)?', 'answer' => 'Ya. Anda dapat memantau stok
    dan laporan keuangan dari berbagai cabang dalam satu dashboard admin terpusat.'],
    ['question' => 'Apakah stok barang otomatis berkurang saat ada penjualan?', 'answer' => 'Benar. Setiap transaksi
    memotong stok secara real-time, dan sistem memberi peringatan jika stok mendekati batas minimum.'],
    ['question' => 'Apakah saya bisa menarik laporan keuangan bulanan?', 'answer' => 'Tentu. Sistem menyediakan laporan
    otomatis: penjualan harian, laba rugi, hingga analisis produk terlaris.'],
    ['question' => 'Bisa hubungkan dengan alat kasir yang sudah saya punya?', 'answer' => 'Sistem kami mendukung barcode
    scanner, cash drawer, dan printer struk thermal Bluetooth maupun USB.'],
    ['question' => 'Berapa lama waktu pengerjaannya?', 'answer' => 'Untuk sistem POS dengan fitur standar hingga
    integrasi API, waktu pengerjaan berkisar 14 sampai 21 hari kerja.'],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "{{ url('/layanan/web-kasir') }}/#service",
        "name": "Jasa Pembuatan Website Toko Online & Kasir Digital (POS)",
        "description": "Solusi sistem kasir digital POS dan toko online untuk UMKM. Kelola stok, transaksi penjualan, dan laporan keuangan real-time dari HP.",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "serviceType": "Pembuatan Website Toko Online dan Sistem Kasir POS",
        "url": "{{ url('/layanan/web-kasir') }}"
    }
    </script>
    @endpush


    {{-- SECTION 1: HERO --}}
    <section class="relative pt-32 pb-20 bg-white overflow-hidden">

        {{-- 🛠️ 1. LAYER BACKGROUND KHUSUS MOBILE (< lg) --}}
        <div class="absolute inset-0 bg-no-repeat pointer-events-none z-0
            bg-[length:auto_55%] bg-[position:right_center]
            lg:hidden" style="background-image: url('{{ asset('images/hero-pos.webp') }}');">
        </div>

        {{-- 🛠️ 2. LAYER BACKGROUND KHUSUS DESKTOP (>= lg) --}}
        {{-- Menggunakan spesifikasi desktop Anda yang sudah proporsional menepi ke kanan --}}
        <div class="absolute inset-0 bg-no-repeat pointer-events-none z-0 hidden
            lg:block lg:bg-[length:auto_65%] lg:bg-[position:right_2rem_center]"
            style="background-image: url('{{ asset('images/hero-pos.webp') }}');">
        </div>

        {{-- 💡 3. GRADIENT OVERLAY --}}
        {{-- Di mobile, kita buat overlay-nya tipis/hilang di bagian bawah agar gambar kasir tidak tertutup warna putih --}}
        <div class="absolute inset-0 bg-white/80 md:bg-transparent backdrop-blur-[1px] md:backdrop-blur-none pointer-events-none"
            aria-hidden="true"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]"
                    current="Kasir Digital / POS" />
            </div>

            {{-- 📐 3. GRID LAYOUT DIPERBARUI --}}
            {{-- Menggunakan rasio 7:5 agar kolom teks lebih leluasa --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                {{-- KOLOM KIRI: Teks & Tombol (lg:7) --}}
                <div class="lg:col-span-7 text-left space-y-6" data-aos="fade-right">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider">
                        Sistem POS & Inventaris
                    </span>

                    <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                        Kelola Toko Jadi <br class="hidden sm:block">
                        <span class="text-blue-600 relative inline-block mt-1">
                            Lebih Ringan &amp; Otomatis
                            <span class="absolute -bottom-1 md:-bottom-2 left-0 w-full h-1 bg-emerald-400 rounded-full"
                                aria-hidden="true"></span>
                        </span>
                    </h1>

                    <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                        Tinggalkan cara manual yang melelahkan. Saatnya punya sistem kasir digital yang bekerja untuk
                        Anda — kelola penjualan, pantau stok real-time, dan tarik laporan keuangan otomatis kapan saja.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya ingin konsultasi sistem kasir digital untuk toko saya.' . ($suffix ?? '')) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl bg-blue-600 text-white font-bold hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            Konsultasi Gratis
                        </a>
                        <a href="#fitur"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold hover:bg-slate-50 transition-all">
                            Lihat Fitur
                            <i class="fa-solid fa-arrow-down text-sm" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-chart-line text-blue-500"
                                aria-hidden="true"></i> Pantau Omset Real-time</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-receipt text-blue-500"
                                aria-hidden="true"></i> Cetak Struk Cepat</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-barcode text-blue-500"
                                aria-hidden="true"></i> Support Barcode</span>
                    </div>

                    {{-- Stats mini — mobile only --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-500">Live</p>
                            <p class="text-xs text-slate-500 mt-1">Laporan Omset</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">0%</p>
                            <p class="text-xs text-slate-500 mt-1">Selisih Uang</p>
                        </div>
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">Fast</p>
                            <p class="text-xs text-slate-500 mt-1">Cetak Struk</p>
                        </div>
                        <div class="bg-amber-50 rounded-2xl p-4 text-center border border-amber-100">
                            <p class="text-2xl font-extrabold text-amber-500">✓</p>
                            <p class="text-xs text-slate-500 mt-1">Akurasi Stok</p>
                        </div>
                    </div>
                </div>

                {{-- KOLOM KANAN: Visual Spacer (lg:5) --}}
                {{-- Menggantikan seluruh kode Mockup Dashboard Kasir HTML lama Anda --}}
                <div class="lg:col-span-5 relative h-[350px] sm:h-[450px] lg:h-[550px] hidden lg:block"
                    aria-hidden="true" data-aos="fade-left">
                </div>

            </div>
        </div>
    </section>


    {{-- SECTION 2: PERBANDINGAN --}}
    <section class="py-14 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">
            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Masih Pakai Buku Nota & Kalkulator?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Kasir manual membuat bisnis lambat, rentan kebocoran dana, dan menyulitkan Anda sebagai owner untuk
                    mengecek performa toko saat sedang tidak berada di tempat.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 items-stretch">

                <div class="bg-white p-5 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-book-open text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 md:mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-slate-900 mb-4 md:mb-5">Kasir Manual & Buku Tulis
                        </h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Laporan lambat & rawan salah:</strong> Karyawan harus merekap nota secara
                                    manual di akhir hari, sangat rentan *human error* dan manipulasi.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Stok barang tidak terkontrol:</strong> Anda tidak pernah tahu pasti jumlah
                                    barang gudang dan rak tanpa harus menghitung fisiknya langsung.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Tidak bisa pantau dari jauh:</strong> Owner wajib berada di toko untuk
                                    mengetahui berapa pendapatan hari ini.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Pelayanan kasir sangat lambat saat jam sibuk, membuat antrean panjang pelanggan tidak
                                sabar.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-blue-500 p-5 md:p-8 rounded-3xl shadow-xl shadow-blue-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-desktop text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-blue-400 rounded-2xl flex items-center justify-center mb-4 md:mb-5 border border-blue-300">
                            <i class="fa-solid fa-check text-white text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-4 md:mb-5">Dengan Sistem POS Digital
                        </h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Rekap instan tanpa selisih:</strong> Saat tutup shift, laporan uang fisik vs
                                    sistem akan otomatis tercetak, mencegah kebocoran dana.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Manajemen stok otomatis (Auto-sync):</strong> Stok gudang/rak berkurang
                                    seketika setiap struk belanja dicetak.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Owner pantau dari HP (Real-time):</strong> Anda bisa ngopi di rumah sambil
                                    memantau penjualan seluruh cabang tanpa harus datang.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                Pelayanan 5x lebih cepat dengan scan barcode & cetak struk instan. Pelanggan senang,
                                antrean lancar.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
         SECTION 3: COCOK UNTUK BISNIS APA?
    ================================================================ --}}
    <section class="py-14 md:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-14" data-aos="fade-up">
                <span
                    class="inline-block bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Sistem Custom Yang Fleksibel
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Sistem Kasir untuk Berbagai Bisnis
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Sistem berbasis web memungkinkan kami menyesuaikan fitur kasir agar pas dengan alur bisnis spesifik
                    Anda.
                </p>
            </div>

            @php
            $useCases = [
            ['icon' => 'fa-solid fa-store', 'color' => 'blue', 'label' => 'Toko Retail & Minimarket', 'desc' =>
            'Dukungan scan barcode cepat, manajemen ribuan SKU, dan opname stok fisik yang mudah.'],
            ['icon' => 'fa-solid fa-mug-hot', 'color' => 'emerald','label' => 'Cafe & Coffee Shop', 'desc' =>
            'Pencatatan varian menu (ukuran, less sugar), manajemen meja, dan sistem split bill.'],
            ['icon' => 'fa-solid fa-utensils', 'color' => 'red', 'label' => 'Restoran & F&B', 'desc' => 'Fitur Kitchen
            Display System (KDS), perhitungan bahan baku (resep), dan take-away/dine-in.'],
            ['icon' => 'fa-solid fa-scissors', 'color' => 'pink', 'label' => 'Salon & Barbershop', 'desc' => 'Pencatatan
            komisi karyawan/kapster otomatis per transaksi dan database pelanggan.'],
            ['icon' => 'fa-solid fa-car', 'color' => 'blue', 'label' => 'Bengkel & Cuci Mobil', 'desc' => 'Gabungan
            penjualan sparepart, biaya jasa mekanik, dan estimasi waktu selesai pengerjaan.'],
            ['icon' => 'fa-solid fa-pills', 'color' => 'amber', 'label' => 'Apotek & Klinik', 'desc' => 'Manajemen
            tanggal kadaluarsa (expired date), batch obat, dan sinkronisasi resep.'],
            ['icon' => 'fa-solid fa-shirt', 'color' => 'indigo', 'label' => 'Toko Baju & Butik', 'desc' => 'Manajemen
            variasi warna & ukuran, retur barang, serta program membership/diskon.'],
            ['icon' => 'fa-solid fa-network-wired', 'color' => 'violet', 'label' => 'Franchise / Multi-Cabang', 'desc'
            => 'Laporan pusat konsolidasi, mutasi barang antar cabang, dan kontrol harga terpusat.'],
            ];

            $uc_colors = [
            'blue' => ['bg' => 'bg-blue-50', 'icon' => 'text-blue-600', 'border' => 'border-blue-100', 'hover'
            => 'hover:border-blue-300'],
            'emerald'=> ['bg' => 'bg-emerald-50', 'icon' => 'text-emerald-600', 'border' => 'border-emerald-100',
            'hover' => 'hover:border-emerald-300'],
            'blue' => ['bg' => 'bg-blue-50', 'icon' => 'text-blue-600', 'border' => 'border-blue-100', 'hover' =>
            'hover:border-blue-300'],
            'pink' => ['bg' => 'bg-pink-50', 'icon' => 'text-pink-600', 'border' => 'border-pink-100', 'hover' =>
            'hover:border-pink-300'],
            'amber' => ['bg' => 'bg-amber-50', 'icon' => 'text-amber-600', 'border' => 'border-amber-100', 'hover' =>
            'hover:border-amber-300'],
            'red' => ['bg' => 'bg-red-50', 'icon' => 'text-red-600', 'border' => 'border-red-100', 'hover' =>
            'hover:border-red-300'],
            'indigo' => ['bg' => 'bg-indigo-50', 'icon' => 'text-indigo-600', 'border' => 'border-indigo-100', 'hover'
            => 'hover:border-indigo-300'],
            'violet' => ['bg' => 'bg-violet-50', 'icon' => 'text-violet-600', 'border' => 'border-violet-100', 'hover'
            => 'hover:border-violet-300'],
            ];
            @endphp

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-5">
                @foreach($useCases as $uc)
                @php $uc_c = $uc_colors[$uc['color']]; @endphp
                <div class="group p-4 md:p-5 bg-white rounded-2xl border {{ $uc_c['border'] }} {{ $uc_c['hover'] }}
                            shadow-sm hover:shadow-md transition-all duration-300 cursor-default" data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 50 }}">
                    <div
                        class="w-10 h-10 {{ $uc_c['bg'] }} rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                        <i class="{{ $uc['icon'] }} {{ $uc_c['icon'] }} text-lg" aria-hidden="true"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-1.5">{{ $uc['label'] }}</h3>
                    <p class="text-xs text-slate-500 leading-relaxed">{{ $uc['desc'] }}</p>
                </div>
                @endforeach
            </div>

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-3">Bisnis Anda memiliki alur operasional yang unik?</p>
                <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya ingin konsultasi sistem kasir custom untuk bisnis saya.' . $suffix) }}"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-blue-500 font-semibold hover:underline underline-offset-4 transition text-sm">
                    Mari diskusikan, kami bisa membuatkan fitur secara custom
                    <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- SECTION 4: FITUR --}}
    <section id="fitur" class="py-16 md:py-24 bg-[#eae7dc]" x-data="{ activeFeature: 1 }">
        <div class="max-w-5xl mx-auto px-5 md:px-6">

            {{-- Header Section dengan Gaya Minimalis Klasik --}}
            <div class="text-left mb-10 md:mb-14" data-aos="fade-up">
                <span class="text-xs font-bold tracking-widest text-[#e85a4f] uppercase block mb-2">SEKAT 01–05</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#1e302b] mb-3">
                    Solusi Digital All-in-One
                </h2>
                <p class="text-[#5b5853] text-sm md:text-base font-normal">
                    Kelola toko online dan kasir fisik Anda dalam satu sistem yang otomatis dan terintegrasi penuh.
                </p>
            </div>

            {{-- Container Utama Arsitektur Split Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-12 border border-[#d8d3c5] rounded-sm overflow-hidden bg-[#f0ede4]"
                data-aos="fade-up">

                {{-- Sisi Kiri: Tab Pilihan Point Fitur (md:col-span-5) --}}
                <div class="md:col-span-5 flex flex-col divide-y divide-[#d8d3c5] border-r border-[#d8d3c5]">

                    @php
                    $fiturList = [
                    [
                    1,
                    'fa-solid fa-cash-register',
                    'Sistem Kasir (POS) Digital',
                    'Transaksi langsung dari HP, tablet, atau komputer. Proses jual beli lebih cepat dan profesional
                    seperti minimarket modern.',
                    'seluruh pencatatan penjualan terarsip otomatis, meminimalisir kesalahan manual atau selisih kas
                    kasir.'
                    ],
                    [
                    2,
                    'fa-solid fa-boxes-stacked',
                    'Stok Otomatis (Omnichannel)',
                    'Kelola produk and stok dalam satu dashboard pusat. Stok terupdate otomatis di web maupun toko fisik
                    secara bersamaan.',
                    'terhindar dari risiko over-selling atau kehabisan stok tanpa sadar di salah satu cabang/saluran
                    penjualan.'
                    ],
                    [
                    3,
                    'fa-solid fa-credit-card',
                    'Sistem Pembayaran Fleksibel',
                    'Dukung berbagai metode pembayaran mulai dari tunai, transfer bank, hingga e-wallet. Integrasi dapat
                    disesuaikan dengan kebutuhan bisnis Anda.',
                    'meningkatkan kenyamanan pelanggan saat bertransaksi yang berdampak langsung pada conversion rate
                    toko.'
                    ],
                    [
                    4,
                    'fa-solid fa-chart-column',
                    'Laporan Penjualan Real-Time',
                    'Pantau omzet dan keuntungan langsung dari HP. Mengetahui kondisi kesehatan bisnis kapan saja tanpa
                    laporan manual.',
                    'bisa mengambil keputusan bisnis taktis secara cepat berdasarkan akurasi data finansial yang sahih.'
                    ],
                    [
                    5,
                    'fa-brands fa-whatsapp',
                    'Integrasi WhatsApp Otomatis',
                    'Pesanan website langsung masuk ke WhatsApp admin. Closing lebih cepat karena bisa langsung chat
                    pembeli tanpa pindah aplikasi.',
                    'membangun kedekatan personal secara instan dengan pembeli untuk mempercepat proses konversi
                    orderan.'
                    ]
                    ];
                    @endphp

                    @foreach($fiturList as [$id, $icon, $judul, $deskripsi, $manfaat])
                    <button @click="activeFeature = {{ $id }}" type="button"
                        class="w-full text-left px-5 py-4 md:py-5 flex items-center gap-4 transition-all duration-200 focus:outline-none group text-sm md:text-base font-semibold"
                        :class="activeFeature === {{ $id }} ? 'bg-[#1e302b] text-[#f0ede4]' : 'bg-transparent text-[#1e302b] hover:bg-[#e7e3d4]'">

                        {{-- Nomor Seri Point Fitur --}}
                        <span class="text-xs font-mono tracking-wider"
                            :class="activeFeature === {{ $id }} ? 'text-[#e85a4f]' : 'text-[#e85a4f]/70 group-hover:text-[#e85a4f]'">
                            0{{ $id }}
                        </span>

                        {{-- Icon & Judul Ringkas --}}
                        <span class="flex items-center gap-2.5">
                            <i class="{{ $icon }} text-sm transition-colors"
                                :class="activeFeature === {{ $id }} ? 'text-[#f0ede4]' : 'text-[#1e302b]'"></i>
                            {{ $judul }}
                        </span>
                    </button>
                    @endforeach

                </div>

                {{-- Sisi Kanan: Ruang Penjelasan Detail Dinamis (md:col-span-7) --}}
                <div class="md:col-span-7 bg-[#f4f1ea] p-6 md:p-10 flex flex-col justify-center min-h-[320px]">

                    @foreach($fiturList as [$id, $icon, $judul, $deskripsi, $manfaat])
                    <div x-show="activeFeature === {{ $id }}" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform translate-x-2"
                        x-transition:enter-end="opacity-100 transform translate-x-0" class="space-y-4">

                        {{-- Besar Icon Penanda Konten --}}
                        <div class="text-[#e85a4f] text-2xl md:text-3xl">
                            <i class="{{ $icon }}"></i>
                        </div>

                        {{-- Judul Detail --}}
                        <h3 class="text-xl md:text-2xl font-serif font-bold text-[#1e302b]">
                            {{ $judul }}
                        </h3>

                        {{-- Deskripsi Utama --}}
                        <p class="text-[#5b5853] text-sm md:text-base leading-relaxed font-normal">
                            {{ $deskripsi }}
                        </p>

                        {{-- Highlight Manfaat --}}
                        <p class="text-[#3a3834] text-sm md:text-base leading-relaxed pt-2">
                            <span class="font-bold text-[#1e302b]">Manfaat:</span> {{ $manfaat }}
                        </p>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>


    {{-- SECTION 5: PAKET HARGA --}}
    <section id="paket" class="py-16 md:py-24 bg-[#16291F] border-t border-[#D8D0BD]">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            {{-- Header Section --}}
            <div class="max-w-2xl mb-12 md:mb-16" data-aos="fade-up">
                <p class="font-mono text-xs tracking-[0.18em] uppercase text-[#B8924A] mb-3">Daftar Harga</p>
                <h2 class="font-display text-2xl md:text-4xl font-semibold text-[#EFEAE0]">
                    Skema Langganan <span class="text-[#B8924A]">Sesuai Kebutuhan</span>
                </h2>
                <p class="text-[#EFEAE0]/60 text-sm md:text-base mt-3 font-body">
                    Mulai digitalisasi operasional toko Anda dengan biaya investasi yang fleksibel dan terjangkau.
                </p>
            </div>

            {{-- Grid Wrapper: Ubah gap menjadi 0 agar kartu menyatu seperti di referensi gambar --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0 lg:border border-[#EFEAE0]/15"
                data-aos="fade-up">

                @php
                $plans = [
                [
                'title' => 'Skema per Transaksi/Nota',
                'price' => 'Rp75',
                'unit' => 'Per transaksi/nota',
                'desc' => 'Paling untung! Biaya transaksi bisa dibebankan ke pelanggan Anda.',
                'note' => 'Gratis kertas thermal minimal biaya Rp400/transaksi.',
                'badge' => 'Favorit',
                'accent' => 'green',
                'cta' => 'Pilih Skema',
                ],
                [
                'title' => 'Langganan Versi Handphone',
                'price' => 'Rp50.000',
                'unit' => 'Per bulan, per outlet',
                'desc' => 'Tampilan praktis, fitur dasar kasir. Cocok untuk usaha kecil/UMKM.',
                'note' => 'Langganan 12 bulan, gratis 2 bulan tambahan.',
                'badge' => null,
                'accent' => 'slate',
                'cta' => 'Pilih Paket',
                ],
                [
                'title' => 'Langganan Versi Tablet',
                'price' => 'Rp125.000',
                'unit' => 'Per bulan, per outlet',
                'desc' => 'Tampilan lengkap, fitur full access. Ideal buat restoran & kafe.',
                'note' => 'Langganan 12 bulan, hemat Rp300ribu.',
                'badge' => 'Paling Laris',
                'accent' => 'green',
                'cta' => 'Pilih Paket',
                ],
                [
                'title' => 'Langganan Versi Web',
                'price' => 'Rp125.000',
                'unit' => 'Per bulan, per outlet',
                'desc' => 'Tampilan simpel, cocok buat operasional dari laptop/PC kasir.',
                'note' => 'Langganan 12 bulan, hemat Rp300ribu.',
                'badge' => null,
                'accent' => 'slate',
                'cta' => 'Pilih Paket',
                ],
                ];
                @endphp

                @foreach($plans as $i => $plan)
                {{-- Perubahan Card: Background menyatu, efek membesar (scale) pada paket unggulan, dan border pemisah antar kolom --}}
                <article
                    class="relative flex flex-col transition-all duration-300 border-b lg:border-b-0 {{ $plan['accent'] === 'green' ? 'bg-[#FCFAF5] lg:scale-[1.04] lg:-my-2 z-20 shadow-[0_10px_40px_rgba(0,0,0,0.15)] rounded-sm' : 'bg-[#F6F2E8] z-10' }} {{ $i > 0 && $plan['accent'] !== 'green' && $plans[$i-1]['accent'] !== 'green' ? 'lg:border-l lg:border-[#D8D0BD]/50' : '' }}"
                    data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">

                    {{-- Lencana Stempel Merah Klasik (Rotated) sesuai referensi --}}
                    @if($plan['badge'])
                    <div class="absolute -top-5 right-2 lg:-top-6 lg:-right-4 w-16 h-16 rounded-full border-[1.5px] border-[#B23A2E] flex items-center justify-center {{ $plan['accent'] === 'green' ? 'bg-[#FCFAF5]' : 'bg-[#F6F2E8]' }} z-30 shadow-sm transform rotate-[15deg]"
                        aria-hidden="true">
                        <span
                            class="text-[8.5px] text-center leading-[1.15] font-bold uppercase text-[#B23A2E] tracking-wider px-1">
                            {{ $plan['badge'] }}
                        </span>
                    </div>
                    @endif

                    <div class="p-6 md:p-8 flex-1 flex flex-col">

                        {{-- Bagian Atas / Header Card dengan Garis Pemisah Putus-Putus (Dashed) --}}
                        <div class="mb-5 pb-6 border-b border-dashed border-[#D8D0BD]">
                            <p class="font-mono text-[10.5px] text-[#B23A2E] tracking-widest mb-2 uppercase">
                                OPSI-{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}
                            </p>
                            <h3 class="font-display text-lg md:text-xl font-bold text-[#2B2620] mb-2.5 leading-snug">
                                {{ $plan['title'] }}
                            </h3>
                            <p class="text-[#6B6357] text-[11px] mb-1 font-body">Mulai dari</p>

                            {{-- Harga menggunakan teks besar & Monospace --}}
                            <p class="font-mono text-3xl md:text-4xl font-bold text-[#1F3A2E]">
                                {{ $plan['price'] }}
                            </p>
                            <p class="text-xs text-[#6B6357] mt-2 font-body">
                                {{ $plan['unit'] }}
                            </p>
                        </div>

                        {{-- Deskripsi Utama --}}
                        <p class="text-[#3A352C] text-sm mb-6 flex-grow leading-relaxed font-body">
                            {{ $plan['desc'] }}
                        </p>

                        {{-- Info Box Tanpa Background Tebal (Sesuai gaya elegan minimalis) --}}
                        <div
                            class="bg-transparent p-3 rounded-sm flex items-start gap-2.5 mb-6 border border-[#D8D0BD]/60">
                            <i class="fa-solid fa-circle-info text-[#B8924A] mt-0.5 shrink-0 text-xs"
                                aria-hidden="true"></i>
                            <p class="text-[11px] text-[#5A5245] leading-snug font-body">{{ $plan['note'] }}</p>
                        </div>

                        {{-- Tombol CTA --}}
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20tertarik%20dengan%20paket%20{{ urlencode($plan['title']) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="block w-full py-3 px-4 mt-auto text-center rounded-sm font-body font-bold text-sm transition-colors {{ $plan['accent'] === 'green' ? 'bg-[#1F3A2E] text-[#EFEAE0] hover:bg-[#16291F]' : 'bg-transparent border border-[#1F3A2E] text-[#1F3A2E] hover:bg-[#1F3A2E] hover:text-[#EFEAE0]' }}">
                            {{ $plan['cta'] }}
                        </a>
                    </div>

                </article>
                @endforeach

            </div>

            {{-- Bagian Link Bawah / Footer Section --}}
            <div class="mt-14 text-center" data-aos="fade-up">
                <a href="{{ url('/fitur-web-kasir') }}"
                    class="inline-flex items-center gap-2 text-[#EFEAE0]/80 hover:text-[#EFEAE0] font-semibold text-sm font-body underline underline-offset-4">
                    Lihat perbandingan fitur &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>

    {{-- SECTION 5: FAQ --}}
    <!-- <section class="py-24 bg-slate-50" x-data="faqSection()">
        <div class="max-w-3xl mx-auto px-6">

            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Sistem POS Kami</span>
                </h2>
                <p class="text-slate-600">Semua yang perlu Anda ketahui tentang proses kerja sama dan hasil akhir
                    proyek.</p>
            </div>

            <div class="space-y-3" itemscope itemtype="https://schema.org/FAQPage">
                <template x-for="faq in faqs" :key="faq.id">
                    <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-sm transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 ring-1 ring-blue-100' : ''" itemscope
                        itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <button @click="selected !== faq.id ? selected = faq.id : selected = null"
                            class="w-full flex items-center justify-between p-5 text-left bg-white hover:bg-slate-50 transition-colors"
                            :aria-expanded="selected === faq.id">
                            <span class="font-bold text-slate-900 pr-4 text-sm md:text-base"
                                :class="selected === faq.id ? 'text-blue-600' : ''" x-text="faq.question"
                                itemprop="name"></span>
                            <i class="fa-solid fa-chevron-down text-blue-600 transition-transform duration-300 flex-shrink-0"
                                :class="selected === faq.id ? 'rotate-180' : ''" aria-hidden="true"></i>
                        </button>

                        <div class="px-5 pb-5 text-sm text-slate-600 leading-relaxed" x-show="selected === faq.id"
                            x-collapse itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div x-html="faq.answer" itemprop="text"></div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra, saya ada pertanyaan seputar sistem POS toko digital.' . $suffix) }}"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section> -->

    <section id="faq" class="py-14 md:py-24 bg-[#FAF8F5]" x-data="faqPOS()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Sistem POS Kami</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-pos-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-pos-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-pos-answer-' + faq.id">

                            <span class="faq-pos-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
                                style="width:10px;height:10px;transform:scale(0);transition:transform 0.5s ease,opacity 0.5s ease;"></span>

                            <span
                                class="shrink-0 w-6 md:w-7 h-6 md:h-7 rounded-full text-[10px] md:text-[11px] font-extrabold flex items-center justify-center transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-400 group-hover:bg-slate-200'"
                                x-text="String(index + 1).padStart(2, '0')"></span>

                            <span
                                class="flex-1 font-bold text-sm md:text-base pr-3 md:pr-4 transition-colors duration-200 leading-snug"
                                :class="selected === faq.id ? 'text-blue-700' : 'text-slate-800'" x-text="faq.question"
                                itemprop="name"></span>

                            <span
                                class="shrink-0 w-7 md:w-8 h-7 md:h-8 rounded-full flex items-center justify-center border transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-600 border-blue-600 rotate-180' : 'bg-white border-slate-200 group-hover:border-slate-300'">
                                <i class="fa-solid fa-chevron-down text-[10px] md:text-[11px] transition-colors duration-200"
                                    :class="selected === faq.id ? 'text-white' : 'text-slate-400'"
                                    aria-hidden="true"></i>
                            </span>
                        </button>

                        <div :id="'faq-pos-answer-' + faq.id" class="faq-pos-answer overflow-hidden"
                            :style="selected === faq.id ? 'max-height: 500px; opacity: 1;' : 'max-height: 0; opacity: 0;'"
                            itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div class="px-4 md:px-6 pb-4 md:pb-5 pt-0">
                                <div class="border-t border-slate-100 mb-3 md:mb-4"></div>
                                <div class="pl-9 md:pl-11 text-sm text-slate-600 leading-relaxed" x-html="faq.answer"
                                    itemprop="text"></div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra, saya ada pertanyaan seputar sistem POS atau Kasir Digital.' . $suffix) }}"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- SECTION 6: CTA + MEETING FORM --}}
    <x-meeting-form title="Siap Membangun Kasir Digital Profesional Anda?"
        subtitle="Jadwalkan konsultasi gratis — diskusikan kebutuhan spesifik bisnis Anda bersama tim kami." />

    @push('scripts')
    <script>
    function faqPOS() {
        return {
            selected: null,

            faqs: [{
                    id: 1,
                    question: 'Apakah sistem mendukung berbagai metode pembayaran?',
                    answer: `<p class="mb-3">Ya. Sistem kasir kami dirancang fleksibel untuk mendukung:</p>
            <div class="space-y-2">
                <div class="flex items-start gap-3 p-3 bg-blue-50 rounded-xl"><i class="fa-solid fa-money-bill text-blue-600 mt-0.5 shrink-0 text-xs" aria-hidden="true"></i><p class="text-xs text-slate-600"><strong>Pembayaran Tunai:</strong> Pencatatan dan pengelolaan uang tunai terintegrasi otomatis dengan laporan shift kasir.</p></div>
                <div class="flex items-start gap-3 p-3 bg-emerald-50 rounded-xl"><i class="fa-solid fa-building-columns text-emerald-600 mt-0.5 shrink-0 text-xs" aria-hidden="true"></i><p class="text-xs text-slate-600"><strong>Transfer Bank & E-Wallet:</strong> Metode pembayaran digital dapat diintegrasikan sesuai kebutuhan bisnis Anda selama proses pengembangan sistem.</p></div>
            </div>
            <p class="text-xs text-slate-400 mt-3 italic">Diskusikan kebutuhan spesifik metode pembayaran Anda saat konsultasi awal.</p>`
                },
                {
                    id: 2,
                    question: 'Apakah data penjualan dan stok saya aman?',
                    answer: `<div class="flex items-start gap-4 bg-orange-50 p-4 rounded-xl">
            <i class="fa-solid fa-shield-halved text-2xl text-orange-500 mt-1 shrink-0" aria-hidden="true"></i>
            <div>
                <p class="mb-2 text-xs font-bold text-slate-700">Keamanan Data Berlapis:</p>
                <ul class="space-y-1">
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Seluruh data dicadangkan (backup) harian secara otomatis</li>
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Jalur data terproteksi enkripsi SSL penuh (Bank-grade security)</li>
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Server berbasis Cloud dengan uptime 99.9%</li>
                </ul>
            </div>
        </div>`
                },
                {
                    id: 3,
                    question: 'Bagaimana jika saya atau karyawan kesulitan menggunakannya?',
                    answer: `<p class="mb-3">Kami memastikan tim Anda mahir menggunakan sistem melalui fasilitas lengkap:</p>
            <div class="grid grid-cols-2 gap-2">
                <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-video text-blue-500"></i> Video Tutorial</div>
                <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-headset text-emerald-500"></i> Konsultasi Teknis</div>
                <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-book text-orange-500"></i> Panduan PDF</div>
                <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-users text-violet-500"></i> Pelatihan Admin</div>
            </div>`
                },
                {
                    id: 4,
                    question: 'Apakah sistem ini bisa digunakan di HP atau Tablet?',
                    answer: `<p class="mb-3"><strong>Sangat bisa.</strong> Website POS ini dibangun dengan teknologi responsif:</p>
            <div class="space-y-2">
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-mobile-screen text-slate-500" aria-hidden="true"></i><span>Mobile Android & iOS (Untuk monitoring & stok)</span></div>
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-tablet-screen-button text-slate-500" aria-hidden="true"></i><span>Tablet Android/iPad (Untuk display kasir)</span></div>
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-desktop text-slate-500" aria-hidden="true"></i><span>PC / Laptop / Terminal Kasir</span></div>
            </div>`
                },
                {
                    id: 5,
                    question: 'Dapatkah sistem mengelola banyak cabang (Multi-outlet)?',
                    answer: `<p class="mb-3">Ya. Anda dapat memantau seluruh operasional dari satu tempat:</p>
            <ul class="space-y-1.5">
                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-circle-check text-orange-500 text-[10px]" aria-hidden="true"></i> Dashboard admin terpusat untuk memantau semua cabang</li>
                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-circle-check text-orange-500 text-[10px]" aria-hidden="true"></i> Mutasi stok antar cabang terpantau otomatis</li>
                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-circle-check text-orange-500 text-[10px]" aria-hidden="true"></i> Laporan penjualan per cabang maupun konsolidasi</li>
            </ul>`
                },
                {
                    id: 6,
                    question: 'Apakah stok barang otomatis berkurang saat ada penjualan?',
                    answer: `<div class="flex items-start gap-4 bg-emerald-50 p-4 rounded-xl border border-emerald-100">
            <i class="fa-solid fa-boxes-stacked text-2xl text-emerald-600 mt-1 shrink-0" aria-hidden="true"></i>
            <div>
                <p class="mb-2 text-xs">Sistem stok bekerja secara <strong>Real-time</strong>:</p>
                <ul class="space-y-1">
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-arrow-down text-red-500 text-[10px]" aria-hidden="true"></i> Pengurangan stok otomatis tiap transaksi sukses</li>
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-triangle-exclamation text-amber-500 text-[10px]" aria-hidden="true"></i> Warning jika stok mencapai batas minimum</li>
                    <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-clock-rotate-left text-blue-500 text-[10px]" aria-hidden="true"></i> Histori mutasi stok tercatat lengkap</li>
                </ul>
            </div>
        </div>`
                },
                {
                    id: 7,
                    question: 'Apakah saya bisa menarik laporan keuangan bulanan?',
                    answer: `<p class="mb-3">Tentu. Laporan otomatis siap pakai untuk keputusan bisnis Anda:</p>
            <div class="grid grid-cols-2 gap-2">
                <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Penjualan</p><p class="text-slate-500">Harian, mingguan, bulanan</p></div>
                <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Laba Rugi</p><p class="text-slate-500">Margin keuntungan bersih</p></div>
                <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Top Product</p><p class="text-slate-500">Analisis barang terlaris</p></div>
                <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Metode Bayar</p><p class="text-slate-500">Tunai, Bank, E-Wallet</p></div>
            </div>`
                },
                {
                    id: 8,
                    question: 'Bisa hubungkan dengan alat kasir yang sudah saya punya?',
                    answer: `<p class="mb-3">Sistem kami bersifat <em>hardware-friendly</em> dan mendukung:</p>
            <div class="space-y-2">
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-barcode text-slate-600" aria-hidden="true"></i><span>Barcode Scanner (USB / Wireless)</span></div>
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-print text-slate-600" aria-hidden="true"></i><span>Printer Struk Thermal (Bluetooth / USB)</span></div>
                <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-vault text-slate-600" aria-hidden="true"></i><span>Cash Drawer (Laci Kasir Otomatis)</span></div>
            </div>`
                },
                {
                    id: 9,
                    question: 'Berapa lama waktu pengerjaannya?',
                    answer: `<div class="space-y-2">
                <div class="flex items-center gap-3 p-3 bg-orange-50 rounded-xl text-xs border border-orange-100">
                    <i class="fa-solid fa-clock text-orange-500" aria-hidden="true"></i>
                    <span><strong>Estimasi Waktu:</strong> 14 sampai 21 hari kerja</span>
                </div>
                <p class="text-xs text-slate-400 italic">*Waktu pengerjaan mencakup setup server, integrasi API Payment Gateway, input data awal, hingga tahap testing sistem di lokasi Anda.</p>
            </div>`
                },
            ],

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-pos-ripple');

                // 1. Efek Ripple (Tetap sama)
                if (ripple) {
                    const rect = btn.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height) * 2;
                    ripple.style.width = size + 'px';
                    ripple.style.height = size + 'px';
                    ripple.style.left = (event.clientX - rect.left - size / 2) + 'px';
                    ripple.style.top = (event.clientY - rect.top - size / 2) + 'px';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.opacity = '1';
                    ripple.offsetWidth;
                    ripple.style.transform = 'scale(1)';
                    ripple.style.opacity = '0';
                }

                const wasOpen = this.selected === id;
                this.selected = wasOpen ? null : id;

                // 2. Logic Scroll Pintar
                if (!wasOpen) {
                    // Deteksi apakah user menggunakan layar smartphone (lebar < 768px)
                    const isMobile = window.innerWidth < 768;

                    if (isMobile) {
                        // VERSI PRO MOBILE: Gunakan requestAnimationFrame untuk sinkronisasi dengan animasi browser
                        // Kita beri sedikit jeda (delay) tapi lebih singkat agar tidak terasa lambat
                        setTimeout(() => {
                                this.scrollToElement(id);
                            },
                            290
                        ); // 250ms adalah sweet spot: animasi penutupan sudah berjalan tapi user belum bosan menunggu
                    } else {
                        // VERSI DESKTOP: Gunakan $nextTick agar instan dan smooth
                        this.$nextTick(() => {
                            this.scrollToElement(id);
                        });
                    }
                }
            },

            // Fungsi pembantu agar kode lebih bersih
            scrollToElement(id) {
                const el = document.getElementById('faq-pos-answer-' + id);
                if (el) {
                    const parent = el.closest('.faq-pos-item');
                    if (parent) {
                        const offset = 110;
                        const bodyRect = document.body.getBoundingClientRect().top;
                        const elementRect = parent.getBoundingClientRect().top;
                        const elementPosition = elementRect - bodyRect;
                        const offsetPosition = elementPosition - offset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            }
        };
    }
    </script>
    @endpush

    @push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Inter:wght@400;500;600;700;800&family=IBM+Plex+Mono:wght@500;600&display=swap"
        rel="stylesheet">
    <style>
    :root {
        --ink: #1F3A2E;
        --ink-deep: #16291F;
        --paper: #EFEAE0;
        --paper-soft: #F6F2E8;
        --stempel: #B23A2E;
        --brass: #B8924A;
        --charcoal: #2B2620;
        --muted: #6B6357;
        --line: #D8D0BD;
    }

    html,
    body {
        max-width: 100% !important;
        overflow-x: hidden !important;
        position: relative;
    }

    .faq-pos-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-pos-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-pos-item:not([class*="border-blue"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-pos-answer {
            transition: none;
        }

        .faq-pos-ripple {
            display: none;
        }
    }

    .font-display {
        font-family: 'Fraunces', serif;
    }

    .font-body {
        font-family: 'Inter', sans-serif;
    }

    .font-mono {
        font-family: 'IBM Plex Mono', monospace;
    }

    .ring-spine {
        position: relative;
        background-image: radial-gradient(circle at 50% 50%, var(--brass) 0 2px, transparent 2.4px);
        background-size: 100% 64px;
        background-position: 0 18px;
    }

    .ring-spine::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle at 50% 50%, rgba(0, 0, 0, .25) 0 2px, transparent 2.6px);
        background-size: 100% 64px;
        background-position: 1px 19px;
        pointer-events: none;
    }

    /* stempel / official stamp badge — replaces generic pill */
    .stempel-badge {
        border: 2.5px solid var(--stempel);
        color: var(--stempel);
        border-radius: 999px;
        transform: rotate(-6deg);
        font-family: 'IBM Plex Mono', monospace;
        letter-spacing: .08em;
        box-shadow: inset 0 0 0 2px rgba(178, 58, 46, .15);
    }

    .stempel-badge::after {
        content: '';
        position: absolute;
        inset: 3px;
        border: 1px dashed var(--stempel);
        border-radius: 999px;
        opacity: .5;
    }

    .paper-texture {
        background-color: var(--paper);
        background-image:
            radial-gradient(rgba(43, 38, 32, .035) 1px, transparent 1px);
        background-size: 4px 4px;
    }

    .ledger-rule {
        border-bottom: 1px dashed var(--line);
    }

    .tab-rail-item {
        transition: padding-left .25s ease, color .25s ease;
    }

    .tab-rail-item[data-active="true"] {
        padding-left: 1.1rem;
    }

    a,
    button,
    [tabindex] {
        outline-offset: 3px;
    }

    a:focus-visible,
    button:focus-visible,
    [tabindex]:focus-visible {
        outline: 2.5px solid var(--stempel);
        border-radius: 6px;
    }
    </style>
    @endpush

</x-layout.app>