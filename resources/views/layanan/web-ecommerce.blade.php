<x-layout.app>

    {{-- ============================================================
         SEO: Meta halaman /layanan/web-ecommerce
         Target keyword: "jasa pembuatan website toko online",
         "jasa web ecommerce Indonesia", "toko online profesional",
         "website jualan online UMKM", "platform belanja online custom"
    ============================================================ --}}
    @php
    $title = 'Jasa Pembuatan Website Toko Online & E-Commerce Profesional | Cakra Inovasi Digital';
    $metaDescription = 'Jasa pembuatan website toko online & e-commerce profesional — tampilkan produk, terima
    pembayaran otomatis, kelola pesanan dari satu dashboard. Cocok untuk UMKM, brand lokal, dan bisnis retail Indonesia.
    Konsultasi gratis!';
    $metaKeywords = 'jasa pembuatan website toko online, jasa web ecommerce Indonesia, toko online profesional, website
    jualan online UMKM, platform belanja online custom, jasa web developer Sukoharjo, Jawa Tengah, toko online murah,
    website ecommerce laravel';
    $ogType = 'website';
    $canonicalUrl = url('/layanan/web-ecommerce');

    $faqsData = [
    ['question' => 'Apa bedanya website toko online dengan marketplace seperti Tokopedia atau Shopee?',
    'answer' => 'Marketplace seperti Tokopedia/Shopee memang gratis, tapi Anda bersaing langsung dengan ribuan penjual
    lain di platform yang sama — termasuk pesaing Anda. Dengan toko online sendiri, brand Anda tampil eksklusif tanpa
    gangguan kompetitor, tanpa komisi platform, dan Anda punya kendali penuh atas data pelanggan, tampilan, dan strategi
    pemasaran.'],
    ['question' => 'Apakah toko online bisa menerima pembayaran otomatis?',
    'answer' => 'Ya. Sistem dilengkapi Payment Gateway yang mendukung Transfer Bank (BCA, BNI, BRI, Mandiri), E-Wallet
    (GoPay, OVO, DANA, ShopeePay), QRIS, Kartu Kredit, dan Cicilan. Setiap pembayaran otomatis dikonfirmasi dan status
    pesanan pelanggan langsung terupdate — tanpa Anda cek manual.'],
    ['question' => 'Apakah saya bisa mengelola produk sendiri tanpa developer?',
    'answer' => 'Tentu. Dashboard Admin dirancang user-friendly — Anda bisa tambah produk, upload foto, atur harga &
    stok, buat promo/diskon, dan kelola pesanan masuk semuanya secara mandiri dari HP maupun komputer. Tidak perlu
    keahlian teknis apapun.'],
    ['question' => 'Apakah sistem manajemen stok terintegrasi otomatis?',
    'answer' => 'Ya. Setiap kali ada pesanan masuk dan dikonfirmasi, stok produk otomatis berkurang. Anda bisa atur
    notifikasi stok menipis agar tidak kehabisan barang tanpa sadar. Produk yang sudah habis otomatis ditandai "Stok
    Habis" di halaman toko.'],
    ['question' => 'Bagaimana cara pelanggan melacak pesanannya?',
    'answer' => 'Pelanggan mendapatkan halaman tracking pesanan yang bisa diakses langsung. Setiap perubahan status
    pesanan (dikonfirmasi, dikemas, dikirim, selesai) otomatis mengirimkan notifikasi WhatsApp atau Email ke pelanggan —
    tanpa Anda update manual.'],
    ['question' => 'Apakah toko online bisa diintegrasikan dengan marketplace?',
    'answer' => 'Tersedia di paket Enterprise. Stok dan produk di toko online Anda bisa disinkronkan dengan Tokopedia
    dan Shopee, sehingga Anda tidak perlu input ulang data produk atau update stok di dua tempat secara manual.'],
    ['question' => 'Apakah ada fitur diskon, voucher, atau promo?',
    'answer' => 'Ya. Paket Professional ke atas sudah dilengkapi fitur promo — diskon produk, voucher kode unik, flash
    sale dengan countdown timer, dan program Buy X Get Y. Semua bisa diatur sendiri dari dashboard tanpa bantuan
    developer.'],
    ['question' => 'Berapa lama waktu pengerjaan website toko online?',
    'answer' => 'Paket Starter selesai dalam 14–21 hari kerja. Paket Professional 21–30 hari kerja. Waktu bisa lebih
    cepat jika data produk, foto, dan konten sudah disiapkan sejak awal.'],
    ];

    $paket = [
    [
    'nama' => 'E-Commerce Starter',
    'tagline' => 'Untuk UMKM & brand lokal yang baru go-online',
    'harga' => 'Rp 5jt',
    'harga_raw' => '5.000.000',
    'label' => null,
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20E-Commerce%20Starter.',
    'btn_style' => 'border-2 border-orange-500 text-orange-500 hover:bg-orange-50',
    'fitur_ya' => [
    'Hingga 100 produk',
    'Kategori & subkategori produk',
    'Halaman detail produk lengkap',
    'Keranjang belanja & checkout',
    'Payment Gateway (Transfer & E-Wallet)',
    'Manajemen pesanan dasar',
    'Manajemen stok otomatis',
    'Konfirmasi pesanan otomatis (WA/Email)',
    'Dashboard admin mandiri',
    'Desain responsif Mobile-First',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Optimasi SEO on-page dasar',
    'Panduan & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Fitur promo, diskon & voucher',
    'Pengingat keranjang terbengkalai',
    'Wishlist & bandingkan produk',
    'Review & rating produk',
    'Program loyalitas / poin reward',
    'Integrasi marketplace (Tokopedia/Shopee)',
    'Laporan penjualan lanjutan',
    'Multi-seller / multi-vendor',
    ],
    ],
    [
    'nama' => 'E-Commerce Professional',
    'tagline' => 'Paling populer untuk bisnis retail aktif',
    'harga' => 'Rp 12jt',
    'harga_raw' => '12.000.000',
    'label' => 'Paling Populer',
    'populer' => true,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20E-Commerce%20Professional.',
    'btn_style' => 'bg-orange-500 text-white hover:bg-orange-600 shadow-lg shadow-orange-200',
    'fitur_ya' => [
    'Produk tidak terbatas (unlimited)',
    'Kategori, subkategori & tag produk',
    'Galeri foto multi-gambar per produk',
    'Variasi produk (ukuran, warna, dll)',
    'Keranjang belanja & checkout cepat',
    'Payment Gateway lengkap (Bank, E-Wallet, QRIS, Kartu Kredit)',
    'Manajemen pesanan & tracking status',
    'Notifikasi pesanan otomatis (WA/Email)',
    'Fitur promo, diskon & voucher kode',
    'Flash sale dengan countdown timer',
    'Wishlist & bandingkan produk',
    'Review & rating produk',
    'Manajemen stok otomatis + alert stok menipis',
    'Laporan penjualan & produk terlaris',
    'Integrasi Google Analytics',
    'SEO on-page lengkap per produk',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Panduan video & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Multi-seller / multi-vendor',
    'Program loyalitas / poin reward',
    'Integrasi marketplace (Tokopedia/Shopee)',
    'Dedicated server & SLA uptime',
    ],
    ],
    [
    'nama' => 'E-Commerce Enterprise',
    'tagline' => 'Platform marketplace & multi-vendor skala besar',
    'harga' => 'Custom',
    'harga_raw' => null,
    'label' => 'Mulai Rp 25jt',
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20ingin%20diskusi%20paket%20E-Commerce%20Enterprise.',
    'btn_style' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-900 hover:text-white',
    'fitur_ya' => [
    'Semua fitur Professional',
    'Multi-seller / multi-vendor marketplace',
    'Panel seller mandiri per toko',
    'Program loyalitas & poin reward pelanggan',
    'Integrasi marketplace (Tokopedia & Shopee)',
    'Sinkronisasi stok multi-channel',
    'Integrasi ERP / sistem gudang',
    'Dedicated server & uptime SLA 99,9%',
    'Backup otomatis harian',
    'Laporan custom & ekspor data',
    'Prioritas support & dedicated PM',
    'Free maintenance 3 bulan pertama',
    'Garansi bug',
    ],
    'fitur_tidak' => [],
    ],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "@id": "{{ url('/layanan/web-ecommerce') }}/#service",
        "name": "Jasa Pembuatan Website Toko Online & E-Commerce Profesional",
        "serviceType": "Pembuatan Website E-Commerce",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "url": "{{ url('/layanan/web-ecommerce') }}",
        "description": "Jasa pembuatan website toko online dan e-commerce profesional dengan payment gateway, manajemen stok otomatis, notifikasi pesanan, dan dashboard admin mandiri.",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "offers": [{
                "@type": "Offer",
                "name": "E-Commerce Starter",
                "price": "5000000",
                "priceCurrency": "IDR",
                "description": "Toko online dasar untuk UMKM yang baru go-online."
            },
            {
                "@type": "Offer",
                "name": "E-Commerce Professional",
                "price": "12000000",
                "priceCurrency": "IDR",
                "description": "Platform toko online lengkap dengan promo, review, dan laporan penjualan."
            },
            {
                "@type": "Offer",
                "name": "E-Commerce Enterprise",
                "price": "25000000",
                "priceCurrency": "IDR",
                "description": "Platform marketplace multi-vendor dengan integrasi marketplace dan ERP."
            }
        ]
    }
    </script>
    @endpush


    {{-- ================================================================
         SECTION 1: HERO
    ================================================================ --}}
    <section class="pt-28 md:pt-36 pb-12 md:pb-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]" current="E-Commerce" />
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mt-5 md:mt-6">

                {{-- ── Kolom Teks ── --}}
                <div class="text-left space-y-5 md:space-y-7" data-aos="fade-right">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-orange-50 text-orange-600 text-xs font-semibold uppercase tracking-wider mb-3 md:mb-4">
                            Website Toko Online & E-Commerce
                        </span>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Berhenti Bergantung<br class="hidden sm:block">
                            pada Marketplace —<br class="hidden sm:block">
                            <span class="text-orange-500">Punya Toko Online Sendiri</span>
                        </h1>
                        <p class="mt-4 md:mt-5 text-base md:text-lg text-slate-600 leading-relaxed">
                            Jualan di Tokopedia & Shopee itu bagus, tapi Anda bersaing dengan ribuan penjual lain di
                            halaman yang sama. <strong>Cakra Inovasi Digital</strong> membangun toko online
                            eksklusif
                            milik Anda — tampil profesional, terima pembayaran otomatis, dan bangun brand yang
                            benar-benar diingat pelanggan.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya ingin konsultasi pembuatan website toko online untuk bisnis saya.' . $suffix) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl bg-orange-500 text-white font-bold text-sm md:text-base hover:bg-orange-600 transition-all shadow-lg shadow-orange-200">
                            <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                            Konsultasi Gratis Sekarang
                        </a>
                        <a href="#fitur"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold text-sm md:text-base hover:bg-slate-50 transition">
                            Lihat Fitur Lengkap
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-credit-card text-orange-500"
                                aria-hidden="true"></i> Bayar Otomatis 24 Jam</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-boxes-stacked text-orange-500"
                                aria-hidden="true"></i> Stok Terkelola Otomatis</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-mobile-screen text-orange-500"
                                aria-hidden="true"></i> Kelola dari HP</span>
                    </div>

                    {{-- Stats mini — mobile only --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-orange-50 rounded-2xl p-4 text-center border border-orange-100">
                            <p class="text-2xl font-extrabold text-orange-500">24/7</p>
                            <p class="text-xs text-slate-500 mt-1">Toko Buka Terus</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">0%</p>
                            <p class="text-xs text-slate-500 mt-1">Komisi Platform</p>
                        </div>
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">Auto</p>
                            <p class="text-xs text-slate-500 mt-1">Konfirmasi Pesanan</p>
                        </div>
                        <div class="bg-amber-50 rounded-2xl p-4 text-center border border-amber-100">
                            <p class="text-2xl font-extrabold text-amber-500">↑</p>
                            <p class="text-xs text-slate-500 mt-1">Brand Awareness</p>
                        </div>
                    </div>
                </div>

                {{-- ── Kolom Mockup Dashboard Toko Online ── --}}
                <div class="relative" data-aos="fade-left">

                    <div class="absolute inset-0 bg-gradient-to-br from-orange-100 via-amber-50 to-slate-100 rounded-[3rem] blur-3xl opacity-60 scale-110"
                        aria-hidden="true"></div>

                    <div
                        class="relative z-10 bg-slate-900 rounded-[2rem] shadow-2xl overflow-hidden border border-slate-700/50">

                        {{-- Topbar --}}
                        <div
                            class="bg-slate-800 px-5 py-3.5 flex items-center justify-between border-b border-slate-700/60">
                            <div class="flex items-center gap-2.5">
                                <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-amber-400"></div>
                                <div class="w-2.5 h-2.5 rounded-full bg-emerald-500"></div>
                            </div>
                            <div class="flex items-center gap-1.5 bg-slate-700/60 rounded-lg px-3 py-1">
                                <i class="fa-solid fa-lock text-slate-400 text-[9px]" aria-hidden="true"></i>
                                <span class="text-[10px] text-slate-400 font-mono">toko.brand-anda.com/admin</span>
                            </div>
                            <div class="w-6 h-6 rounded-full bg-orange-500 flex items-center justify-center">
                                <span class="text-[8px] font-bold text-white">A</span>
                            </div>
                        </div>

                        {{-- Body --}}
                        <div class="p-5 space-y-4">

                            {{-- Stats row --}}
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Pesanan Hari Ini</p>
                                    <p class="text-lg font-extrabold text-white leading-none">34</p>
                                    <p class="text-[9px] text-emerald-400 mt-1 flex items-center gap-1"><i
                                            class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i> +12 baru</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Konversi</p>
                                    <p class="text-lg font-extrabold text-white leading-none">4,2%</p>
                                    <p class="text-[9px] text-orange-400 mt-1 flex items-center gap-1"><i
                                            class="fa-solid fa-chart-line" aria-hidden="true"></i> Rate</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Omset</p>
                                    <p class="text-lg font-extrabold text-white leading-none">Rp 8,4jt</p>
                                    <p class="text-[9px] text-slate-400 mt-1">Hari ini</p>
                                </div>
                            </div>

                            {{-- Pesanan terbaru --}}
                            <div class="bg-slate-800/80 rounded-xl p-4 border border-slate-700/40">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-[10px] text-slate-300 font-semibold">Pesanan Terbaru</p>
                                    <span
                                        class="text-[9px] bg-orange-500/20 text-orange-400 px-2 py-0.5 rounded-full">Live</span>
                                </div>
                                <div class="space-y-2">
                                    @php
                                    $orders = [
                                    ['id'=>'#3421','name'=>'Budi Santoso','product'=>'Kemeja Batik
                                    Premium','status'=>'Dibayar','color'=>'bg-emerald-500/20
                                    text-emerald-400','amount'=>'Rp 285.000'],
                                    ['id'=>'#3420','name'=>'Sari Dewi','product'=>'Tas Kulit
                                    Wanita','status'=>'Dikemas','color'=>'bg-blue-500/20
                                    text-blue-400','amount'=>'Rp
                                    450.000'],
                                    ['id'=>'#3419','name'=>'Andi Pratama','product'=>'Sepatu
                                    Casual','status'=>'Dikirim','color'=>'bg-violet-500/20
                                    text-violet-300','amount'=>'Rp 320.000'],
                                    ['id'=>'#3418','name'=>'Rina Wijaya','product'=>'Dompet
                                    Canvas','status'=>'Selesai','color'=>'bg-slate-600/40
                                    text-slate-400','amount'=>'Rp
                                    150.000'],
                                    ];
                                    @endphp
                                    @foreach($orders as $order)
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="text-[9px] text-slate-500 font-mono w-10 shrink-0">{{ $order['id'] }}</span>
                                        <div
                                            class="flex-1 flex items-center justify-between {{ $order['color'] }} rounded-lg px-3 py-1.5">
                                            <div>
                                                <p class="text-[10px] font-semibold text-slate-200 leading-tight">
                                                    {{ $order['name'] }}</p>
                                                <p class="text-[9px] text-slate-400">{{ $order['product'] }}</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-[9px] font-bold text-white">{{ $order['amount'] }}
                                                </p>
                                                <span
                                                    class="text-[8px] font-semibold {{ $order['color'] }}">{{ $order['status'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Stok alert --}}
                            <div class="bg-slate-800/80 rounded-xl border border-slate-700/40 overflow-hidden">
                                <div class="px-4 py-2.5 border-b border-slate-700/40 flex items-center justify-between">
                                    <p class="text-[10px] text-slate-300 font-semibold">Alert Stok Menipis</p>
                                    <span class="text-[9px] text-amber-400">3 Produk</span>
                                </div>
                                @php
                                $stocks = [
                                ['product'=>'Kemeja Batik M','stok'=>5,'color'=>'text-amber-400'],
                                ['product'=>'Tas Selempang Hitam','stok'=>2,'color'=>'text-red-400'],
                                ['product'=>'Topi Baseball','stok'=>8,'color'=>'text-amber-400'],
                                ];
                                @endphp
                                @foreach($stocks as $s)
                                <div
                                    class="px-4 py-2.5 flex items-center justify-between border-b border-slate-700/20 last:border-0">
                                    <p class="text-[10px] text-slate-300">{{ $s['product'] }}</p>
                                    <span class="text-[10px] font-bold {{ $s['color'] }}">Sisa
                                        {{ $s['stok'] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Floating badges --}}
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl border border-slate-100 px-4 py-3 flex items-center gap-3 animate-bounce z-20"
                        aria-hidden="true">
                        <div class="w-9 h-9 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-bag-shopping text-sm"></i>
                        </div>
                        <div>
                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-widest">Pesanan Baru!
                            </p>
                            <p class="text-sm font-extrabold text-slate-800">Rp 285.000 — Lunas</p>
                        </div>
                    </div>
                    <div class="absolute -top-3 -right-3 bg-orange-500 text-white rounded-xl shadow-lg px-3 py-2 flex items-center gap-2 z-20"
                        aria-hidden="true">
                        <i class="fa-solid fa-circle-check text-white text-sm"></i>
                        <span class="text-[10px] font-bold">Pembayaran Diterima</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 2: PERBANDINGAN — Marketplace vs Toko Online Sendiri
    ================================================================ --}}
    <section class="py-14 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">
            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Masih Andalkan Marketplace Saja?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Marketplace memang jangkauannya luas, tapi ada harga mahal yang sering tidak disadari. Inilah
                    mengapa bisnis yang serius punya toko online sendiri.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 items-stretch">

                <div class="bg-white p-5 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-store text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 md:mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-slate-900 mb-4 md:mb-5">Hanya Jualan di
                            Marketplace</h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Komisi 1–5% setiap transaksi:</strong> Semakin besar omset Anda, semakin
                                    besar yang terpotong untuk platform — tanpa batas.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Bersaing di halaman yang sama dengan kompetitor:</strong> Produk Anda muncul
                                    bersebelahan dengan produk pesaing — pelanggan mudah pindah.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Data pelanggan bukan milik Anda:</strong> Anda tidak punya database kontak
                                    pelanggan untuk retargeting atau program loyalitas mandiri.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Tampilan toko seragam — tidak bisa membangun identitas brand yang kuat dan diingat
                                pelanggan.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-orange-500 p-5 md:p-8 rounded-3xl shadow-xl shadow-orange-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-shop text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-orange-400 rounded-2xl flex items-center justify-center mb-4 md:mb-5 border border-orange-300">
                            <i class="fa-solid fa-check text-white text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-4 md:mb-5">Dengan Toko Online Sendiri
                        </h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-orange-50">
                                <i class="fa-solid fa-circle-check text-orange-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>0% komisi selamanya:</strong> Semua pendapatan masuk ke kantong Anda — tidak
                                    ada potongan platform apapun.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-orange-50">
                                <i class="fa-solid fa-circle-check text-orange-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Tampil eksklusif tanpa pesaing:</strong> Pelanggan yang masuk ke toko Anda
                                    hanya melihat produk Anda — tidak ada distraksi kompetitor.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-orange-50">
                                <i class="fa-solid fa-circle-check text-orange-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Data pelanggan 100% milik Anda:</strong> Bangun database, kirim promo,
                                    jalankan program loyalitas — semua atas nama brand Anda.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-orange-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                Desain & identitas brand sepenuhnya milik Anda. Pelanggan mengingat toko Anda, bukan
                                platform-nya.
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
                    class="inline-block bg-orange-50 text-orange-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Solusi untuk Semua Jenis Produk
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Toko Online untuk Bisnis Anda
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Apapun yang Anda jual — fisik atau digital — toko online bisa disesuaikan untuk kebutuhan spesifik
                    bisnis Anda.
                </p>
            </div>

            @php
            $useCases = [
            ['icon' => 'fa-solid fa-shirt', 'color' => 'orange', 'label' => 'Fashion & Apparel', 'desc' => 'Toko baju,
            sepatu, tas & aksesori dengan variasi ukuran, warna, dan galeri foto lengkap.'],
            ['icon' => 'fa-solid fa-seedling', 'color' => 'emerald','label' => 'Produk UMKM & Lokal', 'desc' =>
            'Kerajinan, makanan, minuman, dan produk lokal — tampil premium dengan brand sendiri.'],
            ['icon' => 'fa-solid fa-laptop', 'color' => 'blue', 'label' => 'Elektronik & Gadget', 'desc' => 'Toko
            elektronik dengan spesifikasi produk detail, garansi, dan sistem order yang aman.'],
            ['icon' => 'fa-solid fa-heart-pulse', 'color' => 'pink', 'label' => 'Kecantikan & Skincare', 'desc' => 'Toko
            kosmetik dan skincare dengan review produk, ingredient list, dan bundling promo.'],
            ['icon' => 'fa-solid fa-couch', 'color' => 'amber', 'label' => 'Furnitur & Dekorasi', 'desc' => 'Produk
            furnitur dengan galeri foto 360°, pilihan material, dan estimasi ongkir akurat.'],
            ['icon' => 'fa-solid fa-utensils', 'color' => 'red', 'label' => 'Makanan & Minuman', 'desc' => 'Toko F&B
            online dengan pengelolaan kadaluarsa, preorder, dan zona pengiriman custom.'],
            ['icon' => 'fa-solid fa-book', 'color' => 'indigo', 'label' => 'Buku & Produk Digital', 'desc' => 'Jual
            e-book, template, atau kursus digital dengan sistem download otomatis pasca bayar.'],
            ['icon' => 'fa-solid fa-dumbbell', 'color' => 'violet', 'label' => 'Olahraga & Fitness', 'desc' =>
            'Peralatan olahraga, suplemen, dan merchandise dengan panduan produk dan ukuran detail.'],
            ];

            $uc_colors = [
            'orange' => ['bg' => 'bg-orange-50', 'icon' => 'text-orange-600', 'border' => 'border-orange-100', 'hover'
            => 'hover:border-orange-300'],
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
                <p class="text-slate-500 text-sm mb-3">Produk Anda tidak ada di atas tapi tetap ingin punya toko online?
                </p>
                <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya ingin konsultasi toko online untuk bisnis saya.' . $suffix) }}"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-orange-500 font-semibold hover:underline underline-offset-4 transition text-sm">
                    Ceritakan kebutuhan Anda — kami carikan solusinya
                    <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 4: FITUR UNGGULAN
    ================================================================ --}}
    <section id="fitur" class="py-14 md:py-24 bg-slate-50" x-data="{ activeFeature: 1 }">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Fitur Unggulan <span class="text-orange-500">Toko Online Profesional</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Bukan sekadar tampilan cantik. Ini adalah mesin penjualan yang bekerja otomatis — dari pelanggan
                    datang, bayar, hingga pesanan dikirim.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                {{-- Feature Accordion --}}
                <div class="lg:col-span-7 space-y-2.5 md:space-y-3 order-first lg:order-last" data-aos="fade-left">

                    @php
                    $fiturList = [
                    [1, 'fa-solid fa-credit-card', 'Payment Gateway Lengkap & Otomatis', 'Dukung semua metode pembayaran
                    populer Indonesia — Transfer Bank (VA), GoPay, OVO, DANA, ShopeePay, QRIS, dan Kartu Kredit. Setiap
                    pembayaran otomatis dikonfirmasi dan status pesanan langsung terupdate.<br><strong>Manfaat:</strong>
                    Tidak ada lagi cek mutasi manual — semua terverifikasi sistem 24 jam penuh.'],
                    [2, 'fa-solid fa-boxes-stacked', 'Manajemen Stok Otomatis & Alert', 'Stok berkurang otomatis setiap
                    pesanan dikonfirmasi. Sistem mengirimkan notifikasi ke Anda ketika stok mendekati batas minimum yang
                    Anda tentukan. Produk habis otomatis ditandai sold out.<br><strong>Manfaat:</strong> Tidak ada lagi
                    overselling — pelanggan tidak pernah memesan barang yang ternyata kosong.'],
                    [3, 'fa-solid fa-tags', 'Sistem Promo, Diskon & Voucher', 'Buat diskon produk (persentase/nominal),
                    voucher kode unik untuk pelanggan tertentu, flash sale dengan countdown timer, dan promo Buy X Get Y
                    — semua bisa diatur sendiri dari dashboard.<br><strong>Manfaat:</strong> Dorong penjualan kapan saja
                    tanpa perlu developer — promo aktif otomatis sesuai jadwal.'],
                    [4, 'fa-solid fa-truck', 'Tracking Pesanan Real-Time', 'Pelanggan bisa memantau status pesanan
                    mereka secara real-time — dari dikonfirmasi, dikemas, dikirim, hingga sampai. Setiap update status
                    otomatis mengirim notifikasi WhatsApp atau Email.<br><strong>Manfaat:</strong> Kurangi pertanyaan
                    "pesanan saya sudah sampai mana?" — semua sudah terjawab otomatis.'],
                    [5, 'fa-solid fa-chart-bar', 'Laporan Penjualan & Analitik Bisnis', 'Pantau omset harian/bulanan,
                    produk paling laris, sumber traffic, dan konversi pengunjung menjadi pembeli — semuanya dalam satu
                    dashboard yang mudah dibaca.<br><strong>Manfaat:</strong> Ambil keputusan stok, promo, dan strategi
                    penjualan berdasarkan data nyata — bukan perkiraan.'],
                    ];
                    @endphp

                    @foreach($fiturList as [$id, $icon, $judul, $konten])
                    <div @click="activeFeature = {{ $id }}"
                        class="p-4 md:p-5 rounded-2xl cursor-pointer transition-all duration-300 border" :class="activeFeature === {{ $id }}
                             ? 'bg-orange-500 text-white shadow-xl shadow-orange-200/60 border-transparent'
                             : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h3 class="font-bold flex items-center justify-between text-sm md:text-base">
                            <span class="flex items-center gap-2.5 md:gap-3">
                                <i class="{{ $icon }} w-4 shrink-0 transition-colors duration-200"
                                    :class="activeFeature === {{ $id }} ? 'text-white' : 'text-orange-500'"
                                    aria-hidden="true"></i>
                                {{ $judul }}
                            </span>
                            <i class="fa-solid fa-chevron-right text-[10px] transition-transform duration-300 shrink-0 ml-2"
                                :class="activeFeature === {{ $id }} ? 'rotate-90' : ''" aria-hidden="true"></i>
                        </h3>
                        <div x-show="activeFeature === {{ $id }}" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-1">
                            <p class="text-sm mt-3 opacity-90 leading-relaxed">{!! $konten !!}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

                {{-- Visual mockup --}}
                <div class="lg:col-span-5 order-last lg:order-first lg:sticky lg:top-24" data-aos="fade-right">
                    <div
                        class="bg-gradient-to-br from-slate-900 to-slate-800 p-4 md:p-5 rounded-[1.5rem] md:rounded-[2rem] shadow-2xl border border-slate-700/50 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-orange-500/10 rounded-full blur-2xl"
                            aria-hidden="true"></div>
                        <div class="bg-slate-800/80 rounded-2xl p-4 md:p-5 space-y-3 md:space-y-4 relative z-10">
                            <div class="flex items-center gap-3 border-b border-slate-700/40 pb-3 md:pb-4">
                                <div class="w-8 h-8 bg-orange-500 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-shop text-white text-xs" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-white">Dashboard Toko Online</p>
                                    <p class="text-[9px] text-slate-400">Sistem Aktif — Realtime</p>
                                </div>
                                <div class="ml-auto flex items-center gap-1.5">
                                    <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                                    <span class="text-[9px] text-emerald-400">Online</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2.5 md:gap-3">
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-bag-shopping text-orange-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Pesanan Masuk</p>
                                    <p class="text-xs font-bold text-white">34 Hari Ini</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-credit-card text-emerald-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Pembayaran</p>
                                    <p class="text-xs font-bold text-white">Auto Verified</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-boxes-stacked text-amber-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Produk Aktif</p>
                                    <p class="text-xs font-bold text-white">247 SKU</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-chart-pie text-blue-400 mb-2 text-sm" aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Konversi</p>
                                    <p class="text-xs font-bold text-white">4,2%</p>
                                </div>
                            </div>
                            <div class="bg-orange-500 rounded-xl p-3 flex items-center justify-between">
                                <div>
                                    <p class="text-[9px] text-orange-200">Omset Hari Ini</p>
                                    <p class="text-base font-extrabold text-white">Rp 8.450.000</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-[9px] text-orange-200">Pertumbuhan</p>
                                    <p class="text-sm font-bold text-white">+23% ↑</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-emerald-500 text-white px-3 py-2 rounded-xl shadow-lg flex items-center gap-1.5"
                            aria-hidden="true">
                            <i class="fa-solid fa-bolt text-xs"></i>
                            <span class="text-[10px] font-bold">Auto-Payment</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 5: PAKET HARGA
    ================================================================ --}}
    <section id="paket" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-5xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pilih Paket <span class="text-orange-500">Toko Online</span> Anda
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Harga transparan, fitur jelas. Semua paket bisa dikustom sesuai kebutuhan spesifik bisnis Anda.
                </p>
                <p class="text-xs text-slate-400 mt-3 italic">*Harga belum termasuk biaya domain, hosting tahunan, dan
                    biaya langganan payment gateway. Bisa dicicil 2–3 termin.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 md:gap-6 lg:gap-8 items-start">

                @foreach($paket as $i => $p)
                <article class="relative bg-white rounded-3xl flex flex-col transition-all duration-300
                       {{ $p['populer']
                          ? 'border-2 border-orange-500 shadow-2xl shadow-orange-100 lg:-translate-y-4'
                          : 'border border-slate-200 shadow-sm hover:shadow-md' }}" data-aos="fade-up"
                    data-aos-delay="{{ $i * 100 }}">

                    @if($p['label'])
                    <div
                        class="absolute -top-3.5 left-1/2 -translate-x-1/2
                                {{ $p['populer'] ? 'bg-amber-400 text-amber-950' : 'bg-slate-700 text-white' }}
                                text-[10px] px-4 py-1.5 rounded-full font-bold uppercase tracking-wider shadow-sm whitespace-nowrap">
                        {{ $p['label'] }}
                    </div>
                    @endif

                    <div class="p-5 md:p-6 lg:p-8 {{ $p['label'] ? 'pt-8 md:pt-10' : '' }}">

                        <div class="mb-5 pb-5 border-b border-slate-100">
                            <h3 class="text-base md:text-lg font-extrabold text-slate-900 mb-1">{{ $p['nama'] }}</h3>
                            <p class="text-slate-500 text-xs mb-3 md:mb-4">{{ $p['tagline'] }}</p>
                            @if($p['harga'] === 'Custom')
                            <p class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900">Custom</p>
                            <p class="text-xs text-slate-400 mt-1">Harga sesuai kebutuhan</p>
                            @else
                            <p class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900">{{ $p['harga'] }}
                            </p>
                            <p class="text-xs text-slate-400 mt-1">Biaya setup awal — bisa 2–3 termin</p>
                            @endif
                        </div>

                        <div class="mb-4">
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2.5 md:mb-3">
                                Yang Anda Dapatkan</p>
                            <ul class="space-y-1.5 md:space-y-2">
                                @foreach($p['fitur_ya'] as $f)
                                <li class="flex items-start gap-2 md:gap-2.5 text-xs text-slate-700">
                                    <i class="fa-solid fa-circle-check text-orange-500 mt-0.5 shrink-0 text-[11px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        @if(count($p['fitur_tidak']) > 0)
                        <div class="mb-5 pt-3 md:pt-4 border-t border-slate-50">
                            <p class="text-[10px] font-bold text-slate-300 uppercase tracking-widest mb-2.5 md:mb-3">
                                Tidak Termasuk</p>
                            <ul class="space-y-1.5 md:space-y-2">
                                @foreach($p['fitur_tidak'] as $f)
                                <li class="flex items-start gap-2 md:gap-2.5 text-xs text-slate-400">
                                    <i class="fa-solid fa-xmark text-slate-300 mt-0.5 shrink-0 text-[11px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @else
                        <div class="mb-5 pt-3 md:pt-4 border-t border-slate-50">
                            <p class="text-xs text-slate-400 italic flex items-center gap-2">
                                <i class="fa-solid fa-infinity text-orange-400"></i>
                                Semua fitur tersedia — tidak ada batasan.
                            </p>
                        </div>
                        @endif

                        <a href="https://wa.me/6285865405330?text={{ $p['wa_text'] }}" target="_blank"
                            rel="noopener noreferrer"
                            class="block w-full py-3 md:py-3.5 px-6 text-center rounded-2xl font-bold text-sm transition-all duration-200 {{ $p['btn_style'] }}">
                            @if($p['populer']) Ambil Penawaran Ini
                            @elseif($p['harga'] === 'Custom') Diskusi dengan Tim Ahli
                            @else Pilih Paket Ini
                            @endif
                        </a>

                    </div>
                </article>
                @endforeach

            </div>

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <a href="{{ url('/fitur-web-ecommerce') }}"
                    class="inline-flex items-center gap-2 px-6 md:px-8 py-3 bg-white border border-slate-200 hover:border-orange-300 hover:bg-orange-50 text-slate-700 font-semibold rounded-full transition-all text-sm shadow-sm">
                    Lihat perbandingan fitur &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 6: FAQ
    ================================================================ --}}
    <section id="faq" class="py-14 md:py-24 bg-slate-50" x-data="faqEcommerce()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Toko Online & E-Commerce</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-ecommerce-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-ecommerce-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-ecommerce-answer-' + faq.id">

                            <span
                                class="faq-ecommerce-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
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

                        <div :id="'faq-ecommerce-answer-' + faq.id" class="faq-ecommerce-answer overflow-hidden"
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
                <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya ingin bertanya soal pembuatan toko online.' . $suffix) }}"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 7: CTA
    ================================================================ --}}
    <x-meeting-form title="Siap Punya Toko Online yang Bekerja Otomatis untuk Bisnis Anda?"
        subtitle="Jadwalkan konsultasi gratis — kami bantu rancang toko online yang paling sesuai dengan jenis produk dan target pasar Anda." />

    @push('scripts')
    <script>
    function faqEcommerce() {
        return {
            selected: null,

            faqs: [{
                    id: 1,
                    question: 'Apa bedanya website toko online dengan marketplace seperti Tokopedia atau Shopee?',
                    answer: `<p class="mb-3">Perbedaan utamanya ada di kepemilikan dan kontrol:</p>
                        <div class="space-y-2">
                            <div class="flex items-start gap-3 p-3 bg-red-50 rounded-xl"><i class="fa-solid fa-xmark text-red-500 mt-0.5 shrink-0 text-xs" aria-hidden="true"></i><p class="text-xs text-slate-600"><strong>Marketplace:</strong> Anda bersaing langsung dengan ribuan penjual lain, dikenakan komisi 1–5%, tidak punya data pelanggan, dan tampilan toko seragam.</p></div>
                            <div class="flex items-start gap-3 p-3 bg-orange-50 rounded-xl"><i class="fa-solid fa-check text-orange-500 mt-0.5 shrink-0 text-xs" aria-hidden="true"></i><p class="text-xs text-slate-600"><strong>Toko sendiri:</strong> 0% komisi, tampil eksklusif tanpa pesaing, data pelanggan 100% milik Anda, desain dan brand sepenuhnya di tangan Anda.</p></div>
                        </div>
                        <p class="text-xs text-slate-400 mt-3 italic">Idealnya, kombinasikan keduanya: punya toko sendiri sebagai pusat brand, tetap aktif di marketplace untuk jangkauan lebih luas.</p>`
                },
                {
                    id: 2,
                    question: 'Apakah toko online bisa menerima pembayaran otomatis?',
                    answer: `<p class="mb-3">Ya! Payment Gateway mendukung semua metode populer Indonesia:</p>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>🏦</span> Transfer Bank (VA)</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>💚</span> GoPay & OVO</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>🔵</span> DANA & ShopeePay</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>📱</span> QRIS</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>💳</span> Kartu Kredit & Cicilan</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>🤖</span> Auto-verified 24 jam</div>
                        </div>`
                },
                {
                    id: 3,
                    question: 'Apakah saya bisa mengelola produk sendiri tanpa developer?',
                    answer: `<p class="mb-3">Tentu. Dashboard Admin dirancang user-friendly — dari HP sekalipun Anda bisa:</p>
                        <ul class="space-y-1.5">
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Tambah, edit, atau hapus produk beserta foto</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Atur harga, stok, variasi (ukuran/warna), dan berat produk</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Buat & jadwalkan promo atau diskon</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Proses, konfirmasi, dan update status pesanan</li>
                        </ul>
                        <p class="text-xs text-slate-500 mt-3">Kami juga menyediakan panduan video dan pelatihan admin — Anda siap kelola sendiri dari hari pertama.</p>`
                },
                {
                    id: 4,
                    question: 'Apakah sistem manajemen stok terintegrasi otomatis?',
                    answer: `<div class="flex items-start gap-4 bg-orange-50 p-4 rounded-xl">
                        <i class="fa-solid fa-boxes-stacked text-2xl text-orange-500 mt-1 shrink-0" aria-hidden="true"></i>
                        <div>
                            <p class="mb-2 text-xs">Ya. Sistem stok bekerja sepenuhnya otomatis:</p>
                            <ul class="space-y-1">
                                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Stok berkurang otomatis setiap pesanan dikonfirmasi</li>
                                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Notifikasi dikirim saat stok mencapai batas minimum</li>
                                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Produk habis otomatis ditandai "Stok Habis" di toko</li>
                                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Tidak ada lagi overselling — zero human error</li>
                            </ul>
                        </div>
                    </div>`
                },
                {
                    id: 5,
                    question: 'Bagaimana cara pelanggan melacak pesanannya?',
                    answer: `<p class="mb-3">Sistem tracking pesanan bekerja otomatis tanpa Anda perlu update manual:</p>
                        <div class="space-y-2">
                            <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-circle text-blue-400 text-[8px]" aria-hidden="true"></i><span><strong>Pesanan Dikonfirmasi</strong> → notifikasi WA/Email terkirim otomatis</span></div>
                            <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-circle text-amber-400 text-[8px]" aria-hidden="true"></i><span><strong>Sedang Dikemas</strong> → pelanggan tahu pesanan sedang diproses</span></div>
                            <div class="flex items-center gap-3 p-2.5 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-circle text-violet-400 text-[8px]" aria-hidden="true"></i><span><strong>Dikirim + No. Resi</strong> → update otomatis ke pelanggan</span></div>
                            <div class="flex items-center gap-3 p-2.5 bg-emerald-50 rounded-xl text-xs border border-emerald-100"><i class="fa-solid fa-circle text-emerald-500 text-[8px]" aria-hidden="true"></i><span><strong>Pesanan Selesai</strong> → permintaan review otomatis terkirim</span></div>
                        </div>`
                },
                {
                    id: 6,
                    question: 'Apakah ada fitur diskon, voucher, atau promo?',
                    answer: `<p class="mb-3">Ya! Paket Professional ke atas dilengkapi fitur promo lengkap:</p>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Diskon Produk</p><p class="text-slate-500">Persentase atau nominal tetap</p></div>
                            <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Voucher Kode</p><p class="text-slate-500">Kode unik per pelanggan</p></div>
                            <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Flash Sale</p><p class="text-slate-500">Countdown timer otomatis</p></div>
                            <div class="p-2.5 bg-orange-50 border border-orange-100 rounded-lg text-xs"><p class="font-bold text-slate-700 mb-0.5">Buy X Get Y</p><p class="text-slate-500">Promo beli sekian dapat sekian</p></div>
                        </div>
                        <p class="text-xs text-slate-400 mt-3 italic">Semua promo bisa dijadwalkan — aktif dan nonaktif otomatis sesuai waktu yang Anda tentukan.</p>`
                },
                {
                    id: 7,
                    question: 'Apakah toko online bisa diintegrasikan dengan marketplace?',
                    answer: `<p class="mb-3">Tersedia di <strong>paket Enterprise</strong>. Integrasi marketplace meliputi:</p>
                        <ul class="space-y-1.5">
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Sinkronisasi produk ke Tokopedia & Shopee</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Stok terupdate otomatis di semua channel sekaligus</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-orange-500 text-[10px]" aria-hidden="true"></i> Pesanan dari marketplace masuk ke dashboard yang sama</li>
                        </ul>
                        <p class="text-xs text-slate-500 mt-3">Tidak perlu lagi update stok di 3 tempat berbeda — semua terkelola dari satu sistem terpusat.</p>`
                },
                {
                    id: 8,
                    question: 'Berapa lama waktu pengerjaan website toko online?',
                    answer: `<div class="space-y-2">
                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-clock text-orange-500" aria-hidden="true"></i><span><strong>Paket Starter:</strong> ± 14–21 hari kerja</span></div>
                        <div class="flex items-center gap-3 p-3 bg-orange-50 rounded-xl text-xs border border-orange-100"><i class="fa-solid fa-clock text-orange-500" aria-hidden="true"></i><span><strong>Paket Professional:</strong> ± 21–30 hari kerja</span></div>
                        <p class="text-xs text-slate-400 italic">*Waktu bisa lebih cepat jika foto produk, deskripsi, dan konten toko sudah disiapkan sejak awal. Kami menyediakan checklist lengkap untuk membantu persiapan Anda.</p>
                    </div>`
                },
            ],

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-ecommerce-ripple');

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
                            250
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
                const el = document.getElementById('faq-ecommerce-answer-' + id);
                if (el) {
                    const parent = el.closest('.faq-ecommerce-item');
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
    <style>
    html,
    body {
        max-width: 100% !important;
        overflow-x: hidden !important;
        position: relative;
    }

    .faq-ecommerce-answer {
        /* Gunakan durasi sedikit lebih cepat (0.3s) agar scroll tidak menunggu terlalu lama */
        transition: max-height 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s ease;
        overflow: hidden;
    }

    .faq-ecommerce-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-ecommerce-item:not([class*="border-blue"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-ecommerce-answer {
            transition: none;
        }

        .faq-ecommerce-ripple {
            display: none;
        }
    }
    </style>
    @endpush


</x-layout.app>