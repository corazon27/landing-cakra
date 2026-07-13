<x-layout.app>

    @php
    $title = 'Harga & Perbandingan Paket Website Sistem Booking & Reservasi Online | Cakra Inovasi Digital';
    $metaDescription = 'Bandingkan harga dan fitur lengkap paket website sistem booking & reservasi online Cakra Inovasi
    Digital — Starter, Professional, hingga Enterprise. Transparan, tanpa biaya tersembunyi. Cocok untuk klinik, salon,
    homestay, dan bisnis jasa lainnya.';
    $metaKeywords = 'harga website sistem booking, paket aplikasi reservasi online, perbandingan fitur booking klinik,
    biaya website booking salon, harga sistem jadwal otomatis, booking online UMKM Indonesia';
    $ogType = 'website';
    $canonicalUrl = url('/fitur/web-booking');

    $faqsData = [
    ['question' => 'Apakah saya bisa upgrade paket di kemudian hari?', 'answer' => 'Tentu. Anda bisa upgrade ke paket
    lebih tinggi kapan saja. Tim kami membantu proses penambahan fitur dan penyesuaian biaya secara transparan.'],
    ['question' => 'Apakah fitur bisa dikustomisasi di luar paket standar?', 'answer' => 'Ya. Setiap paket bisa
    dikustomisasi sesuai kebutuhan spesifik bisnis Anda. Kami akan analisa kebutuhan dan menyesuaikan scope pengerjaan
    beserta biayanya.'],
    ['question' => 'Apakah ada biaya berlangganan bulanan setelah website jadi?', 'answer' => 'Tidak ada biaya
    berlangganan. Anda membayar biaya setup awal sekali dan sistem menjadi milik Anda sepenuhnya. Biaya yang ada hanya
    perpanjangan domain dan hosting tahunan.'],
    ['question' => 'Apakah pelanggan bisa reschedule atau cancel booking sendiri?', 'answer' => 'Ya, tersedia di paket
    Professional ke atas. Pelanggan bisa melakukan reschedule atau cancellation secara mandiri sesuai kebijakan yang
    Anda tentukan (misal: maksimal H-1 sebelum jadwal).'],
    ['question' => 'Bagaimana jika ada bug atau error setelah sistem live?', 'answer' => 'Semua paket mendapatkan
    garansi perbaikan bug tanpa batas waktu setelah serah terima tanpa biaya tambahan.'],
    ['question' => 'Apakah bisa cicil pembayarannya?', 'answer' => 'Bisa. Kami menggunakan sistem 3 termin: DP saat
    deal, termin progres setelah desain disetujui, dan pelunasan saat website siap live.'],
    ['question' => 'Berapa banyak staff atau layanan yang bisa dikelola?', 'answer' => 'Paket Starter hingga 5 jenis
    layanan (tanpa multi-staff). Paket Professional layanan tidak terbatas dengan multi-staff. Paket Enterprise
    multi-cabang dan multi-lokasi tanpa batasan.'],
    ['question' => 'Apakah sistem bisa diintegrasikan dengan Google Calendar?', 'answer' => 'Ya, integrasi Google
    Calendar tersedia di paket Professional ke atas sebagai fitur opsional. Setiap booking yang masuk otomatis
    tersinkronisasi ke Google Calendar admin maupun staff terkait.'],
    ];

    $cols = [
    [
    'label' => 'Starter',
    'sub' => 'Rp 4.500.000',
    'note' => 'Biaya setup awal',
    'badge' => null,
    'btn' => 'border-2 border-violet-600 text-violet-600 hover:bg-violet-600 hover:text-white',
    'wa' => 'Paket%20Booking%20Starter',
    ],
    [
    'label' => 'Professional',
    'sub' => 'Rp 8.500.000',
    'note' => 'Biaya setup awal',
    'badge' => 'Paling Populer',
    'badge_bg' => 'bg-amber-400 text-amber-950',
    'btn' => 'bg-violet-600 hover:bg-violet-700 text-white',
    'wa' => 'Paket%20Booking%20Professional',
    ],
    [
    'label' => 'Enterprise',
    'sub' => 'Mulai Rp 15.000.000',
    'note' => 'Harga sesuai kebutuhan',
    'badge' => null,
    'btn' => 'bg-slate-800 hover:bg-slate-900 text-white',
    'wa' => 'Paket%20Booking%20Enterprise',
    ],
    ];

    $groups = [
    'Jadwal & Kalender' => [
    ['label' => 'Kalender Booking Real-Time', 'values' => [true, true, true]],
    ['label' => 'Form Pemesanan Mandiri oleh Pelanggan 24 Jam', 'values' => [true, true, true]],
    ['label' => 'Atur Hari Buka & Hari Libur', 'values' => [true, true, true]],
    ['label' => 'Atur Jam Operasional per Hari', 'values' => [true, true, true]],
    ['label' => 'Durasi Sesi & Slot Waktu Fleksibel', 'values' => [true, true, true]],
    ['label' => 'Manajemen Kapasitas per Slot', 'values' => [false, true, true]],
    ['label' => 'Integrasi Google Calendar (Opsional)', 'values' => [false, true, true]],
    ['label' => 'Blokir Tanggal / Jam Tertentu', 'values' => [true, true, true]],
    ],
    'Layanan & Staff' => [
    ['label' => 'Jumlah Jenis Layanan', 'values' => ['5 Layanan', 'Unlimited', 'Unlimited']],
    ['label' => 'Multi-Staff / Multi-Therapist', 'values' => [false, true, true]],
    ['label' => 'Jadwal Terpisah per Staff', 'values' => [false, true, true]],
    ['label' => 'Pelanggan Pilih Staff Favorit', 'values' => [false, true, true]],
    ['label' => 'Multi-Cabang / Multi-Lokasi', 'values' => [false, false, true]],
    ['label' => 'Panel Admin per Cabang', 'values' => [false, false, true]],
    ['label' => 'Super-Admin Pusat (Semua Cabang)', 'values' => [false, false, true]],
    ],
    'Notifikasi & Pengingat' => [
    ['label' => 'Konfirmasi Booking Otomatis (WA/Email)', 'values' => [true, true, true]],
    ['label' => 'Reminder H-1 Sebelum Jadwal', 'values' => [false, true, true]],
    ['label' => 'Reminder H-2 Sebelum Jadwal', 'values' => [false, true, true]],
    ['label' => 'Notifikasi Reschedule & Cancellation', 'values' => [false, true, true]],
    ['label' => 'Notifikasi Booking ke Admin (WA/Email)', 'values' => [true, true, true]],
    ],
    'Pembayaran' => [
    ['label' => 'Booking Gratis (Tanpa Pembayaran)', 'values' => [true, true, true]],
    ['label' => 'Pembayaran DP / Deposit Online', 'values' => [false, true, true]],
    ['label' => 'Pembayaran Penuh di Muka', 'values' => [false, true, true]],
    ['label' => 'Payment Gateway (Transfer, E-Wallet, QRIS)', 'values' => [false, true, true]],
    ['label' => 'Kartu Kredit & Cicilan', 'values' => [false, false, true]],
    ['label' => 'Integrasi POS / Kasir Fisik', 'values' => [false, false, true]],
    ],
    'Pelanggan & CRM' => [
    ['label' => 'Database & Riwayat Pelanggan', 'values' => [false, true, true]],
    ['label' => 'Fitur Reschedule Mandiri oleh Pelanggan', 'values' => [false, true, true]],
    ['label' => 'Fitur Cancellation Mandiri oleh Pelanggan', 'values' => [false, true, true]],
    ['label' => 'Sistem Membership & Loyalty Point', 'values' => [false, false, true]],
    ['label' => 'Paket Bundling Layanan (Package Deal)', 'values' => [false, false, true]],
    ['label' => 'Integrasi API Pihak Ketiga (ERP, CRM)', 'values' => [false, false, true]],
    ],
    'Laporan & Analitik' => [
    ['label' => 'Laporan Booking Dasar (Harian)', 'values' => [true, true, true]],
    ['label' => 'Laporan Booking per Layanan & Staff', 'values' => [false, true, true]],
    ['label' => 'Laporan Pendapatan & Occupancy Rate', 'values' => [false, true, true]],
    ['label' => 'Ekspor Laporan ke Excel', 'values' => [false, true, true]],
    ['label' => 'Laporan Kustom & Ekspor Data', 'values' => [false, false, true]],
    ],
    'Teknis & Support' => [
    ['label' => 'Domain .com & Hosting 1 Tahun', 'values' => [true, true, true]],
    ['label' => 'SSL Certificate (HTTPS)', 'values' => [true, true, true]],
    ['label' => 'Desain Responsif Mobile-First', 'values' => [true, true, true]],
    ['label' => 'Optimasi SEO On-page Dasar', 'values' => [true, true, true]],
    ['label' => 'Formulir Kontak + Google Maps', 'values' => [true, true, true]],
    ['label' => 'Dedicated Server & SLA 99,9%', 'values' => [false, false, true]],
    ['label' => 'Backup Data', 'values' => ['Mingguan', 'Harian', 'Real-time']],
    ['label' => 'Garansi Bug Purna Jual', 'values' => ['Lifetime', 'Lifetime', 'Lifetime']],
    ['label' => 'Video Panduan Operasional', 'values' => [true, true, true]],
    ['label' => 'Konsultasi Teknis Gratis', 'values' => [true, true, true]],
    ['label' => 'Dedicated Project Manager', 'values' => [false, false, true]],
    ['label' => 'Free Maintenance 3 Bulan', 'values' => [false, false, true]],
    ],
    ];

    $cards = [
    [
    'badge' => null,
    'ring' => 'border border-slate-200',
    'title' => 'Booking Starter',
    'tagline' => 'Untuk bisnis jasa yang baru go-digital',
    'price' => 'Rp 4.500.000',
    'price_color' => 'text-slate-900',
    'note' => 'Biaya setup awal',
    'perks' => [
    'Hingga 5 jenis layanan',
    'Kalender booking real-time',
    'Form pemesanan online 24 jam',
    'Konfirmasi booking otomatis (WA/Email)',
    'Atur hari buka, jam & libur',
    'Dashboard admin jadwal harian',
    'Laporan booking dasar',
    'Formulir kontak + Google Maps',
    'Domain .com & Hosting 1 tahun',
    'SSL & SEO on-page dasar',
    'Garansi bug',
    ],
    'btn' => 'border-2 border-violet-600 text-violet-600 hover:bg-violet-600 hover:text-white',
    'wa' => 'Paket%20Booking%20Starter',
    ],
    [
    'badge' => 'Paling Populer',
    'badge_bg' => 'bg-amber-400 text-amber-950',
    'ring' => 'border-2 border-violet-600 shadow-2xl shadow-violet-100',
    'title' => 'Booking Professional',
    'tagline' => 'Paling populer untuk bisnis jasa aktif',
    'price' => 'Rp 8.500.000',
    'price_color' => 'text-violet-600',
    'note' => 'Fitur terlengkap untuk jadwal otomatis penuh',
    'perks' => [
    'Layanan tidak terbatas (unlimited)',
    'Multi-staff dengan jadwal terpisah',
    'Pelanggan pilih staff favorit',
    'Reminder H-1 & H-2 otomatis (WA/Email)',
    'Payment Gateway — DP atau bayar penuh',
    'Reschedule & cancellation mandiri',
    'Database & riwayat pelanggan',
    'Laporan pendapatan & occupancy rate',
    'Ekspor laporan ke Excel',
    'Integrasi Google Calendar (opsional)',
    'Dashboard admin mobile-friendly',
    'Backup harian & garansi bug',
    ],
    'btn' => 'bg-violet-600 hover:bg-violet-700 text-white shadow-lg shadow-violet-200',
    'wa' => 'Paket%20Booking%20Professional',
    ],
    [
    'badge' => 'Mulai Rp 15jt',
    'badge_bg' => 'bg-slate-700 text-white',
    'ring' => 'border border-slate-200',
    'title' => 'Booking Enterprise',
    'tagline' => 'Multi-cabang, fitur kustom penuh',
    'price' => 'Custom',
    'price_color' => 'text-slate-900',
    'note' => 'Harga sesuai kebutuhan',
    'perks' => [
    'Semua fitur Professional',
    'Multi-cabang / multi-lokasi',
    'Panel admin per cabang + super-admin',
    'Sistem membership & loyalty point',
    'Paket bundling layanan (package deal)',
    'Integrasi POS / kasir fisik',
    'Integrasi API pihak ketiga',
    'Dedicated server & SLA 99,9%',
    'Laporan custom & ekspor data',
    'Dedicated Project Manager',
    'Garansi bug + free maintenance 3 bulan',
    ],
    'btn' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-800 hover:text-white',
    'wa' => 'Paket%20Booking%20Enterprise',
    ],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "{{ url('/fitur/web-booking') }}/#webpage",
        "name": "Harga & Perbandingan Paket Website Sistem Booking & Reservasi Online — Cakra Inovasi Digital",
        "description": "Perbandingan lengkap harga dan fitur paket sistem booking dan reservasi online untuk bisnis jasa di Indonesia.",
        "url": "{{ url('/fitur/web-booking') }}",
        "isPartOf": {
            "@id": "{{ url('/') }}/#website"
        }
    }
    </script>
    @endpush


    {{-- HERO --}}
    <section class="pt-36 pb-14 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[
            ['name' => 'Layanan',              'url' => url('/layanan')],
            ['name' => 'Sistem Booking','url' => url('/layanan/web-booking')],
        ]" current="Fitur & Harga" />
            </div>

            <div class="text-center mt-8 mb-4 max-w-3xl mx-auto" data-aos="fade-up">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-violet-50 text-violet-600 text-xs font-semibold uppercase tracking-wider mb-5">
                    Transparan, Tanpa Biaya Tersembunyi
                </span>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4 leading-tight">
                    Bandingkan Paket & <span class="text-violet-600">Fitur Sistem Booking</span>
                </h1>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                    Pilih paket yang paling sesuai dengan skala bisnis Anda. Semua paket sudah termasuk domain, hosting,
                    SSL, konfirmasi otomatis, dan garansi support purna jual.
                </p>
            </div>

        </div>
    </section>


    {{-- TABEL PERBANDINGAN --}}
    <section class="pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <p class="flex items-center justify-center gap-2 text-center text-slate-400 text-xs mb-4 md:hidden">
                <i class="fa-solid fa-hand-pointer text-violet-400" aria-hidden="true"></i>
                Geser ke samping untuk melihat semua paket
            </p>

            <div class="overflow-x-auto rounded-3xl border border-slate-200 shadow-sm" data-aos="fade-up">
                {{-- Tambahkan table-fixed agar lebar kolom lebih konsisten --}}
                <table class="w-full text-left border-collapse min-w-[680px] table-fixed">

                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200">
                            {{-- Kolom Fitur: Sticky dengan Z-index tinggi dan shadow pemisah --}}
                            <th
                                class="py-6 px-5 w-[240px] sticky left-0 bg-slate-50 z-30 border-r border-slate-100 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.05)]">
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Fitur</span>
                            </th>

                            @foreach($cols as $col)
                            <th class="py-6 px-5 text-center relative w-[180px]">
                                @if(!empty($col['badge']))
                                <span
                                    class="absolute top-2 left-1/2 -translate-x-1/2 {{ $col['badge_bg'] }} text-[9px] px-3 py-0.5 rounded-full font-bold uppercase tracking-wider whitespace-nowrap z-10">
                                    {{ $col['badge'] }}
                                </span>
                                @endif
                                <span
                                    class="block text-sm font-bold text-slate-900 {{ !empty($col['badge']) ? 'mt-5' : '' }}">{{ $col['label'] }}</span>
                                <span
                                    class="block text-[11px] text-violet-600 font-semibold mt-0.5">{{ $col['sub'] }}</span>
                                <span class="block text-[10px] text-slate-400 mt-0.5">{{ $col['note'] }}</span>
                            </th>
                            @endforeach
                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-slate-100">
                        @foreach($groups as $groupName => $rows)

                        {{-- FIX: Judul Utama Grup dengan teks yang tetap menempel --}}
                        <tr class="bg-violet-50/60">
                            <td colspan="4" class="py-3 px-5 sticky left-0 z-20 bg-violet-50">
                                {{-- Span di bawah inilah yang menahan teks agar tidak ikut bergeser --}}
                                <span
                                    class="text-[11px] font-bold text-violet-600 uppercase tracking-widest sticky left-5 whitespace-nowrap">
                                    {{ $groupName }}
                                </span>
                            </td>
                        </tr>

                        @foreach($rows as $row)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            {{-- Kolom Kiri: Sticky dengan background solid agar tidak tembus pandang --}}
                            <td
                                class="py-3.5 px-5 font-medium text-slate-700 text-sm sticky left-0 bg-white z-10 border-r border-slate-50 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.05)]">
                                {{ $row['label'] }}
                            </td>
                            @foreach($row['values'] as $val)
                            <td class="py-3.5 px-5 text-center">
                                @if($val === true)
                                <i class="fa-solid fa-circle-check text-emerald-500 text-lg" aria-label="Tersedia"></i>
                                @elseif($val === false)
                                <i class="fa-solid fa-circle-xmark text-slate-200 text-lg"
                                    aria-label="Tidak tersedia"></i>
                                @else
                                <span
                                    class="inline-block text-[11px] font-semibold text-violet-700 bg-violet-50 px-2.5 py-1 rounded-full whitespace-nowrap">{{ $val }}</span>
                                @endif
                            </td>
                            @endforeach
                        </tr>
                        @endforeach

                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr class="border-t-2 border-slate-100 bg-slate-50/50">
                            <td
                                class="py-7 px-5 sticky left-0 bg-slate-50 z-10 border-r border-slate-100 text-[10px] text-slate-400 italic shadow-[2px_0_5px_-2px_rgba(0,0,0,0.05)]">
                                *Harga belum termasuk biaya domain, hosting perpanjangan, & payment gateway provider
                            </td>
                            @foreach($cols as $col)
                            <td class="py-7 px-5 text-center">
                                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20tertarik%20dengan%20{{ $col['wa'] }}"
                                    target="_blank" rel="noopener noreferrer"
                                    class="inline-block px-5 py-2.5 {{ $col['btn'] }} rounded-xl font-bold text-xs transition-all shadow-sm whitespace-nowrap">
                                    Pilih Paket
                                </a>
                            </td>
                            @endforeach
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </section>


    {{-- PRICING CARDS --}}
    <section class="pb-20 bg-slate-50">
        <div class="max-w-5xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-3">
                    Ringkasan Paket Harga
                </h2>
                <p class="text-slate-500 text-sm">Semua bisa dicicil 2–3 termin. Konsultasi dulu jika belum yakin pilih
                    paket mana.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-7 items-start">
                @foreach($cards as $i => $c)
                <article class="bg-white rounded-3xl {{ $c['ring'] }} flex flex-col relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">

                    @if(!empty($c['badge']))
                    <div
                        class="absolute top-0 right-0 {{ $c['badge_bg'] }} text-[10px] px-4 py-1.5 rounded-bl-xl font-bold uppercase tracking-wider">
                        {{ $c['badge'] }}
                    </div>
                    @endif

                    <div class="p-6 md:p-7 flex flex-col flex-grow {{ !empty($c['badge']) ? 'pt-9' : '' }}">

                        <h3 class="text-base font-extrabold text-slate-900 mb-1">{{ $c['title'] }}</h3>
                        <p class="text-xs text-slate-500 mb-4">{{ $c['tagline'] }}</p>

                        <div class="mb-1">
                            <span class="text-3xl font-extrabold {{ $c['price_color'] }}">{{ $c['price'] }}</span>
                        </div>
                        <p class="text-[11px] text-slate-400 font-medium mb-5">{{ $c['note'] }}</p>

                        <ul class="space-y-2.5 flex-grow mb-6">
                            @foreach($c['perks'] as $perk)
                            <li class="flex items-start gap-2.5 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-check text-violet-600 text-[11px] mt-0.5 shrink-0"
                                    aria-hidden="true"></i>
                                {{ $perk }}
                            </li>
                            @endforeach
                        </ul>

                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20tertarik%20dengan%20{{ $c['wa'] }}"
                            target="_blank" rel="noopener noreferrer"
                            class="block w-full py-3.5 px-5 text-center rounded-2xl {{ $c['btn'] }} font-bold text-sm transition-all duration-200">
                            @if($c['price'] === 'Custom') Diskusi dengan Tim Ahli @else Pilih Paket Ini @endif
                        </a>

                    </div>
                </article>
                @endforeach
            </div>

            <div class="mt-8 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm">Belum yakin pilih paket mana? <a
                        href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20mau%20konsultasi%20pilih%20paket%20sistem%20booking%20yang%20tepat."
                        target="_blank" rel="noopener noreferrer"
                        class="text-violet-600 font-semibold hover:underline">Konsultasi gratis dulu →</a></p>
            </div>

        </div>
    </section>


    {{-- FAQ — ripple + nomor urut + garis aksen kiri + smooth scroll (identik web-booking) --}}
    <section id="faq" class="py-14 md:py-24 bg-white" x-data="faqFiturBooking()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Umum Seputar <span class="text-violet-600">Paket & Harga</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memutuskan pilihan
                    paket.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">

                    <div class="faq-fitur-booking-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id
                         ? 'border-violet-300 shadow-violet-100 shadow-md'
                         : 'border-slate-200 hover:border-slate-300 hover:shadow-md'" itemscope itemprop="mainEntity"
                        itemtype="https://schema.org/Question">

                        {{-- Garis aksen kiri violet --}}
                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-violet-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)" class="faq-fitur-booking-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5
                                   text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400
                                   focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-fitur-booking-answer-' + faq.id">

                            {{-- Ripple --}}
                            <span
                                class="faq-fitur-booking-ripple absolute rounded-full bg-violet-100 opacity-0 pointer-events-none"
                                style="width:10px;height:10px;transform:scale(0);transition:transform 0.5s ease,opacity 0.5s ease;"></span>

                            {{-- Nomor urut --}}
                            <span class="shrink-0 w-6 md:w-7 h-6 md:h-7 rounded-full text-[10px] md:text-[11px]
                                     font-extrabold flex items-center justify-center transition-all duration-300"
                                :class="selected === faq.id
                                  ? 'bg-violet-600 text-white'
                                  : 'bg-slate-100 text-slate-400 group-hover:bg-slate-200'"
                                x-text="String(index + 1).padStart(2, '0')"></span>

                            {{-- Teks pertanyaan --}}
                            <span
                                class="flex-1 font-bold text-sm md:text-base pr-3 md:pr-4 transition-colors duration-200 leading-snug"
                                :class="selected === faq.id ? 'text-violet-700' : 'text-slate-800'"
                                x-text="faq.question" itemprop="name"></span>

                            {{-- Chevron dalam lingkaran --}}
                            <span class="shrink-0 w-7 md:w-8 h-7 md:h-8 rounded-full flex items-center justify-center
                                     border transition-all duration-300" :class="selected === faq.id
                                  ? 'bg-violet-600 border-violet-600 rotate-180'
                                  : 'bg-white border-slate-200 group-hover:border-slate-300'">
                                <i class="fa-solid fa-chevron-down text-[10px] md:text-[11px] transition-colors duration-200"
                                    :class="selected === faq.id ? 'text-white' : 'text-slate-400'"
                                    aria-hidden="true"></i>
                            </span>
                        </button>

                        {{-- Panel jawaban --}}
                        <div :id="'faq-fitur-booking-answer-' + faq.id" class="faq-fitur-booking-answer overflow-hidden"
                            :style="selected === faq.id
                             ? 'max-height: 500px; opacity: 1;'
                             : 'max-height: 0; opacity: 0;'" itemscope itemprop="acceptedAnswer"
                            itemtype="https://schema.org/Answer">
                            <div class="px-4 md:px-6 pb-4 md:pb-5 pt-0">
                                <div class="border-t border-slate-100 mb-3 md:mb-4"></div>
                                <div class="pl-9 md:pl-11 text-sm text-slate-600 leading-relaxed" x-text="faq.answer"
                                    itemprop="text"></div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <div class="mt-8 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ragu memilih paket yang tepat?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20paket%20sistem%20booking%20yang%20sesuai%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-violet-600 text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-violet-700 transition text-sm shadow-lg shadow-violet-200">
                    <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                    Konsultasi Gratis via WhatsApp
                </a>
            </div>

        </div>
    </section>


    {{-- CTA --}}
    <section class="py-20 bg-slate-50" aria-label="Ajakan untuk memulai proyek sistem booking">
        <div class="max-w-7xl mx-auto px-6">
            <div data-aos="zoom-in" data-aos-duration="800"
                class="bg-violet-600 rounded-[2rem] p-12 lg:p-20 text-center relative overflow-hidden shadow-2xl">

                <div class="absolute inset-0 opacity-10" aria-hidden="true">
                    <div
                        class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full -translate-x-1/2 -translate-y-1/2">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-64 h-64 bg-white rounded-full translate-x-1/2 translate-y-1/2">
                    </div>
                </div>

                <div class="relative z-10 text-white">
                    <h2 class="text-3xl lg:text-5xl font-bold mb-4">
                        Siap Otomatiskan Jadwal & Booking Bisnis Anda?
                    </h2>
                    <p class="text-violet-100 text-lg mb-8 max-w-2xl mx-auto">
                        Konsultasi gratis, tanpa syarat. Ceritakan jenis bisnis dan kebutuhan Anda — kami rancang sistem
                        booking yang paling tepat.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20mengenai%20pembuatan%20sistem%20booking%20online."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 bg-white text-violet-600 font-bold rounded-xl shadow-lg hover:bg-violet-50 transition text-base">
                            <i class="fa-brands fa-whatsapp text-emerald-500 text-lg" aria-hidden="true"></i>
                            Mulai Konsultasi Sekarang
                        </a>
                        <a href="{{ url('/layanan/web-booking') }}"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 border-2 border-white/40 text-white font-bold rounded-xl hover:bg-white/10 transition text-base">
                            Kembali ke Halaman Booking
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @push('scripts')
    <script>
    function faqFiturBooking() {
        const rawFaqs = @json($faqsData);
        return {
            selected: null,

            toggle(id) {
                this.selected = this.selected === id ? null : id;
            },

            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-company-ripple');

                if (ripple) {
                    const rect = btn.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height) * 2;
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: #dbeafe;
                        pointer-events: none;
                        width: ${size}px;
                        height: ${size}px;
                        left: ${event.clientX - rect.left - size / 2}px;
                        top: ${event.clientY - rect.top - size / 2}px;
                        transform: scale(0);
                        opacity: 1;
                        transition: transform 0.5s ease, opacity 0.5s ease;
                    `;

                    ripple.offsetWidth;
                    ripple.style.transform = 'scale(1)';
                    ripple.style.opacity = '0';
                }

                const wasOpen = this.selected === id;
                this.selected = wasOpen ? null : id;

                if (!wasOpen) {
                    const isMobile = window.innerWidth < 768;
                    if (isMobile) {
                        setTimeout(() => this.scrollToElement(id), 300);
                    } else {
                        this.$nextTick(() => this.scrollToElement(id));
                    }
                }
            },

            scrollToElement(id) {
                const el = document.getElementById('faq-company-answer-' + id);
                if (!el) return;
                const parent = el.closest('.faq-company-item');
                if (!parent) return;
                const offsetPosition = parent.getBoundingClientRect().top + window.scrollY - 110;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            },

            faqs: rawFaqs.map((item, i) => ({
                id: i + 1,
                question: item.question,
                answer: item.answer,
            })),
        };
    }
    </script>
    @endpush

    @push('styles')
    <style>
    .faq-fitur-booking-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-fitur-booking-ripple {
        position: absolute;
        border-radius: 50%;
        background: #ede9fe;
        /* violet-100 */
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .faq-fitur-booking-item:not([class*="border-violet"]):hover {
        background: #fafafa;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-fitur-booking-answer {
            transition: none;
        }

        .faq-fitur-booking-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>