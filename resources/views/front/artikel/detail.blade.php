<x-layout.app>

    {{-- ================================================================
     SEO DINAMIS — Artikel Detail
     $ogTitle, $ogDescription, $ogImage di-set di sini agar
     terbaca oleh app.blade.php sebelum <head> di-render
     (karena Blade component slot di-render sebelum layout)
    ================================================================ --}}
    @php
        // 1. Hitung deskripsi sekali saja untuk menghemat proses CPU
        $metaDescription = Str::limit(strip_tags($article->content), 155);
        
        $title = $article->title . ' | Cakra Inovasi Digital';
        $metaKeywords = 'blog cakra inovasi digital, ' . Str::lower($article->title) . ', tips bisnis digital, website umkm';
        $canonicalUrl = route('front.artikel.detail', $article->slug);
        $ogType = 'article';

        // Open Graph Dinamis — thumbnail artikel sebagai OG image
        $ogTitle = $article->title;
        $ogDescription = $metaDescription;
        $ogImage = asset('storage/' . $article->thumbnail);
        $ogImageWidth = '1200';
        $ogImageHeight = '630';

        // Untuk share WhatsApp & Twitter
        $shareUrl = urlencode(request()->fullUrl());
        $shareText = urlencode($article->title . ' — Cakra Inovasi Digital');
    @endphp

    {{-- ================================================================
        SCHEMA.ORG — BlogPosting / Article
        Di-push ke @stack('schema') di app.blade.php
    ================================================================ --}}
    @push('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": {!! json_encode($article->title) !!},
        "description": {!! json_encode($metaDescription) !!},
        "image": {
            "@type": "ImageObject",
            "url": {!! json_encode($ogImage) !!},
            "width": 1200,
            "height": 630
        },
        "url": {!! json_encode($canonicalUrl) !!},
        "datePublished": {!! json_encode($article->published_at ? $article->published_at->toIso8601String() : null) !!},
        "dateModified": {!! json_encode($article->updated_at ? $article->updated_at->toIso8601String() : null) !!},
        "author": {
            "@type": "Organization",
            "name": "Cakra Inovasi Digital",
            "@id": {!! json_encode(url('/') . '/#business') !!}
        },
        "publisher": {
            "@type": "Organization",
            "name": "Cakra Inovasi Digital",
            "@id": {!! json_encode(url('/') . '/#business') !!},
            "logo": {
                "@type": "ImageObject",
                "url": {!! json_encode(asset('images/logo-cakra.png')) !!}
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": {!! json_encode($canonicalUrl) !!}
        },
        "inLanguage": "id-ID",
        "isPartOf": {
            "@id": {!! json_encode(url('/') . '/#website') !!}
        }
    }
    </script>

    {{-- BreadcrumbList Schema --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Beranda",
                "item": {!! json_encode(url('/')) !!}
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Artikel",
                "item": {!! json_encode(url('/artikel')) !!}
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": {!! json_encode($article->title) !!},
                "item": {!! json_encode($canonicalUrl) !!}
            }
        ]
    }
    </script>

    {{-- Schema Dinamis Tambahan dari Database (Custom per Artikel) --}}
    @if($article->schema)
        {!! $article->schema !!}
    @endif
    @endpush

    {{-- ================================================================
         HERO HEADER ARTIKEL
    ================================================================ --}}
    <section class="pt-28 md:pt-36 pb-16 bg-gradient-to-b from-slate-50 to-white overflow-hidden relative">

        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute top-0 left-0 w-[600px] h-[300px] bg-blue-50/50 rounded-full blur-3xl -translate-x-1/3 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-50/40 rounded-full blur-3xl translate-x-1/4 translate-y-1/4"></div>
        </div>

        <div class="max-w-4xl mx-auto px-5 md:px-6 relative z-10">

            {{-- Breadcrumb --}}
            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[['name' => 'List Artikel', 'url' => url('/artikel')]]" current="Detail Artikel" />
            </div>

            {{-- Kategori badge --}}
            <div class="flex justify-center mb-5" data-aos="fade-down">
                <span class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 border border-blue-100 text-[11px] font-black px-4 py-1.5 rounded-full uppercase tracking-widest">
                    <i class="fa-solid fa-bolt text-[9px] text-blue-500"></i>
                    Edukasi Digital
                </span>
            </div>

            {{-- Judul --}}
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-black text-slate-900 text-center leading-tight mb-6" data-aos="fade-up">
                {{ $article->title }}
            </h1>

            {{-- Meta Info --}}
            <div class="flex flex-wrap items-center justify-center gap-4 text-[11px] font-bold text-slate-400 uppercase tracking-wider" data-aos="fade-up" data-aos-delay="50">
                <span class="flex items-center gap-1.5">
                    <i class="fa-regular fa-calendar text-blue-400"></i>
                    {{ $article->published_at->translatedFormat('d F Y') }}
                </span>
                <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                <span class="flex items-center gap-1.5">
                    <i class="fa-regular fa-eye text-blue-400"></i>
                    {{ number_format($article->views) }} dibaca
                </span>
                <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                <span class="flex items-center gap-1.5">
                    <i class="fa-regular fa-clock text-blue-400"></i>
                    {{ max(1, (int) ceil(str_word_count(strip_tags($article->content)) / 200)) }} menit baca
                </span>
            </div>

        </div>
    </section>


    {{-- ================================================================
         MAIN CONTENT
    ================================================================ --}}
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-5 md:px-6">
            <div class="flex flex-col lg:flex-row gap-12 xl:gap-16">

                {{-- ── Konten Artikel ── --}}
                <div class="flex-1 min-w-0">

                    {{-- Featured Image --}}
                    <div class="rounded-3xl overflow-hidden mb-10 shadow-md border border-slate-100" data-aos="fade-up">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-auto object-cover max-h-[480px]" loading="eager">
                    </div>

                    {{-- Share Bar (mobile) --}}
                    <div class="flex items-center gap-3 mb-8 lg:hidden" data-aos="fade-up">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest shrink-0">Bagikan:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-xl bg-slate-50 border border-slate-100 text-slate-400 hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] transition">
                            <i class="fab fa-facebook-f text-[11px]"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-xl bg-slate-50 border border-slate-100 text-slate-400 hover:bg-[#25D366] hover:text-white hover:border-[#25D366] transition">
                            <i class="fab fa-whatsapp text-[11px]"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?text={{ $shareText }}&url={{ $shareUrl }}" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-xl bg-slate-50 border border-slate-100 text-slate-400 hover:bg-black hover:text-white hover:border-black transition">
                            <i class="fab fa-x-twitter text-[11px]"></i>
                        </a>
                        <button onclick="copyToClipboard('{{ request()->fullUrl() }}')" class="w-8 h-8 flex items-center justify-center rounded-xl bg-slate-50 border border-slate-100 text-slate-400 hover:bg-slate-800 hover:text-white hover:border-slate-800 transition cursor-pointer">
                            <i class="fa-solid fa-link text-[11px]"></i>
                        </button>
                    </div>

                    {{-- Isi Konten --}}
                    <div class="prose prose-slate prose-base md:prose-lg max-w-none
                                prose-headings:font-black prose-headings:text-slate-900 prose-headings:tracking-tight
                                prose-h2:text-2xl prose-h2:mt-10 prose-h2:mb-4
                                prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
                                prose-p:text-slate-600 prose-p:leading-relaxed prose-p:mb-5
                                prose-strong:text-slate-800 prose-strong:font-bold
                                prose-a:text-blue-600 prose-a:font-semibold prose-a:no-underline hover:prose-a:underline
                                prose-ul:text-slate-600 prose-ol:text-slate-600
                                prose-li:my-1
                                prose-blockquote:border-blue-500 prose-blockquote:bg-blue-50/50 prose-blockquote:rounded-r-xl prose-blockquote:py-1
                                prose-img:rounded-2xl prose-img:shadow-md
                                prose-code:bg-slate-100 prose-code:text-blue-700 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded-lg prose-code:text-sm" data-aos="fade-up" data-aos-delay="50">
                        {!! $article->content !!}
                    </div>

                    {{-- Tags / Social Share Footer --}}
                    <div class="mt-12 pt-8 border-t border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4" data-aos="fade-up">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Share:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-[#1877F2]/10 text-[#1877F2] text-[11px] font-bold rounded-full hover:bg-[#1877F2] hover:text-white transition">
                                <i class="fab fa-facebook-f text-[10px]"></i> Facebook
                            </a>
                            <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-[#25D366]/10 text-[#25D366] text-[11px] font-bold rounded-full hover:bg-[#25D366] hover:text-white transition">
                                <i class="fab fa-whatsapp text-[10px]"></i> WhatsApp
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ $shareText }}&url={{ $shareUrl }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-100 text-slate-700 text-[11px] font-bold rounded-full hover:bg-slate-900 hover:text-white transition">
                                <i class="fab fa-x-twitter text-[10px]"></i> Twitter
                            </a>
                            <button onclick="copyToClipboard('{{ request()->fullUrl() }}')" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-100 text-slate-600 text-[11px] font-bold rounded-full hover:bg-slate-800 hover:text-white transition cursor-pointer">
                                <i class="fa-solid fa-link text-[10px]"></i> Salin Link
                            </button>
                        </div>
                        <p class="text-[11px] text-slate-400">
                            Terakhir diperbarui: {{ $article->updated_at->translatedFormat('d M Y') }}
                        </p>
                    </div>

                    {{-- Prev / Next Navigation --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-10" data-aos="fade-up">
                        @if($previous)
                        <a href="{{ route('front.artikel.detail', $previous->slug) }}" class="group flex items-start gap-3 p-5 bg-slate-50 rounded-2xl border border-slate-100 hover:bg-blue-50 hover:border-blue-100 transition-all">
                            <div class="w-8 h-8 bg-white rounded-xl border border-slate-100 flex items-center justify-center shrink-0 group-hover:bg-blue-600 group-hover:border-blue-600 group-hover:text-white transition-all">
                                <i class="fa-solid fa-chevron-left text-slate-400 text-[10px] group-hover:text-white"></i>
                            </div>
                            <div>
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1 group-hover:text-blue-500 transition">
                                    Artikel Sebelumnya
                                </p>
                                <h4 class="text-sm font-bold text-slate-700 group-hover:text-blue-700 transition line-clamp-2 leading-snug">
                                    {{ $previous->title }}
                                </h4>
                            </div>
                        </a>
                        @else
                        <div class="p-5 bg-slate-50/50 rounded-2xl border border-dashed border-slate-100 opacity-50">
                            <p class="text-[10px] font-black text-slate-300 uppercase tracking-widest mb-1">Artikel Sebelumnya</p>
                            <p class="text-sm text-slate-400 italic">Ini artikel pertama</p>
                        </div>
                        @endif

                        @if($next)
                        <a href="{{ route('front.artikel.detail', $next->slug) }}" class="group flex items-start gap-3 p-5 bg-slate-50 rounded-2xl border border-slate-100 hover:bg-blue-50 hover:border-blue-100 transition-all text-right flex-row-reverse sm:flex-row sm:text-left">
                            <div class="w-8 h-8 bg-white rounded-xl border border-slate-100 flex items-center justify-center shrink-0 group-hover:bg-blue-600 group-hover:border-blue-600 transition-all">
                                <i class="fa-solid fa-chevron-right text-slate-400 text-[10px] group-hover:text-white"></i>
                            </div>
                            <div class="sm:text-right flex-1">
                                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1 group-hover:text-blue-500 transition">
                                    Artikel Berikutnya
                                </p>
                                <h4 class="text-sm font-bold text-slate-700 group-hover:text-blue-700 transition line-clamp-2 leading-snug">
                                    {{ $next->title }}
                                </h4>
                            </div>
                        </a>
                        @else
                        <div class="p-5 bg-slate-50/50 rounded-2xl border border-dashed border-slate-100 opacity-50 sm:text-right">
                            <p class="text-[10px] font-black text-slate-300 uppercase tracking-widest mb-1">Artikel Berikutnya</p>
                            <p class="text-sm text-slate-400 italic">Belum ada artikel baru</p>
                        </div>
                        @endif
                    </div>

                    {{-- Author Box --}}
                    <div class="mt-10 bg-gradient-to-br from-slate-50 to-blue-50/30 p-7 rounded-3xl border border-slate-100 flex items-center gap-5" data-aos="fade-up">
                        <div class="w-16 h-16 rounded-2xl overflow-hidden bg-blue-100 shrink-0 shadow-sm">
                            <img src="{{ asset('images/logo-cakra.webp') }}" alt="Cakra Inovasi Digital" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Ditulis oleh</p>
                            <h4 class="text-base font-black text-slate-800 mb-1">Tim Cakra Inovasi Digital</h4>
                            <p class="text-xs text-slate-500 leading-relaxed">
                                Spesialis pembuatan website profesional untuk bisnis dan UMKM Indonesia — berbagi tips & wawasan digital setiap minggu.
                            </p>
                        </div>
                    </div>

                    {{-- Related Posts --}}
                    @if($related_posts->isNotEmpty())
                    <div class="mt-12" data-aos="fade-up">
                        <h3 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-3">
                            <span class="w-1 h-6 bg-blue-500 rounded-full"></span>
                            Artikel Terkait
                        </h3>
                        <div class="flex flex-col gap-4">
                            @foreach($related_posts as $related)
                            <a href="{{ route('front.artikel.detail', $related->slug) }}" class="group flex items-start gap-4 p-4 rounded-2xl border border-slate-100 hover:border-blue-100 hover:bg-blue-50/30 transition-all">
                                <div class="w-20 h-20 md:w-24 md:h-24 shrink-0 rounded-xl overflow-hidden bg-slate-100">
                                    <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" loading="lazy">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-bold text-slate-800 group-hover:text-blue-600 leading-snug line-clamp-2 transition mb-2">
                                        {{ $related->title }}
                                    </h4>
                                    <p class="text-xs text-slate-500 line-clamp-2 hidden md:block leading-relaxed mb-2">
                                        {{ Str::limit(strip_tags($related->content), 100) }}
                                    </p>
                                    <span class="inline-flex items-center gap-1 text-[11px] font-bold text-blue-500 hover:text-blue-700 transition group-hover:gap-1.5">
                                        Baca selengkapnya
                                        <i class="fa-solid fa-arrow-right text-[9px]"></i>
                                    </span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Komentar --}}
                    <div class="mt-12" data-aos="fade-up">
                        <h3 class="text-lg font-black text-slate-800 mb-6 flex items-center gap-3">
                            <span class="w-1 h-6 bg-indigo-500 rounded-full"></span>
                            Komentar
                        </h3>
                        <livewire:article-comments :articleId="$article->id" />
                    </div>

                </div>


                {{-- ── Sidebar Kanan ── --}}
                <aside class="lg:w-72 xl:w-80 shrink-0">
                    <div class="sticky top-24 space-y-6">

                        {{-- CTA --}}
                        <div class="bg-gradient-to-br from-blue-600 to-indigo-700 p-6 rounded-3xl text-white shadow-xl shadow-blue-200/50">
                            <div class="w-10 h-10 bg-white/15 rounded-2xl flex items-center justify-center mb-4">
                                <i class="fa-solid fa-rocket text-white text-lg"></i>
                            </div>
                            <h3 class="font-black text-base mb-2 leading-snug">Siap Wujudkan Website Bisnis Anda?</h3>
                            <p class="text-blue-100 text-xs leading-relaxed mb-4">
                                Konsultasi gratis, tanpa syarat. Kami bantu pilih solusi yang tepat untuk bisnis Anda.
                            </p>
                            <a href="https://wa.me/6285865405330?text=Halo%20Cakra%2C%20saya%20baca%20artikel%20%22{{ urlencode($article->title) }}%22%20dan%20tertarik%20konsultasi%20website." target="_blank" class="inline-flex items-center gap-2 bg-white text-blue-600 px-4 py-2.5 rounded-xl text-xs font-black hover:bg-blue-50 transition w-full justify-center">
                                <i class="fab fa-whatsapp text-emerald-500 text-sm"></i>
                                Konsultasi Gratis Sekarang
                            </a>
                        </div>

                        {{-- Cari Artikel --}}
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                            <h3 class="text-sm font-black text-slate-800 mb-4 flex items-center gap-2">
                                <span class="w-1 h-5 bg-blue-500 rounded-full"></span>
                                Cari Artikel
                            </h3>
                            <form action="{{ route('front.artikel.index') }}" method="GET" class="relative">
                                <input type="text" name="search" value="{{ request('search') }}" class="w-full bg-slate-50 border-2 border-transparent rounded-2xl py-3 pl-4 pr-10 focus:bg-white focus:border-blue-400 outline-none transition-all text-xs font-medium text-slate-700 placeholder:text-slate-400" placeholder="Ketik kata kunci...">
                                <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-blue-600 transition-colors cursor-pointer">
                                    <i class="fa-solid fa-magnifying-glass text-xs"></i>
                                </button>
                            </form>
                        </div>

                        {{-- Social Media --}}
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                            <h3 class="text-sm font-black text-slate-800 mb-4 flex items-center gap-2">
                                <span class="w-1 h-5 bg-pink-500 rounded-full"></span>
                                Ikuti Kami
                            </h3>
                            <div class="grid grid-cols-4 gap-2">
                                <a href="https://www.facebook.com/cakrainovasidigital" target="_blank" class="h-10 flex items-center justify-center rounded-xl bg-slate-50 border border-slate-100 text-slate-500 hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] transition text-sm">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/cakrainovasidigital.id/" target="_blank" class="h-10 flex items-center justify-center rounded-xl bg-slate-50 border border-slate-100 text-slate-500 hover:bg-gradient-to-br hover:from-purple-500 hover:to-pink-500 hover:text-white hover:border-transparent transition text-sm">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/cakra-inovasi-digital-9141943b3/" target="_blank" class="h-10 flex items-center justify-center rounded-xl bg-slate-50 border border-slate-100 text-slate-500 hover:bg-[#0A66C2] hover:text-white hover:border-[#0A66C2] transition text-sm">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" target="_blank" class="h-10 flex items-center justify-center rounded-xl bg-slate-50 border border-slate-100 text-slate-500 hover:bg-[#FF0000] hover:text-white hover:border-[#FF0000] transition text-sm">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>

                        {{-- Artikel Terpopuler --}}
                        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
                            <h3 class="text-sm font-black text-slate-800 mb-5 flex items-center gap-2">
                                <span class="w-1 h-5 bg-orange-500 rounded-full"></span>
                                Artikel Terpopuler
                            </h3>
                            <div class="space-y-4">
                                @forelse($popularArticles as $index => $pop)
                                <div class="flex gap-3 items-center group">
                                    <div class="w-16 h-16 shrink-0 rounded-xl overflow-hidden bg-slate-100 border border-slate-50">
                                        <img src="{{ asset('storage/' . $pop->thumbnail) }}" alt="{{ $pop->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" loading="lazy">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <a href="{{ route('front.artikel.detail', $pop->slug) }}">
                                            <h4 class="text-xs font-bold text-slate-700 group-hover:text-orange-500 leading-snug line-clamp-2 transition">
                                                {{ $pop->title }}
                                            </h4>
                                        </a>
                                        <div class="flex items-center gap-2 mt-1.5 text-[10px] text-slate-400 font-semibold">
                                            <span class="flex items-center gap-1">
                                                <i class="fa-regular fa-eye text-orange-300"></i>
                                                {{ number_format($pop->views) }}
                                            </span>
                                            <span>·</span>
                                            <span>{{ $pop->created_at->format('d M Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <p class="text-xs text-slate-400 italic">Belum ada artikel populer.</p>
                                @endforelse
                            </div>
                        </div>

                    </div>
                </aside>

            </div>
        </div>
    </section>


    {{-- ================================================================
         FLOATING SHARE — Desktop (kiri layar dengan ID khusus)
    ================================================================ --}}
    <div id="desktop-floating-share" class="fixed left-5 top-1/2 -translate-y-1/2 hidden xl:flex flex-col gap-2.5 z-40 transition-all duration-500 transform">
        <span class="text-[8px] font-black text-slate-300 uppercase tracking-widest text-center mb-1">Share</span>

        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" class="w-10 h-10 bg-white border border-slate-100 rounded-2xl shadow-sm flex items-center justify-center text-slate-400 hover:bg-[#1877F2] hover:text-white hover:border-[#1877F2] hover:-translate-y-1 transition-all duration-300" title="Share ke Facebook">
            <i class="fab fa-facebook-f text-xs"></i>
        </a>

        <a href="https://api.whatsapp.com/send?text={{ $shareText }}%20{{ $shareUrl }}" target="_blank" class="w-10 h-10 bg-white border border-slate-100 rounded-2xl shadow-sm flex items-center justify-center text-slate-400 hover:bg-[#25D366] hover:text-white hover:border-[#25D366] hover:-translate-y-1 transition-all duration-300" title="Share ke WhatsApp">
            <i class="fab fa-whatsapp text-sm"></i>
        </a>

        <a href="https://twitter.com/intent/tweet?text={{ $shareText }}&url={{ $shareUrl }}" target="_blank" class="w-10 h-10 bg-white border border-slate-100 rounded-2xl shadow-sm flex items-center justify-center text-slate-400 hover:bg-black hover:text-white hover:border-black hover:-translate-y-1 transition-all duration-300" title="Share ke X">
            <i class="fab fa-x-twitter text-xs"></i>
        </a>

        <button onclick="copyToClipboard('{{ request()->fullUrl() }}')" class="w-10 h-10 bg-white border border-slate-100 rounded-2xl shadow-sm flex items-center justify-center text-slate-400 hover:bg-slate-800 hover:text-white hover:border-slate-800 hover:-translate-y-1 transition-all duration-300 cursor-pointer" title="Salin Link">
            <i class="fa-solid fa-link text-xs"></i>
        </button>
    </div>

    {{-- Back to Top (dengan ID & inisialisasi awal hidden/invisible) --}}
    <button id="back-to-top-btn" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed right-6 bottom-28 w-11 h-11 bg-blue-600 text-white rounded-2xl shadow-lg shadow-blue-200 flex items-center justify-center hover:bg-blue-700 hover:-translate-y-1 transition-all duration-500 z-[9998] cursor-pointer opacity-0 pointer-events-none translate-y-5" title="Kembali ke atas">
        <i class="fa-solid fa-chevron-up text-sm"></i>
    </button>

    {{-- ================================================================
         JAVASCRIPT UTILITY
    ================================================================ --}}
    @push('scripts')
    <script>
        /**
         * Fungsi Menyalin Tautan & Menampilkan Toast Alert
         */
        function copyToClipboard(text) {
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(text).then(() => {
                    showToast();
                }).catch(err => {
                    console.error('Gagal menyalin tautan: ', err);
                });
            } else {
                // Fallback untuk browser lawas
                const textArea = document.createElement("textarea");
                textArea.value = text;
                textArea.style.position = "fixed"; 
                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();
                try {
                    document.execCommand('copy');
                    showToast();
                } catch (err) {
                    console.error('Fallback gagl menyalin: ', err);
                }
                document.body.removeChild(textArea);
            }
        }

        function showToast() {
            // Hapus toast lama jika user klik berulang kali
            const oldToast = document.getElementById('clipboard-toast');
            if (oldToast) oldToast.remove();

            // Render toast element dengan Tailwind
            const toast = document.createElement('div');
            toast.id = 'clipboard-toast';
            toast.className = 'fixed bottom-10 left-1/2 transform -translate-x-1/2 bg-slate-900 text-white text-xs font-bold px-5 py-3 rounded-2xl shadow-xl z-[9999] flex items-center gap-2 transition-all duration-300 opacity-0 translate-y-2';
            toast.innerHTML = '<i class="fa-solid fa-circle-check text-emerald-400"></i> Link berhasil disalin ke clipboard!';
            
            document.body.appendChild(toast);

            // Trigger transisi masuk
            setTimeout(() => {
                toast.classList.remove('opacity-0', 'translate-y-2');
            }, 10);

            // Sembunyikan dan hapus toast setelah 2.5 detik
            setTimeout(() => {
                toast.classList.add('opacity-0', 'translate-y-2');
                setTimeout(() => toast.remove(), 300);
            }, 2500);
        }

        /**
         * Efek Dinamis Sinking/Tenggelam Sebelum Menyentuh Footer
         */
        document.addEventListener('DOMContentLoaded', function() {
            const floatingShare = document.getElementById('desktop-floating-share');
            const backToTop = document.getElementById('back-to-top-btn');
            const footer = document.querySelector('footer'); // Mengidentifikasi element tag footer aplikasi

            window.addEventListener('scroll', function() {
                const scrollY = window.scrollY;
                const windowHeight = window.innerHeight;
                const bodyHeight = document.documentElement.scrollHeight;
                const currentScrollBottom = scrollY + windowHeight;

                // Tentukan threshold aman / kapan tombol mulai tenggelam
                let isNearFooter = false;

                if (footer) {
                    const footerTopPosition = footer.getBoundingClientRect().top + scrollY;
                    // Sink jika jarak tombol mendekati batas atas footer
                    if (currentScrollBottom >= (footerTopPosition - 20)) {
                        isNearFooter = true;
                    }
                } else {
                    // Fallback jika tidak memakai tag <footer>, hitung jarak 350px dari dasar dokumen
                    if (bodyHeight - currentScrollBottom <= 350) {
                        isNearFooter = true;
                    }
                }

                // Kontrol State Floating Share (Desktop Kiri)
                if (floatingShare) {
                    if (isNearFooter) {
                        floatingShare.classList.add('opacity-0', 'pointer-events-none', 'translate-y-12');
                    } else {
                        floatingShare.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-12');
                    }
                }

                // Kontrol State Back to Top (Kanan Bawah)
                if (backToTop) {
                    // Muncul hanya jika sudah scroll lebih dari 400px DAN tidak berada di dekat footer
                    if (scrollY > 400 && !isNearFooter) {
                        backToTop.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-5');
                    } else {
                        backToTop.classList.add('opacity-0', 'pointer-events-none', 'translate-y-5');
                    }
                }
            });
        });
    </script>
    @endpush

</x-layout.app>