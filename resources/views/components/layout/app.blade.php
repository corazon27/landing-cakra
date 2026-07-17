@props([
    'title'            => 'Cakra Inovasi Digital — Jasa Pembuatan Website Profesional',
    'metaDescription'  => 'Jasa pembuatan website, sistem ERP custom, dan aplikasi bisnis untuk UMKM hingga perusahaan di Indonesia.',
    'canonical'        => url()->current(),
    'ogTitle'          => null,
    'ogDescription'    => null,
    'ogImage'          => null,
    'ogType'           => 'website',
    'noindex'          => false, // set true di halaman seperti /login, /admin, dst
])
 
@php
    $resolvedOgTitle       = $ogTitle ?? $title;
    $resolvedOgDescription = $ogDescription ?? $metaDescription;
    $resolvedOgImage       = $ogImage ?? asset('images/default-og-cakra.jpg');
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    {{-- ============================================================
         CHARSET & VIEWPORT — WAJIB paling atas
    ============================================================ --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @php
        $needsLivewire = request()->routeIs('front.artikel.detail');
    @endphp

    <script>
        (function() {
            var gtmLoaded = false;

            function loadGTM() {
                if (gtmLoaded) return;
                gtmLoaded = true;
                (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-M3RKNXRG');
            }

            var triggerEvents = ['scroll', 'mousemove', 'touchstart', 'keydown', 'click'];
            triggerEvents.forEach(function(evt) {
                window.addEventListener(evt, loadGTM, { once: true, passive: true });
            });

            window.addEventListener('DOMContentLoaded', function() {
                setTimeout(loadGTM, 5000);
            });
        })();
    </script>

    {{-- ================================================================
         CORE SEO META
    ================================================================ --}}
    <title>{{ isset($title) ? $title : 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}</title>
    <meta name="description"
        content="{{ $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional: website automasi bisnis, kasir digital, point of sale, stok gudang, sistem manajemen bisnis, katalog, company profile, toko online, dan lainnya. Hubungi kami sekarang.' }}">
    <meta name="keywords"
        content="{{ $metaKeywords ?? 'jasa pembuatan website, web developer, website profesional, website automasi bisnis, website erp, katalog produk, kasir digital, point of sale, company profile, Magelang, Jawa Tengah' }}">
    <meta name="author" content="Cakra Inovasi Digital">
    <meta name="robots" content="{{ $metaRobots ?? 'index, follow' }}">
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}">

    {{-- ================================================================
         OPEN GRAPH — Dinamis per Halaman
    ================================================================ --}}
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:site_name" content="Cakra Inovasi Digital">
    <meta property="og:locale" content="id_ID">
    <meta property="og:url" content="{{ $canonicalUrl ?? url()->current() }}">
    <meta property="og:title"
        content="{{ $ogTitle ?? $title ?? 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}">
    <meta property="og:description"
        content="{{ $ogDescription ?? $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional untuk bisnis Anda.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta property="og:image:width" content="{{ $ogImageWidth ?? '1200' }}">
    <meta property="og:image:height" content="{{ $ogImageHeight ?? '630' }}">
    <meta property="og:image:alt" content="{{ $ogTitle ?? $title ?? 'Cakra Inovasi Digital' }}">

    {{-- ================================================================
         TWITTER CARD
    ================================================================ --}}
    <meta name="twitter:card" content="{{ $twitterCard ?? 'summary_large_image' }}">
    <meta name="twitter:site" content="@CakraInovasiDig">
    <meta name="twitter:creator" content="@CakraInovasiDig">
    <meta name="twitter:title"
        content="{{ $ogTitle ?? $title ?? 'Jasa Pembuatan Website Profesional | Cakra Inovasi Digital' }}">
    <meta name="twitter:description"
        content="{{ $ogDescription ?? $metaDescription ?? 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional untuk bisnis Anda.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('images/og-image.png') }}">
    <meta name="twitter:image:alt" content="{{ $ogTitle ?? $title ?? 'Cakra Inovasi Digital' }}">

    {{-- ================================================================
         SCHEMA.ORG — ProfessionalService (Global)
    ================================================================ --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "{{ url('/') }}/#business",
        "name": "Cakra Inovasi Digital",
        "alternateName": "CV Cakra Inovasi Digital",
        "url": "{{ url('/') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('images/logo-cakra.png') }}",
            "width": 200,
            "height": 200
        },
        "image": "{{ asset('images/og-image.png') }}",
        "description": "Jasa pembuatan website profesional meliputi company profile, katalog produk, kasir digital, dan website sistem manajemen bisnis (ERP). Berbasis di Magelang, Jawa Tengah.",
        "telephone": "+6285865405330",
        "email": "info@cakrainovasidigital.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Slamet Riyadi No. 250",
            "addressLocality": "Magelang",
            "addressRegion": "Jawa Tengah",
            "postalCode": "57511",
            "addressCountry": "ID"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -7.6928,
            "longitude": 110.8421
        },
        "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "17:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "08:00",
                "closes": "14:00"
            }
        ],
        "priceRange": "Rp",
        "currenciesAccepted": "IDR",
        "paymentAccepted": "Transfer Bank, QRIS",
        "areaServed": {
            "@type": "Country",
            "name": "Indonesia"
        },
        "serviceType": [
            "Pembuatan Website Kasir Digital / Point of Sale (POS)",
            "Pembuatan Website Company Profile",
            "Pembuatan Website Katalog Produk",
            "Pembuatan Website Sistem Manajemen Bisnis (ERP)"
        ],
        "sameAs": [
            "https://www.instagram.com/cakrainovasidigital.id/",
            "https://www.linkedin.com/in/cakra-inovasi-digital-9141943b3/",
            "https://www.facebook.com/cakrainovasidigital",
            "https://x.com/CakraInovasiDig"
        ]
    }
    </script>

    {{-- ================================================================
         SCHEMA.ORG — WebSite (Global)
    ================================================================ --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id": "{{ url('/') }}/#website",
        "url": "{{ url('/') }}",
        "name": "Cakra Inovasi Digital",
        "description": "Jasa pembuatan website profesional untuk bisnis Anda.",
        "inLanguage": "id-ID",
        "publisher": {
            "@id": "{{ url('/') }}/#business"
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "{{ url('/artikel') }}?search={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    {{-- ================================================================
         SCHEMA.ORG — BreadcrumbList (Otomatis & Dinamis dari Controller)
    ================================================================ --}}
    @if(!empty($breadcrumbs) && is_array($breadcrumbs))
        @php
            $breadcrumbItems = [[
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Beranda',
                'item' => url('/'),
            ]];
            
            foreach ($breadcrumbs as $index => $crumb) {
                $breadcrumbItems[] = [
                    '@type' => 'ListItem',
                    'position' => $index + 2,
                    'name' => $crumb['name'],
                    'item' => $crumb['url'],
                ];
            }
            
            $breadcrumbSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => $breadcrumbItems,
            ];
        @endphp
        <script type="application/ld+json">
        {!! json_encode($breadcrumbSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
        </script>
    @endif

    @stack('schema')

    {{-- ============================================================
         FAVICON & PRECONNECT
    ============================================================ --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.webp') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <link rel="preload" as="image"
        href="{{ $heroImageMobile ?? asset('images/hero-beranda1-mobile.webp') }}"
        media="(max-width: 1023px)"
        fetchpriority="high">
    <link rel="preload" as="image"
        href="{{ $heroImage ?? asset('images/hero-beranda1.webp') }}"
        media="(min-width: 1024px)"
        fetchpriority="high">

    {{-- ============================================================
         PERBAIKAN (Font display + Reduce unused CSS): preload font
         icon SUBSET lokal (bukan CDN lagi) — cuma ~170 glyph yang
         benar-benar dipakai, jauh lebih kecil dari full font CDN.
    ============================================================ --}}
    <link rel="preload" as="font" type="font/woff2"
        href="{{ asset('fonts/fontawesome/fa-solid-900.woff2') }}"
        crossorigin>
    <link rel="preload" as="font" type="font/woff2"
        href="{{ asset('fonts/fontawesome/fa-brands-400.woff2') }}"
        crossorigin>

    {{-- ============================================================
         CSS pihak ketiga — Non-blocking
    ============================================================ --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    </noscript>

    {{-- ============================================================
         PERBAIKAN (Reduce unused CSS / font payload): override sumber
         font FontAwesome ke file SUBSET lokal (hasil `subset-fa.cjs`).
         CSS aturan class (.fa-rocket:before, dll) tetap dari CDN di
         atas — cuma FILE FONT-nya yang dialihkan ke versi ringkas ini.
         Ditaruh SETELAH link CDN supaya deklarasi ini yang menang
         (font-face terakhir untuk family+weight yang sama akan dipakai
         browser, terlepas dari kapan resource-nya selesai di-load).
    ============================================================ --}}
    <style>
    @font-face {
        font-family: 'Font Awesome 6 Free';
        font-style: normal;
        font-weight: 900;
        font-display: block;
        src: url('{{ asset('fonts/fontawesome/fa-solid-900.woff2') }}') format('woff2');
    }
    @font-face {
        font-family: 'Font Awesome 6 Brands';
        font-style: normal;
        font-weight: 400;
        font-display: block;
        src: url('{{ asset('fonts/fontawesome/fa-brands-400.woff2') }}') format('woff2');
    }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" media="print"
        onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    </noscript>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    </noscript>

    <style>
    .font-heading {
        font-family: 'Montserrat', sans-serif;
    }

    body {
        font-family: 'Inter', sans-serif;
    }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if($needsLivewire)
        @livewireStyles
    @endif

    @stack('styles')

</head>

<body class="bg-white text-slate-900 antialiased max-w-full overflow-x-hidden">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3RKNXRG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <x-navbar />

    <main id="main-content" tabindex="-1">
        {{ $slot }}
    </main>

    <x-whatsapp-widget />

    <x-footer />

    <script defer src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
    function initAOSWhenIdle() {
        if (typeof AOS === 'undefined') return;
        const init = () => AOS.init({
            duration: 800,
            once: true,
            mirror: false,
            offset: 50,
            debounceDelay: 50,
            throttleDelay: 99
        });

        if ('requestIdleCallback' in window) {
            requestIdleCallback(init, { timeout: 1500 });
        } else {
            setTimeout(init, 1500);
        }
    }

    document.addEventListener('DOMContentLoaded', initAOSWhenIdle);

    function copyToClipboard(text) {
        navigator.clipboard.writeText(text)
            .then(function() {
                const toast = document.getElementById('copy-toast');
                if (toast) {
                    toast.classList.remove('opacity-0', 'translate-y-4');
                    toast.classList.add('opacity-100', 'translate-y-0');
                    setTimeout(() => {
                        toast.classList.add('opacity-0', 'translate-y-4');
                        toast.classList.remove('opacity-100', 'translate-y-0');
                    }, 2500);
                }
            })
            .catch(function(err) {
                console.error('Gagal menyalin link:', err);
            });
    }
    </script>

    @stack('scripts')
    @if($needsLivewire)
        @livewireScripts
    @endif

    <div id="copy-toast" class="fixed bottom-8 left-1/2 -translate-x-1/2 z-[9999]
                bg-slate-900 text-white text-sm font-semibold
                px-6 py-3 rounded-2xl shadow-2xl
                flex items-center gap-2.5
                opacity-0 translate-y-4
                transition-all duration-300 pointer-events-none">
        <i class="fa-solid fa-circle-check text-emerald-400"></i>
        Link berhasil disalin!
    </div>

</body>

</html>