<x-layout.app>

    {{-- ============================================================
      SEO: Meta halaman /portofolio
    ============================================================ --}}
    @php
    $title = 'Portofolio Website & Sistem Digital | Cakra Inovasi Digital';
    $metaDescription = 'Lihat hasil kerja nyata Cakra Inovasi Digital — portofolio website automasi bisnis, company
    profile, kasir digital POS, katalog produk, dan aplikasi kustom untuk UMKM di seluruh Indonesia.';
    $metaKeywords = 'portofolio website, hasil kerja jasa website, website UMKM, kasir digital, toko online, company
    profile, Cakra Inovasi Digital';
    $ogType = 'website';
    @endphp

    {{-- ============================================================
      SEO: Schema ItemList — daftar portofolio untuk Google (Dinamis)
    ============================================================ --}}
    @push('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Portofolio Cakra Inovasi Digital",
        "description": "Kumpulan hasil kerja nyata pembuatan website dan sistem digital untuk UMKM.",
        "numberOfItems": {
            {
                $totalItems
            }
        },
        "itemListElement": [
            @foreach($portfolios as $index => $porto) {
                "@type": "ListItem",
                "position": {
                    {
                        $index + 1
                    }
                },
                "name": "{{ $porto->judul }}"
            } {
                {
                    !$loop - > last ? ',' : ''
                }
            }
            @endforeach
        ]
    }
    </script>
    @endpush

    {{-- ============================================================
      Data Statis Tersisa (Galeri Aktivitas & Stats)
    ============================================================ --}}
    @php
    $gallery = [
    ['img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800', 'title' =>
    'Meeting Client A'],
    ['img' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800', 'title' =>
    'Proses Coding Sistem POS'],
    ['img' => 'https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&q=80&w=800', 'title' =>
    'Diskusi UI/UX'],
    ['img' => 'https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=800', 'title' =>
    'Team Collaboration'],
    ['img' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&q=80&w=800', 'title' =>
    'Monitoring Server'],
    ['img' => 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&q=80&w=800', 'title' =>
    'Workspace'],
    ];

    $stats = [
    ['angka' => '30+', 'label' => 'Proyek Selesai', 'color' => 'text-blue-600'],
    ['angka' => '4', 'label' => 'Jenis Layanan', 'color' => 'text-indigo-600'],
    ['angka' => '99%', 'label' => 'Klien Puas', 'color' => 'text-emerald-600'],
    ['angka' => '2+', 'label' => 'Tahun Pengalaman', 'color' => 'text-orange-500'],
    ];
    @endphp

    {{-- SECTION 1: HERO --}}
    <!-- Alternatif jika ingin background ikut mengecil secara proporsional -->
    <section class="pt-28 md:pt-28 pb-12 bg-white overflow-hidden relative">
        {{-- 🛠️ 1. LAYER BACKGROUND KHUSUS MOBILE (< md) --}}
        <div class="absolute inset-0 pointer-events-none z-0 md:hidden" style="background-image: url('{{ asset('images/hero-portofolio.webp') }}');
                background-size: cover_auto;
                opacity: 0.16;">
        </div>

        {{-- 🛠️ 2. LAYER BACKGROUND KHUSUS DESKTOP (>= md) --}}
        {{-- 🛠️ 2. LAYER BACKGROUND KHUSUS DESKTOP (>= md) --}}
        <div class="absolute inset-0 pointer-events-none z-0 hidden md:block" style="background-image: url('{{ asset('images/hero-portofolio.webp') }}');
            background-size: 100% auto;
            background-position: center 80px;
            background-repeat: no-repeat;
            opacity: 1;">
        </div>

        <div class="max-w-6xl mx-auto px-5 md:px-10 relative z-10">

            <div class="text-center mb-12">
                <x-breadcrumb :items="[]" current="Portofolio Kami" />
            </div>
            <div class="mt-8 text-center max-w-3xl mx-auto" data-aos="fade-up">
                <span
                    class="inline-block bg-blue-50 text-blue-700 px-4 py-1.5 rounded-full text-[10px] sm:text-xs font-bold uppercase tracking-wider mb-5">
                    Bukti Kerja Nyata
                </span>
                <h1 class="text-3xl md:text-5xl font-extrabold leading-tight text-slate-900 mb-6">
                    Portofolio Website &<br>
                    <span class="text-blue-600">Sistem Digital untuk UMKM</span>
                </h1>
                <p class="text-base md:text-lg text-slate-500 leading-relaxed max-w-2xl mx-auto">
                    Kami bangga bisa mendampingi para pemilik usaha bertransformasi digital — dari toko online, katalog
                    produk, kasir digital, hingga sistem automasi bisnis. Semua dikerjakan dengan serius dan hasilnya
                    bisa Anda lihat di sini.
                </p>
            </div>

            {{-- Stats Bar --}}
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4" data-aos="fade-up"
                data-aos-delay="150">
                @foreach($stats as $s)
                <div class="bg-white border border-slate-100 rounded-2xl p-4 md:p-5 text-center shadow-sm">
                    <p class="text-2xl md:text-3xl font-extrabold {{ $s['color'] }}">{{ $s['angka'] }}</p>
                    <p class="text-slate-500 text-[10px] md:text-xs mt-1 uppercase font-semibold tracking-wide">
                        {{ $s['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 2: FILTER + GRID PORTOFOLIO --}}
    <section class="py-16 md:py-24 bg-slate-100" id="portfolio-section">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10 text-center">

            <div class="mb-10" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-3">
                    Hasil Kerja yang Sudah Kami Selesaikan
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto text-sm">Filter berdasarkan jenis layanan untuk menemukan
                    contoh yang paling relevan.</p>
            </div>

            {{-- Filter Bar --}}
            <div class="flex flex-wrap justify-center gap-2 mb-12" x-data="{ active: 'semua' }">
                @php
                $filters = [
                'semua' => 'Semua',
                'pos' => 'Kasir / POS',
                'company' => 'Company Profile',
                'katalog' => 'Katalog Produk',
                'erp' => 'Automasi Bisnis',
                ];
                @endphp

                @foreach($filters as $key => $label)
                <button @click="active = '{{ $key }}'; $dispatch('filter-portfolio', { value: '{{ $key }}' })"
                    :class="active === '{{ $key }}' ? 'bg-blue-600 text-white shadow-lg shadow-blue-200' : 'bg-white text-slate-600 border border-slate-200 hover:border-blue-300'"
                    class="px-5 py-2.5 rounded-full text-xs font-bold transition-all duration-300 cursor-pointer outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    {{ $label }}
                </button>
                @endforeach
            </div>

            {{-- Grid Portofolio Dinamis Database --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7 min-h-[400px]" x-data="{ filter: 'semua' }" x-cloak
                @filter-portfolio.window="filter = $event.detail.value">

                @foreach($portfolios as $p)
                @php
                // Otomatisasi komponen style visual dinamis berdasarkan string kategori
                switch($p->filter) {
                case 'pos':
                $cfg = ['bg' => 'bg-blue-600', 'label' => 'bg-blue-50 text-blue-700', 'icon' => '🛍️', 'wm' => 'POS'];
                break;
                case 'company':
                $cfg = ['bg' => 'bg-indigo-600', 'label' => 'bg-indigo-50 text-indigo-700', 'icon' => '🏢', 'wm' =>
                'WEB'];
                break;
                case 'katalog':
                $cfg = ['bg' => 'bg-emerald-600', 'label' => 'bg-emerald-50 text-emerald-700', 'icon' => '📦', 'wm' =>
                'CAT'];
                break;
                case 'erp':
                default:
                $cfg = ['bg' => 'bg-amber-600', 'label' => 'bg-amber-50 text-amber-700', 'icon' => '⚙️', 'wm' => 'ERP'];
                break;
                }
                @endphp

                <div x-show="filter === 'semua' || filter === '{{ $p->filter }}'" x-cloak
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" class="h-full">

                    <a href="{{ url('/portofolio/' . $p->slug) }}" class="group block h-full text-left">
                        <article
                            class="group bg-white rounded-[28px] overflow-hidden shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-500 flex flex-col h-full">
                            <div class="aspect-video relative overflow-hidden bg-slate-200">
                                {{-- Gambar Utama --}}
                                @if($p->gambar)
                                <img src="{{ asset('storage/portofolio/' . $p->gambar) }}" alt="{{ $p->judul }}"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                @else
                                <div class="w-full h-full {{ $cfg['bg'] }} flex items-center justify-center">
                                    <span class="text-6xl">{{ $cfg['icon'] }}</span>
                                </div>
                                @endif

                                {{-- Overlay Gradient --}}
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>

                                {{-- Watermark --}}
                                <span
                                    class="text-6xl font-black opacity-20 absolute -right-3 -bottom-3 leading-none select-none text-white z-10"
                                    aria-hidden="true">
                                    {{ $cfg['wm'] }}
                                </span>

                                {{-- Label Kategori --}}
                                <span
                                    class="absolute top-4 left-4 {{ $cfg['label'] }} text-[10px] font-bold px-3 py-1.5 rounded-full shadow-sm z-20 uppercase tracking-wider">
                                    {{ $p->kategori }}
                                </span>
                            </div>

                            <div class="p-7 flex flex-col flex-grow">
                                <h3
                                    class="text-lg font-extrabold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">
                                    {{ $p->judul }}
                                </h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-5 line-clamp-3">
                                    {{ $p->deskripsi_singkat }}
                                </p>

                                {{-- Fitur Utama (Loop Array Tech Stack / Fitur Unggulan) --}}
                                <ul class="space-y-2 mb-6">
                                    @if(is_array($p->tech_stack))
                                    @foreach(array_slice($p->tech_stack, 0, 4) as $fitur)
                                    <li class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                                        <i class="fa-solid fa-check text-blue-500 shrink-0 text-[10px]"></i>
                                        {{ $fitur }}
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>

                                {{-- Bagian Dampak / Impact Proyek --}}
                                @if($p->testimoni_konten)
                                <div class="mt-auto pt-4 border-t border-slate-50">
                                    <p class="text-[11px] text-slate-400 italic line-clamp-2">
                                        <span
                                            class="font-bold not-italic text-slate-600 uppercase tracking-tighter">Impact:</span>
                                        "{{ $p->testimoni_konten }}"
                                    </p>
                                </div>
                                @endif
                                <div
                                    class="pt-3 border-t border-slate-100 flex items-center justify-between text-xs font-bold text-slate-700 group-hover:text-blue-600 transition-colors">
                                    <span>Lihat Detail Proyek</span>
                                    <span
                                        class="w-6 h-6 rounded-full bg-slate-50 group-hover:bg-blue-50 flex items-center justify-center text-slate-400 group-hover:text-blue-600 transition-all duration-300">
                                        <i
                                            class="fa-solid fa-arrow-right text-[10px] transform group-hover:translate-x-0.5 transition-transform"></i>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 3: GALERI DOKUMENTASI --}}
    <section class="py-20 bg-white-50 border-t border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10 text-center">
            <div class="mb-12" data-aos="fade-up">
                <span class="text-blue-600 font-bold text-xs uppercase tracking-widest">Aktivitas Kami</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-2 uppercase">Galeri Dokumentasi Kerja
                </h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3 md:gap-4">
                @foreach($gallery as $g)
                <figure class="group relative aspect-square overflow-hidden rounded-2xl bg-slate-200 shadow-sm"
                    data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">
                    <img src="{{ $g['img'] }}" alt="{{ $g['title'] }}" width="400" height="400" loading="lazy"
                        decoding="async"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <figcaption
                        class="absolute inset-0 bg-blue-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-3">
                        <p class="text-white text-center text-[10px] font-bold leading-snug uppercase">{{ $g['title'] }}
                        </p>
                    </figcaption>
                </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 4: ALUR KERJA --}}
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10 text-center">
            <div class="mb-14" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Dari Ide ke Website Live — Prosesnya Simpel
                </h2>
                <p class="text-slate-500 max-w-xl mx-auto text-sm">Tidak perlu paham teknologi. Ceritakan kebutuhan
                    bisnis Anda, kami yang urus semuanya hingga siap dipakai.</p>
            </div>

            @php
            $alur = [
            ['step' => '01', 'icon' => 'fa-comments', 'title' => 'Konsultasi Gratis', 'desc' => 'Ceritakan bisnis Anda.
            Kami bantu pilihkan solusi terbaik tanpa syarat apapun.'],
            ['step' => '02', 'icon' => 'fa-code', 'title' => 'Development', 'desc' => 'Website dibangun dengan teknologi
            modern. Anda mendapat update progres berkala.'],
            ['step' => '03', 'icon' => 'fa-magnifying-glass-chart', 'title' => 'Testing & Revisi', 'desc' => 'Pengujian
            menyeluruh di berbagai perangkat untuk memastikan website bebas bug dan sesuai
            keinginan Anda.'],
            ['step' => '04', 'icon' => 'fa-chalkboard-teacher', 'title' => 'Training', 'desc' => 'Kami berikan pelatihan
            intensif agar tim Anda mandiri mengoperasikan dashboard dan mengelola
            konten tanpa kendala.'],
            ['step' => '05', 'icon' => 'fa-rocket', 'title' => 'Go-Live', 'desc' => 'Website Anda resmi mengudara! Siap
            melayani pelanggan dan memperkuat kredibilitas bisnis Anda
            di dunia digital.'],
            ['step' => '06', 'icon' => 'fa-headset', 'title' => 'Support', 'desc' => 'Bebas khawatir bug
            atau error. Tim Cakra standby membantu kendala teknis maupun konsultasi
            penggunaan kapan pun dibutuhkan.'],
            ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($alur as $a)
                <div class="relative bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow group"
                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div
                        class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-blue-100 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid {{ $a['icon'] }} text-2xl"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-300 tracking-[0.2em] uppercase">Tahap
                        {{ $a['step'] }}</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-2 mb-3">{{ $a['title'] }}</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">{{ $a['desc'] }}</p>

                    @if(!$loop->last)
                    <div class="hidden lg:block absolute top-12 -right-4 z-10">
                        <i class="fa-solid fa-chevron-right text-slate-100 text-2xl"></i>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 5: TESTIMONI --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-10 text-center">
            <div class="mb-14" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4 uppercase">Cerita Nyata dari Klien
                    Kami</h2>
                <p class="text-slate-500 max-w-lg mx-auto text-sm">Bukan sekadar testimoni — bukti bahwa hasil kerja
                    kami benar-benar memberi dampak nyata pada bisnis mereka.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 text-left">
                @foreach([
                ['nama' => 'Andi Pratama', 'peran' => 'Owner Toko Retail', 'inisial' => 'AP', 'bg' => 'bg-blue-500',
                'quote' => 'Sistem kasir yang mereka buat sangat mudah digunakan. Stok barang sekarang tidak pernah
                selisih lagi.'],
                ['nama' => 'Siti Aminah', 'peran' => 'IT Manager', 'inisial' => 'SA', 'bg' => 'bg-indigo-500', 'quote'
                => 'Profesional, tepat waktu, dan komunikatif. Solusi software kustom mereka membantu tim kami bekerja
                efisien.'],
                [
                'nama' => 'Hendra Wijaya',
                'peran' => 'Direktur Operasional',
                'inisial' => 'HW',
                'bg' => 'bg-amber-500',
                'quote' => 'Dulu data antar divisi sering berantakan. Setelah pakai sistem ERP kustom ini, semua laporan
                keuangan dan stok sinkron otomatis secara real-time.'
                ],
                ['nama' => 'Bpk. Subagyo', 'peran' => 'Pemilik Warung Makan', 'inisial' => 'BS', 'bg' => 'bg-rose-500',
                'quote' => 'Menu QR Code-nya simpel sekali. Hemat biaya cetak buku menu tiap ada perubahan harga.'],
                ] as $i => $t)
                <div class="bg-white border border-slate-100 rounded-[2rem] p-8 shadow-sm hover:shadow-md transition-shadow"
                    data-aos="{{ $i % 2 === 0 ? 'fade-right' : 'fade-left' }}">
                    <div class="text-4xl text-blue-100 font-serif mb-4 leading-none" aria-hidden="true">“</div>
                    <blockquote class="text-slate-700 italic text-sm leading-relaxed mb-8">
                        {{ $t['quote'] }}
                    </blockquote>
                    <div class="flex items-center gap-4 pt-6 border-t border-slate-50">
                        <div
                            class="w-12 h-12 {{ $t['bg'] }} rounded-full flex items-center justify-center text-white font-bold text-sm shrink-0">
                            {{ $t['inisial'] }}
                        </div>
                        <div>
                            <p class="font-bold text-slate-900 text-sm">{{ $t['nama'] }}</p>
                            <p class="text-[10px] text-slate-400 uppercase font-semibold tracking-wider">
                                {{ $t['peran'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SECTION 6: CTA --}}
    <section class="py-20 bg-white" aria-label="Ajakan diskusi proyek baru">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div data-aos="zoom-in"
                class="bg-slate-900 rounded-[3rem] p-10 md:p-16 text-white text-center relative overflow-hidden shadow-2xl">
                {{-- Decorative Shapes --}}
                <div class="absolute inset-0 opacity-10 pointer-events-none" aria-hidden="true">
                    <div
                        class="absolute top-0 left-0 w-64 h-64 bg-blue-500 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-64 h-64 bg-indigo-500 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl">
                    </div>
                </div>

                <div class="relative z-10">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">Bisnis Anda Proyek Kami Berikutnya?</h2>
                    <p class="text-slate-400 mb-10 leading-relaxed max-w-xl mx-auto text-sm md:text-base">
                        Kami tidak hanya membuat website — kami membangun solusi yang pas dengan cara kerja dan budget
                        bisnis Anda. Yuk, diskusi dulu tanpa perlu komitmen apapun!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/6285865405330?text={{ urlencode('Halo Cakra Inovasi Digital, saya ingin diskusi mengenai solusi website untuk bisnis saya.' . $suffix) }}"
                            target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-3 bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-500 transition-all shadow-xl shadow-blue-600/20 active:scale-95">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                            Diskusi via WhatsApp
                        </a>
                        <a href="/layanan"
                            class="inline-flex items-center justify-center gap-3 border-2 border-slate-700 text-slate-300 px-8 py-4 rounded-2xl font-bold hover:border-blue-500 hover:text-blue-400 transition-all active:scale-95">
                            Lihat Semua Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout.app>