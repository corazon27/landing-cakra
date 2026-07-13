<x-layout.app>

    @php
    $title = 'Jasa Pembuatan Website Company Profile Profesional | Cakra Inovasi Digital';
    $metaDescription = 'Jasa pembuatan website company profile profesional — tampilkan kredibilitas bisnis Anda, raih
    kepercayaan klien baru, dan hadir di halaman pertama Google. Desain modern, SEO-ready, dashboard admin mandiri.
    Konsultasi gratis!';
    $metaKeywords = 'jasa website company profile, website perusahaan profesional, web developer company profile,
    website bisnis UMKM, jasa web developer Sukoharjo, Jawa Tengah, company profile online';
    $ogType = 'website';
    $canonicalUrl = url('/layanan/web-perusahaan');

    $faqsData = [
    ['question' => 'Apa perbedaan website company profile dengan website biasa?', 'answer' => 'Website company profile
    dirancang khusus untuk membangun kredibilitas dan kepercayaan — menampilkan profil perusahaan, layanan, portfolio,
    dan kontak secara profesional. Berbeda dengan toko online yang fokus pada transaksi, company profile fokus pada
    konversi prospek menjadi klien.'],
    ['question' => 'Apakah saya bisa update konten website sendiri?', 'answer' => 'Ya. Anda mendapatkan Dashboard Admin
    yang mudah digunakan untuk update artikel, galeri proyek, testimoni klien, daftar layanan, dan informasi lainnya
    kapan saja tanpa perlu bantuan developer.'],
    ['question' => 'Apakah website company profile bisa muncul di Google?', 'answer' => 'Ya. Setiap halaman dioptimasi
    dengan teknik SEO on-page lengkap — struktur heading, meta tag, schema markup, kecepatan loading, dan sitemap — agar
    bisnis Anda mudah ditemukan di Google.'],
    ['question' => 'Berapa lama pengerjaan website company profile?', 'answer' => 'Untuk paket Starter sekitar 7-10 hari
    kerja, paket Professional 10-14 hari kerja. Waktu bisa lebih cepat jika konten, foto, dan logo sudah disiapkan dari
    awal.'],
    ['question' => 'Apakah tampilan website bisa disesuaikan dengan identitas brand saya?', 'answer' => 'Tentu. Desain
    website akan mengikuti palet warna, font, dan gaya visual brand Anda. Kami akan konsultasikan konsep desain terlebih
    dahulu sebelum mulai pengerjaan.'],
    ['question' => 'Apakah ada fitur formulir kontak atau WhatsApp di website?', 'answer' => 'Ya. Semua paket sudah
    dilengkapi tombol WhatsApp langsung dan formulir kontak yang notifikasinya masuk ke email Anda. Paket Professional
    ke atas juga dilengkapi live chat widget.'],
    ['question' => 'Apakah website bisa tampil baik di HP?', 'answer' => 'Wajib. Semua website yang kami kerjakan
    menggunakan Mobile-First Design — tampilan dioptimasi terlebih dahulu untuk pengguna HP, baru kemudian untuk
    desktop. Mayoritas pengunjung website saat ini menggunakan HP.'],
    ['question' => 'Bagaimana dengan keamanan data dan website saya?', 'answer' => 'Kami memasang SSL Certificate
    (HTTPS) di semua paket, backup data berkala, dan menggunakan framework Laravel yang teruji keamanannya. Anda tidak
    perlu khawatir soal keamanan website.'],
    ];

    $paket = [
    [
    'nama' => 'Company Profile Starter',
    'tagline' => 'Untuk bisnis yang baru membangun presence online',
    'harga' => 'Rp 2jt',
    'harga_raw' => '2.000.000',
    'label' => null,
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20Company%20Profile%20Starter.',
    'btn_style' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
    'fitur_ya' => [
    'Hingga 5 halaman (Beranda, Tentang, Layanan, Galeri, Kontak)',
    'Desain profesional sesuai brand',
    'Halaman layanan / produk dasar',
    'Galeri foto proyek',
    'Formulir kontak + notifikasi email',
    'Tombol WhatsApp langsung',
    'Peta lokasi Google Maps',
    'Dashboard admin mandiri',
    'Desain responsif (HP & PC)',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Optimasi SEO on-page dasar',
    'Panduan & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Halaman blog / artikel',
    'Portfolio proyek detail',
    'Live chat widget',
    'Integrasi Google Analytics',
    'Animasi & interaksi premium',
    'Multi-bahasa (Indonesia + Inggris)',
    'Integrasi media sosial otomatis',
    ],
    ],
    [
    'nama' => 'Company Profile Professional',
    'tagline' => 'Paling populer untuk bisnis yang serius tumbuh',
    'harga' => 'Rp 3,5jt',
    'harga_raw' => '3.500.000',
    'label' => 'Paling Populer',
    'populer' => true,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20Company%20Profile%20Professional.',
    'btn_style' => 'bg-blue-600 text-white hover:bg-blue-700 shadow-lg shadow-blue-200',
    'fitur_ya' => [
    'Hingga 10 halaman dinamis',
    'Desain premium dengan animasi scroll',
    'Halaman layanan detail per item',
    'Portfolio / galeri proyek + filter kategori',
    'Halaman blog / artikel SEO-friendly',
    'Formulir kontak + notifikasi email & WA',
    'Tombol WhatsApp + live chat widget',
    'Manajemen testimoni klien',
    'Dashboard admin lengkap',
    'Desain responsif Mobile-First',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Optimasi SEO on-page lengkap',
    'Integrasi Google Analytics & Search Console',
    'Integrasi media sosial otomatis',
    'Panduan video & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Multi-bahasa (Indonesia + Inggris)',
    'Sistem pendaftaran / login pengguna',
    'Dedicated server & SLA uptime',
    'Integrasi API pihak ketiga',
    ],
    ],
    [
    'nama' => 'Enterprise / Korporat',
    'tagline' => 'Untuk perusahaan besar dengan kebutuhan kustom',
    'harga' => 'Custom',
    'harga_raw' => null,
    'label' => 'Mulai Rp 6jt',
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20ingin%20diskusi%20paket%20Enterprise%20Company%20Profile.',
    'btn_style' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-900 hover:text-white',
    'fitur_ya' => [
    'Semua fitur Professional',
    'Halaman tidak terbatas',
    'Desain kustom penuh sesuai brand guideline',
    'Multi-bahasa (Indonesia + Inggris)',
    'Sistem pendaftaran / login pengguna',
    'Portal klien atau area member',
    'Integrasi API pihak ketiga (CRM, ERP)',
    'Animasi & micro-interaction premium',
    'Dedicated server & uptime SLA 99,9%',
    'Panel super-admin multi-role',
    'Backup otomatis harian',
    'Laporan pengunjung & konversi kustom',
    'Prioritas support & dedicated PM',
    'Garansi bug',
    'Free maintenance 3 bulan pertama',
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
        "@id": "{{ url('/layanan/web-perusahaan') }}/#service",
        "name": "Jasa Pembuatan Website Company Profile",
        "serviceType": "Pembuatan Website Company Profile",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "url": "{{ url('/layanan/web-perusahaan') }}",
        "description": "Jasa pembuatan website company profile profesional untuk membangun kredibilitas bisnis, meningkatkan kepercayaan klien, dan tampil di halaman pertama Google.",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "offers": [{
                "@type": "Offer",
                "name": "Company Profile Starter",
                "price": "1500000",
                "priceCurrency": "IDR"
            },
            {
                "@type": "Offer",
                "name": "Company Profile Professional",
                "price": "3500000",
                "priceCurrency": "IDR"
            },
            {
                "@type": "Offer",
                "name": "Company Profile Enterprise",
                "price": "7000000",
                "priceCurrency": "IDR"
            }
        ]
    }
    </script>
    @endpush


    {{-- ================================================================
     SECTION 1: HERO
================================================================ --}}
    <section class="relative pt-32 pb-20 bg-white overflow-hidden">

        {{-- 🛠️ 1. LAYER BACKGROUND KHUSUS MOBILE (< lg) --}}
        <div class="absolute inset-0 bg-no-repeat pointer-events-none z-0
            bg-[length:auto_55%] bg-[position:right_center]
            lg:hidden" style="background-image: url('{{ asset('images/hero-company.webp') }}');">
        </div>

        {{-- 🛠️ 2. LAYER BACKGROUND KHUSUS DESKTOP (>= lg) --}}
        {{-- Menggunakan spesifikasi desktop Anda yang sudah proporsional menepi ke kanan --}}
        <div class="absolute inset-0 bg-no-repeat pointer-events-none z-0 hidden
            lg:block lg:bg-[length:auto_65%] lg:bg-[position:right_2rem_center]"
            style="background-image: url('{{ asset('images/hero-company.webp') }}');">
        </div>

        {{-- 💡 3. GRADIENT OVERLAY --}}
        {{-- Di mobile, kita buat overlay-nya tipis/hilang di bagian bawah agar gambar kasir tidak tertutup warna putih --}}
        <div class="absolute inset-0 bg-white/80 md:bg-transparent backdrop-blur-[1px] md:backdrop-blur-none pointer-events-none"
            aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]" current="Company Profile" />
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mt-5 md:mt-6">

                {{-- Kolom Teks --}}
                <div class="text-left space-y-5 md:space-y-7" data-aos="fade-right">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-3 md:mb-4">
                            Website Company Profile
                        </span>
                        <!-- <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Jadikan Website Anda<br class="hidden sm:block">
                            <span class="text-blue-600">Sales Terbaik</span> yang Bekerja 24 Jam
                            <span class="absolute -bottom-2 left-0 w-full h-1 bg-emerald-400 rounded-full"
                                aria-hidden="true"></span>
                        </h1> -->
                        <h1 id="hero-heading"
                            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mt-5 mb-5 leading-tight text-slate-950 font-heading">
                            Jadikan Website Anda<br class="hidden sm:block">
                            <span class="relative inline-block">
                                <span class="text-blue-600">Sales Terbaik</span> yang Bekerja 24 Jam
                                <span class="absolute -bottom-2 left-0 w-full h-1 bg-emerald-400 rounded-full"
                                    aria-hidden="true"></span>
                            </span>
                        </h1>
                        <p class="mt-4 md:mt-5 text-base md:text-lg text-slate-600 leading-relaxed">
                            Calon klien Anda <em>menilai profesionalisme bisnis Anda</em> dari website sebelum
                            memutuskan menghubungi. Pastikan kesan pertama mereka adalah kesan yang memenangkan
                            kepercayaan.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20pembuatan%20website%20company%20profile."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl bg-blue-600 text-white font-bold text-sm md:text-base hover:bg-blue-700 transition-all shadow-lg shadow-blue-200">
                            <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                            Konsultasi Gratis Sekarang
                        </a>
                        <a href="#fitur"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold text-sm md:text-base hover:bg-slate-50 transition">
                            Lihat Fitur Lengkap
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-magnifying-glass text-blue-500"
                                aria-hidden="true"></i> SEO-Ready di Google</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-mobile-screen text-blue-500"
                                aria-hidden="true"></i> Mobile-First Design</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-bolt text-blue-500"
                                aria-hidden="true"></i> Dashboard Admin Mandiri</span>
                    </div>

                    {{-- Mobile-only stats --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">24/7</p>
                            <p class="text-xs text-slate-500 mt-1">Website Bekerja untuk Anda</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">10+</p>
                            <p class="text-xs text-slate-500 mt-1">Halaman Profesional</p>
                        </div>
                        <div class="bg-orange-50 rounded-2xl p-4 text-center border border-orange-100">
                            <p class="text-2xl font-extrabold text-orange-500">#1</p>
                            <p class="text-xs text-slate-500 mt-1">Kesan Pertama di Google</p>
                        </div>
                        <div class="bg-violet-50 rounded-2xl p-4 text-center border border-violet-100">
                            <p class="text-2xl font-extrabold text-violet-600">100%</p>
                            <p class="text-xs text-slate-500 mt-1">Milik & Kontrol Anda</p>
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
                    Bisnis Tanpa Website vs Bisnis dengan Website Profesional
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Di era digital ini, keputusan calon klien Anda dimulai dari pencarian online — jauh sebelum mereka
                    menghubungi Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 items-stretch">

                <div class="bg-white p-5 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-building-circle-xmark text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 md:mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-slate-900 mb-4 md:mb-5">Tanpa Website Profesional
                        </h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Tidak Terlihat di Google:</strong> Saat calon klien mencari jasa Anda di
                                    Google, yang muncul adalah kompetitor — bukan Anda.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Sulit Bangun Kepercayaan:</strong> Bisnis tanpa website terlihat kurang
                                    profesional di mata calon klien korporat maupun institusi.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Kehilangan Prospek Potensial:</strong> Tanpa formulir kontak atau WhatsApp
                                    terintegrasi, banyak calon klien yang pergi begitu saja.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Portfolio dan prestasi kerja keras Anda tidak punya panggung yang layak untuk
                                ditampilkan.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-blue-600 p-5 md:p-8 rounded-3xl shadow-xl shadow-blue-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-building text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-blue-500 rounded-2xl flex items-center justify-center mb-4 md:mb-5 border border-blue-400">
                            <i class="fa-solid fa-check text-white text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-4 md:mb-5">Dengan Website Company
                            Profile</h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Muncul di Google 24 Jam:</strong> Calon klien menemukan bisnis Anda kapan
                                    saja mereka mencari — bahkan saat Anda tidur.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Kredibilitas Instan:</strong> Website profesional yang rapi membangun
                                    kepercayaan sebelum calon klien berbicara dengan Anda.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-blue-50">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                <p><strong>Mesin Generasi Prospek:</strong> Formulir kontak, WhatsApp, dan ajakan
                                    bertindak yang strategis mengubah pengunjung menjadi klien potensial.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-blue-200 mt-1 shrink-0" aria-hidden="true"></i>
                                Portfolio dan pencapaian terbaik Anda tampil di panggung digital yang bisa dilihat
                                seluruh dunia.
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
                    Solusi untuk Perusahaan & Institusi Anda
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Company Profile untuk Bisnis Anda
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Apapun jenis bisnis Anda, Company Profile bisa disesuaikan untuk kebutuhan spesifik Anda.
                </p>
            </div>

            @php
            $useCases = [
            ['icon' => 'fa-solid fa-building', 'color' => 'blue', 'label' => 'Perusahaan & Korporasi', 'desc' =>
            'Membangun citra profesional untuk tender, profil pemegang saham, dan struktur organisasi.'],
            ['icon' => 'fa-solid fa-helmet-safety', 'color' => 'orange', 'label' => 'Kontraktor & Konstruksi', 'desc' =>
            'Menampilkan portfolio proyek yang telah selesai, daftar alat berat, dan sertifikasi keamanan.'],
            ['icon' => 'fa-solid fa-briefcase-medical', 'color' => 'emerald', 'label' => 'Klinik & Tenaga Medis', 'desc'
            => 'Informasi jadwal dokter, fasilitas layanan kesehatan, dan edukasi pasien secara online.'],
            ['icon' => 'fa-solid fa-graduation-cap', 'color' => 'indigo', 'label' => 'Institusi Pendidikan', 'desc' =>
            'Profil sekolah/kampus, kurikulum, fasilitas pendidikan, dan informasi pendaftaran siswa.'],
            ['icon' => 'fa-solid fa-scale-balanced', 'color' => 'violet', 'label' => 'Firma Hukum & Konsultan', 'desc'
            => 'Menonjolkan keahlian tim ahli, daftar klien, dan publikasi artikel hukum/bisnis.'],
            ['icon' => 'fa-solid fa-industry', 'color' => 'amber', 'label' => 'Manufaktur & Pabrik', 'desc' =>
            'Kapasitas produksi, standar ISO, jalur distribusi, dan profil keberlanjutan (sustainability).'],
            ['icon' => 'fa-solid fa-hotel', 'color' => 'red', 'label' => 'Hospitality & Pariwisata', 'desc' =>
            'Visualisasi gallery hotel, destinasi wisata, testimoni tamu, dan informasi fasilitas.'],
            ['icon' => 'fa-solid fa-handshake-angle', 'color' => 'pink', 'label' => 'Yayasan & Organisasi', 'desc' =>
            'Transparansi program sosial, galeri kegiatan, dan kanal informasi bagi donatur/relawan.'],
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
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20toko%20online%20untuk%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-orange-500 font-semibold hover:underline underline-offset-4 transition text-sm">
                    Ceritakan kebutuhan Anda — kami carikan solusinya
                    <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 3: FITUR
================================================================ --}}
    <section id="fitur" class="py-16 md:py-24 bg-[#eae7dc]" x-data="{ activeFeature: 1 }">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            {{-- Section Header --}}
            <div class="mb-10 md:mb-14" data-aos="fade-up">
                <span class="font-mono text-xs font-bold tracking-widest text-[#e85a4f] uppercase block mb-2">
                    SEKAT 01–05
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-serif font-bold text-[#1e302b] mb-3 md:mb-4">
                    Fitur unggulan company profile
                </h2>
                <p class="text-[#5b5853] max-w-2xl text-sm md:text-base font-normal">
                    Bukan sekadar brosur digital — mesin pemasaran pasif yang bekerja 24 jam.
                </p>
            </div>

            @php
            $fiturList = [
            [
            'id' => 1,
            'icon' => 'fa-star',
            'judul' => 'Desain Premium Sesuai Identitas Brand',
            'deskripsi' => 'Website dirancang mengikuti palet warna, tipografi, dan gaya visual brand Anda — bukan
            template generik. Setiap elemen mencerminkan nilai dan karakter bisnis Anda.',
            'manfaat' => 'Kesan pertama yang konsisten memperkuat brand awareness dan membangun kepercayaan lebih
            cepat.'
            ],
            [
            'id' => 2,
            'icon' => 'fa-magnifying-glass',
            'judul' => 'SEO On-Page Lengkap — Tampil di Google',
            'deskripsi' => 'Setiap halaman dioptimasi dengan struktur heading yang benar, meta tag, schema markup,
            kecepatan loading, dan sitemap otomatis agar Google mudah mengindeks bisnis Anda.',
            'manfaat' => 'Bisnis Anda ditemukan calon klien yang sedang aktif mencari layanan Anda di Google — traffic
            organik tanpa biaya iklan.'
            ],
            [
            'id' => 3,
            'icon' => 'fa-images',
            'judul' => 'Portfolio & Galeri Proyek yang Memukau',
            'deskripsi' => 'Tampilkan portfolio terbaik Anda dalam galeri visual yang terorganisir dengan filter
            kategori. Setiap proyek bisa dilengkapi foto, deskripsi, dan hasil yang dicapai.',
            'manfaat' => 'Bukti nyata kualitas kerja Anda berbicara lebih keras dari seribu kata — konversi calon klien
            lebih tinggi.'
            ],
            [
            'id' => 4,
            'icon' => 'fa-envelope',
            'judul' => 'Formulir Kontak & WhatsApp Terintegrasi',
            'deskripsi' => 'Setiap halaman dilengkapi Call-to-Action strategis, formulir kontak dengan notifikasi email,
            dan tombol WhatsApp langsung ke nomor Anda.',
            'manfaat' => 'Tidak ada prospek yang terlewat — setiap pengunjung yang berminat punya jalan mudah untuk
            langsung menghubungi Anda.'
            ],
            [
            'id' => 5,
            'icon' => 'fa-newspaper',
            'judul' => 'Blog / Artikel SEO untuk Konten Marketing',
            'deskripsi' => 'Halaman blog yang terstruktur untuk publikasi artikel informatif seputar industri Anda —
            lengkap dengan SEO on-page per artikel.',
            'manfaat' => 'Konten berkualitas memposisikan bisnis Anda sebagai ahli di bidangnya, meningkatkan
            kepercayaan dan peringkat di Google secara jangka panjang.'
            ],
            ];
            @endphp

            {{-- Main Layout Container: Menggabungkan list tab (kiri) dan panel deskripsi (kanan) --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 border border-[#d8d3c5] rounded-sm overflow-hidden bg-[#f4f1ea]"
                data-aos="fade-up">

                {{-- KOLOM KIRI: Daftar Pilihan Fitur (Tab Navigasi) --}}
                <div
                    class="lg:col-span-5 flex flex-col divide-y divide-[#d8d3c5] border-b lg:border-b-0 lg:border-r border-[#d8d3c5]">
                    @foreach($fiturList as $f)
                    <button @click="activeFeature = {{ $f['id'] }}"
                        class="w-full text-left p-4 md:p-5 flex items-center gap-4 transition-all duration-150 focus:outline-none select-none"
                        :class="activeFeature === {{ $f['id'] }} ? 'bg-[#1e302b] text-[#f0ede4]' : 'bg-[#f4f1ea] hover:bg-[#ebe6da] text-[#1e302b]'">

                        {{-- Nomor Fitur --}}
                        <span class="font-mono text-xs font-semibold shrink-0"
                            :class="activeFeature === {{ $f['id'] }} ? 'text-[#e85a4f]' : 'text-[#e85a4f]/70'">
                            0{{ $f['id'] }}
                        </span>

                        {{-- Icon --}}
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

                {{-- KOLOM KANAN: Panel Penjelasan Dinamis --}}
                <div class="lg:col-span-7 p-6 md:p-10 lg:p-12 bg-[#f4f1ea] flex flex-col justify-center min-h-[320px]">
                    @foreach($fiturList as $f)
                    <div x-show="activeFeature === {{ $f['id'] }}" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0" class="space-y-4 md:space-y-6">

                        {{-- Besar Icon Aksen Terracotta --}}
                        <div class="text-[#e85a4f] text-2xl md:text-3xl">
                            <i class="fa-solid {{ $f['icon'] }}" aria-hidden="true"></i>
                        </div>

                        {{-- Judul Fitur di Panel --}}
                        <h3 class="font-serif font-bold text-xl md:text-2xl text-[#1e302b] leading-tight">
                            {{ $f['judul'] }}
                        </h3>

                        {{-- Konten Deskripsi Utama --}}
                        <p class="text-sm md:text-base text-[#5b5853] leading-relaxed">
                            {{ $f['deskripsi'] }}
                        </p>

                        {{-- Kotak Manfaat Terpisah --}}
                        <div class="pt-4 border-t border-[#d8d3c5]">
                            <p class="text-sm md:text-base text-[#5b5853] leading-relaxed">
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
    <section id="paket" class="py-16 md:py-24 bg-[#16291F] border-t border-[#D8D0BD]">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="max-w-2xl mb-12 md:mb-16" data-aos="fade-up">
                <p class="font-mono text-xs tracking-[0.18em] uppercase text-[#B8924A] mb-3">Daftar Harga</p>
                <h2 class="font-display text-2xl md:text-4xl font-semibold text-[#EFEAE0]">
                    Bangun <span class="text-[#B8924A]">Identitas Digital Anda</span>
                </h2>
                <p class="text-[#EFEAE0]/60 text-sm md:text-base mt-3 font-body">
                    Harga transparan, fitur jelas. Pilih paket sesuai skala bisnis Anda — semua bisa didiskusikan.
                </p>
                <p class="text-xs text-[#B8924A] mt-3 italic font-body">
                    *Harga belum termasuk biaya domain dan hosting tahunan. Bisa dicicil 2–3 termin.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 border border-[#EFEAE0]/15" data-aos="fade-up">

                @foreach($paket as $i => $p)
                <article
                    class="relative flex flex-col bg-[#F6F2E8] {{ $i > 0 ? 'lg:border-l border-[#EFEAE0]/15' : '' }} {{ $p['populer'] ? 'lg:scale-[1.02] z-10' : '' }}"
                    data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">

                    @if($p['label'])
                    <div class="absolute -top-4 right-5 w-16 h-16 rounded-full border border-[#D8D0BD] flex items-center justify-center bg-[#F6F2E8] z-10"
                        aria-hidden="true">
                        <span
                            class="text-[8px] text-center leading-tight font-bold uppercase text-[#2B2620]">{{ $p['label'] }}</span>
                    </div>
                    @endif

                    <div class="p-6 md:p-8 flex-1 flex flex-col {{ $p['label'] ? 'pt-8 md:pt-10' : '' }}">

                        <div class="mb-5 pb-5 border-b border-dashed border-[#D8D0BD]">
                            <p class="font-mono text-[10px] text-[#B23A2E] tracking-widest mb-2">
                                PAKET-{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}
                            </p>
                            <h3 class="font-display text-lg font-semibold text-[#2B2620] mb-1">{{ $p['nama'] }}</h3>
                            <p class="text-[#6B6357] text-xs mb-4 font-body">{{ $p['tagline'] }}</p>

                            @if($p['harga'] === 'Custom')
                            <p class="font-mono text-3xl md:text-4xl font-semibold text-[#1F3A2E]">Custom</p>
                            <p class="text-xs text-[#6B6357] mt-1 font-body">Harga sesuai kebutuhan</p>
                            @else
                            <p class="font-mono text-3xl md:text-4xl font-semibold text-[#1F3A2E]">{{ $p['harga'] }}</p>
                            <p class="text-xs text-[#6B6357] mt-1 font-body">Biaya setup awal — bisa 2–3 termin</p>
                            @endif
                        </div>

                        <div class="mb-4 font-body">
                            <p class="text-[10px] font-bold text-[#6B6357] uppercase tracking-widest mb-2.5 md:mb-3">
                                Yang Anda Dapatkan
                            </p>
                            <ul class="space-y-2">
                                @foreach($p['fitur_ya'] as $f)
                                <li class="flex items-start gap-2.5 text-xs text-[#3A352C]">
                                    <i class="fa-solid fa-check text-[#1F3A2E] mt-0.5 shrink-0 text-[10px]"
                                        aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        @if(count($p['fitur_tidak']) > 0)
                        <div class="mb-6 pt-3 border-t border-[#D8D0BD] font-body">
                            <p class="text-[10px] font-bold text-[#B23A2E] uppercase tracking-widest mb-2.5 md:mb-3">
                                Tidak Termasuk
                            </p>
                            <ul class="space-y-2">
                                @foreach($p['fitur_tidak'] as $f)
                                <li class="flex items-start gap-2.5 text-xs text-[#A39C8E]">
                                    <i class="fa-solid fa-xmark mt-0.5 shrink-0 text-[10px]" aria-hidden="true"></i>
                                    {{ $f }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @else
                        <div class="mb-6 pt-3 border-t border-[#D8D0BD] font-body">
                            <p class="text-xs text-[#6B6357] italic flex items-center gap-2">
                                <i class="fa-solid fa-infinity text-[#1F3A2E]"></i>
                                Semua fitur tersedia — tidak ada batasan.
                            </p>
                        </div>
                        @endif

                        <a href="https://wa.me/6285865405330?text={{ $p['wa_text'] }}" target="_blank"
                            rel="noopener noreferrer"
                            class="mt-auto block w-full py-3 px-6 text-center rounded-sm font-body font-bold text-sm transition-colors {{ $p['populer'] ? 'bg-[#1F3A2E] text-[#EFEAE0] hover:bg-[#16291F]' : 'border border-[#1F3A2E] text-[#1F3A2E] hover:bg-[#1F3A2E] hover:text-[#EFEAE0]' }}">
                            @if($p['populer']) Ambil Penawaran Ini
                            @elseif($p['harga'] === 'Custom') Diskusi dengan Tim Ahli
                            @else Pilih Paket Ini
                            @endif
                        </a>

                    </div>
                </article>
                @endforeach

            </div>

            <div class="mt-9 text-center" data-aos="fade-up">
                <a href="{{ url('/fitur-company-profile') }}"
                    class="inline-flex items-center gap-2 text-[#EFEAE0]/80 hover:text-[#EFEAE0] font-semibold text-sm font-body underline underline-offset-4">
                    Lihat perbandingan fitur &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 5: FAQ
================================================================ --}}
    <section id="faq" class="py-14 md:py-24 bg-[#FAF8F5]" x-data="faqCompanyProfile()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-blue-600">Website Company Profile</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-cp-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-cp-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-cp-answer-' + faq.id">

                            <span class="faq-cp-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
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

                        <div :id="'faq-cp-answer-' + faq.id" class="faq-cp-answer overflow-hidden"
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
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20bertanya%20soal%20website%20company%20profile."
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
    <x-meeting-form title="Siap Membangun Wajah Digital Profesional Bisnis Anda?"
        subtitle="Jadwalkan konsultasi gratis — kami bantu rancang website company profile yang memenangkan kepercayaan klien." />


    @push('scripts')
    <script>
    function faqCompanyProfile() {
        return {
            selected: null,

            faqs: [{
                    id: 1,
                    question: 'Apa perbedaan website company profile dengan website biasa?',
                    answer: `<p class="mb-3">Website company profile dirancang khusus untuk <strong>membangun kepercayaan dan konversi prospek</strong>:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="p-3 bg-blue-50 rounded-xl border border-blue-100">
                            <p class="text-xs font-bold text-blue-700 mb-1">Company Profile</p>
                            <p class="text-xs text-slate-600">Fokus membangun kredibilitas — menampilkan siapa Anda, apa yang Anda kerjakan, dan mengapa calon klien harus memilih Anda.</p>
                        </div>
                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <p class="text-xs font-bold text-slate-700 mb-1">Website Umum</p>
                            <p class="text-xs text-slate-600">Bisa untuk berbagai tujuan — toko online, blog, portofolio pribadi — tanpa fokus pada konversi prospek korporat.</p>
                        </div>
                    </div>`
                },
                {
                    id: 2,
                    question: 'Apakah saya bisa update konten website sendiri?',
                    answer: `<p class="mb-3">Ya. Anda mendapatkan akses <strong>Dashboard Admin</strong> yang mudah digunakan:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Tambah/edit artikel blog dan berita perusahaan</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Upload foto proyek ke galeri portofolio</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Update daftar layanan dan deskripsinya</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Kelola testimoni dan ulasan klien</li>
                    </ul>`
                },
                {
                    id: 3,
                    question: 'Apakah website company profile bisa muncul di Google?',
                    answer: `<p class="mb-3">Ya! Kami mengoptimasi setiap halaman dengan:</p>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-magnifying-glass text-blue-600 mt-0.5"></i><span><strong>Meta title & description</strong> yang mengandung keyword relevan bisnis Anda</span></li>
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-code text-blue-600 mt-0.5"></i><span><strong>Schema markup</strong> untuk rich snippet di hasil pencarian Google</span></li>
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-bolt text-blue-600 mt-0.5"></i><span><strong>Optimasi kecepatan loading</strong> untuk PageSpeed yang bagus di mata Google</span></li>
                        <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-sitemap text-blue-600 mt-0.5"></i><span><strong>Sitemap otomatis</strong> agar semua halaman terindeks dengan cepat</span></li>
                    </ul>`
                },
                {
                    id: 4,
                    question: 'Berapa lama pengerjaan website company profile?',
                    answer: `<div class="space-y-2">
                    <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-clock text-blue-600"></i><span><strong>Paket Starter:</strong> ± 7–10 hari kerja</span></div>
                    <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-xl text-xs border border-blue-100"><i class="fa-solid fa-clock text-blue-600"></i><span><strong>Paket Professional:</strong> ± 10–14 hari kerja</span></div>
                    <p class="text-xs text-slate-400 italic mt-2">*Waktu bisa lebih cepat jika konten, foto, dan logo sudah disiapkan sejak awal.</p>
                </div>`
                },
                {
                    id: 5,
                    question: 'Apakah tampilan website bisa disesuaikan dengan identitas brand saya?',
                    answer: `<p class="mb-3">Tentu! Proses desain kami dimulai dengan:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-palette text-blue-600 text-[10px]"></i> Konsultasi warna, font, dan gaya visual brand Anda</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-eye text-blue-600 text-[10px]"></i> Presentasi mockup desain sebelum coding dimulai</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-rotate text-blue-600 text-[10px]"></i> Revisi desain hingga Anda puas</li>
                    </ul>`
                },
                {
                    id: 6,
                    question: 'Apakah ada fitur formulir kontak atau WhatsApp di website?',
                    answer: `<p class="mb-3">Ya, semua sudah terintegrasi:</p>
                    <ul class="space-y-2">
                        <li class="flex items-start gap-3"><i class="fa-brands fa-whatsapp text-emerald-600 mt-1 shrink-0"></i> <span><strong>Tombol WhatsApp:</strong> Langsung ke nomor Anda, bisa di setiap halaman.</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-envelope text-blue-600 mt-1 shrink-0"></i> <span><strong>Formulir Kontak:</strong> Notifikasi masuk ke email Anda setiap ada pesan baru.</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-comment text-purple-600 mt-1 shrink-0"></i> <span><strong>Live Chat Widget:</strong> Tersedia di paket Professional ke atas.</span></li>
                    </ul>`
                },
                {
                    id: 7,
                    question: 'Apakah website bisa tampil baik di HP?',
                    answer: `<p class="mb-3">Wajib. Kami menggunakan <strong>Mobile-First Design</strong>:</p>
                    <ul class="space-y-1.5">
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Tampilan dioptimasi untuk HP terlebih dahulu</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Loading cepat meski koneksi tidak stabil</li>
                        <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-blue-600 text-[10px]"></i> Tombol dan navigasi mudah digunakan di layar kecil</li>
                    </ul>
                    <p class="text-xs text-slate-400 mt-3 italic">*75%+ pengunjung website bisnis saat ini mengakses dari HP.</p>`
                },
                {
                    id: 8,
                    question: 'Bagaimana dengan keamanan data dan website saya?',
                    answer: `<ul class="space-y-3">
                    <li class="flex items-start gap-3"><i class="fa-solid fa-shield-halved text-blue-600 mt-1 shrink-0"></i> <span><strong>SSL Certificate (HTTPS):</strong> Koneksi terenkripsi standar internasional.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-server text-blue-600 mt-1 shrink-0"></i> <span><strong>Backup Berkala:</strong> Data website di-backup rutin agar aman dari kehilangan data.</span></li>
                    <li class="flex items-start gap-3"><i class="fa-solid fa-code text-blue-600 mt-1 shrink-0"></i> <span><strong>Framework Aman:</strong> Dibangun dengan Laravel yang teruji keamanannya.</span></li>
                </ul>`
                }
            ],

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-cp-ripple');

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
                const el = document.getElementById('faq-cp-answer-' + id);
                if (el) {
                    const parent = el.closest('.faq-cp-item');
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

    .font-display {
        font-family: 'Fraunces', serif;
    }

    .font-body {
        font-family: 'Inter', sans-serif;
    }

    .font-mono {
        font-family: 'IBM Plex Mono', monospace;
    }

    .faq-cp-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-cp-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-cp-item:not([class*="border-blue"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-cp-answer {
            transition: none;
        }

        .faq-cp-ripple {
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
    </style>
    @endpush

</x-layout.app>