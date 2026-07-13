<x-layout.app>

    {{-- ============================================================
         SEO: Meta halaman /layanan/web-booking
         Target keyword: "jasa website sistem booking", "aplikasi reservasi online",
         "website booking appointment", "sistem reservasi bisnis"
    ============================================================ --}}
    @php
    $title = 'Jasa Pembuatan Website Sistem Booking & Reservasi Online | Cakra Inovasi Digital';
    $metaDescription = 'Jasa pembuatan website sistem booking & reservasi online profesional — otomatiskan jadwal,
    kurangi no-show, dan kelola appointment bisnis Anda 24 jam. Cocok untuk klinik, salon, homestay, lapangan olahraga,
    dan UMKM jasa. Konsultasi gratis!';
    $metaKeywords = 'jasa website sistem booking, aplikasi reservasi online, website booking appointment, sistem
    reservasi klinik, booking salon online, reservasi lapangan olahraga, website booking homestay, jasa web developer
    Sukoharjo, Jawa Tengah, UMKM Indonesia';
    $ogType = 'website';
    $canonicalUrl = url('/layanan/web-booking');

    $faqsData = [
    ['question' => 'Bisnis apa saja yang cocok menggunakan sistem booking online?',
    'answer' => 'Sistem booking online cocok untuk berbagai jenis bisnis jasa: klinik & dokter, salon & barbershop, spa
    & massage, homestay & villa, lapangan futsal/badminton/tenis, studio foto, konsultan, guru les privat, wedding
    organizer, dan bisnis jasa lainnya yang memerlukan penjadwalan appointment.'],
    ['question' => 'Apakah pelanggan bisa booking 24 jam tanpa perlu telepon?',
    'answer' => 'Ya. Sistem booking online aktif 24 jam — pelanggan bisa memesan slot waktu kapan saja dari HP maupun
    komputer, tanpa perlu menelepon atau mengirim pesan manual. Anda menerima notifikasi otomatis setiap ada booking
    masuk.'],
    ['question' => 'Bagaimana cara mengurangi no-show dari pelanggan?',
    'answer' => 'Sistem dilengkapi pengingat otomatis via WhatsApp atau Email H-1 dan H-2 sebelum jadwal. Fitur deposit
    booking juga tersedia agar pelanggan lebih berkomitmen. No-show bisa berkurang signifikan dengan kombinasi dua fitur
    ini.'],
    ['question' => 'Apakah saya bisa mengatur ketersediaan jadwal sendiri?',
    'answer' => 'Tentu. Anda memiliki akses penuh ke Dashboard Admin untuk atur hari buka, jam operasional, slot waktu,
    durasi sesi, jumlah kapasitas per slot, dan tanggal libur — semua bisa diubah kapan saja tanpa perlu developer.'],
    ['question' => 'Apakah sistem bisa mengelola banyak layanan atau staff sekaligus?',
    'answer' => 'Ya. Tersedia fitur multi-layanan (contoh: Facial, Massage, Manicure) dan multi-staff/therapist. Setiap
    staff bisa punya jadwal dan kapasitas booking sendiri-sendiri.'],
    ['question' => 'Apakah pelanggan perlu membayar DP saat booking?',
    'answer' => 'Bisa diatur sesuai kebutuhan. Sistem mendukung 3 mode: booking gratis (tanpa pembayaran), booking
    dengan deposit/DP via Payment Gateway, atau booking berbayar penuh di muka.'],
    ['question' => 'Apakah ada laporan untuk melihat pendapatan dan jadwal?',
    'answer' => 'Ya. Dashboard menyediakan laporan booking harian/bulanan, pendapatan per layanan/staff, persentase
    occupancy rate, dan riwayat pelanggan yang bisa diekspor ke Excel.'],
    ['question' => 'Berapa lama waktu pengerjaan website sistem booking?',
    'answer' => 'Untuk paket Starter sekitar 10–14 hari kerja. Paket Professional 14–21 hari kerja. Waktu bisa lebih
    cepat jika data layanan, foto, dan konten sudah disiapkan sejak awal.'],
    ];

    $paket = [
    [
    'nama' => 'Booking Starter',
    'tagline' => 'Untuk bisnis jasa yang baru go-digital',
    'harga' => 'Rp 4,5jt',
    'harga_raw' => '4.500.000',
    'label' => null,
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20Booking%20Starter.',
    'btn_style' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-50',
    'fitur_ya' => [
    'Hingga 5 jenis layanan',
    'Kalender booking real-time',
    'Form pemesanan online',
    'Konfirmasi booking otomatis (WA/Email)',
    'Dashboard admin jadwal harian',
    'Atur jam buka & hari libur',
    'Laporan booking dasar',
    'Desain responsif (HP & PC)',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Formulir kontak + Google Maps',
    'Optimasi SEO on-page dasar',
    'Panduan & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Payment Gateway (DP/pembayaran penuh)',
    'Pengingat otomatis H-1/H-2 (reminder)',
    'Multi-staff / multi-therapist',
    'Manajemen kapasitas per slot',
    'Riwayat & database pelanggan',
    'Laporan pendapatan & occupancy',
    'Integrasi Google Calendar',
    'Fitur reschedule mandiri oleh pelanggan',
    ],
    ],
    [
    'nama' => 'Booking Professional',
    'tagline' => 'Paling populer untuk bisnis jasa aktif',
    'harga' => 'Rp 8,5jt',
    'harga_raw' => '8.500.000',
    'label' => 'Paling Populer',
    'populer' => true,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20tertarik%20Paket%20Booking%20Professional.',
    'btn_style' => 'bg-blue-600 text-white hover:bg-blue-700 shadow-lg shadow-blue-200',
    'fitur_ya' => [
    'Layanan tidak terbatas (unlimited)',
    'Kalender booking real-time interaktif',
    'Pemesanan mandiri 24 jam oleh pelanggan',
    'Konfirmasi & pengingat otomatis (WA/Email)',
    'Payment Gateway — DP atau bayar penuh',
    'Multi-staff / multi-therapist dengan jadwal terpisah',
    'Manajemen kapasitas & kuota per slot',
    'Database & riwayat pelanggan',
    'Fitur reschedule & cancellation mandiri',
    'Laporan booking, pendapatan & occupancy rate',
    'Ekspor laporan ke Excel',
    'Integrasi Google Calendar (opsional)',
    'Dashboard admin lengkap & mobile-friendly',
    'Optimasi SEO on-page lengkap',
    'Domain .com & Hosting 1 tahun',
    'SSL Certificate (HTTPS)',
    'Panduan video & pelatihan admin',
    'Garansi bug',
    ],
    'fitur_tidak' => [
    'Multi-cabang / multi-lokasi',
    'Sistem membership & loyalty point',
    'Integrasi POS (kasir fisik)',
    'Dedicated server & SLA uptime',
    ],
    ],
    [
    'nama' => 'Booking Enterprise',
    'tagline' => 'Multi-cabang, fitur kustom penuh',
    'harga' => 'Custom',
    'harga_raw' => null,
    'label' => 'Mulai Rp 15jt',
    'populer' => false,
    'wa_text' => 'Halo%20Cakra%2C%20saya%20ingin%20diskusi%20paket%20Booking%20Enterprise.',
    'btn_style' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-900 hover:text-white',
    'fitur_ya' => [
    'Semua fitur Professional',
    'Multi-cabang / multi-lokasi dalam 1 sistem',
    'Panel admin per cabang + super-admin pusat',
    'Sistem membership & loyalty point pelanggan',
    'Paket bundling layanan (package deal)',
    'Integrasi POS / kasir fisik',
    'Integrasi API pihak ketiga (ERP, CRM)',
    'Dedicated server & uptime SLA 99,9%',
    'Backup otomatis harian',
    'Laporan custom & ekspor data',
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
        "@id": "{{ url('/layanan/web-booking') }}/#service",
        "name": "Jasa Pembuatan Website Sistem Booking & Reservasi Online",
        "serviceType": "Pembuatan Website Sistem Booking",
        "provider": {
            "@id": "{{ url('/') }}/#business"
        },
        "url": "{{ url('/layanan/web-booking') }}",
        "description": "Jasa pembuatan website sistem booking dan reservasi online profesional dengan konfirmasi otomatis, payment gateway, pengingat jadwal, dan dashboard admin mandiri.",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "offers": [{
                "@type": "Offer",
                "name": "Booking Starter",
                "price": "4500000",
                "priceCurrency": "IDR",
                "description": "Sistem booking online dasar untuk bisnis jasa yang baru go-digital."
            },
            {
                "@type": "Offer",
                "name": "Booking Professional",
                "price": "8500000",
                "priceCurrency": "IDR",
                "description": "Sistem booking otomatis lengkap dengan payment, multi-staff, dan laporan."
            },
            {
                "@type": "Offer",
                "name": "Booking Enterprise",
                "price": "15000000",
                "priceCurrency": "IDR",
                "description": "Platform booking multi-cabang dengan fitur kustom dan dedicated support."
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
                <x-breadcrumb :items="[['name' => 'Layanan', 'url' => url('/layanan')]]" current="Booking" />
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center mt-5 md:mt-6">

                {{-- ── Kolom Teks ── --}}
                <div class="text-left space-y-5 md:space-y-7" data-aos="fade-right">
                    <div>
                        <span
                            class="inline-block px-4 py-1.5 rounded-full bg-violet-50 text-violet-600 text-xs font-semibold uppercase tracking-wider mb-3 md:mb-4">
                            Sistem Booking & Reservasi Online
                        </span>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                            Hentikan Kerepotan<br class="hidden sm:block">
                            Atur Jadwal Manual —<br class="hidden sm:block">
                            <span class="text-violet-600">Biarkan Sistem Bekerja</span>
                        </h1>
                        <p class="mt-4 md:mt-5 text-base md:text-lg text-slate-600 leading-relaxed">
                            Lelah jawab WA "masih ada slot nggak?" seharian? Bingung atur jadwal yang sering
                            double-booking?
                            <strong>Cakra Inovasi Digital</strong> membangun sistem booking online yang memungkinkan
                            pelanggan
                            pesan slot sendiri — 24 jam, otomatis, tanpa Anda harus standby.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20pembuatan%20website%20sistem%20booking%20untuk%20bisnis%20saya."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl bg-violet-600 text-white font-bold text-sm md:text-base hover:bg-violet-700 transition-all shadow-lg shadow-violet-200">
                            <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                            Konsultasi Gratis Sekarang
                        </a>
                        <a href="#fitur"
                            class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3.5 rounded-2xl border-2 border-slate-200 text-slate-700 font-bold text-sm md:text-base hover:bg-slate-50 transition">
                            Lihat Fitur Lengkap
                        </a>
                    </div>

                    <div class="flex flex-wrap gap-3 md:gap-5 text-xs md:text-sm text-slate-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-calendar-check text-violet-500"
                                aria-hidden="true"></i> Booking 24 Jam Otomatis</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-bell text-violet-500"
                                aria-hidden="true"></i> Pengingat Anti No-Show</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-mobile-screen text-violet-500"
                                aria-hidden="true"></i> Kelola dari HP</span>
                    </div>

                    {{-- Stats mini — mobile only --}}
                    <div class="grid grid-cols-2 gap-3 lg:hidden">
                        <div class="bg-violet-50 rounded-2xl p-4 text-center border border-violet-100">
                            <p class="text-2xl font-extrabold text-violet-600">24/7</p>
                            <p class="text-xs text-slate-500 mt-1">Booking Bisa Dilakukan</p>
                        </div>
                        <div class="bg-emerald-50 rounded-2xl p-4 text-center border border-emerald-100">
                            <p class="text-2xl font-extrabold text-emerald-600">0</p>
                            <p class="text-xs text-slate-500 mt-1">Double Booking Lagi</p>
                        </div>
                        <div class="bg-blue-50 rounded-2xl p-4 text-center border border-blue-100">
                            <p class="text-2xl font-extrabold text-blue-600">Auto</p>
                            <p class="text-xs text-slate-500 mt-1">Konfirmasi & Reminder</p>
                        </div>
                        <div class="bg-orange-50 rounded-2xl p-4 text-center border border-orange-100">
                            <p class="text-2xl font-extrabold text-orange-500">↓</p>
                            <p class="text-xs text-slate-500 mt-1">Angka No-Show Turun</p>
                        </div>
                    </div>
                </div>

                {{-- ── Kolom Mockup Dashboard Booking ── --}}
                <div class="relative" data-aos="fade-left">

                    <div class="absolute inset-0 bg-gradient-to-br from-violet-100 via-purple-50 to-slate-100 rounded-[3rem] blur-3xl opacity-60 scale-110"
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
                                <span class="text-[10px] text-slate-400 font-mono">booking.bisnis-anda.com/admin</span>
                            </div>
                            <div class="w-6 h-6 rounded-full bg-violet-500 flex items-center justify-center">
                                <span class="text-[8px] font-bold text-white">A</span>
                            </div>
                        </div>

                        {{-- Body --}}
                        <div class="p-5 space-y-4">

                            {{-- Stats row --}}
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Booking Hari Ini</p>
                                    <p class="text-lg font-extrabold text-white leading-none">18</p>
                                    <p class="text-[9px] text-emerald-400 mt-1 flex items-center gap-1"><i
                                            class="fa-solid fa-arrow-trend-up" aria-hidden="true"></i> +4 baru</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Slot Terisi</p>
                                    <p class="text-lg font-extrabold text-white leading-none">85%</p>
                                    <p class="text-[9px] text-violet-400 mt-1 flex items-center gap-1"><i
                                            class="fa-solid fa-circle-check" aria-hidden="true"></i> Occupancy</p>
                                </div>
                                <div class="bg-slate-800/80 rounded-xl p-3.5 border border-slate-700/40">
                                    <p class="text-[9px] text-slate-400 uppercase tracking-wider font-semibold mb-1">
                                        Pendapatan</p>
                                    <p class="text-lg font-extrabold text-white leading-none">Rp 2,7jt</p>
                                    <p class="text-[9px] text-slate-400 mt-1">Hari ini</p>
                                </div>
                            </div>

                            {{-- Kalender mini --}}
                            <div class="bg-slate-800/80 rounded-xl p-4 border border-slate-700/40">
                                <div class="flex items-center justify-between mb-3">
                                    <p class="text-[10px] text-slate-300 font-semibold">Jadwal Hari Ini — Senin, 9 Des
                                    </p>
                                    <span
                                        class="text-[9px] bg-violet-500/20 text-violet-400 px-2 py-0.5 rounded-full">Live</span>
                                </div>
                                <div class="space-y-2">
                                    @php
                                    $slots = [
                                    ['time'=>'09.00','name'=>'Ratna S.','svc'=>'Facial
                                    Premium','status'=>'Selesai','color'=>'bg-emerald-500/20 text-emerald-400'],
                                    ['time'=>'10.00','name'=>'Budi W.','svc'=>'Deep Tissue
                                    Massage','status'=>'Berlangsung','color'=>'bg-violet-500/20 text-violet-300'],
                                    ['time'=>'11.00','name'=>'Sinta D.','svc'=>'Manicure &
                                    Pedicure','status'=>'Menunggu','color'=>'bg-blue-500/20 text-blue-400'],
                                    ['time'=>'13.00','name'=>'Slot Kosong','svc'=>'— Tersedia
                                    —','status'=>'Tersedia','color'=>'bg-slate-700/40 text-slate-500'],
                                    ];
                                    @endphp
                                    @foreach($slots as $slot)
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="text-[10px] text-slate-400 font-mono w-10 shrink-0">{{ $slot['time'] }}</span>
                                        <div
                                            class="flex-1 flex items-center justify-between {{ $slot['color'] }} rounded-lg px-3 py-1.5">
                                            <div>
                                                <p class="text-[10px] font-semibold text-slate-200 leading-tight">
                                                    {{ $slot['name'] }}</p>
                                                <p class="text-[9px] text-slate-400">{{ $slot['svc'] }}</p>
                                            </div>
                                            <span
                                                class="text-[8px] font-bold px-2 py-0.5 rounded-full {{ $slot['color'] }}">{{ $slot['status'] }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Reminder sent --}}
                            <div class="bg-slate-800/80 rounded-xl border border-slate-700/40 overflow-hidden">
                                <div class="px-4 py-2.5 border-b border-slate-700/40 flex items-center justify-between">
                                    <p class="text-[10px] text-slate-300 font-semibold">Reminder Terkirim Hari Ini</p>
                                    <span class="text-[9px] text-violet-400">Otomatis</span>
                                </div>
                                @php
                                $reminders = [
                                ['name'=>'Dewi L.','time'=>'Besok 10.00','via'=>'WhatsApp','icon'=>'fa-brands
                                fa-whatsapp','icolor'=>'text-emerald-400'],
                                ['name'=>'Andi M.','time'=>'Besok 14.00','via'=>'Email','icon'=>'fa-solid
                                fa-envelope','icolor'=>'text-blue-400'],
                                ['name'=>'Sari P.','time'=>'Besok 16.00','via'=>'WhatsApp','icon'=>'fa-brands
                                fa-whatsapp','icolor'=>'text-emerald-400'],
                                ];
                                @endphp
                                @foreach($reminders as $r)
                                <div
                                    class="px-4 py-2.5 flex items-center justify-between border-b border-slate-700/20 last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-7 h-7 rounded-lg bg-slate-700 flex items-center justify-center">
                                            <i class="{{ $r['icon'] }} {{ $r['icolor'] }} text-[10px]"
                                                aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-semibold text-slate-200">{{ $r['name'] }}</p>
                                            <p class="text-[9px] text-slate-500">{{ $r['time'] }}</p>
                                        </div>
                                    </div>
                                    <span class="text-[8px] font-semibold text-slate-400">via {{ $r['via'] }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- Floating badges --}}
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl border border-slate-100 px-4 py-3 flex items-center gap-3 animate-bounce z-20"
                        aria-hidden="true">
                        <div class="w-9 h-9 bg-violet-100 text-violet-600 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-calendar-plus text-sm"></i>
                        </div>
                        <div>
                            <p class="text-[9px] text-slate-400 uppercase font-bold tracking-widest">Booking Baru!</p>
                            <p class="text-sm font-extrabold text-slate-800">Facial Premium — 14.00</p>
                        </div>
                    </div>
                    <div class="absolute -top-3 -right-3 bg-violet-600 text-white rounded-xl shadow-lg px-3 py-2 flex items-center gap-2 z-20"
                        aria-hidden="true">
                        <i class="fa-solid fa-circle-check text-emerald-300 text-sm"></i>
                        <span class="text-[10px] font-bold">Reminder Terkirim</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 2: PERBANDINGAN — Manual vs Sistem Booking Online
    ================================================================ --}}
    <section class="py-14 md:py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-5 md:px-6">
            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Masih Atur Jadwal via Chat Manual?
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Bandingkan bagaimana bisnis Anda berjalan sebelum dan sesudah punya sistem booking online yang
                    bekerja otomatis.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 items-stretch">

                <div class="bg-white p-5 md:p-8 rounded-3xl border border-red-100 shadow-sm relative overflow-hidden group"
                    data-aos="fade-right">
                    <div class="absolute -right-4 -top-4 opacity-5 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-comments text-9xl text-red-600"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-red-50 rounded-2xl flex items-center justify-center mb-4 md:mb-5">
                            <i class="fa-solid fa-xmark text-red-500 text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-slate-900 mb-4 md:mb-5">Tanpa Sistem Booking
                            (Manual)</h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Catat jadwal di buku / WA:</strong> Rawan selisih, mudah lupa, dan tidak bisa
                                    dipantau dari mana saja.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Double booking sering terjadi:</strong> Dua pelanggan dijanjikan slot waktu
                                    yang sama karena data tidak terpusat.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>No-show merugikan:</strong> Pelanggan lupa jadwal, slot kosong terbuang
                                    sia-sia tanpa kompensasi apapun.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-red-500 italic font-medium">
                                <i class="fa-solid fa-circle-dot text-[8px] mt-2 text-red-300 shrink-0"
                                    aria-hidden="true"></i>
                                Anda harus standby di HP sepanjang hari hanya untuk balas "masih ada slot nggak?"
                                berulang kali.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="bg-violet-600 p-5 md:p-8 rounded-3xl shadow-xl shadow-violet-100 relative overflow-hidden group"
                    data-aos="fade-left">
                    <div class="absolute -right-4 -top-4 opacity-10 group-hover:rotate-12 transition-transform duration-500"
                        aria-hidden="true">
                        <i class="fa-solid fa-calendar-check text-9xl text-white"></i>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-11 md:w-12 h-11 md:h-12 bg-violet-500 rounded-2xl flex items-center justify-center mb-4 md:mb-5 border border-violet-400">
                            <i class="fa-solid fa-check text-white text-lg md:text-xl" aria-hidden="true"></i>
                        </div>
                        <h3 class="text-base md:text-xl font-bold text-white mb-4 md:mb-5">Dengan Sistem Booking Online
                        </h3>
                        <ul class="space-y-3 md:space-y-4">
                            <li class="flex items-start gap-3 text-sm text-violet-50">
                                <i class="fa-solid fa-circle-check text-violet-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Pelanggan pesan sendiri 24 jam:</strong> Tanpa telepon, tanpa WA manual —
                                    sistem otomatis memblokir slot yang sudah terisi.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-violet-50">
                                <i class="fa-solid fa-circle-check text-violet-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Nol double booking:</strong> Kalender real-time memastikan satu slot hanya
                                    bisa dipesan satu pelanggan.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-violet-50">
                                <i class="fa-solid fa-circle-check text-violet-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                <p><strong>Reminder otomatis kurangi no-show:</strong> Pelanggan dikirim pengingat H-1
                                    dan H-2 via WhatsApp / Email secara otomatis.</p>
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white font-bold">
                                <i class="fa-solid fa-circle-check text-violet-200 mt-1 shrink-0"
                                    aria-hidden="true"></i>
                                Anda bisa fokus melayani — bukan standby di HP. Laporan pendapatan tercatat rapi
                                otomatis.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 3: COCOK UNTUK BISNIS APA?
         Section unik dibanding web-ecommerce — menampilkan use case
         bisnis yang bisa menggunakan sistem booking
    ================================================================ --}}
    <section class="py-14 md:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-14" data-aos="fade-up">
                <span
                    class="inline-block bg-violet-50 text-violet-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                    Solusi untuk Semua Bisnis Jasa
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Sistem Booking untuk Bisnis Anda
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-sm md:text-base">
                    Apapun jenis bisnis jasa Anda, sistem booking online bisa disesuaikan untuk kebutuhan spesifik Anda.
                </p>
            </div>

            @php
            $useCases = [
            ['icon' => 'fa-solid fa-stethoscope', 'color' => 'blue', 'label' => 'Klinik & Dokter', 'desc' => 'Booking
            antrian & konsultasi dokter online, integrasi reminder pasien.'],
            ['icon' => 'fa-solid fa-scissors', 'color' => 'violet', 'label' => 'Salon & Barbershop', 'desc' => 'Pilih
            stylist favorit, pesan layanan, bayar DP — semua dari HP.'],
            ['icon' => 'fa-solid fa-spa', 'color' => 'emerald','label' => 'Spa & Wellness', 'desc' => 'Jadwalkan
            treatment, pilih terapis, dan atur paket bundling dengan mudah.'],
            ['icon' => 'fa-solid fa-house', 'color' => 'orange', 'label' => 'Homestay & Villa', 'desc' => 'Reservasi
            kamar real-time, cek ketersediaan, dan bayar DP online.'],
            ['icon' => 'fa-solid fa-futbol', 'color' => 'green', 'label' => 'Lapangan Olahraga', 'desc' => 'Booking
            lapangan futsal, badminton, tenis per jam dengan kalender interaktif.'],
            ['icon' => 'fa-solid fa-camera', 'color' => 'pink', 'label' => 'Studio Foto & Kreatif', 'desc' => 'Jadwalkan
            sesi pemotretan, pilih konsep, dan konfirmasi otomatis ke klien.'],
            ['icon' => 'fa-solid fa-graduation-cap', 'color' => 'indigo', 'label' => 'Les Privat & Kursus', 'desc' =>
            'Atur jadwal sesi belajar, pilih instruktur, dan lacak kehadiran siswa.'],
            ['icon' => 'fa-solid fa-ring', 'color' => 'amber', 'label' => 'Wedding & Event Organizer', 'desc' =>
            'Jadwalkan konsultasi, manajemen paket, dan booking vendor sekaligus.'],
            ];

            $uc_colors = [
            'blue' => ['bg' => 'bg-blue-50', 'icon' => 'text-blue-600', 'border' => 'border-blue-100', 'hover' =>
            'hover:border-blue-300'],
            'violet' => ['bg' => 'bg-violet-50', 'icon' => 'text-violet-600', 'border' => 'border-violet-100', 'hover'
            => 'hover:border-violet-300'],
            'emerald'=> ['bg' => 'bg-emerald-50','icon' => 'text-emerald-600','border' => 'border-emerald-100','hover'
            => 'hover:border-emerald-300'],
            'orange' => ['bg' => 'bg-orange-50', 'icon' => 'text-orange-600', 'border' => 'border-orange-100', 'hover'
            => 'hover:border-orange-300'],
            'green' => ['bg' => 'bg-green-50', 'icon' => 'text-green-600', 'border' => 'border-green-100', 'hover' =>
            'hover:border-green-300'],
            'pink' => ['bg' => 'bg-pink-50', 'icon' => 'text-pink-600', 'border' => 'border-pink-100', 'hover' =>
            'hover:border-pink-300'],
            'indigo' => ['bg' => 'bg-indigo-50', 'icon' => 'text-indigo-600', 'border' => 'border-indigo-100', 'hover'
            => 'hover:border-indigo-300'],
            'amber' => ['bg' => 'bg-amber-50', 'icon' => 'text-amber-600', 'border' => 'border-amber-100', 'hover' =>
            'hover:border-amber-300'],
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
                <p class="text-slate-500 text-sm mb-3">Bisnis Anda tidak ada di atas tapi butuh sistem booking?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20sistem%20booking%20untuk%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 text-violet-600 font-semibold hover:underline underline-offset-4 transition text-sm">
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
                    Fitur Unggulan <span class="text-violet-600">Sistem Booking Profesional</span>
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Bukan sekadar form reservasi biasa. Ini adalah mesin operasional yang mengotomatiskan jadwal,
                    pembayaran, dan komunikasi dengan pelanggan Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                {{-- Feature Accordion — tampil PERTAMA di mobile --}}
                <div class="lg:col-span-7 space-y-2.5 md:space-y-3 order-first lg:order-last" data-aos="fade-left">

                    @php
                    $fiturList = [
                    [1, 'fa-solid fa-calendar-days', 'Kalender Booking Real-Time Interaktif', 'Pelanggan bisa langsung
                    memilih tanggal dan jam yang tersedia dari kalender yang terupdate secara
                    real-time.<br><strong>Manfaat:</strong> Tidak ada lagi double booking — setiap slot yang dipesan
                    langsung terkunci dan tidak bisa dipilih pelanggan lain.'],
                    [2, 'fa-solid fa-bell', 'Reminder Otomatis Anti No-Show', 'Sistem mengirimkan pengingat otomatis H-1
                    dan H-2 sebelum jadwal via WhatsApp atau Email tanpa Anda perlu lakukan
                    apapun.<br><strong>Manfaat:</strong> Angka no-show turun signifikan — pelanggan tidak lupa jadwal,
                    slot tidak terbuang sia-sia.'],
                    [3, 'fa-solid fa-credit-card', 'Pembayaran DP / Full Online', 'Integrasikan Payment Gateway agar
                    pelanggan bisa bayar DP atau penuh saat booking — Transfer Bank, E-Wallet, hingga
                    QRIS.<br><strong>Manfaat:</strong> Komitmen pelanggan jauh lebih tinggi setelah bayar DP, no-show
                    turun drastis.'],
                    [4, 'fa-solid fa-users', 'Multi-Staff & Multi-Layanan', 'Atur jadwal untuk setiap
                    staff/therapist/dokter secara terpisah, masing-masing dengan slot dan kapasitas
                    tersendiri.<br><strong>Manfaat:</strong> Cocok untuk salon multi-stylist, klinik multi-dokter, atau
                    spa dengan banyak terapis — semua terpusat dalam satu dashboard.'],
                    [5, 'fa-solid fa-chart-line', 'Laporan Jadwal, Pendapatan & Occupancy', 'Pantau occupancy rate
                    harian/bulanan, pendapatan per layanan atau per staff, dan riwayat pelanggan dari satu
                    dashboard.<br><strong>Manfaat:</strong> Keputusan bisnis berbasis data — tahu layanan mana paling
                    laris, jam mana paling sepi, dan kapan harus tambah slot.'],
                    ];
                    @endphp

                    @foreach($fiturList as [$id, $icon, $judul, $konten])
                    <div @click="activeFeature = {{ $id }}"
                        class="p-4 md:p-5 rounded-2xl cursor-pointer transition-all duration-300 border" :class="activeFeature === {{ $id }}
                             ? 'bg-violet-600 text-white shadow-xl shadow-violet-200/60 border-transparent'
                             : 'bg-white hover:shadow-md text-slate-800 border-slate-100'">
                        <h3 class="font-bold flex items-center justify-between text-sm md:text-base">
                            <span class="flex items-center gap-2.5 md:gap-3">
                                <i class="{{ $icon }} w-4 shrink-0 transition-colors duration-200"
                                    :class="activeFeature === {{ $id }} ? 'text-white' : 'text-violet-600'"
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
                        <div class="absolute top-0 right-0 w-32 h-32 bg-violet-500/10 rounded-full blur-2xl"
                            aria-hidden="true"></div>
                        <div class="bg-slate-800/80 rounded-2xl p-4 md:p-5 space-y-3 md:space-y-4 relative z-10">
                            <div class="flex items-center gap-3 border-b border-slate-700/40 pb-3 md:pb-4">
                                <div class="w-8 h-8 bg-violet-600 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-calendar-check text-white text-xs" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-white">Dashboard Booking</p>
                                    <p class="text-[9px] text-slate-400">Sistem Aktif — Realtime</p>
                                </div>
                                <div class="ml-auto flex items-center gap-1.5">
                                    <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                                    <span class="text-[9px] text-emerald-400">Online</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2.5 md:gap-3">
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-calendar-days text-violet-400 mb-2 text-sm"
                                        aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Booking Hari Ini</p>
                                    <p class="text-xs font-bold text-white">18 Reservasi</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-bell text-amber-400 mb-2 text-sm" aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Reminder Terkirim</p>
                                    <p class="text-xs font-bold text-white">12 Pesan</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-users text-emerald-400 mb-2 text-sm" aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Staff Aktif</p>
                                    <p class="text-xs font-bold text-white">5 Therapist</p>
                                </div>
                                <div class="bg-slate-900/60 rounded-xl p-3 border border-slate-700/30">
                                    <i class="fa-solid fa-chart-pie text-blue-400 mb-2 text-sm" aria-hidden="true"></i>
                                    <p class="text-[9px] text-slate-400">Occupancy Rate</p>
                                    <p class="text-xs font-bold text-white">85%</p>
                                </div>
                            </div>
                            <div class="bg-violet-600 rounded-xl p-3 flex items-center justify-between">
                                <div>
                                    <p class="text-[9px] text-violet-200">Pendapatan Hari Ini</p>
                                    <p class="text-base font-extrabold text-white">Rp 2.750.000</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-[9px] text-violet-200">No-Show Rate</p>
                                    <p class="text-sm font-bold text-emerald-300">3% ↓</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-emerald-500 text-white px-3 py-2 rounded-xl shadow-lg flex items-center gap-1.5"
                            aria-hidden="true">
                            <i class="fa-solid fa-robot text-xs"></i>
                            <span class="text-[10px] font-bold">Auto-Reminder</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 5: PAKET HARGA
         Harga riset pasaran Indonesia 2024–2025 untuk jasa website booking:
         - Starter: Rp 4–6jt (freelancer/agency kecil)
         - Professional: Rp 7–12jt (fitur penuh, multi-staff)
         - Enterprise: Rp 15jt+ (multi-cabang, integrasi)
    ================================================================ --}}
    <section id="paket" class="py-14 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-16" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-5xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pilih Paket <span class="text-violet-600">Sistem Booking</span> Anda
                </h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-sm md:text-base">
                    Harga transparan, fitur jelas. Semua paket bisa dikustom sesuai kebutuhan spesifik bisnis Anda.
                </p>
                <p class="text-xs text-slate-400 mt-3 italic">*Harga belum termasuk biaya domain, hosting tahunan, dan
                    payment gateway provider. Bisa dicicil 2–3 termin.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 md:gap-6 lg:gap-8 items-start">

                @foreach($paket as $i => $p)
                <article class="relative bg-white rounded-3xl flex flex-col transition-all duration-300
                       {{ $p['populer']
                          ? 'border-2 border-violet-600 shadow-2xl shadow-violet-100 lg:-translate-y-4'
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
                                    <i class="fa-solid fa-circle-check text-violet-600 mt-0.5 shrink-0 text-[11px]"
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
                                <i class="fa-solid fa-infinity text-violet-400"></i>
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
                <a href="{{ url('/fitur-web-booking') }}"
                    class="inline-flex items-center gap-2 px-6 md:px-8 py-3 bg-white border border-slate-200 hover:border-violet-300 hover:bg-violet-50 text-slate-700 font-semibold rounded-full transition-all text-sm shadow-sm">
                    Lihat perbandingan fitur &amp; harga lengkap
                    <i class="fa-solid fa-chevron-right text-xs" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================================================================
         SECTION 6: FAQ
    ================================================================ --}}
    <section id="faq" class="py-14 md:py-24 bg-slate-50" x-data="faqBooking()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Seputar <span class="text-violet-600">Sistem Booking Online</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">

                    <div class="faq-booking-item group relative bg-white rounded-2xl overflow-hidden shadow-sm
                                border transition-all duration-300" :class="selected === faq.id
                             ? 'border-violet-300 shadow-violet-100 shadow-md'
                             : 'border-slate-200 hover:border-slate-300 hover:shadow-md'" itemscope
                        itemprop="mainEntity" itemtype="https://schema.org/Question">

                        {{-- Garis aksen kiri violet --}}
                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-violet-500 opacity-100' : 'opacity-0'">
                        </div>

                        <button @click="toggleFaq(faq.id, $event)" class="faq-booking-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5
                                       text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400
                                       focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-booking-answer-' + faq.id">

                            {{-- Ripple --}}
                            <span
                                class="faq-booking-ripple absolute rounded-full bg-violet-100 opacity-0 pointer-events-none"
                                style="width:10px;height:10px;transform:scale(0);transition:transform 0.5s ease,opacity 0.5s ease;"></span>

                            {{-- Nomor urut --}}
                            <span class="shrink-0 w-6 md:w-7 h-6 md:h-7 rounded-full text-[10px] md:text-[11px]
                                         font-extrabold flex items-center justify-center transition-all duration-300"
                                :class="selected === faq.id
                                      ? 'bg-violet-600 text-white'
                                      : 'bg-slate-100 text-slate-400 group-hover:bg-slate-200'"
                                x-text="String(index + 1).padStart(2, '0')">
                            </span>

                            {{-- Teks pertanyaan --}}
                            <span class="flex-1 font-bold text-sm md:text-base pr-3 md:pr-4 transition-colors
                                         duration-200 leading-snug"
                                :class="selected === faq.id ? 'text-violet-700' : 'text-slate-800'"
                                x-text="faq.question" itemprop="name">
                            </span>

                            {{-- Chevron dalam lingkaran --}}
                            <span class="shrink-0 w-7 md:w-8 h-7 md:h-8 rounded-full flex items-center
                                         justify-center border transition-all duration-300" :class="selected === faq.id
                                      ? 'bg-violet-600 border-violet-600 rotate-180'
                                      : 'bg-white border-slate-200 group-hover:border-slate-300'">
                                <i class="fa-solid fa-chevron-down text-[10px] md:text-[11px] transition-colors duration-200"
                                    :class="selected === faq.id ? 'text-white' : 'text-slate-400'"
                                    aria-hidden="true"></i>
                            </span>
                        </button>

                        <div :id="'faq-booking-answer-' + faq.id" class="faq-booking-answer overflow-hidden" :style="selected === faq.id
                                 ? 'max-height: 500px; opacity: 1;'
                                 : 'max-height: 0; opacity: 0;'" itemscope itemprop="acceptedAnswer"
                            itemtype="https://schema.org/Answer">
                            <div class="px-4 md:px-6 pb-4 md:pb-5 pt-0">
                                <div class="border-t border-slate-100 mb-3 md:mb-4"></div>
                                <div class="pl-9 md:pl-11 text-sm text-slate-600 leading-relaxed" x-html="faq.answer"
                                    itemprop="text">
                                </div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-8 md:mt-10 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20bertanya%20soal%20sistem%20booking%20online."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-emerald-500 text-white px-5 md:px-6 py-2.5 md:py-3 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm">
                    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                    Tanya Langsung via WhatsApp
                </a>
            </div>
        </div>
    </section>


    {{-- ================================================================
         SECTION 7: CTA / MEETING FORM
    ================================================================ --}}
    <x-meeting-form title="Siap Otomatiskan Jadwal & Booking Bisnis Anda?"
        subtitle="Jadwalkan konsultasi gratis — kami bantu rancang sistem booking yang paling sesuai dengan jenis bisnis dan kebutuhan spesifik Anda." />


    @push('scripts')
    <script>
    function faqBooking() {
        return {
            selected: null,

            faqs: [{
                    id: 1,
                    question: 'Bisnis apa saja yang cocok menggunakan sistem booking online?',
                    answer: `<p class="mb-3">Sistem booking online cocok untuk berbagai bisnis jasa, antara lain:</p>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>🏥</span> Klinik & Dokter</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>✂️</span> Salon & Barbershop</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>🧘</span> Spa & Wellness</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>🏠</span> Homestay & Villa</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>⚽</span> Lapangan Olahraga</div>
                            <div class="p-2.5 bg-slate-50 rounded-lg text-xs flex items-center gap-2"><span>📚</span> Les Privat & Kursus</div>
                        </div>
                        <p class="text-xs text-slate-400 mt-3 italic">Dan bisnis jasa lainnya yang memerlukan penjadwalan appointment.</p>`
                },
                {
                    id: 2,
                    question: 'Apakah pelanggan bisa booking 24 jam tanpa perlu telepon?',
                    answer: `<p class="mb-3">Ya! Sistem booking online aktif <strong>24 jam penuh</strong>. Pelanggan bisa:</p>
                        <ul class="space-y-1.5">
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Memilih tanggal dan jam yang tersedia secara mandiri</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Menerima konfirmasi booking otomatis via WA/Email</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Melakukan reschedule atau cancellation sendiri</li>
                        </ul>
                        <p class="text-xs text-slate-500 mt-3">Anda menerima notifikasi otomatis setiap ada booking masuk — tanpa perlu standby di HP.</p>`
                },
                {
                    id: 3,
                    question: 'Bagaimana cara mengurangi no-show dari pelanggan?',
                    answer: `<p class="mb-3">Sistem dilengkapi <strong>2 senjata utama</strong> untuk menekan no-show:</p>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 p-3 bg-violet-50 rounded-xl"><i class="fa-solid fa-bell text-violet-600 mt-1 shrink-0" aria-hidden="true"></i><div><p class="text-xs font-bold text-slate-700">Reminder Otomatis H-1 & H-2</p><p class="text-xs text-slate-500">Pengingat via WhatsApp / Email dikirim 1 hari dan 2 hari sebelum jadwal — tanpa Anda lakukan apapun.</p></div></div>
                            <div class="flex items-start gap-3 p-3 bg-blue-50 rounded-xl"><i class="fa-solid fa-credit-card text-blue-600 mt-1 shrink-0" aria-hidden="true"></i><div><p class="text-xs font-bold text-slate-700">Deposit / DP saat Booking</p><p class="text-xs text-slate-500">Pelanggan yang sudah bayar DP jauh lebih berkomitmen untuk hadir. Jika cancel, DP bisa menjadi kompensasi slot terbuang.</p></div></div>
                        </div>`
                },
                {
                    id: 4,
                    question: 'Apakah saya bisa mengatur ketersediaan jadwal sendiri?',
                    answer: `<p class="mb-3">Tentu. Dashboard Admin memberikan kontrol penuh atas:</p>
                        <ul class="space-y-1.5">
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Hari buka & hari libur / tanggal merah khusus</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Jam operasional per hari</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Durasi per sesi dan slot waktu</li>
                            <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Kapasitas maksimal per slot</li>
                        </ul>
                        <p class="text-xs text-slate-500 mt-3">Semua bisa diubah kapan saja — tanpa perlu developer.</p>`
                },
                {
                    id: 5,
                    question: 'Apakah sistem bisa mengelola banyak layanan atau staff sekaligus?',
                    answer: `<p class="mb-3">Ya. Fitur <strong>multi-layanan</strong> dan <strong>multi-staff</strong> tersedia di paket Professional ke atas:</p>
                        <ul class="space-y-2">
                            <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-layer-group text-violet-600 mt-0.5" aria-hidden="true"></i><span><strong>Multi-layanan:</strong> Facial, Massage, Manicure, dll — setiap layanan punya durasi dan harga sendiri.</span></li>
                            <li class="flex items-start gap-2 text-xs"><i class="fa-solid fa-users text-violet-600 mt-0.5" aria-hidden="true"></i><span><strong>Multi-staff:</strong> Setiap therapist/dokter/stylist punya kalender jadwal tersendiri — pelanggan bisa pilih staff favorit.</span></li>
                        </ul>`
                },
                {
                    id: 6,
                    question: 'Apakah pelanggan perlu membayar DP saat booking?',
                    answer: `<p class="mb-3">Bisa diatur sesuai kebutuhan bisnis Anda. Tersedia 3 mode pembayaran:</p>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between p-3 bg-slate-50 rounded-xl text-xs"><span class="font-semibold text-slate-700">Booking Gratis</span><span class="text-slate-500">Tanpa pembayaran — pelanggan langsung konfirmasi</span></div>
                            <div class="flex items-center justify-between p-3 bg-violet-50 rounded-xl text-xs border border-violet-100"><span class="font-semibold text-slate-700">Booking + Deposit (DP)</span><span class="text-violet-600 font-bold">Rekomendasi ↑</span></div>
                            <div class="flex items-center justify-between p-3 bg-slate-50 rounded-xl text-xs"><span class="font-semibold text-slate-700">Bayar Penuh di Muka</span><span class="text-slate-500">Untuk paket atau voucher layanan</span></div>
                        </div>`
                },
                {
                    id: 7,
                    question: 'Apakah ada laporan untuk melihat pendapatan dan jadwal?',
                    answer: `<div class="flex items-start gap-4 bg-violet-50 p-4 rounded-xl">
                        <i class="fa-solid fa-chart-line text-2xl text-violet-600 mt-1 shrink-0" aria-hidden="true"></i>
                        <div>
                            <p class="mb-2">Dashboard menyediakan laporan lengkap:</p>
                            <ul class="space-y-1">
                                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Booking harian/bulanan per layanan & staff</li>
                                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Pendapatan & occupancy rate</li>
                                <li class="flex items-center gap-2 text-xs"><i class="fa-solid fa-check text-violet-600 text-[10px]" aria-hidden="true"></i> Riwayat pelanggan & ekspor Excel</li>
                            </ul>
                        </div>
                    </div>`
                },
                {
                    id: 8,
                    question: 'Berapa lama waktu pengerjaan website sistem booking?',
                    answer: `<div class="space-y-2">
                        <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl text-xs"><i class="fa-solid fa-clock text-violet-600" aria-hidden="true"></i><span><strong>Paket Starter:</strong> ± 10–14 hari kerja</span></div>
                        <div class="flex items-center gap-3 p-3 bg-violet-50 rounded-xl text-xs border border-violet-100"><i class="fa-solid fa-clock text-violet-600" aria-hidden="true"></i><span><strong>Paket Professional:</strong> ± 14–21 hari kerja</span></div>
                        <p class="text-xs text-slate-400 italic">*Waktu bisa lebih cepat jika data layanan, foto, dan konten sudah disiapkan sejak awal.</p>
                    </div>`
                }
            ],

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-booking-ripple');

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
                const el = document.getElementById('faq-booking-answer-' + id);
                if (el) {
                    const parent = el.closest('.faq-booking-item');
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

    .faq-booking-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1),
            opacity 0.28s ease;
    }

    .faq-booking-ripple {
        position: absolute;
        border-radius: 50%;
        background: #ede9fe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-booking-item:not([class*="border-violet"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-booking-answer {
            transition: none;
        }

        .faq-booking-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>