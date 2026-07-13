<x-layout.app>

    @php
    $title = 'Harga & Perbandingan Paket Website Company Profile | Cakra Inovasi Digital';
    $metaDescription = 'Bandingkan harga dan fitur lengkap paket website company profile Cakra Inovasi Digital —
    Starter, Professional, hingga Enterprise. Transparan, tanpa biaya tersembunyi.';
    $metaKeywords = 'harga website company profile, paket website perusahaan, perbandingan fitur company profile, jasa
    website company profile Indonesia, website bisnis profesional';
    $ogType = 'website';
    $canonicalUrl = url('/fitur/web-perusahaan');

    $faqsData = [
    ['question' => 'Apakah saya bisa upgrade paket di kemudian hari?', 'answer' => 'Tentu. Anda bisa upgrade ke paket
    lebih tinggi kapan saja. Tim kami membantu proses penyesuaian fitur dan biaya tambahan secara transparan.'],
    ['question' => 'Apakah domain dan hosting sudah termasuk di semua paket?', 'answer' => 'Ya, domain .com dan hosting
    1 tahun sudah termasuk di semua paket. Tahun berikutnya dikenakan biaya perpanjangan sesuai tarif provider.'],
    ['question' => 'Berapa lama proses pengerjaan website company profile?', 'answer' => 'Paket Starter sekitar 7-10
    hari kerja, Paket Professional 10-14 hari kerja. Waktu bisa lebih cepat jika konten, foto, dan logo sudah disiapkan
    dari awal.'],
    ['question' => 'Bisakah saya mengelola konten website sendiri tanpa developer?', 'answer' => 'Ya. Dashboard Admin
    dirancang user-friendly sehingga Anda bisa update artikel, galeri proyek, testimoni, dan informasi layanan tanpa
    bantuan teknis.'],
    ['question' => 'Bagaimana jika ada bug atau error setelah website live?', 'answer' => 'Semua paket mendapatkan
    garansi perbaikan bug setelah serah terima tanpa biaya tambahan.'],
    ['question' => 'Apakah bisa cicil pembayarannya?', 'answer' => 'Bisa. Kami menggunakan sistem 3 termin: DP saat
    deal, termin progres setelah desain disetujui, dan pelunasan saat website siap live.'],
    ['question' => 'Apakah desain bisa disesuaikan dengan brand perusahaan saya?', 'answer' => 'Tentu. Desain mengikuti
    palet warna, font, dan gaya visual brand Anda. Kami konsultasikan mockup desain terlebih dahulu sebelum mulai
    coding.'],
    ['question' => 'Apakah website akan tampil baik di HP dan tablet?', 'answer' => 'Ya. Semua paket menggunakan
    Mobile-First Design yang dioptimasi untuk HP, tablet, dan desktop — tampilan selalu rapi di semua ukuran layar.'],
    ];

    $cols = [
    [
    'label' => 'Starter',
    'sub' => 'Rp 1.500.000',
    'note' => 'Biaya setup awal',
    'badge' => null,
    'btn' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white',
    'wa' => 'Paket%20Company%20Profile%20Starter',
    ],
    [
    'label' => 'Professional',
    'sub' => 'Rp 3.500.000',
    'note' => 'Biaya setup awal',
    'badge' => 'Paling Populer',
    'badge_bg' => 'bg-amber-400 text-amber-950',
    'btn' => 'bg-blue-600 hover:bg-blue-700 text-white',
    'wa' => 'Paket%20Company%20Profile%20Professional',
    ],
    [
    'label' => 'Enterprise',
    'sub' => 'Mulai Rp 6.000.000',
    'note' => 'Harga sesuai kebutuhan',
    'badge' => null,
    'btn' => 'bg-slate-800 hover:bg-slate-900 text-white',
    'wa' => 'Paket%20Company%20Profile%20Enterprise',
    ],
    ];

    $groups = [
    'Halaman & Konten' => [
    ['label' => 'Jumlah Halaman', 'values' => ['5 Halaman', '10 Halaman', 'Unlimited']],
    ['label' => 'Halaman Beranda (Hero + CTA)', 'values' => [true, true, true]],
    ['label' => 'Halaman Tentang Kami', 'values' => [true, true, true]],
    ['label' => 'Halaman Layanan / Produk', 'values' => [true, true, true]],
    ['label' => 'Halaman Layanan Detail per Item', 'values' => [false, true, true]],
    ['label' => 'Halaman Portfolio / Galeri Proyek', 'values' => [true, true, true]],
    ['label' => 'Filter Kategori Portfolio', 'values' => [false, true, true]],
    ['label' => 'Halaman Blog / Artikel SEO', 'values' => [false, true, true]],
    ['label' => 'Manajemen Testimoni Klien', 'values' => [false, true, true]],
    ['label' => 'Halaman FAQ', 'values' => [false, true, true]],
    ],
    'Desain & Pengalaman Pengguna' => [
    ['label' => 'Desain Profesional Sesuai Brand', 'values' => [true, true, true]],
    ['label' => 'Animasi Scroll (AOS)', 'values' => [false, true, true]],
    ['label' => 'Micro-interaction Premium', 'values' => [false, false, true]],
    ['label' => 'Desain Responsif Mobile-First', 'values' => [true, true, true]],
    ['label' => 'Multi-bahasa (Indonesia + Inggris)', 'values' => [false, false, true]],
    ],
    'Kontak & Konversi' => [
    ['label' => 'Formulir Kontak + Notifikasi Email', 'values' => [true, true, true]],
    ['label' => 'Tombol WhatsApp Langsung', 'values' => [true, true, true]],
    ['label' => 'Peta Lokasi Google Maps', 'values' => [true, true, true]],
    ['label' => 'Live Chat Widget', 'values' => [false, true, true]],
    ['label' => 'Sistem Pendaftaran / Login Pengguna', 'values' => [false, false, true]],
    ['label' => 'Portal Klien / Area Member', 'values' => [false, false, true]],
    ],
    'SEO & Analitik' => [
    ['label' => 'Optimasi SEO On-page Dasar', 'values' => [true, true, true]],
    ['label' => 'Optimasi SEO On-page Lengkap', 'values' => [false, true, true]],
    ['label' => 'Schema Markup (Google Rich Snippet)', 'values' => [false, true, true]],
    ['label' => 'Sitemap Otomatis', 'values' => [true, true, true]],
    ['label' => 'Google Analytics & Search Console', 'values' => [false, true, true]],
    ['label' => 'Laporan Pengunjung & Konversi Kustom', 'values' => [false, false, true]],
    ],
    'Integrasi & Sosial Media' => [
    ['label' => 'Integrasi Media Sosial Otomatis', 'values' => [false, true, true]],
    ['label' => 'Open Graph (Preview di WhatsApp/FB)', 'values' => [true, true, true]],
    ['label' => 'Integrasi API Pihak Ketiga (CRM/ERP)', 'values' => [false, false, true]],
    ],
    'Teknis & Support' => [
    ['label' => 'Domain .com & Hosting 1 Tahun', 'values' => [true, true, true]],
    ['label' => 'SSL Certificate (HTTPS)', 'values' => [true, true, true]],
    ['label' => 'Panel Super-Admin Multi-role', 'values' => [false, false, true]],
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
    'title' => 'Company Profile Starter',
    'tagline' => 'Untuk bisnis yang baru membangun presence online',
    'price' => 'Rp 2.000.000',
    'price_color' => 'text-slate-900',
    'note' => 'Biaya setup awal',
    'perks' => [
    '5 halaman profesional',
    'Desain sesuai brand',
    'Galeri portfolio proyek',
    'Formulir kontak + notif email',
    'Tombol WhatsApp langsung',
    'Peta lokasi Google Maps',
    'Dashboard admin mandiri',
    'Domain .com & Hosting 1 thn',
    'SSL & SEO on-page dasar',
    'Garansi bug',
    ],
    'btn' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white',
    'wa' => 'Paket%20Company%20Profile%20Starter',
    ],
    [
    'badge' => 'Paling Populer',
    'badge_bg' => 'bg-amber-400 text-amber-950',
    'ring' => 'border-2 border-blue-600 shadow-2xl shadow-blue-100',
    'title' => 'Company Profile Professional',
    'tagline' => 'Paling populer untuk bisnis yang serius tumbuh',
    'price' => 'Rp 3.500.000',
    'price_color' => 'text-blue-600',
    'note' => 'Fitur terlengkap untuk bisnis aktif',
    'perks' => [
    '10 halaman dinamis',
    'Desain premium + animasi scroll',
    'Layanan detail per item',
    'Portfolio + filter kategori',
    'Blog / artikel SEO-friendly',
    'Live chat widget',
    'Manajemen testimoni klien',
    'Google Analytics & Search Console',
    'Integrasi media sosial otomatis',
    'SEO lengkap + schema markup',
    'Backup harian & garansi bug',
    ],
    'btn' => 'bg-blue-600 hover:bg-blue-700 text-white shadow-lg shadow-blue-200',
    'wa' => 'Paket%20Company%20Profile%20Professional',
    ],
    [
    'badge' => 'Mulai Rp 6jt',
    'badge_bg' => 'bg-slate-700 text-white',
    'ring' => 'border border-slate-200',
    'title' => 'Enterprise / Korporat',
    'tagline' => 'Untuk perusahaan besar dengan kebutuhan kustom',
    'price' => 'Custom',
    'price_color' => 'text-slate-900',
    'note' => 'Harga sesuai kebutuhan',
    'perks' => [
    'Semua fitur Professional',
    'Halaman tidak terbatas',
    'Multi-bahasa (Indonesia + Inggris)',
    'Portal klien / area member',
    'Integrasi API ERP/CRM',
    'Animasi & micro-interaction premium',
    'Dedicated server & SLA 99,9%',
    'Panel super-admin multi-role',
    'Dedicated Project Manager',
    'Garansi bug',
    'Free maintenance 3 bulan',
    ],
    'btn' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-800 hover:text-white',
    'wa' => 'Paket%20Company%20Profile%20Enterprise',
    ],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "{{ url('/fitur/web-perusahaan') }}/#webpage",
        "name": "Harga & Perbandingan Paket Website Company Profile — Cakra Inovasi Digital",
        "description": "Perbandingan lengkap harga dan fitur paket website company profile untuk bisnis dan UMKM Indonesia.",
        "url": "{{ url('/fitur/web-perusahaan') }}",
        "isPartOf": {
            "@id": "{{ url('/') }}/#website"
        }
    }
    </script>
    @endpush


    {{-- ================================================================
     SECTION 1: HERO
================================================================ --}}
    <section class="pt-36 pb-14 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[
            ['name' => 'Layanan',                  'url' => url('/layanan')],
            ['name' => 'Company Profile',  'url' => url('/layanan/web-perusahaan')],
        ]" current="Fitur & Harga" />
            </div>

            <div class="text-center mt-8 mb-4 max-w-3xl mx-auto" data-aos="fade-up">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-5">
                    Transparan, Tanpa Biaya Tersembunyi
                </span>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4 leading-tight">
                    Bandingkan Paket & <span class="text-blue-600">Fitur Company Profile</span>
                </h1>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                    Pilih paket yang paling sesuai dengan skala bisnis Anda. Semua paket sudah termasuk domain, hosting,
                    SSL, dan garansi support purna jual.
                </p>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 2: TABEL PERBANDINGAN
================================================================ --}}
    <section class="pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <p class="flex items-center justify-center gap-2 text-center text-slate-400 text-xs mb-4 md:hidden">
                <i class="fa-solid fa-hand-pointer text-blue-400" aria-hidden="true"></i>
                Geser ke samping untuk melihat semua paket
            </p>

            <div class="overflow-x-auto rounded-3xl border border-slate-200 shadow-sm" data-aos="fade-up">
                <table class="w-full text-left border-collapse min-w-[680px] table-fixed">

                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200">
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
                                    class="block text-[11px] text-blue-600 font-semibold mt-0.5">{{ $col['sub'] }}</span>
                                <span class="block text-[10px] text-slate-400 mt-0.5">{{ $col['note'] }}</span>
                            </th>
                            @endforeach
                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-slate-100">
                        @foreach($groups as $groupName => $rows)
                        {{-- FIX: Judul Utama (Group Header) --}}
                        <tr class="bg-blue-50/60">
                            {{-- Kita buat td-nya sticky left-0 agar area biru tidak bergeser --}}
                            <td colspan="4" class="py-3 px-5 sticky left-0 z-20 bg-blue-50">
                                {{-- FIX: Tambahkan span dengan sticky left agar teks tidak ikut hilang --}}
                                <span
                                    class="text-[11px] font-bold text-blue-600 uppercase tracking-widest sticky left-5 whitespace-nowrap">
                                    {{ $groupName }}
                                </span>
                            </td>
                        </tr>

                        @foreach($rows as $row)
                        <tr class="hover:bg-slate-50/50 transition-colors">
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
                                    class="inline-block text-[11px] font-semibold text-blue-700 bg-blue-50 px-2.5 py-1 rounded-full whitespace-nowrap">{{ $val }}</span>
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
                                *Harga belum termasuk domain/hosting perpanjangan.
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


    {{-- ================================================================
     SECTION 3: PRICING CARDS
================================================================ --}}
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
                                <i class="fa-solid fa-circle-check text-blue-600 text-[11px] mt-0.5 shrink-0"
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
                        href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20mau%20konsultasi%20pilih%20paket%20company%20profile%20yang%20tepat."
                        target="_blank" rel="noopener noreferrer"
                        class="text-blue-600 font-semibold hover:underline">Konsultasi gratis dulu →</a></p>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 4: FAQ
================================================================ --}}
    <section id="faq" class="py-14 md:py-24 bg-white" x-data="faqFiturCompanyProfile()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan Umum Seputar <span class="text-blue-500">Paket & Harga</span>
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-company-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        {{-- Garis Indikator Samping --}}
                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-company-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-company-answer-' + faq.id">

                            {{-- Efek Ripple Sentuhan --}}
                            <span
                                class="faq-company-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
                                style="width:10px;height:10px;transform:scale(0);transition:transform 0.5s ease,opacity 0.5s ease;"></span>

                            {{-- Nomor FAQ --}}
                            <span
                                class="shrink-0 w-6 md:w-7 h-6 md:h-7 rounded-full text-[10px] md:text-[11px] font-extrabold flex items-center justify-center transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-400 group-hover:bg-slate-200'"
                                x-text="String(index + 1).padStart(2, '0')"></span>

                            {{-- Pertanyaan --}}
                            <span
                                class="flex-1 font-bold text-sm md:text-base pr-3 md:pr-4 transition-colors duration-200 leading-snug"
                                :class="selected === faq.id ? 'text-blue-600' : 'text-slate-800'" x-text="faq.question"
                                itemprop="name"></span>

                            {{-- Chevron Indicator --}}
                            <span
                                class="shrink-0 w-7 md:w-8 h-7 md:h-8 rounded-full flex items-center justify-center border transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-500 border-blue-500 rotate-180' : 'bg-white border-slate-200 group-hover:border-slate-300'">
                                <i class="fa-solid fa-chevron-down text-[10px] md:text-[11px] transition-colors duration-200"
                                    :class="selected === faq.id ? 'text-white' : 'text-slate-400'"
                                    aria-hidden="true"></i>
                            </span>
                        </button>

                        {{-- Jawaban dengan Rendering HTML --}}
                        <div :id="'faq-company-answer-' + faq.id" class="faq-company-answer overflow-hidden"
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

            <div class="mt-8 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm mb-4">Masih ragu memilih paket yang tepat?</p>
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20paket%20toko%20online%20yang%20sesuai%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 bg-blue-500 text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-blue-600 transition text-sm shadow-lg shadow-blue-200">
                    <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                    Konsultasi Gratis via WhatsApp
                </a>
            </div>
        </div>
    </section>


    {{-- ================================================================
     SECTION 5: CTA
================================================================ --}}
    <section class="py-20 bg-slate-50" aria-label="Ajakan untuk memulai proyek website">
        <div class="max-w-7xl mx-auto px-6">
            <div data-aos="zoom-in" data-aos-duration="800"
                class="bg-blue-600 rounded-[2rem] p-12 lg:p-20 text-center relative overflow-hidden shadow-2xl">

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
                        Siap Bangun Wajah Digital Profesional Bisnis Anda?
                    </h2>
                    <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                        Konsultasi gratis, tanpa syarat. Ceritakan kebutuhan bisnis Anda dan kami siapkan solusinya.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20mengenai%20pembuatan%20website%20company%20profile."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:bg-blue-50 transition text-base">
                            <i class="fa-brands fa-whatsapp text-emerald-500 text-lg" aria-hidden="true"></i>
                            Mulai Konsultasi Sekarang
                        </a>
                        <a href="{{ url('/layanan/web-perusahaan') }}"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 border-2 border-white/40 text-white font-bold rounded-xl hover:bg-white/10 transition text-base">
                            Kembali ke Halaman Company Profile
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @push('scripts')
    <script>
    function faqFiturCompanyProfile() {
        const rawFaqs = @json($faqsData);
        return {
            selected: null,
            // Handler standar jika Anda menggunakan section lama
            toggle(id) {
                this.selected = this.selected === id ? null : id;
            },
            // Handler lanjutan dengan Smooth Scrolling & Ripple Effect
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
                answer: item.answer
            })),
        };
    }
    </script>
    @endpush

    {{-- Styles penunjang animasi transisi accordion FAQ --}}
    @push('styles')
    <style>
    .faq-company-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-company-ripple {
        position: absolute;
        border-radius: 50%;
        background: #ffedd5;
        /* Warna riak oranye soft */
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-company-answer {
            transition: none;
        }

        .faq-company-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>