<x-layout.app>

    {{-- ================================================================
         SEO — Halaman List Artikel
    ================================================================ --}}
    @php
    $title = 'Blog & Edukasi Digital | Tips Bisnis & Tutorial Web | Cakra Inovasi Digital';
    $metaDescription = 'Temukan tips bisnis digital, tutorial pembuatan website, strategi pemasaran online, dan berita
    teknologi terbaru untuk membantu UMKM Indonesia naik kelas.';
    $metaKeywords = 'blog bisnis digital, tips website umkm, tutorial web, strategi pemasaran online, edukasi teknologi,
    cakra inovasi digital blog';
    $canonicalUrl = url('/artikel');
    $ogType = 'website';
    $ogTitle = 'Blog & Edukasi Digital — Cakra Inovasi Digital';
    $ogDescription = 'Tips bisnis, tutorial web, dan strategi pemasaran online untuk UMKM Indonesia naik kelas.';
    $ogImage = asset('images/og-image.png');
    @endphp

    {{-- ================================================================
         HERO SECTION
    ================================================================ --}}
    <section class="pt-28 md:pt-36 pb-16 bg-gradient-to-b from-slate-50 to-white overflow-hidden">

        {{-- Dekoratif Background --}}
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-blue-50 rounded-full blur-3xl opacity-70">
            </div>
            <div class="absolute top-0 right-0 w-72 h-72 bg-indigo-50 rounded-full blur-3xl opacity-60"></div>
            <div class="absolute bottom-0 left-1/2 w-96 h-32 bg-slate-50 rounded-full blur-2xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-5 md:px-6 relative z-10">

            {{-- Breadcrumb --}}
            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[]" current="List Artikel" />
            </div>

            {{-- Heading --}}
            <div class="text-center max-w-2xl mx-auto" data-aos="fade-up">
                <span
                    class="inline-flex items-center gap-2 px-4 py-1.5 mb-5 text-xs font-extrabold tracking-widest text-blue-600 uppercase bg-blue-50 rounded-full border border-blue-100">
                    <span class="w-1.5 h-1.5 bg-blue-500 rounded-full animate-pulse"></span>
                    Knowledge Base
                </span>
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-5 leading-tight tracking-tight">
                    Blog &
                    <span class="relative inline-block">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-500">Edukasi</span>
                        <span
                            class="absolute -bottom-1 left-0 w-full h-[3px] bg-gradient-to-r from-blue-500 to-indigo-400 rounded-full"></span>
                    </span>
                </h1>
                <p class="text-base md:text-lg text-slate-500 leading-relaxed">
                    Tips bisnis, tutorial web, dan strategi digital untuk membantu UMKM Anda tumbuh lebih cepat di era
                    online.
                </p>
            </div>

            {{-- Search Bar --}}
            <div class="mt-8 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                <form action="{{ route('front.artikel.index') }}" method="GET" class="relative group">
                    <div
                        class="flex items-center bg-white border-2 border-slate-100 hover:border-blue-200 focus-within:border-blue-500 rounded-2xl shadow-sm transition-all duration-300 overflow-hidden px-4 gap-3">
                        <i
                            class="fa-solid fa-magnifying-glass text-slate-300 group-focus-within:text-blue-500 transition-colors text-sm shrink-0"></i>
                        <input type="text" name="search" value="{{ request('search') }}"
                            class="flex-1 py-3.5 bg-transparent outline-none text-sm font-medium text-slate-700 placeholder:text-slate-400"
                            placeholder="Cari artikel, tips, atau tutorial...">
                        @if(request('search'))
                        <a href="{{ route('front.artikel.index') }}"
                            class="shrink-0 w-6 h-6 flex items-center justify-center text-slate-300 hover:text-red-400 transition-colors"
                            title="Bersihkan">
                            <i class="fa-solid fa-xmark text-xs"></i>
                        </a>
                        @endif
                        <button type="submit"
                            class="shrink-0 px-4 py-2 bg-blue-600 text-white text-xs font-bold rounded-xl hover:bg-blue-700 transition-colors">
                            Cari
                        </button>
                    </div>
                </form>
                @if(request('search'))
                <p class="text-center text-xs text-slate-400 mt-3">
                    Hasil pencarian untuk: <strong class="text-slate-700">"{{ request('search') }}"</strong>
                </p>
                @endif
            </div>

        </div>
    </section>


    {{-- ================================================================
         MAIN CONTENT
    ================================================================ --}}
    <div class="max-w-7xl mx-auto px-5 md:px-6 pb-24">
        <div class="flex flex-col lg:flex-row gap-10 xl:gap-14">

            {{-- ── Sticky Share Sidebar (kiri) ── --}}
            <div class="hidden lg:block lg:w-14 shrink-0">
                <div class="sticky top-28 flex flex-col gap-3 items-center">

                    <span class="text-[9px] font-bold text-slate-300 uppercase tracking-widest mb-1">Bagikan</span>

                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                        target="_blank" class="w-11 h-11 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-400
                              hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] hover:-translate-y-1
                              transition-all duration-300 shadow-sm" title="Share ke Facebook">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>

                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode('Cek artikel menarik ini dari Cakra Inovasi Digital!') }}"
                        target="_blank" class="w-11 h-11 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-400
                              hover:bg-black hover:text-white hover:border-black hover:-translate-y-1
                              transition-all duration-300 shadow-sm" title="Share ke X">
                        <i class="fab fa-x-twitter text-sm"></i>
                    </a>

                    <a href="https://api.whatsapp.com/send?text={{ urlencode('Cek artikel menarik dari Cakra Inovasi Digital: ' . request()->fullUrl()) }}"
                        target="_blank" class="w-11 h-11 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-400
                              hover:bg-[#25D366] hover:text-white hover:border-[#25D366] hover:-translate-y-1
                              transition-all duration-300 shadow-sm" title="Share ke WhatsApp">
                        <i class="fab fa-whatsapp text-sm"></i>
                    </a>

                    <button onclick="copyToClipboard('{{ request()->fullUrl() }}')" class="w-11 h-11 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-400
                                   hover:bg-slate-800 hover:text-white hover:border-slate-800 hover:-translate-y-1
                                   transition-all duration-300 shadow-sm cursor-pointer" title="Salin Link">
                        <i class="fa-solid fa-link text-sm"></i>
                    </button>

                    <div class="w-px h-12 bg-slate-100 mt-1"></div>

                    {{-- Scroll to top --}}
                    <button onclick="window.scrollTo({top:0,behavior:'smooth'})" class="w-11 h-11 flex items-center justify-center rounded-2xl bg-white border border-slate-100 text-slate-300
                                   hover:bg-slate-100 hover:text-slate-600 hover:-translate-y-1
                                   transition-all duration-300 shadow-sm cursor-pointer" title="Kembali ke Atas">
                        <i class="fa-solid fa-chevron-up text-sm"></i>
                    </button>
                </div>
            </div>


            {{-- ── Daftar Artikel ── --}}
            <div class="flex-1 min-w-0">

                @if(request('search') && $articles->isEmpty())
                <div class="bg-white border-2 border-dashed border-slate-100 rounded-3xl p-16 text-center"
                    data-aos="fade-up">
                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fa-solid fa-magnifying-glass text-slate-300 text-2xl"></i>
                    </div>
                    <p class="text-slate-500 font-semibold mb-1">Tidak ada artikel ditemukan</p>
                    <p class="text-slate-400 text-sm">Coba kata kunci yang berbeda atau <a
                            href="{{ route('front.artikel.index') }}" class="text-blue-500 hover:underline">lihat semua
                            artikel</a>.</p>
                </div>
                @endif

                <div class="flex flex-col gap-6">
                    @forelse($articles as $i => $article)
                    <article class="group bg-white border border-slate-100 rounded-3xl overflow-hidden shadow-sm
                               hover:shadow-xl hover:border-blue-100 hover:-translate-y-0.5
                               transition-all duration-500 flex flex-col md:flex-row" data-aos="fade-up"
                        data-aos-delay="{{ min($i * 60, 300) }}">

                        {{-- Thumbnail --}}
                        <a href="{{ route('front.artikel.detail', $article->slug) }}"
                            class="md:w-64 xl:w-72 h-52 md:h-auto flex-shrink-0 overflow-hidden relative bg-slate-50 block">
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out"
                                loading="{{ $i === 0 ? 'eager' : 'lazy' }}">

                            {{-- Badge kategori --}}
                            <div class="absolute top-3 left-3">
                                <span class="inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-sm
                                             text-blue-700 text-[10px] font-black px-3 py-1.5
                                             rounded-full uppercase tracking-wider shadow-sm border border-blue-50">
                                    <i class="fa-solid fa-bolt text-[8px] text-blue-500"></i>
                                    Edukasi Digital
                                </span>
                            </div>

                            {{-- Read time overlay --}}
                            <div class="absolute bottom-3 right-3">
                                <span class="inline-flex items-center gap-1 bg-black/60 backdrop-blur-sm
                                             text-white text-[10px] font-bold px-2.5 py-1 rounded-full">
                                    <i class="fa-regular fa-clock text-[9px]"></i>
                                    {{ max(1, (int) ceil(str_word_count(strip_tags($article->content)) / 200)) }} mnt
                                    baca
                                </span>
                            </div>
                        </a>

                        {{-- Konten --}}
                        <div class="flex flex-col justify-between flex-1 p-6 md:p-7">

                            {{-- Meta info --}}
                            <div
                                class="flex flex-wrap items-center gap-x-4 gap-y-1 mb-3 text-[11px] font-bold uppercase tracking-widest text-slate-400">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-regular fa-calendar text-blue-400 text-[10px]"></i>
                                    {{ $article->published_at->translatedFormat('d M Y') }}
                                </span>
                                <span class="w-1 h-1 bg-slate-200 rounded-full hidden sm:block"></span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-regular fa-eye text-blue-400 text-[10px]"></i>
                                    {{ number_format($article->views) }} dibaca
                                </span>
                            </div>

                            {{-- Judul --}}
                            <h2 class="text-xl md:text-2xl font-black text-slate-800 mb-3 leading-tight
                                       group-hover:text-blue-600 transition-colors duration-300">
                                <a href="{{ route('front.artikel.detail', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h2>

                            {{-- Excerpt --}}
                            <p class="text-slate-500 text-sm leading-relaxed mb-5 line-clamp-2">
                                {{ Str::limit(strip_tags($article->content), 150) }}
                            </p>

                            {{-- Footer card --}}
                            <div class="flex items-center justify-between pt-4 border-t border-slate-50 mt-auto">

                                {{-- Author --}}
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600
                                                flex items-center justify-center text-white shadow-md shadow-blue-100">
                                        <i class="fa-solid fa-user-check text-[10px]"></i>
                                    </div>
                                    <div>
                                        <p
                                            class="text-[9px] text-slate-400 font-bold uppercase tracking-tighter leading-none mb-0.5">
                                            Tim Penulis</p>
                                        <p class="text-xs font-bold text-slate-700 leading-none">Admin Cakra</p>
                                    </div>
                                </div>

                                {{-- Read more CTA --}}
                                <a href="{{ route('front.artikel.detail', $article->slug) }}" class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-600
                                          text-xs font-bold rounded-xl hover:bg-blue-600 hover:text-white
                                          transition-all duration-200 group/btn">
                                    Baca Selengkapnya
                                    <i
                                        class="fa-solid fa-arrow-right text-[10px] group-hover/btn:translate-x-0.5 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                    @empty
                    <div class="bg-white border-2 border-dashed border-slate-100 rounded-3xl p-20 text-center"
                        data-aos="fade-up">
                        <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <i class="fa-regular fa-newspaper text-slate-300 text-2xl"></i>
                        </div>
                        <p class="text-slate-500 font-semibold">Belum ada artikel yang dipublikasikan.</p>
                        <p class="text-slate-400 text-sm mt-1">Pantau terus halaman ini untuk update terbaru!</p>
                    </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                @if($articles->hasPages())
                <div class="mt-12" data-aos="fade-up">
                    {{ $articles->links() }}
                </div>
                @endif

            </div>


            {{-- ── Sidebar Kanan ── --}}
            <aside class="lg:w-72 xl:w-80 shrink-0 space-y-6" data-aos="fade-left">

                {{-- Widget: Tentang Blog --}}
                <div
                    class="bg-gradient-to-br from-blue-600 to-indigo-600 p-6 rounded-3xl text-white shadow-lg shadow-blue-100">
                    <div class="w-10 h-10 bg-white/20 rounded-2xl flex items-center justify-center mb-4">
                        <i class="fa-solid fa-feather-pointed text-white text-lg"></i>
                    </div>
                    <h3 class="font-black text-base mb-2">Tentang Blog Ini</h3>
                    <p class="text-blue-100 text-xs leading-relaxed">
                        Kami berbagi tips bisnis digital, tutorial web, dan strategi pemasaran online setiap minggu —
                        gratis untuk semua pelaku UMKM Indonesia.
                    </p>
                    <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20ingin%20konsultasi%20website%20bisnis%20saya."
                        target="_blank"
                        class="inline-flex items-center gap-2 mt-4 bg-white text-blue-600 px-4 py-2 rounded-xl text-xs font-bold hover:bg-blue-50 transition">
                        <i class="fab fa-whatsapp text-emerald-500"></i>
                        Konsultasi Gratis
                    </a>
                </div>

                {{-- Widget: Artikel Terbaru --}}
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                    <h3 class="text-sm font-black text-slate-800 mb-5 flex items-center gap-2">
                        <span class="w-1 h-5 bg-indigo-500 rounded-full"></span>
                        Artikel Terbaru
                    </h3>
                    <div class="flex flex-col gap-4">
                        @foreach($latestArticles as $latest)
                        <a href="{{ route('front.artikel.detail', $latest->slug) }}"
                            class="group flex items-start gap-3">
                            <div class="relative shrink-0">
                                <div class="w-14 h-14 rounded-2xl overflow-hidden bg-slate-50 border border-slate-50">
                                    <img src="{{ asset('storage/' . $latest->thumbnail) }}" alt="{{ $latest->title }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                        loading="lazy">
                                </div>
                                <span class="absolute -top-1 -right-1 flex h-2.5 w-2.5">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-60"></span>
                                    <span
                                        class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-500 border-2 border-white"></span>
                                </span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4
                                    class="text-xs font-bold text-slate-700 group-hover:text-blue-600 leading-snug line-clamp-2 transition mb-1">
                                    {{ $latest->title }}
                                </h4>
                                <p class="text-[10px] text-slate-400 font-medium uppercase tracking-wider">
                                    {{ $latest->published_at->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Widget: Artikel Terpopuler --}}
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                    <h3 class="text-sm font-black text-slate-800 mb-5 flex items-center gap-2">
                        <span class="w-1 h-5 bg-orange-500 rounded-full"></span>
                        Terpopuler
                    </h3>
                    <div class="flex flex-col gap-5">
                        @foreach($popularArticles as $index => $pop)
                        <a href="{{ route('front.artikel.detail', $pop->slug) }}" class="flex items-start gap-3 group">
                            {{-- Ranking --}}
                            <div class="shrink-0 w-8 h-8 rounded-xl bg-slate-50 flex items-center justify-center
                                        border border-slate-100 group-hover:bg-orange-50 group-hover:border-orange-100
                                        transition-colors">
                                <span
                                    class="text-xs font-black text-slate-300 group-hover:text-orange-400 transition-colors leading-none">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h4
                                    class="text-xs font-bold text-slate-700 group-hover:text-orange-500 leading-snug line-clamp-2 transition mb-1.5">
                                    {{ $pop->title }}
                                </h4>
                                <div
                                    class="flex items-center gap-2 text-[10px] text-slate-400 font-semibold uppercase tracking-wider">
                                    <span class="flex items-center gap-1">
                                        <i class="fa-regular fa-eye text-orange-300 text-[9px]"></i>
                                        {{ number_format($pop->views) }}
                                    </span>
                                    <span>·</span>
                                    <span>{{ $pop->published_at->format('d M') }}</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Widget: Iklan / CTA Layanan --}}
                <div class="bg-slate-900 p-6 rounded-3xl overflow-hidden relative">
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-blue-500/10 rounded-full blur-2xl"
                        aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Butuh
                            Website?</span>
                        <h3 class="text-base font-black text-white mt-2 mb-3 leading-tight">
                            Wujudkan Bisnis Digital Anda Bersama Kami
                        </h3>
                        <p class="text-slate-400 text-xs leading-relaxed mb-4">
                            Dari toko online, katalog produk, hingga sistem booking — kami tangani semuanya.
                        </p>
                        <a href="{{ url('/layanan') }}"
                            class="inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2.5 rounded-xl text-xs font-bold hover:bg-blue-700 transition-colors">
                            Lihat Semua Layanan
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </aside>

        </div>
    </div>

</x-layout.app>