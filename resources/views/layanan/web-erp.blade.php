<x-layout.app>

    @php
    $title = 'Jasa Pembuatan Website Sistem Manajemen Bisnis (ERP) | Cakra Inovasi Digital';
    $metaDescription = 'Jasa pembuatan sistem ERP profesional — integrasikan keuangan, stok, SDM, produksi, dan laporan
    bisnis dalam satu platform terpusat. Kustom sesuai proses kerja Anda. Konsultasi gratis!';
    $metaKeywords = 'jasa pembuatan sistem ERP, sistem manajemen bisnis, software ERP UMKM, sistem akuntansi otomatis,
    manajemen stok terpadu, web developer ERP Sukoharjo, Jawa Tengah, ERP Indonesia';
    $ogType = 'website';
    $canonicalUrl = url('/layanan/web-erp');

    $faqsData = [
    ['question' => 'Apa itu sistem ERP dan apakah bisnis saya butuh ERP?', 'answer' => 'ERP (Enterprise Resource
    Planning) adalah sistem terpadu yang menghubungkan semua proses bisnis — keuangan, stok, SDM, penjualan, dan
    produksi — dalam satu platform. Bisnis Anda butuh ERP jika masih mengandalkan banyak spreadsheet terpisah, sering
    terjadi miskomunikasi data antar divisi, atau kesulitan mendapatkan laporan real-time.'],
    ['question' => 'Apakah sistem ERP bisa disesuaikan dengan alur kerja bisnis saya?', 'answer' => 'Ya. Kami tidak
    menggunakan template ERP generik. Setiap sistem dibangun mengikuti proses dan alur kerja spesifik bisnis Anda — dari
    input data, approval workflow, hingga format laporan yang diinginkan.'],
    ['question' => 'Berapa lama waktu pengerjaan sistem ERP?', 'answer' => 'Bergantung pada kompleksitas modul. Paket
    Starter (3-4 modul dasar) sekitar 30-45 hari kerja. Paket Professional (6-8 modul) sekitar 45-90 hari. Enterprise
    bisa lebih lama tergantung kebutuhan kustom.'],
    ['question' => 'Apakah karyawan saya akan dilatih menggunakan sistem?', 'answer' => 'Ya. Setiap paket sudah mencakup
    sesi pelatihan tim, video tutorial per modul, dan buku panduan operasional digital. Kami pastikan seluruh tim Anda
    mahir sebelum serah terima.'],
    ['question' => 'Bagaimana jika ada bug atau error setelah sistem live?', 'answer' => 'Semua paket mendapatkan
    garansi perbaikan bug tanpa batas waktu setelah serah terima. Kami juga menyediakan konsultasi teknis gratis untuk
    masalah operasional sistem.'],
    ['question' => 'Apakah data bisnis saya aman di sistem ERP?', 'answer' => 'Sangat aman. Sistem menggunakan enkripsi
    SSL, autentikasi multi-level, log aktivitas pengguna, dan backup data otomatis. Hak akses setiap pengguna bisa
    diatur sesuai jabatan dan divisi.'],
    ['question' => 'Bisakah sistem ERP diakses dari HP atau dari luar kantor?', 'answer' => 'Ya. Sistem berbasis web
    yang responsif sehingga bisa diakses dari HP, tablet, atau laptop di mana saja selama ada koneksi internet. Cocok
    untuk monitoring bisnis jarak jauh.'],
    ['question' => 'Apakah bisa cicil pembayarannya?', 'answer' => 'Bisa. Kami menggunakan sistem pembayaran termin yang
    fleksibel: DP saat deal kontrak, termin progres per milestone pengerjaan, dan pelunasan saat sistem siap live.'],
    ];

    $paket = [
    [
    'nama' => 'ERP Starter',
    'tagline' => 'Fondasi digital untuk UMKM yang ingin rapi',
    'harga' => 'Rp 3,5jt',
    'harga_raw' => '3.500.000',
    'label' => null,
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20ERP%20Starter.',
    'btn_style' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
    'fitur_ya' => [
    'Modul Manajemen Produk & Stok',
    'Modul Penjualan & Invoice Otomatis',
    'Modul Pembelian & Purchase Order',
    'Laporan Penjualan & Stok Dasar',
    'Dashboard ringkasan bisnis',
    'Manajemen pengguna (3 akun)',
    'Hak akses per pengguna',
    'Desain responsif (HP & PC)',
    'Domain & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Backup data mingguan',
    'Video panduan & pelatihan tim',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Modul Akuntansi & Laporan Keuangan',
    'Modul Manajemen SDM & Penggajian',
    'Modul Produksi / Manufacturing',
    'Modul CRM (Manajemen Pelanggan)',
    'Integrasi marketplace & e-commerce',
    'Laporan kustom & ekspor data',
    'Multi-cabang / multi-gudang',
    'Dedicated server & SLA uptime',
    ],
    ],
    [
    'nama' => 'ERP Professional',
    'tagline' => 'Sistem lengkap untuk bisnis yang serius scale-up',
    'harga' => 'Rp 6jt',
    'harga_raw' => '6.000.000',
    'label' => 'Paling Populer',
    'populer' => true,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20ERP%20Professional.',
    'btn_style' => 'bg-blue-600 text-white hover:bg-blue-700 shadow-lg shadow-blue-200',
    'fitur_ya' => [
    'Semua modul Paket Starter',
    'Modul Akuntansi & Laporan Keuangan',
    'Modul Manajemen SDM & Penggajian',
    'Modul CRM (Manajemen Pelanggan)',
    'Modul Laporan & Business Intelligence',
    'Laporan kustom & ekspor Excel/PDF',
    'Dashboard analitik real-time',
    'Manajemen pengguna (10 akun)',
    'Hak akses multi-level per jabatan',
    'Log aktivitas pengguna',
    'Notifikasi & alert otomatis (Email/WA)',
    'Backup data harian',
    'Domain & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Video panduan per modul & pelatihan tim',
    'Konsultasi teknis gratis',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Modul Produksi / Manufacturing',
    'Integrasi marketplace & e-commerce',
    'Multi-cabang / multi-gudang',
    'Dedicated server & SLA uptime',
    'Integrasi API pihak ketiga',
    ],
    ],
    [
    'nama' => 'Enterprise / Korporat',
    'tagline' => 'Platform ERP penuh untuk perusahaan besar',
    'harga' => 'Custom',
    'harga_raw' => null,
    'label' => 'Mulai Rp 10jt',
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20ingin%20diskusi%20paket%20Enterprise%20ERP.',
    'btn_style' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-900 hover:text-white',
    'fitur_ya' => [
    'Semua modul Professional',
    'Modul Produksi / Manufacturing',
    'Modul Multi-cabang & Multi-gudang',
    'Integrasi marketplace & e-commerce',
    'Integrasi API pihak ketiga (Bank, BPJS, Pajak)',
    'Pengguna tidak terbatas',
    'Laporan konsolidasi multi-entitas',
    'Dashboard eksekutif & BI kustom',
    'Dedicated server & SLA uptime 99,9%',
    'Backup real-time & disaster recovery',
    'Panel super-admin multi-role',
    'On-site training & implementation',
    'Prioritas support & dedicated PM',
    'Garansi bug',
    'Free maintenance 6 bulan pertama',
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
        "@id": "{{ url('/layanan/web-erp') }}/#service",
        "name": "Jasa Pembuatan Website Sistem Manajemen Bisnis (ERP)",
        "serviceType": "Pembuatan Sistem ERP / Business Management System",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "url": "{{ url('/layanan/web-erp') }}",
        "description": "Jasa pembuatan sistem ERP profesional yang mengintegrasikan keuangan, stok, SDM, dan laporan bisnis dalam satu platform terpusat. Kustom sesuai alur kerja bisnis Anda.",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "offers": [{
                "@type": "Offer",
                "name": "ERP Starter",
                "price": "8000000",
                "priceCurrency": "IDR"
            },
            {
                "@type": "Offer",
                "name": "ERP Professional",
                "price": "18000000",
                "priceCurrency": "IDR"
            },
            {
                "@type": "Offer",
                "name": "ERP Enterprise",
                "price": "35000000",
                "priceCurrency": "IDR"
            }
        ]
    }
    </script>
    @endpush


    {{-- ================================================================
     SECTION 1: HERO
================================================================ --}}
    {{-- Mengubah bg-[#FAFCFA] menjadi bg-white --}}
    <section class="relative pt-28 md:pt-36 pb-12 md:pb-24 bg-white overflow-hidden">

        {{-- 🛠️ 1. LAYER BACKGROUND KHUSUS MOBILE (< lg) --}}
        <div class="absolute inset-0 bg-no-repeat pointer-events-none z-0
            bg-[length:auto_55%] bg-[position:right_center]
            lg:hidden" style="background-image: url('{{ asset('images/hero-erp.webp') }}');">
        </div>

        {{-- 🛠️ 2. LAYER BACKGROUND KHUSUS DESKTOP (>= lg) --}}
        {{-- Menggunakan spesifikasi desktop Anda yang sudah proporsional menepi ke kanan --}}
        <div class="absolute inset-0 bg-no-repeat pointer-events-none z-0 hidden
            lg:block lg:bg-[length:auto_65%] lg:bg-[position:right_2rem_center]"
            style="background-image: url('{{ asset('images/hero-erp.webp') }}');">
        </div>

        {{-- 💡 3. GRADIENT OVERLAY --}}
        {{-- Di mobile, kita buat overlay-nya tipis/hilang di bagian bawah agar gambar kasir tidak tertutup warna putih --}}
        <div class="absolute inset-0 bg-white/80 md:bg-transparent backdrop-blur-[1px] md:backdrop-blur-none pointer-events-none"
            aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]" current="Automasi Bisnis" />
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mt-5 md:mt-6">

                {{-- Kolom Teks --}}
                <div class="text-left space-y-5 md:space-y-7" data-aos="fade-right">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-3 md:mb-4">
                            Sistem Manajemen Bisnis (ERP)
                        </span>
                        <!-- <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Kelola Seluruh Bisnis<br class="hidden sm:block">
                            dari <span class="text-blue-600">Satu Platform</span> Terpadu
                        </h1> -->
                        <h1 id="hero-heading"
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mt-5 mb-5 leading-tight text-slate-950 font-heading">
                            Kelola Seluruh Bisnis<br class="hidden sm:block">
                            <span class="relative inline-block">
                                dari <span class="text-blue-600">Satu Platform</span> Terpadu
                                <span class="absolute -bottom-2 left-0 w-full h-1 bg-emerald-400 rounded-full"
                                    aria-hidden="true"></span>
                            </span>
                        </h1>
                        <p class="mt-4 md:mt-5 text-base md:text-lg text-slate-600 leading-relaxed">
                            Masih kelola stok di Excel, keuangan di aplikasi berbeda, dan data SDM di kertas? Saatnya
                            integrasikan semua proses bisnis Anda — dari gudang hingga laporan keuangan — dalam satu
                            sistem yang bekerja otomatis dan real-time.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya ingin konsultasi pembuatan sistem ERP untuk bisnis saya.' . $suffix) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl bg-blue-600 text-white font-bold text-sm md:text-base hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                            <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                            Konsultasi Gratis Sekarang
                        </a>
                        <a href="#fitur"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold text-sm md:text-base hover:bg-slate-50 transition">
                            Lihat Modul Lengkap
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-cubes text-blue-500"
                                aria-hidden="true"></i> Multi-Modul Terintegrasi</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-mobile-screen text-blue-500"
                                aria-hidden="true"></i> Akses dari HP & Laptop</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-sliders text-blue-500"
                                aria-hidden="true"></i> 100% Kustom Sesuai Bisnis</span>
                    </div>

                    {{-- Mobile-only stats --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">1</p>
                            <p class="text-xs text-slate-500 mt-1">Platform untuk Semua Divisi</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">Real-time</p>
                            <p class="text-xs text-slate-500 mt-1">Laporan Otomatis</p>
                        </div>
                        <div class="bg-orange-50 rounded-2xl p-4 text-center border border-orange-100">
                            <p class="text-2xl font-extrabold text-orange-500">0</p>
                            <p class="text-xs text-slate-500 mt-1">Spreadsheet Berantakan</p>
                        </div>
                        <div class="bg-violet-50 rounded-2xl p-4 text-center border border-violet-100">
                            <p class="text-2xl font-extrabold text-violet-600">100%</p>
                            <p class="text-xs text-slate-500 mt-1">Kustom Sesuai Kebutuhan</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
     SECTION 2: PERBANDINGAN
================================================================ --}}
    <section class="py-14 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Tanpa Sistem vs Dengan Sistem ERP Terintegrasi
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Setiap hari tanpa sistem ERP adalah hari yang dihabiskan untuk rekap data — bukan untuk
                    mengembangkan bisnis.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 items-stretch">

                <div class="bg-white p-5 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-table text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 md:mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-slate-900 mb-4 md:mb-5">Tanpa Sistem ERP</h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Data tersebar di mana-mana:</strong> Stok di Excel A, keuangan di Excel B,
                                    SDM di kertas — data tidak sinkron dan rawan selisih.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Laporan makan waktu berhari-hari:</strong> Tiap akhir bulan, tim keuangan
                                    sibuk rekap manual dari banyak sumber yang berbeda.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Keputusan bisnis berbasis tebakan:</strong> Tanpa data real-time, Anda tidak
                                    tahu persis kondisi stok, kas, atau kinerja tim hari ini.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Sulit scale-up karena makin besar bisnis, makin kacau proses operasionalnya.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-blue-600 p-5 md:p-8 rounded-3xl shadow-xl shadow-blue-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-cubes text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-blue-500 rounded-2xl flex items-center justify-center mb-4 md:mb-5 border border-blue-400">
                            <i class="fa-solid fa-check text-white text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-4 md:mb-5">Dengan Sistem ERP
                            Terintegrasi</h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Semua data terpusat & real-time:</strong> Satu input data otomatis
                                    memperbarui stok, keuangan, dan laporan secara bersamaan.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Laporan otomatis dalam hitungan detik:</strong> Dashboard menampilkan kondisi
                                    bisnis terkini — omzet, HPP, stok, dan arus kas — kapan saja.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Keputusan berbasis data nyata:</strong> Tidak ada lagi keputusan bisnis
                                    berdasarkan perkiraan — semua tersedia di dashboard eksekutif.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                Siap scale-up kapan saja — sistem berkembang mengikuti besarnya bisnis Anda.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
     SECTION 3: FITUR / MODUL
================================================================ --}}
    <section id="fitur" class="py-14 md:py-24 bg-[#eae7dc] border-t border-[#d8d3c5]" x-data="{ activeFeature: 1 }">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            {{-- Section Header --}}
            <div class="mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-serif font-bold text-[#1e302b] mb-3 md:mb-4">
                    Modul Utama <span class="text-[#e85a4f]">Sistem ERP Profesional</span>
                </h2>
                <p class="text-[#5b5853] max-w-2xl text-sm md:text-base font-body">
                    Setiap modul dirancang saling terhubung — data dari satu modul otomatis memperbarui modul lainnya
                    tanpa input ulang.
                </p>
            </div>

            @php
            $fiturList = [
            [
            'id' => 1,
            'icon' => 'fa-boxes-stacked',
            'judul' => 'Manajemen Stok & Inventaris Real-time',
            'deskripsi' => 'Pantau keluar-masuk stok, level minimum, dan valuasi inventaris secara real-time di semua
            gudang sekaligus.',
            'manfaat' => 'Tidak ada lagi stok habis mendadak atau penumpukan barang mati — setiap keputusan pembelian
            berbasis data aktual.'
            ],
            [
            'id' => 2,
            'icon' => 'fa-file-invoice',
            'judul' => 'Akuntansi & Laporan Keuangan Otomatis',
            'deskripsi' => 'Setiap transaksi penjualan, pembelian, dan pengeluaran otomatis terposting ke jurnal
            akuntansi dan laporan keuangan (Neraca, Laba Rugi, Arus Kas).',
            'manfaat' => 'Laporan keuangan bulanan yang biasanya butuh seminggu rekap manual kini tersedia dalam
            hitungan detik.'
            ],
            [
            'id' => 3,
            'icon' => 'fa-users',
            'judul' => 'Manajemen SDM & Penggajian Otomatis',
            'deskripsi' => 'Kelola data karyawan, absensi, lembur, cuti, dan hitung gaji secara otomatis dengan slip
            gaji digital.',
            'manfaat' => 'Proses penggajian yang biasanya butuh 2-3 hari kini selesai dalam hitungan jam — akurat dan
            bebas human error.'
            ],
            [
            'id' => 4,
            'icon' => 'fa-handshake',
            'judul' => 'CRM — Manajemen Pelanggan & Pipeline Penjualan',
            'deskripsi' => 'Rekam riwayat interaksi setiap pelanggan, kelola pipeline penjualan, dan otomatiskan
            follow-up prospek.',
            'manfaat' => 'Tim sales bekerja lebih terarah — tidak ada lagi prospek yang jatuh karena lupa di-follow up.'
            ],
            [
            'id' => 5,
            'icon' => 'fa-chart-bar',
            'judul' => 'Business Intelligence & Dashboard Eksekutif',
            'deskripsi' => 'Dashboard real-time yang merangkum KPI bisnis terpenting — omzet, margin, produktivitas, dan
            tren — dalam visual yang mudah dibaca.',
            'manfaat' => 'Pimpinan bisa memantau kondisi bisnis dan mengambil keputusan strategis kapan saja, dari mana
            saja, hanya dari HP.'
            ],
            ];
            @endphp

            {{-- Main Layout Container: Pembatas luar terpadu layaknya cetakan ledger/katalog --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 border border-[#d8d3c5] rounded-sm overflow-hidden bg-[#f4f1ea]"
                data-aos="fade-up">

                {{-- KOLOM KIRI: Navigasi Tab Pilihan Modul --}}
                <div
                    class="lg:col-span-5 flex flex-col divide-y divide-[#d8d3c5] border-b lg:border-b-0 lg:border-r border-[#d8d3c5]">
                    @foreach($fiturList as $f)
                    <button @click="activeFeature = {{ $f['id'] }}"
                        class="w-full text-left p-4 md:p-5 flex items-center gap-4 transition-all duration-150 focus:outline-none select-none font-body"
                        :class="activeFeature === {{ $f['id'] }} ? 'bg-[#1e302b] text-[#f0ede4]' : 'bg-[#f4f1ea] hover:bg-[#ebe6da] text-[#1e302b]'">

                        {{-- Kode Nomor Urut --}}
                        <span class="font-mono text-xs font-semibold shrink-0"
                            :class="activeFeature === {{ $f['id'] }} ? 'text-[#e85a4f]' : 'text-[#e85a4f]/70'">
                            0{{ $f['id'] }}
                        </span>

                        {{-- Icon Modul --}}
                        <i class="fa-solid {{ $f['icon'] }} w-5 shrink-0 text-center text-sm"
                            :class="activeFeature === {{ $f['id'] }} ? 'text-[#f0ede4]' : 'text-[#1e302b]'"
                            aria-hidden="true"></i>

                        {{-- Judul Menu --}}
                        <span class="font-serif font-bold text-sm md:text-base leading-tight">
                            {{ $f['judul'] }}
                        </span>
                    </button>
                    @endforeach
                </div>

                {{-- KOLOM KANAN: Panel Detail Penjelasan Dinamis --}}
                <div class="lg:col-span-7 p-6 md:p-10 lg:p-12 bg-[#f4f1ea] flex flex-col justify-center min-h-[340px]">
                    @foreach($fiturList as $f)
                    <div x-show="activeFeature === {{ $f['id'] }}" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0" class="space-y-4 md:space-y-6">

                        {{-- Besar Icon Penanda --}}
                        <div class="text-[#e85a4f] text-2xl md:text-3xl">
                            <i class="fa-solid {{ $f['icon'] }}" aria-hidden="true"></i>
                        </div>

                        {{-- Judul Fitur Aktif --}}
                        <h3 class="font-serif font-bold text-xl md:text-2xl text-[#1e302b] leading-tight">
                            {{ $f['judul'] }}
                        </h3>

                        {{-- Deskripsi Utama --}}
                        <p class="text-sm md:text-base text-[#5b5853] leading-relaxed font-body">
                            {{ $f['deskripsi'] }}
                        </p>

                        {{-- Informasi Khusus Manfaat --}}
                        <div class="pt-4 border-t border-[#d8d3c5]">
                            <p class="text-sm md:text-base text-[#5b5853] leading-relaxed font-body">
                                <strong class="text-[#1e302b]">Manfaat:</strong> {{ $f['manfaat'] }}
                            </p>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 4: PAKET HARGA
================================================================ --}}
    <section id="paket" class="py-14 md:py-24 bg-[#16291F] border-t border-[#D8D0BD]">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <p class="font-mono text-xs tracking-[0.18em] uppercase text-[#B8924A] mb-3">Investasi & Kemitraan</p>
                <h2 class="font-display text-2xl md:text-3xl lg:text-5xl font-semibold text-[#EFEAE0] mb-3 md:mb-4">
                    Investasi untuk <span class="text-[#B8924A]">Efisiensi Bisnis Anda</span>
                </h2>
                <p class="text-[#EFEAE0]/60 max-w-2xl mx-auto text-sm md:text-base font-body">
                    Harga transparan, modul jelas. Pilih paket sesuai skala bisnis Anda — semua bisa dikustomisasi.
                </p>
                <p class="text-xs text-[#EFEAE0]/40 mt-3 italic font-body">*Harga belum termasuk biaya domain, hosting,
                    dan server
                    tahunan. Dapat dicicil per milestone pengerjaan.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 border border-[#EFEAE0]/15 items-stretch">

                @foreach($paket as $i => $p)
                <article
                    class="relative bg-[#F6F2E8] flex flex-col transition-all duration-300
                   {{ $i > 0 ? 'lg:border-l border-[#EFEAE0]/15' : '' }} 
                   {{ $p['populer'] ? 'ring-2 ring-[#B8924A] lg:scale-[1.02] z-10 shadow-xl' : 'border-t lg:border-t-0 border-[#EFEAE0]/15' }}"
                    data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">

                    @if($p['label'])
                    <div class="absolute -top-4 right-5 w-16 h-16 stempel-badge flex items-center justify-center bg-[#F6F2E8] z-10 border border-[#D8D0BD] rounded-full shadow-sm"
                        aria-hidden="true">
                        <span
                            class="text-[8px] text-center leading-tight font-bold uppercase text-[#2B2620]">{{ $p['label'] }}</span>
                    </div>
                    @endif

                    <div class="p-5 md:p-6 lg:p-8 flex-1 flex flex-col {{ $p['label'] ? 'pt-8 md:pt-10' : '' }}">

                        <div class="mb-5 pb-5 ledger-rule">
                            <p class="font-mono text-[10px] text-[#B23A2E] tracking-widest mb-2">
                                PAKET-{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}
                            </p>
                            <h3 class="font-display text-base md:text-lg font-semibold text-[#2B2620] mb-1">
                                {{ $p['nama'] }}</h3>
                            <p class="text-[#6B6357] text-xs mb-3 md:mb-4 font-body">{{ $p['tagline'] }}</p>

                            @if($p['harga'] === 'Custom')
                            <p class="font-mono text-2xl md:text-3xl lg:text-4xl font-semibold text-[#1F3A2E]">Custom
                            </p>
                            <p class="text-xs text-[#6B6357] mt-1 font-body">Harga sesuai kebutuhan</p>
                            @else
                            <p class="font-mono text-2xl md:text-3xl lg:text-4xl font-semibold text-[#1F3A2E]">
                                {{ $p['harga'] }}</p>
                            <p class="text-xs text-[#6B6357] mt-1 font-body">Biaya setup awal — cicil per milestone</p>
                            @endif
                        </div>

                        <div class="mb-4 flex-1">
                            <p
                                class="font-mono text-[10px] font-bold text-[#6B6357]/70 uppercase tracking-widest mb-2.5 md:mb-3">
                                Modul & Fitur yang Didapat
                            </p>
                            <ul class="space-y-1.5 md:space-y-2 font-body">
                                @foreach($p['fitur_ya'] as $f)
                                <li class="flex items-start gap-2 md:gap-2.5 text-xs text-[#3A352C]">
                                    <i class="fa-solid fa-check text-[#1F3A2E] mt-0.5 shrink-0 text-[10px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        @if(count($p['fitur_tidak']) > 0)
                        <div class="mb-5 pt-3 md:pt-4 border-t border-[#D8D0BD]">
                            <p
                                class="font-mono text-[10px] font-bold text-[#A39C8E] uppercase tracking-widest mb-2.5 md:mb-3">
                                Tidak Termasuk
                            </p>
                            <ul class="space-y-1.5 md:space-y-2 font-body">
                                @foreach($p['fitur_tidak'] as $f)
                                <li class="flex items-start gap-2 md:gap-2.5 text-xs text-[#A39C8E]">
                                    <i class="fa-solid fa-xmark text-[#A39C8E] mt-0.5 shrink-0 text-[10px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @else
                        <div class="mb-5 pt-3 md:pt-4 border-t border-[#D8D0BD]">
                            <p class="text-xs text-[#6B6357] italic flex items-center gap-2 font-body">
                                <i class="fa-solid fa-infinity text-[#1F3A2E]"></i>
                                Semua modul tersedia — tidak ada batasan.
                            </p>
                        </div>
                        @endif

                        <a href="https://wa.me/6285865405330?text={{ $p['wa_text'] }}" target="_blank"
                            rel="noopener noreferrer"
                            class="mt-auto block w-full py-3 md:py-3.5 px-6 text-center rounded-sm font-body font-bold text-sm transition-all duration-200 {{ $p['btn_style'] }}">
                            @if($p['populer']) Ambil Penawaran Ini
                            @elseif($p['harga'] === 'Custom') Diskusi dengan Tim Ahli
                            @else Pilih Paket Ini
                            @endif
                        </a>

                    </div>
                </article>
                @endforeach

            </div>

            <div class="mt-10 text-center" data-aos="fade-up">
                <a href="{{ url('/fitur-web-erp') }}"
                    class="inline-flex items-center gap-2 text-[#EFEAE0]/80 hover:text-[#EFEAE0] font-semibold text-sm font-body underline underline-offset-4 transition-all">
                    Lihat perbandingan modul &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 5: FAQ
================================================================ --}}
    <section id="faq" class="py-14 md:py-24 bg-[#FAF8F5]" x-data="faqErp()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Sistem ERP Kami</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-erp-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-erp-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-erp-answer-' + faq.id">

                            <span class="faq-erp-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
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

                        <div :id="'faq-erp-answer-' + faq.id" class="faq-erp-answer overflow-hidden"
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
                <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya ingin bertanya soal sistem ERP untuk bisnis saya.' . $suffix) }}"
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 6: CTA / MEETING FORM
================================================================ --}}
    <x-meeting-form title="Siap Integrasikan Seluruh Operasional Bisnis Anda?"
        subtitle="Jadwalkan konsultasi gratis — kami analisa proses bisnis Anda dan rancang modul ERP yang paling tepat." />


    @push('scripts')
    <script>
    function faqErp() {
        return {
            selected: null,

            faqs: [{
                    id: 1,
                    question: 'Apa itu sistem ERP dan apakah bisnis saya butuh ERP?',
                    answer: `<p class="mb-3">ERP (Enterprise Resource Planning) adalah sistem terpadu yang menghubungkan semua proses bisnis dalam satu platform:</p>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-boxes-stacked text-blue-600 text-[10px]"></i> Stok & Inventaris</div>
                        <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-file-invoice text-blue-600 text-[10px]"></i> Keuangan & Akuntansi</div>
                        <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-users text-blue-600 text-[10px]"></i> SDM & Penggajian</div>
                        <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><i class="fa-solid fa-chart-bar text-blue-600 text-[10px]"></i> Laporan Real-time</div>
                    </div>
                    <p class="mt-3 text-xs text-slate-500">Bisnis Anda butuh ERP jika masih mengandalkan spreadsheet terpisah, sering miskomunikasi data antar divisi, atau kesulitan mendapat laporan akurat.</p>`
                },
                {
                    id: 2,
                    question: 'Apakah sistem ERP bisa disesuaikan dengan alur kerja bisnis saya?',
                    answer: `<p>Ya. Kami tidak menggunakan template ERP generik. Setiap sistem dibangun <strong>100% mengikuti proses dan alur kerja spesifik bisnis Anda</strong> — dari form input data, workflow approval, notifikasi otomatis, hingga format laporan yang Anda inginkan. Proses dimulai dengan sesi analisis kebutuhan bisnis (business requirement gathering) sebelum coding dimulai.</p>`
                },
                {
                    id: 3,
                    question: 'Berapa lama waktu pengerjaan sistem ERP?',
                    answer: `<div class="space-y-2">
                    <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-clock text-blue-600"></i><span><strong>Paket Starter (3-4 modul):</strong> ± 30–45 hari kerja</span></div>
                    <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-xl text-xs border border-blue-100"><i class="fa-solid fa-clock text-blue-600"></i><span><strong>Paket Professional (6-8 modul):</strong> ± 45–90 hari kerja</span></div>
                    <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-clock text-blue-600"></i><span><strong>Paket Enterprise:</strong> Sesuai scope & kompleksitas</span></div>
                    <p class="text-xs text-slate-400 italic mt-1">*Pengerjaan dilakukan per fase/modul dengan demo progress berkala.</p>
                </div>`
                },
                {
                    id: 4,
                    question: 'Apakah karyawan saya akan dilatih menggunakan sistem?',
                    answer: `<p class="mb-3">Ya. Setiap paket sudah mencakup program pelatihan lengkap:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-video text-blue-600 text-[10px]"></i> Video tutorial per modul yang bisa ditonton kapan saja</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-users text-blue-600 text-[10px]"></i> Sesi pelatihan langsung untuk setiap tim/divisi</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-book text-blue-600 text-[10px]"></i> Buku panduan operasional digital (PDF) per modul</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-headset text-blue-600 text-[10px]"></i> Konsultasi teknis gratis selama masa adaptasi</li>
                    </ul>`
                },
                {
                    id: 5,
                    question: 'Bagaimana jika ada bug atau error setelah sistem live?',
                    answer: `<p>Semua paket mendapatkan <strong>garansi perbaikan bug tanpa batas waktu</strong> setelah serah terima. Tim kami siap menangani laporan error melalui WhatsApp dan memperbaikinya tanpa biaya tambahan apapun.</p>`
                },
                {
                    id: 6,
                    question: 'Apakah data bisnis saya aman di sistem ERP?',
                    answer: `<ul class="space-y-3">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-blue-600 mt-1 shrink-0"></i> <span><strong>SSL Certified:</strong> Enkripsi data standar internasional (HTTPS).</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-user-lock text-blue-600 mt-1 shrink-0"></i> <span><strong>Hak Akses Multi-level:</strong> Setiap pengguna hanya bisa melihat data sesuai jabatannya.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-list-check text-blue-600 mt-1 shrink-0"></i> <span><strong>Log Aktivitas:</strong> Setiap perubahan data tercatat lengkap beserta siapa yang melakukannya.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-server text-blue-600 mt-1 shrink-0"></i> <span><strong>Backup Otomatis:</strong> Data dicadangkan secara berkala agar aman dari kehilangan data.</span></li>
                </ul>`
                },
                {
                    id: 7,
                    question: 'Bisakah sistem ERP diakses dari HP atau dari luar kantor?',
                    answer: `<p class="mb-3">Ya. Sistem berbasis web yang <strong>responsif dan cloud-based</strong>:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Akses dari HP, tablet, atau laptop — di mana saja</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Tidak perlu install aplikasi khusus — cukup browser</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Pimpinan bisa pantau bisnis dari luar kota secara real-time</li>
                    </ul>`
                },
                {
                    id: 8,
                    question: 'Apakah bisa cicil pembayarannya?',
                    answer: `<p class="mb-3">Bisa. Kami menggunakan sistem pembayaran <strong>termin per milestone</strong> yang fleksibel:</p>
                    <div class="space-y-2 pl-3 border-l-2 border-slate-100">
                        <div class="text-xs"><span class="font-bold text-slate-900 block">Termin 1 — DP (Awal Proyek)</span><span class="text-slate-500">Saat deal kontrak dan kick-off meeting.</span></div>
                        <div class="text-xs"><span class="font-bold text-slate-900 block">Termin 2 — Progres (Per Milestone)</span><span class="text-slate-500">Setiap fase modul selesai dan di-demo.</span></div>
                        <div class="text-xs"><span class="font-bold text-slate-900 block">Termin 3 — Pelunasan (Serah Terima)</span><span class="text-slate-500">Setelah sistem siap live dan pelatihan selesai.</span></div>
                    </div>`
                }
            ],

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-erp-ripple');

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
                const el = document.getElementById('faq-erp-answer-' + id);
                if (el) {
                    const parent = el.closest('.faq-erp-item');
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

    .faq-erp-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-erp-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-erp-item:not([class*="border-blue"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-erp-answer {
            transition: none;
        }

        .faq-erp-ripple {
            display: none;
        }
    }

    /* ring holes — the signature binder spine, reused as a section rail */
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

    .font-display {
        font-family: 'Fraunces', serif;
    }

    .font-body {
        font-family: 'Inter', sans-serif;
    }

    .font-mono {
        font-family: 'IBM Plex Mono', monospace;
    }
    </style>
    @endpush

</x-layout.app>