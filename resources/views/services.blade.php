<x-layout.app>

    @php
    // --- SEO & Metadata ---
    $title = 'Layanan Jasa Pembuatan Website Profesional | Cakra Inovasi Digital';
    $metaDescription = 'Cakra Inovasi Digital menyediakan layanan ekosistem digital untuk UMKM: Katalog Produk, Sistem
    POS (Kasir Digital), dan Sistem Manajemen Bisnis (ERP). Terintegrasi, transparan, dan modern.';
    $metaKeywords = 'jasa pembuatan website, company profile, katalog produk, toko online, kasir digital, kasir POS,
    website manajemen Bisnis ERP, web developer Magelang';
    $ogType = 'website';
    // $suffix = ' | Cakra Digital'; // Uncomment jika dibutuhkan
    @endphp

    {{-- --- Data Structures (Single Source of Truth) --- --}}
    @php
    $layanan = [
    [
    'route' => 'layanan.company-profile',
    // Ikon Gedung/Korporat (SVG Murni)
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
    ',
    'label' => 'Company Profile Eksekutif',
    'tagline' => 'Validasi Kredibilitas Digital',
    'desc' => 'Tingkatkan kepercayaan calon klien dan mitra strategis melalui representasi visual web yang profesional.
    Sajikan rekam jejak, visi, dan portofolio Anda secara elegan.',
    'fitur' => ['Desain antarmuka kustom (Bebas template)', 'Optimasi SEO on-page struktural', 'Integrasi formulir
    prospek cerdas', 'Kecepatan muat ultra-cepat'],
    'cocok' => 'Konsultan, Agensi, B2B, Kontraktor',
    'accent' => 'purple',
    'badge' => 'Paling Dasar',
    ],
    [
    'route' => 'layanan.katalog-produk',
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
    ',
    'label' => 'Katalog Produk Digital',
    'tagline' => 'Pamerkan Koleksi, Raih Konversi',
    'desc' => 'Transformasikan etalase fisik Anda menjadi pengalaman digital interaktif. Pelanggan dapat menjelajahi
    produk dari perangkat apapun dan melakukan pemesanan langsung via integrasi cerdas.',
    'fitur' => ['Integrasi pemesanan real-time', 'Fungsi pencarian cerdas & filter', 'Responsif di seluruh perangkat',
    'Sistem pembaruan inventaris mandiri'],
    'cocok' => 'Retailer, Distributor, Fashion, Sparepart',
    'accent' => 'emerald',
    'badge' => null,
    ],
    [
    'route' => 'layanan.kasir',
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
    ',
    'label' => 'Sistem POS (Kasir Digital)',
    'tagline' => 'Akurasi Transaksi & Inventaris',
    'desc' => 'Tinggalkan pencatatan manual yang rawan galat. Kelola transaksi lintas cabang, pantau pergerakan stok,
    dan hasilkan laporan analitik keuangan secara instan.',
    'fitur' => ['Input transaksi berkecepatan tinggi', 'Sinkronisasi stok otomatis', 'Generator laporan Laba/Rugi',
    'Kompatibilitas printer thermal & barcode'],
    'cocok' => 'F&B, Minimarket, Apotek, Outlet Multi-Cabang',
    'accent' => 'orange',
    'badge' => 'Paling Diminati',
    ],
    [
    'route' => 'layanan.erp',
    'icon' => '
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
    ',
    'label' => 'Manajemen Bisnis (ERP)',
    'tagline' => 'Pusat Kendali Operasional',
    'desc' => 'Arsitektur perangkat lunak terpadu untuk merampingkan seluruh alur kerja. Sentralisasi data keuangan,
    sumber daya manusia, dan manajemen proyek dalam satu ekosistem aman.',
    'fitur' => ['Modul akuntansi komprehensif', 'Manajemen SDM & produktivitas', 'Arsip dokumen cloud terenkripsi',
    'Dasbor analitik eksekutif'],
    'cocok' => 'Agensi, Kontraktor, Manufaktur Skala Menengah',
    'accent' => 'blue',
    'badge' => 'Solusi Enterprise',
    ],
    ];

    $accentMap = [
    'blue' => ['bg' => 'bg-blue-50/80', 'border' => 'border-blue-100', 'icon' => 'text-blue-600', 'badge_bg' =>
    'bg-blue-600', 'badge_text' => 'text-white', 'check' => 'text-blue-500', 'hover' => 'group-hover:border-blue-300
    group-hover:shadow-blue-100/50', 'btn' => 'text-blue-600 hover:text-blue-800'],
    'emerald' => ['bg' => 'bg-emerald-50/80', 'border' => 'border-emerald-100', 'icon' => 'text-emerald-600', 'badge_bg'
    => 'bg-emerald-500', 'badge_text' => 'text-white', 'check' => 'text-emerald-500', 'hover' =>
    'group-hover:border-emerald-300 group-hover:shadow-emerald-100/50', 'btn' => 'text-emerald-600
    hover:text-emerald-800'],
    'orange' => ['bg' => 'bg-orange-50/80', 'border' => 'border-orange-100', 'icon' => 'text-orange-600', 'badge_bg' =>
    'bg-orange-500', 'badge_text' => 'text-white', 'check' => 'text-orange-500', 'hover' =>
    'group-hover:border-orange-300 group-hover:shadow-orange-100/50', 'btn' => 'text-orange-600 hover:text-orange-800'],
    // Penambahan konfigurasi warna ungu (purple) untuk Company Profile
    'purple' => ['bg' => 'bg-purple-50/80', 'border' => 'border-purple-100', 'icon' => 'text-purple-600', 'badge_bg' =>
    'bg-purple-600', 'badge_text' => 'text-white', 'check' => 'text-purple-500', 'hover' =>
    'group-hover:border-purple-300 group-hover:shadow-purple-100/50', 'btn' => 'text-purple-600 hover:text-purple-800'],
    ];

    $totalLayanan = count($layanan); // Sekarang akan otomatis jadi 4
    @endphp

    <main>
        {{-- ================================================================
             SECTION 1: HEADER & HERO - CSS Ecosystem Graphic
        ================================================================ --}}
        <header
            class="relative pt-32 pb-20 md:pb-28 bg-cover bg-no-repeat bg-[position:75%_center] sm:bg-right lg:bg-center bg-white overflow-hidden"
            style="background-image: url('{{ asset('images/hero-layanan.webp') }}');">

            {{-- Overlay halus Opsional: Memastikan teks tetap terbaca tajam di layar ponsel kecil --}}
            <div class="absolute inset-0 bg-white/70 md:bg-white/10 backdrop-blur-[2px] md:backdrop-blur-none pointer-events-none"
                aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-5 lg:px-10 relative z-10">

                {{-- Breadcrumb placeholder --}}
                <div class="mb-8" data-aos="fade-down">
                    <x-breadcrumb :items="[]" current="Layanan" />
                </div>

                {{-- Mengubah proporsi grid menjadi 7:5 agar kolom teks sisi kiri memiliki ruang bernapas lebih luas --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

                    {{-- Typography Column (lg:7) --}}
                    <div class="lg:col-span-7" data-aos="fade-right">
                        <span
                            class="inline-flex items-center gap-2 bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6">
                            <i class="fa-solid fa-layer-group text-blue-600" aria-hidden="true"></i>
                            {{ $totalLayanan }} Pilar Solusi Digital
                        </span>

                        <h1
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight text-slate-950 mb-6 font-heading">
                            Arsitektur Digital Khusus<br>
                            <span class="text-blue-600 relative inline-block">
                                Pertumbuhan Skala UMKM
                                <span class="absolute -bottom-2 left-0 w-full h-1 bg-emerald-400 rounded-full"
                                    aria-hidden="true"></span>
                            </span>
                        </h1>

                        <p class="text-base sm:text-lg text-slate-700 leading-relaxed mb-10 max-w-xl">
                            Kami merancang ekosistem perangkat lunak yang modular. Mulai dari sistem POS, katalog
                            pintar, hingga ERP menyeluruh—semua dikustomisasi selaras dengan kompleksitas dan ambisi
                            bisnis Anda.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#katalog-layanan"
                                class="inline-flex items-center justify-center gap-2.5 bg-blue-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-700 transition duration-300 shadow-lg shadow-blue-200 text-sm md:text-base group">
                                Eksplorasi Layanan
                                <i class="fa-solid fa-arrow-down text-sm transition-transform group-hover:translate-y-1"
                                    aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    {{-- Visual Spacer Column (lg:5) --}}
                    {{-- Sengaja dikosongkan untuk mengekspos estetika grafik 3D bawaan gambar AI tanpa tertutup elemen HTML --}}
                    <div class="lg:col-span-5 relative h-[300px] sm:h-[400px] lg:h-[480px] hidden lg:block"
                        aria-hidden="true" data-aos="fade-left">
                        <!-- Berfungsi sebagai ruang kosong pengunci layout pada tampilan Desktop -->
                    </div>

                </div>
            </div>
        </header>

        {{-- ================================================================
             SECTION 2: SERVICES GRID - Elevated Semantic Articles
        ================================================================ --}}
        <section id="katalog-layanan" class="py-20 md:py-28 bg-slate-100" aria-labelledby="layanan-heading">
            <div class="max-w-7xl mx-auto px-5 lg:px-10">

                <div class="text-center mb-16 lg:mb-20" data-aos="fade-up">
                    <h2 id="layanan-heading"
                        class="text-3xl md:text-4xl font-extrabold text-slate-950 mb-5 font-heading">
                        Katalog Spesifikasi Layanan
                    </h2>
                    <p class="text-slate-700 max-w-2xl mx-auto text-base leading-relaxed">
                        Evaluasi spesifikasi teknis dan fungsionalitas dari setiap arsitektur sistem yang kami
                        kembangkan, rancang khusus untuk akselerasi operasional bisnis Anda.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-5 sm:gap-7">
                    @foreach($layanan as $i => $item)
                    @php $a = $accentMap[$item['accent']]; @endphp

                    <article
                        class="group flex flex-col bg-white border border-slate-200 rounded-[2rem] p-8 lg:p-10 shadow-sm hover:shadow-2xl {{ $a['hover'] }} transition-all duration-500 relative overflow-hidden"
                        data-aos="fade-up" data-aos-delay="{{ ($i % 2) * 150 }}">

                        {{-- Background Accent (Subtle) --}}
                        <div class="absolute -top-24 -right-24 w-48 h-48 {{ $a['bg'] }} rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity"
                            aria-hidden="true"></div>

                        {{-- Badge (Absolute) --}}
                        @if($item['badge'])
                        <div class="absolute top-8 right-8 z-10">
                            <span
                                class="text-[10px] font-bold px-3 py-1.5 rounded-full {{ $a['badge_bg'] }} {{ $a['badge_text'] }} shadow-sm uppercase tracking-wider">
                                {{ $item['badge'] }}
                            </span>
                        </div>
                        @endif

                        {{-- Header Icon & Titles --}}
                        <div class="relative z-10">
                            <div
                                class="w-16 h-16 {{ $a['bg'] }} {{ $a['icon'] }} rounded-2xl flex items-center justify-center mb-6 border {{ $a['border'] }} shadow-inner group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    {!! $item['icon'] !!}
                                </svg>
                            </div>

                            <p class="text-[11px] font-extrabold {{ $a['icon'] }} uppercase tracking-widest mb-2">
                                {{ $item['tagline'] }}
                            </p>
                            <h3 class="text-2xl font-extrabold text-slate-950 mb-4 leading-tight font-heading">
                                {{ $item['label'] }}
                            </h3>

                            {{-- PERBAIKAN: Menghapus h-20 statis yang memotong teks, diganti dengan min-h-fit untuk fleksibilitas tinggi --}}
                            <p class="text-slate-600 text-sm leading-relaxed mb-8 min-h-fit">
                                {{ $item['desc'] }}
                            </p>
                        </div>

                        {{-- Features List --}}
                        <div class="flex-grow relative z-10">
                            <p
                                class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4 border-b border-slate-100 pb-2">
                                Kemampuan Inti:
                            </p>
                            <ul class="space-y-3 mb-8" role="list" aria-label="Fitur utama dari {{ $item['label'] }}">
                                @foreach($item['fitur'] as $fitur)
                                <li class="flex items-start gap-3 text-sm text-slate-700">
                                    <i class="fa-solid fa-check-circle {{ $a['check'] }} shrink-0 mt-0.5"
                                        aria-hidden="true"></i>
                                    <span>{{ $fitur }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- Footer Area (Target Audience & CTA) --}}
                        <div class="mt-auto relative z-10 border-t border-slate-100 pt-6">
                            <div class="bg-slate-50 p-4 rounded-xl mb-6">
                                <span
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Direkomendasikan
                                    Untuk:</span>
                                <span class="text-xs font-medium text-slate-700">{{ $item['cocok'] }}</span>
                            </div>

                            <a href="{{ route($item['route'] ?? 'layanan') }}"
                                class="flex items-center justify-between w-full text-sm font-bold {{ $a['btn'] }} group/link">
                                <span>Analisis Spesifikasi Penuh</span>
                                <span
                                    class="w-8 h-8 rounded-full {{ $a['bg'] }} flex items-center justify-center group-hover/link:bg-white group-hover/link:shadow-md transition-all">
                                    <i
                                        class="fa-solid fa-arrow-right text-[11px] group-hover/link:translate-x-0.5 transition-transform"></i>
                                </span>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>

            </div>
        </section>

        {{-- ================================================================
     SECTION 3: PROSES KERJA
     SEO: <h2> heading, konten unik yang tidak ada di halaman lain
================================================================ --}}
        <section class="py-16 sm:py-20 bg-slate-50" aria-labelledby="proses-heading">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10">

                <div class="text-center mb-10 sm:mb-14" data-aos="fade-up">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                        Bagaimana Proses Pengerjaan Website?
                    </h2>
                    <p class="text-slate-500 max-w-2xl mx-auto text-sm sm:text-base">
                        Dari konsultasi hingga website live — semua berjalan transparan, terjadwal, dan Anda selalu kami
                        libatkan di setiap tahapnya.
                    </p>
                </div>

                @php
                $proses = [
                ['step' => '01', 'icon' => 'fa-comments', 'title' => 'Konsultasi Kebutuhan', 'desc' => 'Ceritakan bisnis
                dan
                kebutuhan Anda. Kami bantu pilihkan solusi dan layanan yang paling tepat — gratis, tanpa syarat.',
                'color'
                => 'blue'],
                ['step' => '02', 'icon' => 'fa-code', 'title' => 'Pengembangan Sistem', 'desc' => 'Proses pengembangan
                dimulai. Kami membangun fitur website Anda dengan standar kode yang bersih
                dan aman.', 'color'
                => 'violet'],
                ['step' => '03', 'icon' => 'fa-magnifying-glass-chart', 'title' => 'Testing & Revisi', 'desc' =>
                'Pengujian
                menyeluruh di berbagai perangkat untuk memastikan website bebas bug dan sesuai
                keinginan Anda.', 'color' => 'indigo'],
                ['step' => '04', 'icon' => 'fa-chalkboard-teacher', 'title' => 'Training', 'desc' => 'Kami berikan
                pelatihan
                intensif agar tim Anda mandiri mengoperasikan dashboard dan mengelola
                konten tanpa kendala.', 'color' => 'indigo'],
                ['step' => '05', 'icon' => 'fa-rocket', 'title' => 'Go-Live', 'desc' => 'Website Anda resmi mengudara!
                Siap
                melayani pelanggan dan memperkuat kredibilitas bisnis Anda
                di dunia digital.', 'color' =>
                'orange'],
                ['step' => '06', 'icon' => 'fa-headset', 'title' => 'Support', 'desc' => 'Bebas khawatir bug
                atau error. Tim Cakra standby membantu kendala teknis maupun konsultasi
                penggunaan kapan pun dibutuhkan.',
                'color' => 'sky'],
                ];
                $stepColors = [
                'blue' => 'bg-blue-600 text-white',
                'indigo' => 'bg-indigo-600 text-white',
                'violet' => 'bg-violet-600 text-white',
                'orange' => 'bg-orange-500 text-white',
                'emerald'=> 'bg-emerald-600 text-white',
                'sky' => 'bg-sky-600 text-white',
                ];
                @endphp

                <div class="relative">

                    {{-- Garis penghubung (desktop) --}}
                    <div class="hidden lg:block absolute top-10 left-[10%] right-[10%] h-0.5 bg-slate-200 z-0"
                        aria-hidden="true"></div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-6 gap-6 sm:gap-8 relative z-10">
                        @foreach($proses as $p)
                        <div class="flex flex-col items-center text-center" data-aos="fade-up"
                            data-aos-delay="{{ $loop->index * 100 }}">
                            <div
                                class="w-16 h-16 sm:w-20 sm:h-20 {{ $stepColors[$p['color']] }} rounded-2xl flex items-center justify-center mb-4 sm:mb-5 shadow-lg shrink-0">
                                <i class="fa-solid {{ $p['icon'] }} text-lg sm:text-2xl"></i>
                            </div>
                            <span class="text-xs font-bold text-slate-400 tracking-widest mb-1">TAHAP
                                {{ $p['step'] }}</span>
                            <h3 class="text-sm sm:text-base font-bold text-slate-900 mb-2">{{ $p['title'] }}</h3>
                            <p class="text-slate-500 text-xs leading-relaxed">{{ $p['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>

        {{-- ================================================================
             SECTION 4: INCLUSIONS - Masonry/Asymmetrical Grid 
             Replaced standard 4x2 grid with a more dynamic layout
        ================================================================ --}}
        <section class="py-20 md:py-28 bg-[#FAF8F5] relative overflow-hidden">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10">

                <div class="text-center mb-10 sm:mb-14" data-aos="fade-up">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                        Apa yang Termasuk di Setiap Layanan?
                    </h2>
                    <p class="text-slate-500 max-w-xl mx-auto text-sm sm:text-base">
                        Semua layanan kami sudah mencakup komponen ini — tidak ada biaya tersembunyi atau kejutan di
                        tengah
                        jalan.
                    </p>
                </div>

                @php
                $inklusif = [
                ['icon' => 'fa-globe', 'title' => 'Domain & Hosting 1 Tahun', 'desc' => 'Nama domain (.com/.id) dan
                cloud
                hosting berkualitas sudah siap pakai.'],
                ['icon' => 'fa-lock', 'title' => 'SSL Certificate (HTTPS)', 'desc' => 'Keamanan website terjamin dan
                dipercaya Google sejak hari pertama live.'],
                ['icon' => 'fa-gauge-high', 'title' => 'Optimasi Kecepatan', 'desc' => 'Loading cepat di semua perangkat
                untuk pengalaman pengguna yang lebih baik.'],
                ['icon' => 'fa-mobile-screen', 'title' => 'Desain Responsif', 'desc' => 'Tampilan otomatis rapi saat
                dibuka
                di HP, tablet, maupun komputer.'],
                ['icon' => 'fa-sliders', 'title' => 'Dashboard Mandiri', 'desc' => 'Anda bisa update konten, produk,
                atau
                harga sendiri kapan saja.'],
                ['icon' => 'fa-headset', 'title' => 'Garansi Support', 'desc' => 'Kami tetap mendampingi untuk perbaikan
                bug
                dan konsultasi teknis gratis.'],
                ['icon' => 'fa-file-video', 'title' => 'Panduan Operasional', 'desc' => 'Video tutorial lengkap agar
                Anda
                mahir mengoperasikan sistem sendiri.'],
                ['icon' => 'fa-magnifying-glass-chart', 'title' => 'Setup Dasar SEO', 'desc' => 'Struktur website
                dioptimasi
                agar lebih mudah ditemukan di Google.'],
                ];
                @endphp

                {{-- PERBAIKAN: Hanya gunakan satu div grid untuk membungkus loop --}}
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    @foreach($inklusif as $item)
                    <div class="p-5 bg-slate-50 border border-slate-100 rounded-3xl hover:bg-blue-50 hover:border-blue-100 transition-all duration-300 group shadow-sm hover:shadow-md"
                        data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 80 }}">

                        <div
                            class="w-12 h-12 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <i class="fa-solid {{ $item['icon'] }} text-lg"></i>
                        </div>

                        <h3 class="font-bold text-slate-900 text-sm sm:text-base mb-2 leading-tight">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-slate-500 text-xs leading-relaxed">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>

        {{-- ================================================================
             SECTION 4: CTA - Refined & Elegant
        ================================================================ --}}
        <section class="py-24 bg-white" aria-label="Ajakan konsultasi">
            <div class="max-w-5xl mx-auto px-5 lg:px-10">
                <div data-aos="zoom-in" data-aos-duration="800"
                    class="bg-gradient-to-br from-blue-700 to-indigo-900 rounded-[3rem] p-10 md:p-16 text-center relative overflow-hidden shadow-2xl shadow-blue-900/20">

                    {{-- Abstract Shapes --}}
                    <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl"
                        aria-hidden="true"></div>
                    <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-64 h-64 bg-emerald-400 opacity-10 rounded-full blur-3xl"
                        aria-hidden="true"></div>

                    <div class="relative z-10 text-white">
                        <span
                            class="inline-block bg-white/10 border border-white/20 text-white px-5 py-2 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                            Tahap Awal Transformasi
                        </span>
                        <h2 class="text-3xl md:text-5xl font-extrabold mb-6 font-heading leading-tight">
                            Identifikasi Solusi Digital<br>Tepat Guna Anda
                        </h2>
                        <p class="text-blue-100 text-base md:text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
                            Hilangkan kebingungan teknis. Jadwalkan sesi konsultasi komprehensif tanpa komitmen
                            finansial bersama arsitek sistem kami untuk membedah kebutuhan spesifik operasional Anda.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-5 justify-center">
                            <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya memerlukan konsultasi teknis untuk memilih arsitektur sistem (POS/ERP/Katalog) yang sesuai dengan UMKM saya.') }}"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center gap-3 px-8 py-4.5 bg-white text-slate-900 font-extrabold rounded-xl shadow-xl hover:bg-slate-50 hover:scale-105 transition-all duration-300 text-sm md:text-base">
                                <i class="fa-brands fa-whatsapp text-emerald-500 text-xl"></i>
                                Mulai Konsultasi Teknis
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- --- Animations Configuration --- --}}
    @push('styles')
    <style>
    /* CSS Ecosystem Graphic Animations */
    @keyframes float-1 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(0, -15px);
        }
    }

    @keyframes float-2 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(0, -12px);
        }
    }

    @keyframes float-3 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(5px, -8px);
        }
    }

    @keyframes pulse-slow {

        0%,
        100% {
            transform: translate(-50%, -50%) scale(1);
        }

        50% {
            transform: translate(-50%, -50%) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(30, 58, 138, 0.25);
        }
    }

    @keyframes dash {
        to {
            stroke-dashoffset: -12;
        }
    }

    .animate-float-1 {
        animation: float-1 6s ease-in-out infinite;
    }

    .animate-float-2 {
        animation: float-2 5s ease-in-out infinite reverse;
    }

    .animate-float-3 {
        animation: float-3 4s ease-in-out infinite;
    }

    .animate-pulse-slow {
        animation: pulse-slow 4s ease-in-out infinite;
    }

    .animate-dash {
        animation: dash 1s linear infinite;
    }

    /* Typography Defaults (If not set globally) */
    /* .font-heading { font-family: 'Montserrat', sans-serif; } */

    @media (prefers-reduced-motion: reduce) {

        .animate-float-1,
        .animate-float-2,
        .animate-float-3,
        .animate-pulse-slow,
        .animate-dash {
            animation: none !important;
            transform: none !important;
        }
    }
    </style>
    @endpush

</x-layout.app>