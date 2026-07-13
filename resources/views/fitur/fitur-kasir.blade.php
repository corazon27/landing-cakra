<x-layout.app>

    @php
    $title = 'Harga & Perbandingan Paket Sistem Kasir Digital | Cakra Inovasi Digital';
    $metaDescription = 'Bandingkan harga dan fitur paket sistem kasir digital Cakra Inovasi Digital — mulai dari skema
    per transaksi hingga langganan versi web. Transparan, tanpa biaya tersembunyi.';
    $metaKeywords = 'harga sistem kasir digital, paket POS UMKM, langganan kasir digital, perbandingan fitur kasir, web
    developer Magelang, Jawa Tengah';
    $ogType = 'website';
    $breadcrumbs = [
    ['name' => 'Layanan', 'url' => url('/layanan')],
    ['name' => 'Website Kasir Digital / POS', 'url' => url('/layanan/web-kasir')],
    ['name' => 'Fitur Web Kasir Digital / POS', 'url' => url('/fitur/web-kasir')],
    ];
    @endphp

    @php
    $faqsData = [
    ['question' => 'Apakah saya bisa melakukan upgrade paket di tengah jalan?', 'answer' => 'Tentu! Anda bisa upgrade ke
    paket lebih tinggi kapan saja. Tim kami membantu proses migrasi data dan penyesuaian biaya langganan secara
    prorata.'],
    ['question' => 'Bagaimana jika sistem mengalami bug atau error setelah saya berlangganan?', 'answer' => 'Kami
    memberikan garansi penuh untuk setiap bug atau error sistem selama masa langganan aktif tanpa biaya tambahan.'],
    ['question' => 'Apakah ada biaya tambahan untuk update fitur di masa depan?', 'answer' => 'Tidak ada. Anda
    mendapatkan update fitur berkala secara gratis, kecuali untuk penambahan fitur kustom di luar paket standar.'],
    ['question' => 'Apakah data penjualan saya aman dan ter-backup?', 'answer' => 'Sangat aman. Kami menggunakan
    enkripsi standar industri dan backup data secara rutin — harian hingga real-time sesuai paket yang dipilih.'],
    ['question' => 'Bagaimana cara memulai berlangganan?', 'answer' => 'Hubungi kami via WhatsApp untuk konsultasi
    gratis. Tim kami akan membantu memilih paket yang paling sesuai dengan kebutuhan dan skala bisnis Anda.'],
    ];
    @endphp

    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "{{ url('/fitur-web-Kasir') }}/#webpage",
        "name": "Harga & Perbandingan Paket Sistem Kasir Digital — Cakra Inovasi Digital",
        "description": "Perbandingan harga dan fitur paket sistem kasir digital untuk UMKM Indonesia.",
        "url": "{{ url('/fitur-web-Kasir') }}",
        "isPartOf": {
            "@id": "{{ url('/') }}/#website"
        },
        "breadcrumb": {
            "@id": "{{ url('/fitur-web-Kasir') }}/#breadcrumb"
        }
    }
    </script>
    @endpush


    {{-- HERO --}}
    <section class="pt-36 pb-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[
                ['name' => 'Layanan',             'url' => url('/layanan')],
                ['name' => 'Kasir Digital', 'url' => url('/layanan/web-kasir')],
            ]" current="Fitur & Harga" />
            </div>

            <div class="text-center mt-8 mb-4" data-aos="fade-up">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-600 text-xs font-semibold uppercase tracking-wider mb-5">
                    Transparan, Tanpa Biaya Tersembunyi
                </span>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mb-4">
                    Bandingkan Paket & <span class="text-blue-600">Fitur Kasir Digital</span>
                </h1>
                <p class="text-slate-500 max-w-2xl mx-auto">
                    Pilih skema yang paling sesuai dengan kebutuhan dan skala bisnis Anda. Semua paket sudah termasuk
                    garansi support dan backup data.
                </p>
            </div>

        </div>
    </section>


    {{-- TABEL PERBANDINGAN --}}
    <section class="pb-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            {{-- Mobile note --}}
            <p class="flex items-center justify-center gap-2 text-center text-slate-400 text-xs mb-4 md:hidden">
                <i class="fa-solid fa-hand-pointer text-blue-400" aria-hidden="true"></i>
                Geser ke samping untuk melihat semua paket
            </p>

            <div class="overflow-x-auto rounded-3xl border border-slate-200 shadow-sm" data-aos="fade-up">
                {{-- Tambahkan table-fixed dan min-width yang konsisten --}}
                <table class="w-full text-left border-collapse min-w-[750px] table-fixed">

                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200">
                            {{-- Fitur Header: Sticky dengan z-index tinggi --}}
                            <th
                                class="py-6 px-5 w-[220px] sticky left-0 bg-slate-50 z-30 border-r border-slate-100 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.05)]">
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Fitur</span>
                            </th>

                            @php
                            $cols = [
                            ['label' => 'Per Transaksi', 'sub' => 'Rp 75 / nota', 'badge' => 'Favorit', 'badge_bg' =>
                            'bg-emerald-500', 'btn' => 'bg-emerald-500 hover:bg-emerald-600 text-white', 'wa' =>
                            'Skema%20Per%20Transaksi'],
                            ['label' => 'Versi HP', 'sub' => 'Rp 50rb / bulan', 'badge' => null, 'btn' => 'bg-slate-800
                            hover:bg-slate-900 text-white', 'wa' => 'Versi%20HP'],
                            ['label' => 'Versi Tablet', 'sub' => 'Rp 125rb / bulan', 'badge' => 'Paling Laris',
                            'badge_bg' => 'bg-emerald-500', 'btn' => 'bg-emerald-500 hover:bg-emerald-600 text-white',
                            'wa' => 'Versi%20Tablet'],
                            ['label' => 'Versi Web', 'sub' => 'Rp 125rb / bulan', 'badge' => null, 'btn' =>
                            'bg-slate-800 hover:bg-slate-900 text-white', 'wa' => 'Versi%20Web'],
                            ];
                            @endphp

                            @foreach($cols as $col)
                            <th class="py-6 px-4 text-center relative w-[160px]">
                                @if(!empty($col['badge']))
                                <span
                                    class="absolute top-2 left-1/2 -translate-x-1/2 {{ $col['badge_bg'] }} text-white text-[9px] px-2.5 py-0.5 rounded-full font-bold uppercase tracking-wider whitespace-nowrap z-10">
                                    {{ $col['badge'] }}
                                </span>
                                @endif
                                <span
                                    class="block text-sm font-bold text-slate-900 {{ !empty($col['badge']) ? 'mt-5' : '' }}">{{ $col['label'] }}</span>
                                <span class="block text-[11px] text-slate-400 mt-0.5">{{ $col['sub'] }}</span>
                            </th>
                            @endforeach
                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-slate-100">
                        @php
                        $groups = [
                        'Manajemen Operasional' => [
                        ['label' => 'Input Penjualan (POS)', 'values' => [true, true, true, true]],
                        ['label' => 'Manajemen Stok & Produk', 'values' => [true, true, true, true]],
                        ['label' => 'Cetak Struk Thermal', 'values' => [true, true, true, true]],
                        ['label' => 'Multi-Kasir (Beberapa Meja)', 'values' => [false, false, true, true]],
                        ],
                        'Fitur Keuangan' => [
                        ['label' => 'Sistem Pembayaran Fleksibel', 'values' => [false, true, true, true]],
                        ['label' => 'Laporan Laba Rugi Real-time', 'values' => [false, false, true, true]],
                        ['label' => 'Ekspor Laporan Excel', 'values' => [false, false, true, true]],
                        ['label' => 'Notifikasi Stok Minimum', 'values' => [true, true, true, true]],
                        ],
                        'Layanan & Support' => [
                        ['label' => 'Garansi Bug / Error Sistem', 'values' => ['all', 'all', 'all', 'all']],
                        ['label' => 'Backup Data Rutin', 'values' => ['Harian', 'Harian', 'Real-time', 'Real-time']],
                        ['label' => 'Video Tutorial Penggunaan', 'values' => [true, true, true, true]],
                        ['label' => 'Konsultasi Teknis Gratis', 'values' => [true, true, true, true]],
                        ],
                        ];
                        @endphp

                        @foreach($groups as $groupName => $rows)
                        {{-- Perbaikan Group Header: Gunakan bg solid agar konten tidak tembus saat scroll --}}
                        <tr class="bg-blue-50">
                            <td colspan="5" class="py-3 px-5 sticky left-0 z-20 bg-[#f1f5f9]">
                                {{-- bg-slate-100 solid --}}
                                <span
                                    class="text-[11px] font-bold text-blue-600 uppercase tracking-widest sticky left-5">
                                    {{ $groupName }}
                                </span>
                            </td>
                        </tr>

                        @foreach($rows as $row)
                        <tr class="hover:bg-slate-50 transition-colors">
                            {{-- Label Fitur: Sticky kiri dengan bg putih solid --}}
                            <td
                                class="py-4 px-5 font-medium text-slate-700 sticky left-0 bg-white z-10 border-r border-slate-50 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.05)]">
                                {{ $row['label'] }}
                            </td>
                            @foreach($row['values'] as $val)
                            <td class="py-4 px-4 text-center">
                                @if($val === true)
                                <i class="fa-solid fa-circle-check text-emerald-500 text-lg" aria-label="Tersedia"></i>
                                @elseif($val === false)
                                <i class="fa-solid fa-circle-xmark text-slate-200 text-lg"
                                    aria-label="Tidak tersedia"></i>
                                @elseif($val === 'all')
                                <span
                                    class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-full whitespace-nowrap">
                                    <i class="fa-solid fa-shield-check text-xs"></i> Semua Paket
                                </span>
                                @else
                                <span
                                    class="inline-block text-[11px] font-semibold text-blue-600 bg-blue-50 px-2.5 py-1 rounded-full whitespace-nowrap">{{ $val }}</span>
                                @endif
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr class="border-t-2 border-slate-100 bg-slate-50/50">
                            {{-- Footer kolom pertama juga harus sticky --}}
                            <td
                                class="py-7 px-5 sticky left-0 bg-slate-50 z-10 border-r border-slate-100 shadow-[2px_0_5px_-2px_rgba(0,0,0,0.05)]">
                            </td>
                            @foreach($cols as $col)
                            <td class="py-7 px-4 text-center">
                                <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20tertarik%20dengan%20paket%20{{ $col['wa'] }}"
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


    {{-- PRICING CARDS (mobile-friendly ringkasan) --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-3">
                    Ringkasan Harga Paket
                </h2>
                <p class="text-slate-500 text-sm">Klik paket untuk langsung konsultasi via WhatsApp.</p>
            </div>

            @php
            $cards = [
            ['badge' => 'Favorit', 'badge_bg' => 'bg-emerald-500', 'ring' => 'border-2 border-emerald-300', 'title' =>
            'Per Transaksi', 'price' => 'Rp 75', 'unit' => '/ transaksi', 'price_color' => 'text-emerald-600', 'perks'
            => ['Input POS & Cetak Struk', 'Manajemen Stok Otomatis', 'Garansi Bug & Error', 'Backup Harian'], 'btn' =>
            'bg-emerald-500 hover:bg-emerald-600 text-white', 'wa' => 'Skema%20Per%20Transaksi'],
            ['badge' => null, 'ring' => 'border border-slate-200', 'title' => 'Versi HP', 'price' => 'Rp 50.000',
            'unit' => '/ bulan / outlet', 'price_color' => 'text-slate-900', 'perks' => ['Semua Fitur Operasional',
            'Sistem Pembayaran Fleksibel', 'Video Tutorial', 'Konsultasi Teknis'], 'btn' => 'border-2 border-slate-800
            text-slate-800 hover:bg-slate-800 hover:text-white', 'wa' => 'Versi%20HP'],
            ['badge' => 'Paling Laris', 'badge_bg' => 'bg-emerald-500', 'ring' => 'border-2 border-emerald-300', 'title'
            => 'Versi Tablet', 'price' => 'Rp 125.000', 'unit' => '/ bulan / outlet', 'price_color' =>
            'text-emerald-600', 'perks' => ['Laporan Laba Rugi Real-time', 'Ekspor Excel', 'Multi-Kasir', 'Backup
            Real-time'], 'btn' => 'bg-emerald-500 hover:bg-emerald-600 text-white', 'wa' => 'Versi%20Tablet'],
            ['badge' => null, 'ring' => 'border border-slate-200', 'title' => 'Versi Web', 'price' => 'Rp 125.000',
            'unit' => '/ bulan / outlet', 'price_color' => 'text-slate-900', 'perks' => ['Laporan Laba Rugi Real-time',
            'Ekspor Excel', 'Dari Laptop / PC', 'Backup Real-time'], 'btn' => 'border-2 border-slate-800 text-slate-800
            hover:bg-slate-800 hover:text-white', 'wa' => 'Versi%20Web'],
            ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($cards as $i => $c)
                <article class="bg-white rounded-3xl {{ $c['ring'] }} shadow-sm flex flex-col relative overflow-hidden"
                    data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">

                    @if(!empty($c['badge']))
                    <div
                        class="absolute top-0 right-0 {{ $c['badge_bg'] }} text-white text-[10px] px-4 py-1.5 rounded-bl-xl font-bold uppercase tracking-wider">
                        {{ $c['badge'] }}
                    </div>
                    @endif

                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-base font-bold text-slate-800 mb-4 pr-16 leading-tight">{{ $c['title'] }}</h3>

                        <div class="mb-1">
                            <span class="text-3xl font-extrabold {{ $c['price_color'] }}">{{ $c['price'] }}</span>
                        </div>
                        <p class="text-[11px] text-slate-400 font-medium mb-5">{{ $c['unit'] }}</p>

                        <ul class="space-y-2.5 flex-grow mb-6">
                            @foreach($c['perks'] as $perk)
                            <li class="flex items-center gap-2.5 text-sm text-slate-600">
                                <i class="fa-solid fa-circle-check text-emerald-500 text-xs shrink-0"
                                    aria-hidden="true"></i>
                                {{ $perk }}
                            </li>
                            @endforeach
                        </ul>

                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20tertarik%20dengan%20paket%20{{ $c['wa'] }}"
                            target="_blank" rel="noopener noreferrer"
                            class="block w-full py-3 px-4 text-center rounded-xl {{ $c['btn'] }} font-bold transition-all text-sm">
                            Pilih Paket
                        </a>
                    </div>

                </article>
                @endforeach
            </div>

        </div>
    </section>


    {{-- FAQ --}}
    <section id="faq" class="py-14 md:py-24 bg-white" x-data="faqFiturKasir()">
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
                    <div class="faq-kasir-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        {{-- Garis Indikator Samping --}}
                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-kasir-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-kasir-answer-' + faq.id">

                            {{-- Efek Ripple Sentuhan --}}
                            <span
                                class="faq-kasir-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
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
                        <div :id="'faq-kasir-answer-' + faq.id" class="faq-kasir-answer overflow-hidden"
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
                        Siap Punya Website Kasir Digital Profesional untuk Bisnis Anda?
                    </h2>
                    <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                        Konsultasi gratis, tanpa syarat. Ceritakan kebutuhan bisnis Anda dan kami siapkan
                        solusinya.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20mengenai%20biaya%20berlangganan%20kasir%20digital."
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 bg-white text-blue-600 font-bold rounded-xl shadow-lg hover:bg-blue-50 transition text-base">
                            <i class="fa-brands fa-whatsapp text-emerald-500 text-lg" aria-hidden="true"></i>
                            Mulai Konsultasi Sekarang
                        </a>
                        <a href="{{ url('/layanan/web-kasir') }}"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 border-2 border-white/40 text-white font-bold rounded-xl hover:bg-white/10 transition text-base">
                            Kembali ke Halaman Kasir Digital
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- Script untuk logic Alpine.js dan transisi FAQ --}}
    @push('scripts')
    <script>
    function faqFiturKasir() {
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
                const ripple = btn.querySelector('.faq-kasir-ripple');

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
                const el = document.getElementById('faq-kasir-answer-' + id);
                if (!el) return;
                const parent = el.closest('.faq-kasir-item');
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
    .faq-kasir-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-kasir-ripple {
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
        .faq-kasir-answer {
            transition: none;
        }

        .faq-kasir-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>