@php
    // --- Konfigurasi Metadata & SEO ---
    $title = 'Cakra Inovasi Digital | Solusi Transformasi Digital UMKM';
    $metaDescription = 'Cakra Inovasi Digital menyediakan jasa pembuatan website profesional, toko online, sistem POS (Kasir Digital), dan solusi ERP kustom untuk UMKM. Tingkatkan level bisnis Anda dengan teknologi modern, harga transparan, dan dukungan purna jual terpercaya.';
    $metaKeywords = 'jasa pembuatan website profesional, website UMKM premium, toko online kustom, company profile modern, sistem kasir digital POS, ERP UMKM, web developer Magelang, solusi digital Jawa Tengah';
    $ogType = 'website';

    // --- WhatsApp helper (satu sumber nomor & suffix) ---
    $waNumber = '6285865405330';
    $waSuffix = $suffix ?? '';
    $wa = fn (string $msg) => 'https://wa.me/' . $waNumber . '?text=' . urlencode($msg . $waSuffix);

    // --- Data ---
    $services = [
        [
            'title' => 'Katalog Produk Digital Premium',
            'desc' => 'Transformasikan brosur fisik menjadi platform digital interaktif. Pelanggan mengakses seluruh koleksi Anda instan via tautan unik, tanpa beban pengiriman foto manual.',
            'icon' => '🛍️',
            'features' => ['Visibilitas Profesional di Google', 'Distribusi Tautan Mudah', 'Manajemen Harga Real-time'],
            'color_theme' => 'blue',
            'delay' => '150',
        ],
        [
            'title' => 'Sistem Kasir Digital (POS) Terintegrasi',
            'desc' => 'Modernisasi operasional dengan POS berbasis cloud. Tinggalkan pencatatan manual; kelola pesanan, cetak struk, dan pantau inventaris otomatis secara real-time.',
            'icon' => '💳',
            'features' => ['Pelaporan Laba-Rugi Otomatis', 'Manajemen Stok Multi-Lokasi', 'Dukungan Printer Thermal Bluetooth'],
            'color_theme' => 'emerald',
            'delay' => '300',
        ],
        [
            'title' => 'Solusi Kelola Bisnis (ERP) Kustom',
            'desc' => 'Pusat kendali operasional komprehensif. Integrasikan laporan keuangan, data karyawan, hingga manajemen proyek dalam satu dashboard yang efisien dan aman.',
            'icon' => '🚀',
            'features' => ['Keamanan Data Tingkat Tinggi', 'Eliminasi Kalkulasi Manual', 'Pemantauan Progres Bisnis Terpusat'],
            'color_theme' => 'orange',
            'delay' => '450',
        ],
    ];

    $serviceColorMap = [
        'blue' => ['bg' => 'bg-blue-50/70', 'border' => 'border-blue-100', 'icon_text' => 'text-blue-600', 'icon_bg' => 'bg-blue-100'],
        'emerald' => ['bg' => 'bg-emerald-50/70', 'border' => 'border-emerald-100', 'icon_text' => 'text-emerald-600', 'icon_bg' => 'bg-emerald-100'],
        'orange' => ['bg' => 'bg-orange-50/70', 'border' => 'border-orange-100', 'icon_text' => 'text-orange-600', 'icon_bg' => 'bg-orange-100'],
    ];

    $steps = [
        ['icon' => 'fa-comments', 'color' => 'blue', 'title' => 'Konsultasi Strategis', 'sub' => 'Eksplorasi Kebutuhan Gratis', 'detail' => 'Analisis mendalam visi bisnis Anda. Kami menyusun cetak biru solusi digital yang paling efektif dan efisien.'],
        ['icon' => 'fa-pencil-ruler', 'color' => 'emerald', 'title' => 'Desain UI/UX Kustom', 'sub' => 'Estetika & Fungsionalitas', 'detail' => 'Perancangan maket visual yang merefleksikan identitas brand Anda, fokus pada pengalaman pengguna yang intuitif.'],
        ['icon' => 'fa-code', 'color' => 'orange', 'title' => 'Pengembangan Sistem', 'sub' => 'Kode Bersih & Modern', 'detail' => 'Proses coding menggunakan framework terkini, memastikan performa tinggi, keamanan, dan kemudahan skalabilitas.'],
        ['icon' => 'fa-vials', 'color' => 'indigo', 'title' => 'Uji Coba & Penjaminan Mutu', 'sub' => 'Teliti Sebelum Rilis', 'detail' => 'Pengujian komprehensif di berbagai perangkat untuk memastikan sistem bebas bug dan beroperasi sempurna.'],
        ['icon' => 'fa-rocket', 'color' => 'violet', 'title' => 'Peluncuran & Pelatihan', 'sub' => 'Go-Live & Transfer Ilmu', 'detail' => 'Website resmi mengudara, diikuti pelatihan intensif agar tim Anda mandiri mengoperasikan sistem.'],
        ['icon' => 'fa-headset', 'color' => 'sky', 'title' => 'Dukungan Berkelanjutan', 'sub' => 'Mitra Purna Jual Tepercaya', 'detail' => 'Pendampingan teknis siaga, pemeliharaan server, dan konsultasi fitur baru untuk pertumbuhan bisnis Anda.'],
    ];

    $colorMap = [
        'blue' => ['ring' => 'ring-blue-200', 'bg' => 'bg-blue-100', 'icon' => 'text-blue-600', 'badge' => 'bg-blue-600', 'hover' => 'group-hover:bg-blue-600', 'hoverbg' => 'group-hover:bg-blue-50', 'text_hover' => 'group-hover:text-blue-700'],
        'emerald' => ['ring' => 'ring-emerald-200', 'bg' => 'bg-emerald-100', 'icon' => 'text-emerald-600', 'badge' => 'bg-emerald-600', 'hover' => 'group-hover:bg-emerald-600', 'hoverbg' => 'group-hover:bg-emerald-50', 'text_hover' => 'group-hover:text-emerald-700'],
        'orange' => ['ring' => 'ring-orange-200', 'bg' => 'bg-orange-100', 'icon' => 'text-orange-600', 'badge' => 'bg-orange-600', 'hover' => 'group-hover:bg-orange-600', 'hoverbg' => 'group-hover:bg-orange-50', 'text_hover' => 'group-hover:text-orange-700'],
        'indigo' => ['ring' => 'ring-indigo-200', 'bg' => 'bg-indigo-100', 'icon' => 'text-indigo-600', 'badge' => 'bg-indigo-600', 'hover' => 'group-hover:bg-indigo-600', 'hoverbg' => 'group-hover:bg-indigo-50', 'text_hover' => 'group-hover:text-indigo-700'],
        'violet' => ['ring' => 'ring-violet-200', 'bg' => 'bg-violet-100', 'icon' => 'text-violet-600', 'badge' => 'bg-violet-600', 'hover' => 'group-hover:bg-violet-600', 'hoverbg' => 'group-hover:bg-violet-50', 'text_hover' => 'group-hover:text-violet-700'],
        'sky' => ['ring' => 'ring-sky-200', 'bg' => 'bg-sky-100', 'icon' => 'text-sky-600', 'badge' => 'bg-sky-600', 'hover' => 'group-hover:bg-sky-600', 'hoverbg' => 'group-hover:bg-sky-50', 'text_hover' => 'group-hover:text-sky-700'],
    ];

    $usp = [
        ['icon' => 'fa-code', 'color' => 'blue', 'title' => 'Teknologi Modern & Stabil', 'desc' => 'Dibangun dengan framework terkini (Laravel/Tailwind) memastikan performa tinggi, keamanan maksimal, dan kemudahan skalabilitas.'],
        ['icon' => 'fa-mobile-screen', 'color' => 'emerald', 'title' => 'Responsif & User-Centric', 'desc' => 'Desain adaptif yang sempurna diakses dari HP, tablet, maupun desktop, fokus pada pengalaman pengguna yang intuitif.'],
        ['icon' => 'fa-tags', 'color' => 'orange', 'title' => 'Harga Transparan & Adil', 'desc' => 'Struktur biaya jelas sejak awal sesuai kontrak kesepakatan, tanpa kejutan biaya tersembunyi di tengah jalan.'],
        ['icon' => 'fa-headset', 'color' => 'purple', 'title' => 'Garansi Support Purna Jual', 'desc' => 'Dukungan teknis siaga pasca peluncuran, memastikan sistem Anda beroperasi prima tanpa kendala berkelanjutan.'],
        ['icon' => 'fa-server', 'color' => 'rose', 'title' => 'Infrastruktur Cloud Handal', 'desc' => 'Jaminan uptime server tinggi dan backup data rutin untuk keamanan dan ketersediaan sistem bisnis Anda.'],
        ['icon' => 'fa-earth-asia', 'color' => 'cyan', 'title' => 'Jangkauan Layanan Nasional', 'desc' => 'Koordinasi digital yang efisien memungkinkan kami melayani mitra UMKM profesional dari seluruh penjuru Indonesia.'],
    ];

    $uspColorMap = [
        'blue' => ['icon_text' => 'text-blue-400', 'icon_bg' => 'bg-blue-500/10', 'border' => 'group-hover:border-blue-500/50'],
        'emerald' => ['icon_text' => 'text-emerald-400', 'icon_bg' => 'bg-emerald-500/10', 'border' => 'group-hover:border-emerald-500/50'],
        'orange' => ['icon_text' => 'text-orange-400', 'icon_bg' => 'bg-orange-500/10', 'border' => 'group-hover:border-orange-500/50'],
        'purple' => ['icon_text' => 'text-purple-400', 'icon_bg' => 'bg-purple-500/10', 'border' => 'group-hover:border-purple-500/50'],
        'rose' => ['icon_text' => 'text-rose-400', 'icon_bg' => 'bg-rose-500/10', 'border' => 'group-hover:border-rose-500/50'],
        'cyan' => ['icon_text' => 'text-cyan-400', 'icon_bg' => 'bg-cyan-500/10', 'border' => 'group-hover:border-cyan-500/50'],
    ];

    // Testimoni dirender server-side (bukan lewat JS) agar teksnya ada di HTML awal.
    // $testimonials = [
    //     ['name' => 'Bu Hj. Nurhasanah', 'role' => 'Pemilik Toko Berkah (POS)', 'initials' => 'HN', 'bg' => 'bg-blue-50/40', 'border' => 'border-blue-100', 'quote' => 'text-blue-400', 'avatar' => 'bg-blue-600', 'content' => 'Awalnya saya gaptek banget, takut pakai sistem kasir karena mikirnya bakal ribet. Tapi tim Cakra sabar banget ngajarin pelan-pelan sampai saya bisa operasikan sendiri. Alhamdulillah, sekarang pembukuan rapi.'],
    //     ['name' => 'Siska Amelia', 'role' => 'Owner Butik Siska (Katalog Digital)', 'initials' => 'SA', 'bg' => 'bg-orange-50/40', 'border' => 'border-orange-100', 'quote' => 'text-orange-400', 'avatar' => 'bg-orange-600', 'content' => 'Katalog digitalnya bikin jualan di WA jadi lebih profesional. Pelanggan tinggal pilih barang dari katalog, nggak perlu kirim foto manual satu-satu lagi. Hemat waktu banget!'],
    //     ['name' => 'Hendra Wijaya', 'role' => 'Manajer Operasional (Sistem ERP)', 'initials' => 'HW', 'bg' => 'bg-emerald-50/40', 'border' => 'border-emerald-100', 'quote' => 'text-emerald-400', 'avatar' => 'bg-emerald-600', 'content' => 'Dulu pusing kalau mau cek stok di gudang dan laporan keuangan karena datanya kepisah-pisah. Sekarang semua sudah nyambung jadi satu sistem ERP, kerjaan jadi jauh lebih ringan, rapi, dan terkontrol.'],
    //     ['name' => 'Andi Wijaya', 'role' => 'Distributor Material (Inventory POS)', 'initials' => 'AW', 'bg' => 'bg-blue-50/40', 'border' => 'border-blue-100', 'quote' => 'text-blue-400', 'avatar' => 'bg-blue-600', 'content' => 'Sistem stoknya real-time banget. Saya bisa pantau keluar masuk barang di gudang dari luar kota cuma modal HP saja. Sangat membantu kontrol bisnis jarak jauh buat UMKM yang dinamis.'],
    //     ['name' => 'Mas Rian', 'role' => 'Owner Laundry Express (Landing Page)', 'initials' => 'RS', 'bg' => 'bg-slate-50/50', 'border' => 'border-slate-100', 'quote' => 'text-slate-400', 'avatar' => 'bg-slate-600', 'content' => 'Cari vendor IT yang nggak nakutin soal harga itu susah buat UMKM. Di sini saya dapat landing page berkualitas premium dengan budget yang sangat bersahabat. Support-nya juga juara.'],
    //     ['name' => 'Fandi Ahmad', 'role' => 'Bengkel Motor Fandi (POS Service)', 'initials' => 'FA', 'bg' => 'bg-emerald-50/40', 'border' => 'border-emerald-100', 'quote' => 'text-emerald-400', 'avatar' => 'bg-emerald-500', 'content' => 'Data pelanggan jadi rapi. Dulu sering lupa jadwal servis rutin pelanggan, sekarang tinggal cek di sistem. Bengkel jadi terlihat lebih modern, dipercaya, dan pelanggan makin loyal.'],
    //     ['name' => 'Ibu Ratna', 'role' => 'Toko Sembako Jaya (POS Mobile)', 'initials' => 'IR', 'bg' => 'bg-blue-50/40', 'border' => 'border-blue-100', 'quote' => 'text-blue-400', 'avatar' => 'bg-blue-500', 'content' => 'Ditemenin sampai bisa pakai! Support-nya juara, kalau ada bingung soal input barang tinggal WA langsung dibantu sampai tuntas. Gak nyesel langganan di sini buat toko kecil saya.'],
    //     ['name' => 'H. Suherman', 'role' => 'Pemilik Pabrik Kerupuk (Sistem Operasional)', 'initials' => 'HS', 'bg' => 'bg-orange-50/40', 'border' => 'border-orange-100', 'quote' => 'text-orange-400', 'avatar' => 'bg-orange-700', 'content' => 'Sistemnya ngebantu banget buat mantau pengeluaran beli bahan baku sampai penjualan sales di lapangan. Jadi nggak ada lagi uang atau barang yang hilang tanpa catatan.'],
    // ];

    $techStack = [
        ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg', 'label' => 'Laravel', 'hover' => 'group-hover:text-red-600'],
        ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg', 'label' => 'Tailwind CSS', 'hover' => 'group-hover:text-cyan-500'],
        ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg', 'label' => 'CodeIgniter', 'hover' => 'group-hover:text-orange-600'],
        ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg', 'label' => 'React JS', 'hover' => 'group-hover:text-cyan-400'],
        ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg', 'label' => 'Node JS', 'hover' => 'group-hover:text-green-600'],
        ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg', 'label' => 'MySQL', 'hover' => 'group-hover:text-blue-600'],
        ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg', 'label' => 'JS Modern', 'hover' => 'group-hover:text-yellow-500'],
        ['src' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg', 'label' => 'PHP 8+', 'hover' => 'group-hover:text-indigo-600'],
    ];

    // Data FAQ untuk JSON-LD schema (teks polos). Versi tampilan (HTML kaya) ada di script bawah.
    $faqsData = [
        ['question' => 'Bagaimana tahapan pengerjaan proyek website di Cakra Inovasi Digital?', 'answer' => 'Kami bekerja melalui 6 tahap profesional: (1) Konsultasi Strategis untuk deal kontrak, (2) Desain UI/UX Kustom, (3) Pengembangan Sistem (Coding), (4) Uji Coba & Penjaminan Mutu (QA), (5) Peluncuran & Pelatihan, dan (6) Dukungan Berkelanjutan.'],
        ['question' => 'Apa saja yang saya dapatkan setelah website selesai dibuat?', 'answer' => 'Anda menerima paket siap operasional penuh: akses Dashboard Admin/Kasir, kepemilikan Domain (.com/.id) aktif 1 tahun, Cloud Hosting aktif 1 tahun, sertifikat SSL (HTTPS) untuk keamanan, serta video panduan operasional lengkap.'],
        ['question' => 'Bagaimana sistem pembayaran jasa pembuatan website?', 'answer' => 'Kami menggunakan sistem pembayaran 3 termin transparan: Termin 1 (DP) saat penandatanganan kontrak, Termin 2 (Progres) setelah desain UI/UX disetujui dan masuk tahap coding, serta Termin 3 (Pelunasan) setelah website selesai diuji dan siap diluncurkan.'],
        ['question' => 'Apakah ada layanan after sales setelah website jadi?', 'answer' => 'Ya, sangat ada. Kami menyediakan garansi perbaikan bug/error, konsultasi teknis siaga, pemantauan performa server, backup data rutin, serta pembaruan panduan jika ada fitur baru.'],
        ['question' => 'Berapa kali revisi yang dapat dilakukan?', 'answer' => 'Pada tahap Desain UI/UX, revisi minor dapat dilakukan sepuasnya hingga mencapai kesepakatan (deal). Pada tahap Coding, revisi mencakup penyesuaian fungsionalitas dan konten, bukan perubahan struktur fundamental desain.'],
        ['question' => 'Apakah website bisa diakses dan dikelola dari HP atau tablet?', 'answer' => 'Sangat bisa. Seluruh sistem kami berbasis web responsif modern, optimal diakses via Android, iOS, laptop, PC kasir, serta mendukung printer thermal Bluetooth maupun USB.'],
        ['question' => 'Apakah saya bisa update konten website sendiri setelah website jadi?', 'answer' => 'Ya, 100%. Kami menyediakan Dashboard Admin yang user-friendly (mudah digunakan), memungkinkan Anda menambah produk, artikel, galeri, atau mengubah harga layanan kapan saja tanpa memerlukan keahlian teknis.'],
        ['question' => 'Bagaimana jika saya atau karyawan kesulitan menggunakan sistem?', 'answer' => 'Kami memastikan tim Anda mandiri. Kami menyediakan video tutorial operasional lengkap, buku panduan dalam format PDF, serta konsultasi teknis siaga via WhatsApp untuk membantu kendala apa pun.'],
    ];
@endphp

<x-layout.app
    :title="$title"
    :meta-description="$metaDescription"
    :meta-keywords="$metaKeywords"
    :og-type="$ogType"
>

    {{-- Push FAQ Schema to Head --}}
    @push('schema')
    <x-faq-schema :faqs="$faqsData" />
    @endpush

    {{-- Sprite ikon inline: path SVG ditulis sekali, dipakai berkali-kali lewat <use>.
         Render bareng HTML (tanpa JS) -> tidak ada layout shift seperti FontAwesome. --}}
    <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
        <defs>
            <symbol id="i-wa" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32C101.5 32 1.9 131.6 1.9 254C1.9 293.1 12.1 331.3 31.5 365L0 480L117.7 449.1C150.1 466.8 186.7 476.1 224 476.1L224.1 476.1C346.4 476.1 448 376.5 448 254.1C448 194.8 422.8 139.1 380.9 97.1zM223.9 438.2C190.6 438.2 157.9 429.3 129.4 412.5L122.7 408.5L53.3 426.7L71.8 359L67.4 352C48.9 322.4 39.1 288.6 39.1 254C39.1 152 121.9 69.2 224 69.2C273.4 69.2 319.8 88.5 354.7 123.5C389.6 158.5 410.8 204.9 410.7 254.1C410.7 356.2 323.9 438.2 223.9 438.2zM322.4 300.8C316.9 298 289.6 284.6 284.5 282.8C279.4 280.9 275.7 280 272 285.5C268.3 291 257.9 303.3 254.6 307.1C251.3 310.8 248 311.3 242.5 308.5C209.3 291.9 187.5 278.8 165.6 241.2C159.8 231.2 171.4 231.9 182.2 210.3C184 206.6 183.1 203.4 181.7 200.6C180.3 197.8 169.3 170.5 164.7 159.5C160.2 148.8 155.6 150.3 152.2 150.1C149 149.9 145.3 149.9 141.6 149.9C137.9 149.9 131.9 151.3 126.8 156.8C121.7 162.3 107.4 175.7 107.4 203C107.4 230.3 127.3 256.7 130.1 260.4C132.9 264.1 169.1 320.1 224.7 344.2C258.3 358.8 271.6 360 288.6 357.5C299 356 320.7 344.3 325.3 331.4C329.8 318.5 329.8 307.5 328.4 305.2C327.1 302.7 323.4 301.3 317.8 298.6L322.4 300.8z"/></symbol>
            <symbol id="i-arrow" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></symbol>
            <symbol id="i-check" viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></symbol>
            <symbol id="i-rocket" viewBox="0 0 512 512"><path d="M156.6 384.9L125.7 353.9C117.9 346.2 116.5 334.2 122.3 324.9L153.5 274.7C121.9 226.9 96 167.4 96 100.8C96 47.9 143.9 0 196.8 0C263.4 0 322.9 25.9 370.7 57.5L420.9 26.3C430.2 20.5 442.2 21.9 449.9 29.7L480.9 60.7C488.6 68.4 490 80.4 484.2 89.7L452.9 139.9C481.1 187.7 512 251.6 512 315.2C512 368.1 464.1 416 411.2 416C344.6 416 285.1 390.1 237.3 358.5L187.1 389.7C177.8 395.5 165.8 394.1 158.1 386.3L156.6 384.9zM96 336C43 336 0 379 0 432C0 458.5 21.5 480 48 480C74.5 480 96 458.5 96 432L96 336z"/></symbol>
        </defs>
    </svg>

    {{-- Catatan: layout sudah membungkus $slot dengan <main id="main-content">,
         jadi di sini memakai <div> (satu halaman hanya boleh punya satu <main>). --}}
    <div>
        {{-- ================================================================
             SECTION 1: HERO
             Animasi masuk memakai CSS murni (class .hero-rise), BUKAN AOS:
             jalan seketika saat halaman tampil, tidak menunggu JS, dan
             tidak menunda LCP.
        ================================================================ --}}
        <header class="relative pt-24 md:pt-32 pb-16 md:pb-24 overflow-hidden" aria-labelledby="hero-heading">
            <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">
                <picture class="absolute inset-0 w-full h-full lg:inset-auto lg:right-8 lg:top-1/2 lg:-translate-y-1/2 lg:w-[70%] lg:h-[70%]">
                    <source srcset="{{ asset('images/hero-beranda1-mobile.webp') }}" media="(max-width: 1023px)">
                    <img
                        src="{{ asset('images/hero-beranda1.webp') }}"
                        alt=""
                        aria-hidden="true"
                        decoding="async"
                        loading="eager"
                        fetchpriority="high"
                        width="1200"
                        height="800"
                        class="w-full h-full object-cover object-center lg:object-contain lg:object-right"
                    >
                </picture>
            </div>

            <div class="absolute inset-0 bg-white/80 md:bg-white/10 backdrop-blur-[2px] md:backdrop-blur-none pointer-events-none"
                aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-5 lg:px-10 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                    <div class="w-full lg:col-span-7">
                        <span class="hero-rise inline-flex items-center gap-2 bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider"
                            style="--d:0ms">
                            <svg class="w-3.5 h-3.5 text-blue-600 shrink-0" fill="currentColor" aria-hidden="true"><use href="#i-rocket"/></svg>
                            Teman Tumbuh UMKM Indonesia
                        </span>

                        {{-- H1: hanya transform (tanpa opacity) supaya tidak menunda LCP --}}
                        <h1 id="hero-heading"
                            class="hero-rise-t text-3xl sm:text-4xl lg:text-5xl font-extrabold mt-5 mb-5 leading-tight text-slate-950 font-heading"
                            style="--d:80ms">
                            Jasa Pembuatan Website<br>
                            <span class="text-blue-600 relative inline-block">
                                Profesional untuk UMKM
                                <span class="absolute -bottom-2 left-0 w-full h-1 bg-emerald-400 rounded-full" aria-hidden="true"></span>
                            </span>
                        </h1>

                        <p class="hero-rise text-base md:text-lg text-slate-700 mb-8 leading-relaxed max-w-2xl" style="--d:180ms">
                            Tingkatkan level bisnis Anda dengan kehadiran digital yang kuat. <strong>Cakra Inovasi Digital</strong>
                            menghadirkan solusi pembuatan website profesional, toko online, dan sistem kustom yang simpel,
                            transparan, dan dirancang khusus untuk pertumbuhan UMKM Indonesia.
                        </p>

                        <div class="hero-rise flex flex-col sm:flex-row gap-4 mb-10" style="--d:280ms">
                            <a href="{{ $wa('Halo Cakra Inovasi Digital, saya ingin konsultasi gratis soal pembuatan website untuk bisnis saya.') }}"
                                target="_blank" rel="noopener noreferrer"
                                class="btn-whatsapp-agen inline-flex items-center justify-center gap-2.5 bg-blue-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-700 transition duration-300 shadow-lg shadow-blue-200 text-sm md:text-base group"
                                data-agent="CS Kontak Utama">
                                <svg class="w-[18px] h-[18px] transition-transform group-hover:scale-110 shrink-0" fill="currentColor" aria-hidden="true"><use href="#i-wa"/></svg>
                                Konsultasi Strategis Gratis
                            </a>
                            <a href="#layanan"
                                class="inline-flex items-center justify-center gap-2 text-slate-800 font-semibold hover:text-blue-600 transition py-4 text-sm md:text-base group">
                                Jelajahi Layanan Kami
                                <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1 shrink-0" fill="currentColor" aria-hidden="true"><use href="#i-arrow"/></svg>
                            </a>
                        </div>

                        <div class="hero-rise flex flex-wrap items-center gap-5 md:gap-6 text-sm text-slate-600 border-t border-slate-200 pt-6"
                            style="--d:380ms">
                            @foreach (['Harga Transparan', 'Responsif Modern', 'Garansi Support Purna Jual'] as $badge)
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="currentColor" aria-hidden="true"><use href="#i-check"/></svg>
                                {{ $badge }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- ================================================================
             SECTION 2: LAYANAN
        ================================================================ --}}
        <section id="layanan" class="py-20 md:py-28 bg-white" aria-labelledby="layanan-heading">
            <div class="max-w-7xl mx-auto px-5 lg:px-10">

                <div class="text-center mb-16 md:mb-20" data-aos="fade-up">
                    <span class="inline-block text-blue-700 font-bold bg-blue-50 px-4 py-1.5 rounded-full text-xs uppercase tracking-wider">
                        Solusi Digital Komprehensif
                    </span>
                    <h2 id="layanan-heading"
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold mt-5 mb-5 text-slate-950 font-heading leading-tight">
                        Layanan Spesialis Kami
                    </h2>
                    <p class="text-slate-700 max-w-3xl mx-auto text-base md:text-lg leading-relaxed">
                        Kami mengelola kompleksitas teknologi agar Anda dapat fokus sepenuhnya pada pengembangan inti usaha.
                        Setiap layanan dirancang transparan, efisien, dan disesuaikan dengan kebutuhan unik UMKM.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 md:gap-10">
                    @foreach($services as $service)
                    @php $theme = $serviceColorMap[$service['color_theme']]; @endphp
                    <article
                        class="flex flex-col h-full p-8 md:p-10 rounded-3xl {{ $theme['bg'] }} border {{ $theme['border'] }} hover:shadow-2xl hover:shadow-slate-200/70 transition duration-500 group"
                        data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}">

                        <div class="flex items-center gap-5 mb-6">
                            <div class="w-16 h-16 flex items-center justify-center rounded-2xl {{ $theme['icon_bg'] }} text-4xl shadow-inner group-hover:scale-110 transition-transform duration-300"
                                aria-hidden="true">
                                {{ $service['icon'] }}
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-slate-950 font-heading leading-snug flex-1">
                                {{ $service['title'] }}
                            </h3>
                        </div>

                        <p class="text-slate-700 text-sm md:text-base leading-relaxed mb-8 flex-grow">
                            {{ $service['desc'] }}
                        </p>

                        <div class="border-t border-black/5 pt-6 mt-auto">
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-4">Fitur Unggulan:</p>
                            <ul class="text-sm text-slate-700 space-y-3" role="list">
                                @foreach($service['features'] as $feature)
                                <li class="flex items-center gap-3">
                                    <svg class="w-4 h-4 {{ $theme['icon_text'] }} shrink-0" fill="currentColor" aria-hidden="true"><use href="#i-check"/></svg>
                                    <span>{{ $feature }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                    @endforeach
                </div>

                <div class="text-center mt-12 md:mt-16" data-aos="fade-up">
                    <a href="/layanan"
                        class="inline-flex items-center gap-2.5 text-blue-600 font-semibold hover:text-blue-800 transition text-base md:text-lg group">
                        Lihat Semua Solusi Digital Kami
                        <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1.5" fill="currentColor" aria-hidden="true"><use href="#i-arrow"/></svg>
                    </a>
                </div>

            </div>
        </section>

        {{-- ================================================================
             SECTION 3: PROSES KERJA
        ================================================================ --}}
        <section id="proses-kerja" class="py-20 md:py-28 bg-[#FAF8F5] overflow-hidden" aria-labelledby="proses-kerja-heading">
            <div class="max-w-7xl mx-auto px-5 lg:px-10">

                <div class="text-center mb-16 md:mb-24" data-aos="fade-up">
                    <span class="inline-block bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5">
                        Transparansi &amp; Kolaborasi
                    </span>
                    <h2 id="proses-kerja-heading"
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-950 font-heading mb-5 leading-tight">
                        Bagaimana Kami Bekerja Bersama Anda?
                    </h2>
                    <p class="text-slate-700 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
                        Tanpa biaya tersembunyi. Dari konsultasi awal hingga peluncuran dan dukungan teknis, setiap tahapan
                        kami lakukan secara transparan dan berkolaborasi erat dengan Anda.
                    </p>
                </div>

                {{-- Desktop: Stepper Horizontal (md+) --}}
                <div class="hidden md:block relative">
                    <div class="absolute top-[52px] left-[5%] right-[5%] h-0.5 bg-slate-200 z-0" aria-hidden="true">
                        <div class="proses-progress-line h-full bg-gradient-to-r from-blue-500 via-emerald-500 to-blue-600 rounded-full w-0"></div>
                    </div>

                    <div class="grid grid-cols-6 gap-6 relative z-10">
                        @foreach($steps as $i => $step)
                        @php $c = $colorMap[$step['color']]; @endphp
                        <article class="group flex flex-col items-center text-center cursor-default" data-aos="fade-up"
                            data-aos-delay="{{ 150 + $i * 100 }}">
                            <div class="relative mb-8">
                                <span class="absolute -top-1.5 -right-1.5 w-6 h-6 rounded-full {{ $c['badge'] }} text-white text-[11px] font-extrabold flex items-center justify-center z-10 shadow-md">
                                    {{ $i + 1 }}
                                </span>
                                <div class="w-[104px] h-[104px] rounded-full {{ $c['bg'] }} {{ $c['ring'] }} ring-4 flex items-center justify-center {{ $c['hover'] }} transition-all duration-300 shadow-lg shadow-slate-100 group-hover:shadow-blue-100 group-hover:scale-105 group-hover:-translate-y-1">
                                    <i class="fa-solid {{ $step['icon'] }} text-3xl {{ $c['icon'] }} group-hover:text-white transition-colors duration-300" aria-hidden="true"></i>
                                </div>
                            </div>

                            <h3 class="font-bold text-slate-950 text-base mb-1.5 {{ $c['text_hover'] }} transition-colors font-heading">
                                {{ $step['title'] }}
                            </h3>
                            <p class="text-xs text-blue-700 mb-4 font-semibold uppercase tracking-wider">{{ $step['sub'] }}</p>

                            <div class="w-full max-h-0 overflow-hidden group-hover:max-h-32 transition-all duration-500 ease-in-out">
                                <div class="{{ $c['hoverbg'] }} rounded-2xl px-4 py-4 text-xs text-slate-700 leading-relaxed border border-slate-100 shadow-inner mt-2 transition-colors duration-300">
                                    {{ $step['detail'] }}
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>

                {{-- Mobile: Stepper Vertikal (<md) --}}
                <div class="md:hidden relative pl-12">
                    <div class="absolute left-[20px] top-0 bottom-0 w-0.5 bg-slate-200" aria-hidden="true">
                        <div class="proses-progress-line-v w-full bg-gradient-to-b from-blue-500 to-emerald-500 rounded-full h-0"></div>
                    </div>

                    @foreach($steps as $i => $step)
                    @php $c = $colorMap[$step['color']]; @endphp
                    <article class="relative flex gap-5 mb-8 last:mb-0" data-aos="fade-right" data-aos-delay="{{ $i * 100 }}">
                        <div class="absolute -left-12 top-1.5 w-10 h-10 rounded-full {{ $c['bg'] }} {{ $c['ring'] }} ring-4 flex items-center justify-center shrink-0 shadow-md z-10">
                            <i class="fa-solid {{ $step['icon'] }} text-base {{ $c['icon'] }}" aria-hidden="true"></i>
                        </div>

                        <div class="flex-1 bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
                            <div class="flex items-start gap-3 mb-2">
                                <span class="w-6 h-6 rounded-full {{ $c['badge'] }} text-white text-[11px] font-extrabold flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                                    {{ $i + 1 }}
                                </span>
                                <div>
                                    <h3 class="font-bold text-slate-950 text-base leading-tight font-heading">{{ $step['title'] }}</h3>
                                    <p class="text-[11px] text-blue-700 font-semibold mt-1 uppercase tracking-wider">{{ $step['sub'] }}</p>
                                </div>
                            </div>
                            <p class="text-sm text-slate-700 leading-relaxed pl-9 mt-3 border-l-2 border-slate-100">{{ $step['detail'] }}</p>
                        </div>
                    </article>
                    @endforeach
                </div>

                <div class="mt-16 md:mt-20 text-center border-t border-slate-200 pt-10" data-aos="fade-up">
                    <p class="text-slate-600 text-sm mb-5">Masih memiliki pertanyaan mengenai proses kolaborasi?</p>
                    <a href="{{ $wa('Halo Cakra Inovasi Digital, saya ingin tahu lebih lanjut soal proses pembuatan website.') }}"
                        target="_blank" rel="noopener noreferrer"
                        class="btn-whatsapp-agen inline-flex items-center gap-2.5 bg-emerald-500 text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm md:text-base group shadow-lg shadow-emerald-100"
                        data-agent="CS Kontak Utama">
                        <svg class="w-[18px] h-[18px] transition-transform group-hover:scale-110 shrink-0" fill="currentColor" aria-hidden="true"><use href="#i-wa"/></svg>
                        Diskusi Langsung via WhatsApp
                    </a>
                </div>
            </div>
        </section>

        {{-- SECTION PORTOFOLIO dinonaktifkan sementara (butuh data dinamis dari Controller). --}}

        {{-- ================================================================
             SECTION 5: KEUNGGULAN
        ================================================================ --}}
        <section id="keunggulan" class="py-20 md:py-28 bg-[#0A1931] text-white overflow-hidden relative" aria-labelledby="keunggulan-heading">
            <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/15 rounded-full blur-[128px] -translate-x-1/2 -translate-y-1/2 pointer-events-none" aria-hidden="true"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-500/15 rounded-full blur-[128px] translate-x-1/3 translate-y-1/3 pointer-events-none" aria-hidden="true"></div>

            <div class="max-w-7xl mx-auto px-5 lg:px-10 relative z-10">
                <div class="grid lg:grid-cols-12 gap-12 md:gap-16 items-center">

                    <div class="lg:col-span-5" data-aos="fade-right">
                        <span class="text-emerald-400 font-semibold tracking-wider uppercase text-xs md:text-sm mb-3 block">Mengapa Bermitra dengan Kami?</span>
                        <h2 id="keunggulan-heading"
                            class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-6 leading-tight text-white font-heading">
                            Keunggulan Kompetitif<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-emerald-400 to-blue-400">
                                Cakra Inovasi Digital
                            </span>
                        </h2>
                        <p class="text-slate-300 text-base md:text-lg mb-10 leading-relaxed max-w-xl">
                            Kami tidak sekadar membangun website. Kami bermitra untuk menciptakan ekosistem digital yang taktis,
                            efisien, dan dirancang khusus untuk mengakselerasi pertumbuhan bisnis UMKM Anda di era digital.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 mt-8 border-t border-slate-800 pt-8">
                            <a href="/hubungi-kami"
                                class="inline-flex items-center justify-center gap-2.5 px-8 py-4 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl transition-all shadow-lg shadow-blue-600/30 text-sm md:text-base group">
                                Mulai Konsultasi Strategis
                                <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1.5" fill="currentColor" aria-hidden="true"><use href="#i-arrow"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6 md:gap-8">
                        @foreach($usp as $i => $item)
                        @php $uColor = $uspColorMap[$item['color']]; @endphp
                        <article
                            class="group p-6 md:p-8 bg-slate-900/60 backdrop-blur-sm border border-slate-800 rounded-3xl transition-all duration-300 {{ $uColor['border'] }} hover:-translate-y-1.5 hover:shadow-xl hover:shadow-blue-500/10"
                            data-aos="fade-up" data-aos-delay="{{ 100 + $i * 100 }}">
                            <div class="w-12 h-12 {{ $uColor['icon_bg'] }} {{ $uColor['icon_text'] }} rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-inner"
                                aria-hidden="true">
                                <i class="fa-solid {{ $item['icon'] }} text-xl md:text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-bold mb-3 text-white font-heading">{{ $item['title'] }}</h3>
                            <p class="text-slate-400 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                        </article>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>

        {{-- ================================================================
             SECTION 6: TESTIMONI
             Carousel CSS scroll-snap + Alpine (tanpa Swiper): tidak ada klon
             slide, jarak antar kartu dikunci lewat `gap` CSS, jadi kartu
             tidak bisa menempel/tumpang tindih lagi.
        ================================================================ --}}
        <section id="testimoni" class="py-20 md:py-28 bg-white overflow-hidden" x-data="testimonialCarousel()"
            aria-labelledby="testimoni-heading">
            <div class="max-w-7xl mx-auto px-5 lg:px-10">

                <div class="text-center mb-16 md:mb-20" data-aos="fade-up">
                    <span class="inline-block text-emerald-700 font-bold bg-emerald-50 px-4 py-1.5 rounded-full text-xs uppercase tracking-wider mb-5">
                        Kisah Sukses Mitra
                    </span>
                    <h2 id="testimoni-heading"
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-950 font-heading leading-tight mb-5">
                        Cerita Nyata dari Klien Kami
                    </h2>
                    <p class="text-slate-700 mt-4 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
                        Bukan sekadar testimoni—bukti otentik dedikasi kami dalam mendampingi pertumbuhan bisnis UMKM
                        melalui solusi digital yang taktis.
                    </p>
                </div>

                <div
                    x-ref="track"
                    class="testimonial-track focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 rounded-3xl"
                    tabindex="0" role="region" aria-roledescription="carousel" aria-label="Testimoni klien"
                    @scroll.passive="onScroll()"
                    @mouseenter="stop()" @mouseleave="play()"
                    @touchstart.passive="stop()" @touchend.passive="play()">
                    @foreach($testimonials as $t)
                    <div class="testimonial-slide flex">
                        <article class="p-8 md:p-10 rounded-3xl border w-full flex flex-col relative transition-shadow duration-300 shadow-lg hover:shadow-xl hover:shadow-slate-100 {{ $t['bg'] }} {{ $t['border'] }}">
                            <div class="text-6xl absolute top-6 right-8 opacity-20 font-serif {{ $t['quote'] }}" aria-hidden="true">“</div>

                            <p class="text-slate-800 text-sm md:text-base italic leading-relaxed mb-8 flex-grow relative z-10">
                                {{ $t['content'] }}
                            </p>

                            <div class="flex items-center gap-4 mt-auto border-t border-black/5 pt-6 relative z-10">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-white shadow-md shrink-0 text-sm {{ $t['avatar'] }}"
                                    aria-hidden="true">{{ $t['initials'] }}</div>
                                <div class="overflow-hidden">
                                    <h3 class="font-bold text-slate-950 text-base truncate font-heading">{{ $t['name'] }}</h3>
                                    <p class="text-xs md:text-sm text-blue-800 font-medium truncate">{{ $t['role'] }}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>

                <div class="flex justify-center items-center gap-4 mt-2" role="group" aria-label="Navigasi testimoni">
                    <button type="button" @click="prev()" aria-label="Testimoni sebelumnya"
                        class="w-9 h-9 rounded-full border border-slate-200 bg-white text-slate-600 hover:text-blue-600 hover:border-blue-300 flex items-center justify-center transition cursor-pointer">
                        <svg class="w-3 h-3 rotate-180" fill="currentColor" aria-hidden="true"><use href="#i-arrow"/></svg>
                    </button>

                    <div class="flex items-center gap-3">
                        <template x-for="i in dots" :key="i">
                            <button type="button" @click="goTo(i - 1)"
                                :aria-label="'Lihat testimoni ' + i" :aria-current="index === i - 1 ? 'true' : 'false'"
                                class="h-3 rounded-full border-2 border-white shadow-sm transition-all duration-300 cursor-pointer"
                                :class="index === i - 1 ? 'w-8 bg-blue-600' : 'w-3 bg-slate-300 hover:bg-slate-400'"></button>
                        </template>
                    </div>

                    <button type="button" @click="next()" aria-label="Testimoni berikutnya"
                        class="w-9 h-9 rounded-full border border-slate-200 bg-white text-slate-600 hover:text-blue-600 hover:border-blue-300 flex items-center justify-center transition cursor-pointer">
                        <svg class="w-3 h-3" fill="currentColor" aria-hidden="true"><use href="#i-arrow"/></svg>
                    </button>
                </div>

            </div>
        </section>

        {{-- ================================================================
             SECTION 7: TEKNOLOGI
        ================================================================ --}}
        <section id="teknologi" class="py-20 md:py-28 bg-[#FAF8F5] overflow-hidden" aria-labelledby="teknologi-heading">
            <div class="max-w-7xl mx-auto px-5 lg:px-10">

                <div class="text-center mb-16 md:mb-20" data-aos="fade-up">
                    <span class="inline-block bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-5">
                        Pondasi Digital Kokoh
                    </span>
                    <h2 id="teknologi-heading"
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold mt-4 mb-5 text-slate-950 font-heading leading-tight">
                        Stack Teknologi Modern &amp; Stabil
                    </h2>
                    <p class="text-slate-700 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
                        Kami menggunakan kombinasi teknologi terkini dan teruji untuk memastikan website Anda berjalan cepat,
                        aman, responsif, dan mudah dikembangkan di masa depan.
                    </p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-5 md:gap-6" data-aos="fade-up" data-aos-delay="200">
                    @foreach($techStack as $tech)
                    <div class="group p-6 bg-white rounded-3xl shadow-sm hover:shadow-xl hover:shadow-slate-100 hover:-translate-y-2 transition-all duration-300 flex flex-col items-center justify-center border border-slate-100">
                        {{-- alt kosong: nama teknologi sudah ada di label teks di bawahnya --}}
                        <img src="{{ $tech['src'] }}" alt="" loading="lazy" decoding="async" width="48" height="48"
                            class="w-10 h-10 md:w-12 md:h-12 mb-4 grayscale group-hover:grayscale-0 transition-all duration-300">
                        <span class="text-xs font-bold text-slate-500 {{ $tech['hover'] }} transition-colors text-center leading-tight uppercase tracking-wider">
                            {{ $tech['label'] }}
                        </span>
                    </div>
                    @endforeach
                </div>

                <div class="mt-16 md:mt-20 p-8 md:p-10 bg-blue-600 rounded-3xl text-white flex flex-col md:flex-row items-center justify-between gap-6 md:gap-10 shadow-xl shadow-blue-100"
                    data-aos="zoom-in">
                    <div class="flex items-center gap-5 text-center md:text-left">
                        <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center text-3xl shrink-0 shadow-inner" aria-hidden="true">🚀</div>
                        <div>
                            <h3 class="font-bold text-base md:text-lg font-heading">Selalu Up-to-Date dengan Inovasi Teknologi</h3>
                            <p class="text-blue-100 text-sm mt-1 leading-relaxed max-w-xl">Kami menjamin sistem Anda dibangun menggunakan versi teknologi terkini yang stabil, aman, dan berkinerja tinggi.</p>
                        </div>
                    </div>
                    <a href="{{ url('/portofolio') }}"
                        class="whitespace-nowrap w-full md:w-auto text-center bg-white text-blue-600 px-6 py-3 rounded-xl font-bold text-sm md:text-base hover:bg-blue-50 transition duration-300 shadow-md">
                        Lihat Hasil Kinerja Kami
                    </a>
                </div>

            </div>
        </section>

        {{-- ================================================================
             SECTION 8: FAQ
        ================================================================ --}}
        <section id="faq" class="py-20 md:py-28 bg-white" x-data="faqSection()" aria-labelledby="faq-heading">
            <div class="max-w-4xl mx-auto px-5 lg:px-10">

                <div class="text-center mb-16 md:mb-20" data-aos="fade-up">
                    <span class="inline-block text-blue-700 font-bold bg-blue-50 px-4 py-1.5 rounded-full text-xs uppercase tracking-wider mb-5">
                        Pusat Informasi
                    </span>
                    <h2 id="faq-heading"
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-950 font-heading mb-5 leading-tight">
                        Pertanyaan Seputar <span class="text-blue-600">Jasa Kami</span>
                    </h2>
                    <p class="text-slate-700 max-w-2xl mx-auto text-base md:text-lg leading-relaxed">
                        Temukan jawaban cepat atas pertanyaan yang sering diajukan mengenai proses kerja, fasilitas, dan dukungan kami sebelum memulai kerja sama.
                    </p>
                </div>

                <div class="space-y-4 md:space-y-5" data-aos="fade-up" data-aos-delay="100">
                    <template x-for="(faq, index) in faqs" :key="faq.id">
                        <div class="faq-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                            :class="selected === faq.id ? 'border-blue-300 shadow-blue-50 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'">

                            <div class="absolute left-0 top-0 bottom-0 w-1.5 rounded-l-full transition-all duration-300"
                                :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                            <button @click="toggleFaq(faq.id, $event)"
                                class="faq-btn w-full flex items-center gap-4 md:gap-5 px-6 md:px-8 py-5 md:py-6 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                                :aria-expanded="selected === faq.id" :aria-controls="'faq-answer-' + faq.id">

                                <span class="faq-ripple" aria-hidden="true"></span>

                                <span class="shrink-0 w-8 h-8 rounded-full text-xs font-extrabold flex items-center justify-center transition-all duration-300 shadow-inner"
                                    :class="selected === faq.id ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-500 group-hover:bg-slate-200'"
                                    x-text="String(index + 1).padStart(2, '0')"></span>

                                <span class="flex-1 font-bold text-sm md:text-base pr-4 transition-colors duration-200 font-heading"
                                    :class="selected === faq.id ? 'text-blue-900' : 'text-slate-900'"
                                    x-text="faq.question"></span>

                                <span class="shrink-0 w-8 h-8 rounded-full flex items-center justify-center border transition-all duration-300 shadow-sm"
                                    :class="selected === faq.id ? 'bg-blue-600 border-blue-600 rotate-180' : 'bg-white border-slate-200 group-hover:border-slate-300'">
                                    <i class="fa-solid fa-chevron-down text-[11px] transition-colors duration-200"
                                        :class="selected === faq.id ? 'text-white' : 'text-slate-500'" aria-hidden="true"></i>
                                </span>
                            </button>

                            <div :id="'faq-answer-' + faq.id"
                                class="faq-answer overflow-hidden transition-all duration-300 ease-in-out"
                                :style="selected === faq.id ? 'max-height: 500px; opacity: 1;' : 'max-height: 0; opacity: 0;'"
                                :aria-hidden="selected !== faq.id">
                                <div class="px-6 md:px-8 pb-6 md:pb-8 pt-0 pl-16 md:pl-20 relative">
                                    <div class="border-t border-slate-100 mb-5"></div>
                                    <div class="text-sm md:text-base text-slate-700 leading-relaxed space-y-3" x-html="faq.answer"></div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <div class="mt-16 md:mt-20 text-center border-t border-slate-200 pt-10" data-aos="fade-up">
                    <p class="text-slate-600 text-sm mb-5">Masih memiliki pertanyaan spesifik lainnya?</p>
                    <a href="{{ $wa('Halo Cakra Inovasi Digital, saya ada pertanyaan seputar jasa website Anda.') }}"
                        target="_blank" rel="noopener noreferrer"
                        class="btn-whatsapp-agen inline-flex items-center gap-2.5 bg-emerald-500 text-white px-7 py-3.5 rounded-xl font-semibold hover:bg-emerald-600 transition text-sm md:text-base group shadow-lg shadow-emerald-100"
                        data-agent="CS Kontak Utama">
                        <svg class="w-[18px] h-[18px] transition-transform group-hover:scale-110 shrink-0" fill="currentColor" aria-hidden="true"><use href="#i-wa"/></svg>
                        Tanya Langsung via WhatsApp
                    </a>
                </div>

            </div>
        </section>

        {{-- ================================================================
             SECTION 9: CTA AKHIR
        ================================================================ --}}
        <section class="py-16 md:py-24 bg-[#FAF8F5]" aria-label="Ajakan untuk memulai proyek website">
            <div class="max-w-7xl mx-auto px-5 lg:px-10">
                <div data-aos="zoom-in" data-aos-duration="800"
                    class="bg-blue-600 rounded-[2rem] md:rounded-[3rem] p-10 md:p-16 lg:p-20 text-center relative overflow-hidden shadow-2xl shadow-blue-200">

                    <div class="absolute inset-0 opacity-15 pointer-events-none" aria-hidden="true">
                        <div class="absolute top-0 left-0 w-80 h-80 bg-white rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
                        <div class="absolute bottom-0 right-0 w-80 h-80 bg-emerald-300 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>
                    </div>

                    <div class="relative z-10 text-white">
                        <span class="inline-block bg-white/15 text-white px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider mb-6 shadow-inner">
                            Siap Naik Kelas?
                        </span>
                        <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-5 leading-tight font-heading">
                            Wujudkan Website Profesional<br> Bisnis Anda Sekarang
                        </h2>
                        <p class="text-blue-100 text-base md:text-lg mb-12 max-w-2xl mx-auto leading-relaxed opacity-90">
                            Konsultasi strategi pertama gratis, tanpa syarat. Ceritakan visi dan kebutuhan bisnis Anda, dan kami
                            akan siapkan solusi digital taktis terbaik untuk pertumbuhan UMKM Anda.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-5 justify-center items-center">
                            <a href="{{ $wa('Halo Cakra Inovasi Digital, saya ingin konsultasi untuk pembuatan website bisnis saya.') }}"
                                target="_blank" rel="noopener noreferrer"
                                class="btn-whatsapp-agen inline-flex items-center justify-center gap-2.5 px-10 py-[18px] bg-white text-blue-600 font-bold rounded-xl shadow-xl hover:bg-blue-50 transition duration-300 text-sm md:text-base group"
                                data-agent="CS Kontak Utama">
                                <svg class="w-5 h-5 text-emerald-500 transition-transform group-hover:scale-110 shrink-0" fill="currentColor" aria-hidden="true"><use href="#i-wa"/></svg>
                                Mulai Konsultasi Strategis
                            </a>
                            <a href="/portofolio"
                                class="inline-flex items-center justify-center gap-2 px-6 py-3 border-2 border-white/40 text-white font-semibold rounded-xl hover:bg-white/10 hover:border-white/60 transition duration-300 text-sm md:text-base group">
                                Lihat Portofolio Kami
                                <svg class="w-3 h-3 transition-transform group-hover:translate-x-1.5" fill="currentColor" aria-hidden="true"><use href="#i-arrow"/></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    {{-- --- Scripts & Styles --- --}}
    @push('scripts')
    <script>
    // --- FAQ: versi tampilan (HTML kaya). Teks polos untuk schema ada di $faqsData. ---
    const faqRichAnswers = {
        1: `Kami bekerja melalui 6 tahap profesional dan transparan:
        <ul class="mt-4 space-y-2.5 pl-1">
            <li class="flex items-center gap-3"><i class="fa-solid fa-1 text-[10px] bg-blue-100 text-blue-700 p-1.5 rounded-full shadow-inner" aria-hidden="true"></i> <span><strong>Konsultasi Strategis:</strong> Analisis kebutuhan & deal kontrak.</span></li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-2 text-[10px] bg-blue-100 text-blue-700 p-1.5 rounded-full shadow-inner" aria-hidden="true"></i> <span><strong>Desain UI/UX Kustom:</strong> Perancangan maket visual.</span></li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-3 text-[10px] bg-blue-100 text-blue-700 p-1.5 rounded-full shadow-inner" aria-hidden="true"></i> <span><strong>Pengembangan Sistem:</strong> Proses coding kode bersih.</span></li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-4 text-[10px] bg-blue-100 text-blue-700 p-1.5 rounded-full shadow-inner" aria-hidden="true"></i> <span><strong>Uji Coba (QA):</strong> Pengujian bug & performa.</span></li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-5 text-[10px] bg-blue-100 text-blue-700 p-1.5 rounded-full shadow-inner" aria-hidden="true"></i> <span><strong>Peluncuran & Pelatihan:</strong> Go-live & transfer ilmu.</span></li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-6 text-[10px] bg-blue-100 text-blue-700 p-1.5 rounded-full shadow-inner" aria-hidden="true"></i> <span><strong>Dukungan Berkelanjutan:</strong> Pemeliharaan & konsultasi siaga.</span></li>
        </ul>`,
        2: `<p class="mb-4 font-medium text-slate-800">Anda menerima paket operasional lengkap siap pakai:</p>
        <ul class="space-y-3 pl-1">
            <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-emerald-500 mt-1" aria-hidden="true"></i> <span>Akses penuh Dashboard Admin & Kasir.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-emerald-500 mt-1" aria-hidden="true"></i> <span>Domain (.com/.id) aktif 1 tahun.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-emerald-500 mt-1" aria-hidden="true"></i> <span>Cloud Hosting aktif 1 tahun.</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-emerald-500 mt-1" aria-hidden="true"></i> <span>Sertifikat keamanan SSL (HTTPS).</span></li>
            <li class="flex items-start gap-3"><i class="fa-solid fa-check-circle text-emerald-500 mt-1" aria-hidden="true"></i> <span>Video panduan operasional sistem lengkap.</span></li>
        </ul>`,
        3: `<p class="mb-5 text-slate-700 leading-relaxed">Kami menggunakan sistem pembayaran <strong>3 Termin</strong> transparan:</p>
        <div class="space-y-5 pl-5 border-l-2 border-slate-100">
            <div class="relative"><span class="absolute -left-[27px] top-1 w-3 h-3 rounded-full bg-blue-500 border-2 border-white shadow-md" aria-hidden="true"></span><span class="font-bold block text-slate-950 font-heading text-sm">Termin 1 (DP)</span><span class="text-xs text-slate-600">Saat penandatanganan kontrak pengerjaan.</span></div>
            <div class="relative"><span class="absolute -left-[27px] top-1 w-3 h-3 rounded-full bg-emerald-500 border-2 border-white shadow-md" aria-hidden="true"></span><span class="font-bold block text-slate-950 font-heading text-sm">Termin 2 (Progres)</span><span class="text-xs text-slate-600">Setelah desain UI/UX disetujui & masuk tahap coding.</span></div>
            <div class="relative"><span class="absolute -left-[27px] top-1 w-3 h-3 rounded-full bg-blue-600 border-2 border-white shadow-md" aria-hidden="true"></span><span class="font-bold block text-slate-950 font-heading text-sm">Termin 3 (Pelunasan)</span><span class="text-xs text-slate-600">Setelah website diuji penuh & siap diluncurkan.</span></div>
        </div>`,
        4: `<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="p-4 bg-slate-50 rounded-xl flex gap-3.5 items-start border border-slate-100 shadow-inner"><i class="fa-solid fa-bug text-blue-600 mt-1 shrink-0" aria-hidden="true"></i> <span class="text-xs text-slate-700">Garansi bug/error sistem berkelanjutan.</span></div>
            <div class="p-4 bg-slate-50 rounded-xl flex gap-3.5 items-start border border-slate-100 shadow-inner"><i class="fa-solid fa-headset text-blue-600 mt-1 shrink-0" aria-hidden="true"></i> <span class="text-xs text-slate-700">Konsultasi teknis siaga via WhatsApp.</span></div>
            <div class="p-4 bg-slate-50 rounded-xl flex gap-3.5 items-start border border-slate-100 shadow-inner"><i class="fa-solid fa-server text-blue-600 mt-1 shrink-0" aria-hidden="true"></i> <span class="text-xs text-slate-700">Pemantauan server & backup rutin.</span></div>
            <div class="p-4 bg-slate-50 rounded-xl flex gap-3.5 items-start border border-slate-100 shadow-inner"><i class="fa-solid fa-sync text-blue-600 mt-1 shrink-0" aria-hidden="true"></i> <span class="text-xs text-slate-700">Update panduan jika ada fitur baru.</span></div>
        </div>`,
        5: `<ul class="space-y-4 pl-1">
            <li class="flex items-start gap-3.5"><i class="fa-solid fa-palette text-blue-600 mt-1 shrink-0" aria-hidden="true"></i> <span><strong>Tahap Desain UI/UX:</strong> Revisi minor dapat dilakukan sepuasnya hingga deal.</span></li>
            <li class="flex items-start gap-3.5"><i class="fa-solid fa-code text-blue-600 mt-1 shrink-0" aria-hidden="true"></i> <span><strong>Tahap Coding:</strong> Revisi fungsi & konten (bukan rombak struktur desain).</span></li>
        </ul>`,
        6: `<p><strong>Sangat bisa!</strong> Seluruh sistem kami berbasis web responsif modern:</p>
        <ul class="mt-4 space-y-2.5 pl-1">
            <li class="flex items-center gap-3"><i class="fa-solid fa-mobile-alt text-blue-600 text-xs shrink-0" aria-hidden="true"></i> Akses optimal via Android & iOS.</li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-laptop text-blue-600 text-xs shrink-0" aria-hidden="true"></i> Mendukung Laptop & PC Kasir.</li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-print text-blue-600 text-xs shrink-0" aria-hidden="true"></i> Mendukung Printer Thermal Bluetooth/USB.</li>
        </ul>`,
        7: `<p><strong>Ya, 100% bisa!</strong> Kami menyediakan Dashboard Admin yang user-friendly (mudah digunakan). Anda dapat menambah produk, artikel, galeri, atau mengubah harga layanan kapan saja secara mandiri—tanpa memerlukan keahlian teknis.</p>`,
        8: `<p class="mb-4">Kami memastikan tim Anda mandiri operasional:</p>
        <ul class="space-y-3 pl-1 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-3">
            <li class="flex items-center gap-3"><i class="fa-solid fa-video text-emerald-500 shrink-0" aria-hidden="true"></i> Video tutorial operasional lengkap.</li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-book text-emerald-500 shrink-0" aria-hidden="true"></i> Buku panduan format PDF.</li>
            <li class="flex items-center gap-3"><i class="fa-solid fa-headset text-emerald-500 shrink-0" aria-hidden="true"></i> Konsultasi siaga via WhatsApp.</li>
        </ul>`,
    };

    function faqSection() {
        const rawFaqs = @json($faqsData);
        return {
            selected: null,
            faqs: rawFaqs.map((item, index) => ({
                id: index + 1,
                question: item.question,
                answer: faqRichAnswers[index + 1] ?? `<p>${item.answer}</p>`,
            })),

            toggleFaq(id, event) {
                const btn = event.currentTarget;

                const rect = btn.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height) * 2;
                const x = event.clientX - rect.left - size / 2;
                const y = event.clientY - rect.top - size / 2;

                const rippleSpan = document.createElement('span');
                rippleSpan.className = 'faq-ripple faq-ripple--once';
                rippleSpan.style.cssText = `position:absolute;border-radius:50%;background:#dbeafe;pointer-events:none;width:${size}px;height:${size}px;left:${x}px;top:${y}px;`;
                btn.appendChild(rippleSpan);
                rippleSpan.addEventListener('animationend', () => rippleSpan.remove(), { once: true });

                const wasOpen = this.selected === id;
                this.selected = wasOpen ? null : id;

                if (!wasOpen) {
                    this.$nextTick(() => setTimeout(() => this.scrollToElement(id), 100));
                }
            },

            scrollToElement(id) {
                const el = document.getElementById('faq-answer-' + id);
                const parent = el && el.closest('.faq-item');
                if (parent) parent.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        };
    }

    // --- Carousel Testimoni (CSS scroll-snap + autoplay) ---
    function testimonialCarousel() {
        return {
            index: 0,
            maxIndex: 0,
            count: 0,
            step: 0,
            timer: null,
            visible: false,
            reduce: window.matchMedia('(prefers-reduced-motion: reduce)').matches,

            get dots() { return this.maxIndex + 1; },

            init() {
                this.measure();
                window.addEventListener('resize', () => this.measure(), { passive: true });
                window.addEventListener('load', () => this.measure(), { once: true });
                document.addEventListener('visibilitychange', () => (document.hidden ? this.stop() : this.play()));

                // Autoplay jalan hanya saat carousel (bukan seluruh section) terlihat di layar.
                // Sebelumnya observer menempel di section & dimatikan total oleh reduced-motion.
                if ('IntersectionObserver' in window) {
                    new IntersectionObserver(([entry]) => {
                        this.visible = entry.isIntersecting;
                        this.visible ? this.play() : this.stop();
                    }, { threshold: 0.2 }).observe(this.$refs.track);
                } else {
                    this.visible = true;
                    this.play();
                }
            },

            // Hitung lebar langkah (lebar slide + gap) & jumlah posisi dot
            measure() {
                const t = this.$refs.track;
                const first = t.firstElementChild;
                if (!first) return;
                const cs = getComputedStyle(t);
                const gap = parseFloat(cs.columnGap) || 0;
                const inner = t.clientWidth - parseFloat(cs.paddingLeft) - parseFloat(cs.paddingRight);
                this.count = t.children.length;
                this.step = first.getBoundingClientRect().width + gap;
                const perView = Math.max(1, Math.floor((inner + gap) / this.step + 0.01));
                this.maxIndex = Math.max(0, this.count - perView);
                this.onScroll();
            },

            onScroll() {
                if (!this.step) return;
                const i = Math.round(this.$refs.track.scrollLeft / this.step);
                this.index = Math.min(this.maxIndex, Math.max(0, i));
            },

            goTo(i) {
                this.$refs.track.scrollTo({ left: i * this.step, behavior: this.reduce ? 'auto' : 'smooth' });
            },
            // next/prev dihitung dari posisi scroll aktual, bukan dari state index,
            // jadi tetap benar walau ukuran layar berubah atau scroll sedang berjalan.
            next() {
                const t = this.$refs.track;
                const atEnd = t.scrollLeft >= t.scrollWidth - t.clientWidth - 4;
                t.scrollTo({ left: atEnd ? 0 : t.scrollLeft + this.step, behavior: this.reduce ? 'auto' : 'smooth' });
            },
            prev() {
                const t = this.$refs.track;
                const atStart = t.scrollLeft <= 4;
                t.scrollTo({ left: atStart ? t.scrollWidth : t.scrollLeft - this.step, behavior: this.reduce ? 'auto' : 'smooth' });
            },

            // Pada reduced-motion, tetap auto-geser tapi tanpa animasi (loncat langsung).
            play() {
                if (this.timer || !this.visible || document.hidden) return;
                this.timer = setInterval(() => this.next(), 5000);
            },
            stop() {
                clearInterval(this.timer);
                this.timer = null;
            }
        };
    }

    // --- Process Line Animation ---
    document.addEventListener('DOMContentLoaded', () => {
        const hLine = document.querySelector('.proses-progress-line');
        const vLine = document.querySelector('.proses-progress-line-v');
        const sec = document.getElementById('proses-kerja');
        if (!sec || (!hLine && !vLine)) return;

        const run = () => {
            if (hLine) hLine.style.width = '100%';
            if (vLine) vLine.style.height = '100%';
        };

        if (!('IntersectionObserver' in window)) { run(); return; }

        // threshold 0 + rootMargin: section mobile sangat tinggi, threshold 0.25
        // sebelumnya tidak pernah tercapai sehingga garis tidak pernah beranimasi.
        const observer = new IntersectionObserver((entries) => {
            if (entries.some(e => e.isIntersecting)) {
                run();
                observer.disconnect();
            }
        }, { threshold: 0, rootMargin: '0px 0px -25% 0px' });

        observer.observe(sec);
    });
    </script>
    @endpush

    @push('styles')
    <style>
    /* Hero: animasi masuk CSS murni (tanpa AOS) */
    @keyframes hero-rise {
        from { opacity: 0; transform: translateY(18px); }
        to   { opacity: 1; transform: none; }
    }
    @keyframes hero-rise-t {
        from { transform: translateY(18px); }
        to   { transform: none; }
    }
    .hero-rise   { animation: hero-rise   .7s cubic-bezier(.22, 1, .36, 1) both; animation-delay: var(--d, 0ms); }
    .hero-rise-t { animation: hero-rise-t .7s cubic-bezier(.22, 1, .36, 1) both; animation-delay: var(--d, 0ms); }

    /* Carousel testimoni */
    .testimonial-track {
        display: flex;
        gap: 1.5rem;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scroll-padding-inline: 1rem;
        overscroll-behavior-x: contain;
        padding: .5rem 1rem 2rem;
        margin-inline: -1rem;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    .testimonial-track::-webkit-scrollbar { display: none; }
    .testimonial-slide { flex: 0 0 100%; scroll-snap-align: start; }
    @media (min-width: 640px)  { .testimonial-slide { flex-basis: calc((100% - 1.5rem) / 1.5); } }
    @media (min-width: 768px)  { .testimonial-slide { flex-basis: calc((100% - 1.5rem) / 2); } }
    @media (min-width: 1024px) { .testimonial-slide { flex-basis: calc((100% - 3rem) / 3); } }

    /* FAQ */
    .faq-answer {
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
    }
    .faq-ripple {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        transform: scale(0);
        opacity: 1;
    }
    .faq-ripple--once {
        animation: faq-ripple 600ms cubic-bezier(0.22, 0.9, 0.32, 1) forwards;
    }
    @keyframes faq-ripple {
        to { transform: scale(1); opacity: 0; }
    }
    .faq-item:not([class*="border-blue"]):hover {
        background: #FAFDFB;
    }

    /* Garis progres proses kerja */
    .proses-progress-line,
    .proses-progress-line-v {
        transition: width 2s cubic-bezier(0.22, 1, 0.36, 1), height 2s cubic-bezier(0.22, 1, 0.36, 1);
    }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce) {
        .hero-rise,
        .hero-rise-t {
            animation: none !important;
        }

        .faq-answer,
        .proses-progress-line,
        .proses-progress-line-v,
        .transition-all,
        .transition {
            transition: none !important;
        }

        .faq-ripple {
            display: none;
        }

        [data-aos] {
            opacity: 1 !important;
            transform: none !important;
        }
    }
    </style>
    @endpush

</x-layout.app>
