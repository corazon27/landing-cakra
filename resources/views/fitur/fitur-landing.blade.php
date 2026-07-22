@php
    $title = 'Harga & Perbandingan Paket Website Landing Page | Cakra Inovasi Digital';
    $metaDescription = 'Bandingkan harga dan fitur lengkap paket website landing page Cakra Inovasi Digital — Starter,
    Professional, hingga Business/Multi-Campaign. Transparan, tanpa biaya tersembunyi.';
    $metaKeywords = 'harga jasa landing page, paket landing page, perbandingan fitur landing page, jasa landing page
    UMKM, landing page iklan, landing page konversi tinggi';
    $ogType = 'website';
    $canonicalUrl = url('/fitur/web-landing-page');
    @endphp

<x-layout.app 
    :title="$title" 
    :meta-description="$metaDescription" 
    :meta-keywords="$metaKeywords" 
    :og-type="$ogType"
    :canonical-url="$canonicalUrl"
>

    @php
    $faqsData = [
    ['question' => 'Apakah saya bisa upgrade paket di kemudian hari?', 'answer' => 'Tentu. Anda bisa upgrade ke paket
    lebih tinggi kapan saja, misalnya dari Starter ke Professional saat mulai serius menjalankan iklan. Tim kami
    membantu proses penyesuaian fitur dan biaya tambahan secara transparan.'],
    ['question' => 'Apakah domain dan hosting sudah termasuk di semua paket?', 'answer' => 'Ya, domain .com dan hosting
    1 tahun sudah termasuk di semua paket. Tahun berikutnya dikenakan biaya perpanjangan sesuai tarif provider.'],
    ['question' => 'Apakah integrasi Facebook Pixel dan TikTok Pixel langsung aktif setelah website jadi?', 'answer' =>
    'Integrasi pixel tersedia mulai paket Professional dan langsung terpasang saat serah terima. Anda tinggal
    menghubungkan akun iklan Anda, dan data konversi akan langsung tercatat.'],
    ['question' => 'Bisakah saya mengelola konten landing page sendiri tanpa bantuan developer?', 'answer' => 'Untuk
    paket Starter dan Professional, perubahan konten kami bantu sesuai kuota revisi. Untuk kebutuhan yang lebih
    fleksibel, paket Business sudah termasuk Dashboard Admin agar Anda bisa ubah teks, gambar, dan harga sendiri kapan
    saja.'],
    ['question' => 'Apakah landing page ini aman digunakan untuk iklan Google Ads / Meta Ads?', 'answer' => 'Aman.
    Landing page kami dibangun dengan standar loading cepat dan mobile-friendly yang sesuai kebijakan iklan, sehingga
    tidak berisiko menurunkan skor kualitas campaign Anda.'],
    ['question' => 'Apakah ada biaya tambahan jika saya butuh lebih dari satu landing page untuk campaign berbeda?',
    'answer' => 'Untuk kebutuhan lebih dari satu landing page (misalnya campaign produk berbeda), paket Business/
    Multi-Campaign sudah dirancang untuk ini. Anda juga bisa diskusikan kebutuhan spesifik dengan tim kami untuk
    penawaran custom.'],
    ['question' => 'Bagaimana jika ada bug atau error setelah landing page live?', 'answer' => 'Semua paket mendapatkan
    garansi perbaikan bug setelah serah terima tanpa biaya tambahan, dengan masa garansi bervariasi sesuai paket yang
    dipilih.'],
    ['question' => 'Apakah bisa cicil pembayarannya?', 'answer' => 'Bisa. Kami menggunakan sistem 2 termin: DP saat
    deal dan pelunasan saat landing page siap live — cocok untuk kebutuhan campaign yang butuh diselesaikan cepat.'],
    ];

    $cols = [
    [
    'label' => 'Starter',
    'sub' => 'Rp 1.500.000',
    'note' => 'Biaya setup awal',
    'badge' => null,
    'btn' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white',
    'wa' => 'Paket%20Landing%20Starter',
    ],
    [
    'label' => 'Professional',
    'sub' => 'Rp 2.750.000',
    'note' => 'Biaya setup awal',
    'badge' => 'Paling Populer',
    'badge_bg' => 'bg-amber-400 text-amber-950',
    'btn' => 'bg-blue-600 hover:bg-blue-700 text-white',
    'wa' => 'Paket%20Landing%20Professional',
    ],
    [
    'label' => 'Business',
    'sub' => 'Mulai Rp 5.000.000',
    'note' => 'Harga sesuai kebutuhan',
    'badge' => null,
    'btn' => 'bg-slate-800 hover:bg-slate-900 text-white',
    'wa' => 'Paket%20Landing%20Business',
    ],
    ];

    $groups = [
    'Halaman & Struktur' => [
    ['label' => 'Jumlah Halaman Landing Page', 'values' => ['1 Halaman', '1 Halaman', 'Multi Halaman/Campaign']],
    ['label' => 'Desain Responsif Mobile-First', 'values' => [true, true, true]],
    ['label' => 'Section Lengkap (Hero–Masalah–Solusi–Benefit–FAQ)', 'values' => [false, true, true]],
    ['label' => 'Countdown Timer / Elemen Urgency', 'values' => [false, true, true]],
    ['label' => 'Popup Exit-Intent', 'values' => [false, false, true]],
    ['label' => 'Multi-Varian Halaman untuk A/B Testing', 'values' => [false, false, true]],
    ],
    'Copywriting & Konten' => [
    ['label' => 'Copywriting Dasar (dari brief Anda)', 'values' => [true, true, true]],
    ['label' => 'Copywriting Persuasif Berbasis Riset (AIDA/PAS)', 'values' => [false, true, true]],
    ['label' => 'Kuota Revisi Desain', 'values' => ['-', '3x', 'Sesuai Kebutuhan']],
    ['label' => 'Free Revisi Copywriting Berkala', 'values' => [false, false, true]],
    ],
    'Konversi & Leads' => [
    ['label' => 'Tombol Order/Kontak via WhatsApp', 'values' => [true, true, true]],
    ['label' => 'Formulir Kontak Sederhana', 'values' => [true, true, true]],
    ['label' => 'Formulir Leads Terpisah dari WhatsApp', 'values' => [false, true, true]],
    ['label' => 'Integrasi CRM / Google Sheet / Automation', 'values' => [false, false, true]],
    ],
    'Tracking & Analitik Iklan' => [
    ['label' => 'Integrasi Facebook Pixel', 'values' => [false, true, true]],
    ['label' => 'Integrasi TikTok Pixel', 'values' => [false, true, true]],
    ['label' => 'Google Analytics & Search Console', 'values' => [false, true, true]],
    ['label' => 'Setup Tracking Conversion API (CAPI)', 'values' => [false, false, true]],
    ['label' => 'Laporan Performa Halaman Bulanan', 'values' => [false, false, true]],
    ],
    'Performa & SEO' => [
    ['label' => 'Optimasi Kecepatan Loading Dasar', 'values' => [true, true, true]],
    ['label' => 'Optimasi Kecepatan Loading Lanjutan (Skor 90+)', 'values' => [false, true, true]],
    ['label' => 'SEO On-page Dasar', 'values' => [true, true, true]],
    ['label' => 'SEO On-page Lengkap', 'values' => [false, true, true]],
    ],
    'Manajemen & Operasional' => [
    ['label' => 'Dashboard Admin — Edit Konten Mandiri', 'values' => [false, false, true]],
    ['label' => 'Beberapa Landing Page untuk Campaign Berbeda', 'values' => [false, false, true]],
    ['label' => 'Prioritas Pengerjaan (Express)', 'values' => [false, false, true]],
    ],
    'Teknis & Support' => [
    ['label' => 'Domain .com & Hosting 1 Tahun', 'values' => [true, true, true]],
    ['label' => 'SSL Certificate (HTTPS)', 'values' => [true, true, true]],
    ['label' => 'Panduan Penggunaan', 'values' => [true, true, true]],
    ['label' => 'Pelatihan Singkat Penggunaan', 'values' => [false, true, true]],
    ['label' => 'Waktu Pengerjaan', 'values' => ['3–5 Hari', '5–8 Hari', 'Express 3–5 Hari']],
    ['label' => 'Garansi Bug', 'values' => ['30 Hari', '60 Hari', '3 Bulan']],
    ['label' => 'Dedicated Project Manager', 'values' => [false, false, true]],
    ['label' => 'Konsultasi Teknis Gratis', 'values' => [true, true, true]],
    ],
    ];

    $cards = [
    [
    'badge' => null,
    'ring' => 'border border-slate-200',
    'title' => 'Landing Starter',
    'tagline' => 'Untuk promosi produk atau jasa dengan satu tujuan jelas',
    'price' => 'Rp 1.500.000',
    'price_color' => 'text-slate-900',
    'note' => 'Biaya setup awal',
    'perks' => [
    '1 halaman landing page (single scroll)',
    'Desain responsif Mobile-First',
    'Section Hero, Fitur/Manfaat, Testimoni & CTA',
    'Tombol Order/Kontak via WhatsApp',
    'Formulir kontak sederhana',
    'Copywriting dasar (dari brief Anda)',
    'Optimasi kecepatan loading dasar',
    'SEO on-page dasar',
    'Domain .com & Hosting 1 tahun',
    'Garansi bug 30 hari',
    ],
    'btn' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white',
    'wa' => 'Paket%20Landing%20Starter',
    ],
    [
    'badge' => 'Paling Populer',
    'badge_bg' => 'bg-amber-400 text-amber-950',
    'ring' => 'border-2 border-blue-600 shadow-2xl shadow-blue-100',
    'title' => 'Landing Professional',
    'tagline' => 'Paling populer untuk campaign iklan & konversi tinggi',
    'price' => 'Rp 2.750.000',
    'price_color' => 'text-blue-600',
    'note' => 'Fitur terlengkap untuk campaign aktif',
    'perks' => [
    'Semua fitur Landing Starter',
    'Copywriting persuasif berbasis riset (AIDA/PAS)',
    'Section lengkap: Hero, Masalah, Solusi, Benefit, FAQ, Urgency',
    'Integrasi Facebook Pixel & TikTok Pixel',
    'Integrasi Google Analytics & Search Console',
    'Countdown timer / limited offer element',
    'Formulir leads terpisah dari WhatsApp',
    'Optimasi kecepatan loading lanjutan (skor 90+)',
    'Revisi desain hingga 3x',
    'Garansi bug 60 hari',
    ],
    'btn' => 'bg-blue-600 hover:bg-blue-700 text-white shadow-lg shadow-blue-200',
    'wa' => 'Paket%20Landing%20Professional',
    ],
    [
    'badge' => 'Mulai Rp 5jt',
    'badge_bg' => 'bg-slate-700 text-white',
    'ring' => 'border border-slate-200',
    'title' => 'Landing Business',
    'tagline' => 'Untuk bisnis dengan banyak campaign & iklan berjalan',
    'price' => 'Custom',
    'price_color' => 'text-slate-900',
    'note' => 'Harga sesuai kebutuhan',
    'perks' => [
    'Semua fitur Landing Professional',
    'Multi-varian halaman untuk A/B testing',
    'Dashboard admin — edit teks, gambar & harga sendiri',
    'Integrasi CRM / Google Sheet / automation leads',
    'Beberapa landing page untuk campaign berbeda',
    'Setup tracking Conversion API (CAPI)',
    'Prioritas pengerjaan (express 3–5 hari)',
    'Laporan performa halaman bulanan',
    'Dedicated Project Manager',
    'Garansi bug & maintenance 3 bulan',
    ],
    'btn' => 'border-2 border-slate-800 text-slate-800 hover:bg-slate-800 hover:text-white',
    'wa' => 'Paket%20Landing%20Business',
    ],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "{{ url('/fitur/web-landing-page') }}/#webpage",
        "name": "Harga & Perbandingan Paket Website Landing Page — Cakra Inovasi Digital",
        "description": "Perbandingan lengkap harga dan fitur paket website landing page untuk campaign iklan dan promosi bisnis di Indonesia.",
        "url": "{{ url('/fitur/web-landing-page') }}",
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
            ['name' => 'Layanan',                 'url' => url('/layanan')],
            ['name' => 'Landing Page',    'url' => url('/layanan/web-landing-page')],
        ]" current="Fitur & Harga" />
            </div>

            <div class="text-center mt-8 mb-4 max-w-3xl mx-auto" data-aos="fade-up">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-5">
                    Transparan, Tanpa Biaya Tersembunyi
                </span>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4 leading-tight">
                    Bandingkan Paket & <span class="text-blue-600">Fitur Landing Page</span>
                </h1>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                    Pilih paket yang paling sesuai dengan tujuan campaign Anda. Semua paket sudah termasuk domain,
                    hosting, SSL, dan garansi support purna jual.
                </p>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 2: TABEL PERBANDINGAN FITUR LENGKAP
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
                        <tr class="bg-blue-50/60">
                            <td colspan="4" class="py-3 px-5 sticky left-0 z-20 bg-[#f8fafc]">
                                <span
                                    class="text-[11px] font-bold text-blue-600 uppercase tracking-widest sticky left-5">
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
                                    class="btn-whatsapp-agen inline-block px-4 py-2 {{ $col['btn'] }} rounded-xl font-bold text-[10px] transition-all shadow-sm whitespace-nowrap" data-agent="CS Kontak Utama">
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
    <section class="py-20 bg-slate-50">
        <div class="max-w-5xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-3">
                    Ringkasan Paket Harga
                </h2>
                <p class="text-slate-500 text-sm">Semua bisa dicicil 2 termin. Konsultasi dulu jika belum yakin pilih
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
                            class="btn-whatsapp-agen block w-full py-3.5 px-5 text-center rounded-2xl {{ $c['btn'] }} font-bold text-sm transition-all duration-200" data-agent="CS Kontak Utama">
                            @if($c['price'] === 'Custom') Diskusi dengan Tim Ahli @else Pilih Paket Ini @endif
                        </a>

                    </div>
                </article>
                @endforeach
            </div>

            <div class="mt-8 text-center" data-aos="fade-up">
                <p class="text-slate-500 text-sm">Belum yakin pilih paket mana? <a
                        href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20mau%20konsultasi%20pilih%20paket%20landing%20page%20yang%20tepat."
                        target="_blank" rel="noopener noreferrer"
                        class="btn-whatsapp-agen text-blue-600 font-semibold hover:underline" data-agent="CS Kontak Utama">Konsultasi gratis dulu →</a></p>
            </div>

        </div>
    </section>


    {{-- ================================================================
     SECTION 4: FAQ
================================================================ --}}
    <section id="faq" class="py-14 md:py-24 bg-white" x-data="faqFiturLanding()">
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
                    <div class="faq-katalog-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-katalog-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-katalog-answer-' + faq.id">

                            <span
                                class="faq-katalog-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
                                style="width:10px;height:10px;transform:scale(0);transition:transform 0.5s ease,opacity 0.5s ease;"></span>

                            <span
                                class="shrink-0 w-6 md:w-7 h-6 md:h-7 rounded-full text-[10px] md:text-[11px] font-extrabold flex items-center justify-center transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-500 text-white' : 'bg-slate-100 text-slate-400 group-hover:bg-slate-200'"
                                x-text="String(index + 1).padStart(2, '0')"></span>

                            <span
                                class="flex-1 font-bold text-sm md:text-base pr-3 md:pr-4 transition-colors duration-200 leading-snug"
                                :class="selected === faq.id ? 'text-blue-600' : 'text-slate-800'" x-text="faq.question"
                                itemprop="name"></span>

                            <span
                                class="shrink-0 w-7 md:w-8 h-7 md:h-8 rounded-full flex items-center justify-center border transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-500 border-blue-500 rotate-180' : 'bg-white border-slate-200 group-hover:border-slate-300'">
                                <i class="fa-solid fa-chevron-down text-[10px] md:text-[11px] transition-colors duration-200"
                                    :class="selected === faq.id ? 'text-white' : 'text-slate-400'"
                                    aria-hidden="true"></i>
                            </span>
                        </button>

                        <div :id="'faq-katalog-answer-' + faq.id" class="faq-katalog-answer overflow-hidden"
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
                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20paket%20landing%20page%20yang%20sesuai%20bisnis%20saya."
                    target="_blank" rel="noopener noreferrer"
                    class="btn-whatsapp-agen inline-flex items-center gap-2 bg-blue-500 text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-blue-600 transition text-sm shadow-lg shadow-blue-200"
                    data-agent="CS Kontak Utama">
                    <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                    Konsultasi Gratis via WhatsApp
                </a>
            </div>
        </div>
    </section>


    {{-- ================================================================
     SECTION 5: CTA
================================================================ --}}
    <section class="py-20 bg-slate-50" aria-label="Ajakan untuk memulai proyek landing page">
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
                        Siap Ubah Trafik Iklan Anda Jadi Penjualan Nyata?
                    </h2>
                    <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                        Konsultasi gratis, tanpa syarat. Ceritakan tujuan campaign Anda dan kami siapkan
                        solusinya.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20mengenai%20pembuatan%20website%20landing%20page."
                            target="_blank" rel="noopener noreferrer"
                            class="btn-whatsapp-agen inline-flex items-center justify-center gap-2 px-10 py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:bg-blue-50 transition text-base"
                            data-agent="CS Kontak Utama">
                            <i class="fa-brands fa-whatsapp text-emerald-500 text-lg" aria-hidden="true"></i>
                            Mulai Konsultasi Sekarang
                        </a>
                        <a href="{{ url('/layanan/web-landing-page') }}"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 border-2 border-white/40 text-white font-bold rounded-xl hover:bg-white/10 transition text-base">
                            Kembali ke Halaman Landing Page
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- Script untuk logic Alpine.js dan transisi FAQ --}}
    @push('scripts')
    <script>
    function faqFiturLanding() {
        const rawFaqs = @json($faqsData);
        return {
            selected: null,
            toggle(id) {
                this.selected = this.selected === id ? null : id;
            },
            toggleFaq(id, event) {
                const btn = event.currentTarget;
                const ripple = btn.querySelector('.faq-katalog-ripple');

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
                const el = document.getElementById('faq-katalog-answer-' + id);
                if (!el) return;
                const parent = el.closest('.faq-katalog-item');
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
    .faq-katalog-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-katalog-ripple {
        position: absolute;
        border-radius: 50%;
        background: #dbeafe;
        transform: scale(0);
        opacity: 0;
        pointer-events: none;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-katalog-answer {
            transition: none;
        }

        .faq-katalog-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>