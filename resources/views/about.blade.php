@php
// Konten halaman — dipisah dari markup supaya komponen di bawah bisa
// di-loop (DRY) dan mudah diubah tanpa menyentuh struktur HTML.
$umkmCount = '30+';

$misiPoints = [
'Membangun ekosistem teknologi yang kolaboratif untuk mendukung pertumbuhan usaha rintisan, UMKM, dan perusahaan skala
besar.',
'Menyediakan layanan digital yang mudah diakses dan ramah pengguna untuk semua kalangan pelaku usaha.',
'Mengutamakan keberlanjutan dan etika teknologi agar memberi dampak positif bagi masyarakat.',
];

$approachSteps = [
[
'icon' => 'chat',
'title' => 'Ngobrol & Pahami',
'body' => 'Gak perlu pusing istilah IT. Ceritakan saja kendala operasional Anda layaknya ngobrol dengan teman. Kami
dengar, kami pelajari akar masalahnya.',
],
[
'icon' => 'blueprint',
'title' => 'Rancang Tepat Guna',
'body' => 'Kami mendesain sistem yang pas. Tidak ada fitur berlebihan yang mubazir — semua disesuaikan dengan skala
kebutuhan dan anggaran bisnis Anda saat ini.',
],
[
'icon' => 'growth',
'title' => 'Dampingi Sampai Mahir',
'body' => 'Tugas kami tidak selesai saat rilis. Tim Cakra membimbing Anda dan karyawan langkah demi langkah sampai
benar-benar lancar menggunakannya.',
],
];

$whyCakraPoints = [
[
'icon' => 'chat-simple',
'title' => 'Komunikasi Membumi',
'body' => 'Selamat tinggal jargon teknis yang membingungkan. Kami selalu menjelaskan proses dan fitur dengan bahasa
sehari-hari.',
],
[
'icon' => 'tag',
'title' => 'Transparansi Biaya',
'body' => 'Investasi teknologi yang jelas sejak awal. Tanpa biaya tersembunyi — semua dihitung murni dari kebutuhan
spesifik Anda.',
],
[
'icon' => 'coffee',
'title' => 'Partner Jangka Panjang',
'body' => 'Lebih dari sekadar klien, kami menganggap Anda partner. Ingin diskusi pengembangan fitur sambil ngopi? Pintu
kami selalu terbuka.',
],
];

$team = [
[
'initials' => 'BS',
'name' => 'Budi Setiawan',
'role' => 'System Analyst',
'note' => 'Pendengar setia masalah stok dan kasir Anda.',
],
[
'initials' => 'SA',
'name' => 'Siti Aminah',
'role' => 'UI/UX Designer',
'note' => 'Fokus bikin tampilan aplikasi yang ramah untuk semua usia.',
],
[
'initials' => 'AP',
'name' => 'Andi Pratama',
'role' => 'Lead Developer',
'note' => 'Memastikan aplikasi Anda berjalan mulus tanpa ngelag.',
],
];
@endphp

<x-layout.app>

    {{-- ============================================================
         HERO
         Diagram "roda Cakra" menggantikan foto placeholder generik —
         sekaligus menjelaskan 4 pilar layanan (Kasir/Stok/Laporan/
         Pelanggan) dan menegaskan nama "Cakra" (roda) secara literal.
    ============================================================ --}}
    <section class="cakra-section relative overflow-hidden bg-[var(--cakra-paper)] pt-28 md:pt-36 pb-20 md:pb-28">
        <div class="max-w-6xl mx-auto px-5 md:px-10">

            <div class="text-center mb-12">
                <x-breadcrumb :items="[]" current="Tentang Kami" />
            </div>

            <div class="grid lg:grid-cols-[1.05fr_0.95fr] gap-16 lg:gap-12 items-center">

                <div data-aos="fade-up">
                    <span
                        class="inline-flex items-center rounded-full border border-[var(--cakra-line)] bg-white px-4 py-1.5 text-xs font-bold uppercase tracking-[0.18em] text-[var(--cakra-brand)]">
                        Cerita Cakra
                    </span>

                    <h1
                        class="font-display mt-7 mb-6 text-4xl md:text-5xl lg:text-[3.4rem] font-semibold leading-[1.1] text-[var(--cakra-ink)]">
                        Digitalisasi tanpa pusing.<br>
                        Kami <span class="cakra-mark">teman tumbuh</span> Anda.
                    </h1>

                    <p class="text-lg text-[var(--cakra-muted)] leading-relaxed mb-8 max-w-xl">
                        Berawal dari kepedulian melihat banyak pengusaha lokal kewalahan dengan operasional manual,
                        Cakra Inovasi Digital hadir untuk menyederhanakan kerumitan teknologi menjadi alat praktis
                        yang mempercepat laju bisnis Anda.
                    </p>

                    <div
                        class="flex gap-4 rounded-2xl border-l-2 border-[var(--cakra-brand)] bg-[var(--cakra-paper-soft)] p-5">
                        <svg viewBox="0 0 24 24"
                            class="cakra-icon h-6 w-6 flex-shrink-0 mt-0.5 text-[var(--cakra-brand)]"
                            aria-hidden="true">
                            <circle cx="9" cy="12" r="5" />
                            <circle cx="15" cy="12" r="5" />
                        </svg>
                        <p class="text-sm text-[var(--cakra-ink)] font-medium leading-relaxed">
                            Anda fokus kembangkan bisnis dan jualan — biar kami yang urus kerumitan sistemnya.
                        </p>
                    </div>
                </div>

                <div class="relative" data-aos="fade-up" data-aos-delay="120">
                    <div
                        class="aspect-square rounded-[40px] bg-[var(--cakra-paper-soft)] border border-[var(--cakra-line)] p-6 md:p-10">
                        <svg viewBox="0 0 580 520" class="w-full h-full" role="img" aria-labelledby="cakraDiagramTitle">
                            <title id="cakraDiagramTitle">
                                Diagram empat layanan inti Cakra — Kasir, Pelanggan, Laporan, dan Stok — yang
                                terhubung dalam satu sistem.
                            </title>

                            <g stroke="var(--cakra-line)" stroke-width="1.5">
                                <line x1="313.9" y1="293.9" x2="386.1" y2="366.1" />
                                <line x1="246.1" y1="293.9" x2="173.9" y2="366.1" />
                                <line x1="246.1" y1="226.1" x2="173.9" y2="153.9" />
                                <line x1="313.9" y1="226.1" x2="386.1" y2="153.9" />
                            </g>
                            <circle cx="386.1" cy="366.1" r="4" fill="var(--cakra-accent)" />
                            <circle cx="173.9" cy="153.9" r="4" fill="var(--cakra-accent)" />

                            <g stroke="var(--cakra-brand)" stroke-width="2">
                                <line x1="328" y1="260" x2="470" y2="260" />
                                <line x1="280" y1="308" x2="280" y2="450" />
                                <line x1="232" y1="260" x2="90" y2="260" />
                                <line x1="280" y1="212" x2="280" y2="70" />
                            </g>

                            <circle cx="280" cy="260" r="48" fill="var(--cakra-paper)" stroke="var(--cakra-brand)"
                                stroke-width="2.5" />
                            <text x="280" y="272" text-anchor="middle" class="font-display" font-size="34"
                                font-weight="600" fill="var(--cakra-brand)">C</text>

                            <g fill="var(--cakra-paper)" stroke="var(--cakra-brand)" stroke-width="2.5">
                                <circle cx="470" cy="260" r="7" />
                                <circle cx="280" cy="450" r="7" />
                                <circle cx="90" cy="260" r="7" />
                                <circle cx="280" cy="70" r="7" />
                            </g>

                            <g class="font-display" font-size="17" font-weight="500" fill="var(--cakra-ink)">
                                <text x="492" y="265" text-anchor="start">Kasir</text>
                                <text x="280" y="479" text-anchor="middle">Pelanggan</text>
                                <text x="68" y="265" text-anchor="end">Laporan</text>
                                <text x="280" y="53" text-anchor="middle">Stok</text>
                            </g>
                        </svg>
                    </div>

                    <div class="absolute -bottom-5 -right-4 md:-right-7 rotate-[-3deg]">
                        <div
                            class="relative flex flex-col rounded-r-2xl rounded-l-md bg-white border border-[var(--cakra-line)] shadow-[0_14px_30px_-14px_rgba(16,20,31,0.3)] py-3.5 pl-7 pr-5">
                            <span
                                class="absolute -left-2 top-1/2 -translate-y-1/2 h-4 w-4 rounded-full border-2 border-[var(--cakra-line)] bg-[var(--cakra-paper)]"
                                aria-hidden="true"></span>
                            <p class="font-display text-2xl font-semibold text-[var(--cakra-brand)] leading-none">
                                {{ $umkmCount }}</p>
                            <p
                                class="text-[10.5px] font-semibold uppercase tracking-wide text-[var(--cakra-muted)] mt-1 whitespace-nowrap">
                                UMKM telah go-digital</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================================
         VISI & MISI
         Satu panel menyatu dengan pembatas garis tipis — tanpa kartu
         gelap dan halo blur gradien.
    ============================================================ --}}
    <section class="cakra-section bg-[var(--cakra-paper-soft)] py-20 md:py-28 border-y border-[var(--cakra-line)]">
        <div class="max-w-6xl mx-auto px-5 md:px-10">

            <div class="mb-14 max-w-xl" data-aos="fade-up">
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[var(--cakra-brand)]">Tujuan Kami</span>
                <h2 class="font-display mt-4 text-3xl md:text-4xl font-semibold text-[var(--cakra-ink)]">
                    Visi dan misi yang menuntun arah kami.
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-14 md:gap-0">
                <div class="md:pr-14 md:border-r md:border-[var(--cakra-line)]" data-aos="fade-up">
                    <h3 class="text-xs font-bold uppercase tracking-[0.18em] text-[var(--cakra-muted)] mb-5">Visi Kami
                    </h3>
                    <p class="font-display text-2xl md:text-[1.85rem] leading-snug text-[var(--cakra-ink)]">
                        Menjadi <span class="cakra-mark">roda penggerak utama</span> dalam inovasi digital yang
                        berdaya guna — menciptakan solusi teknologi modern untuk mendukung transformasi era
                        digital yang berkelanjutan.
                    </p>
                </div>

                <div class="md:pl-14" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xs font-bold uppercase tracking-[0.18em] text-[var(--cakra-muted)] mb-5">Misi Kami
                    </h3>
                    <ul class="space-y-5">
                        @foreach ($misiPoints as $point)
                        <li class="flex gap-4">
                            <svg viewBox="0 0 16 16"
                                class="cakra-tick h-4 w-4 flex-shrink-0 mt-1.5 text-[var(--cakra-brand)]"
                                aria-hidden="true">
                                <path d="M3 8.5 6.5 12 13 4.5" />
                            </svg>
                            <p class="text-[15px] text-[var(--cakra-muted)] leading-relaxed">{{ $point }}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </section>

    {{-- ============================================================
         CARA KAMI BEKERJA
         Garis pembagi (divide-x/divide-y) menggantikan 3 kartu kotak
         identik — urutan memang sekuensial jadi penomoran relevan.
    ============================================================ --}}
    <section class="cakra-section bg-[var(--cakra-paper)] py-20 md:py-28">
        <div class="max-w-6xl mx-auto px-5 md:px-10">

            <div class="mb-14 max-w-xl" data-aos="fade-up">
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[var(--cakra-brand)]">Cara Kami
                    Bekerja</span>
                <h2 class="font-display mt-4 text-3xl md:text-4xl font-semibold text-[var(--cakra-ink)]">Tiga tahap,
                    tanpa drama.</h2>
                <p class="text-[var(--cakra-muted)] mt-3">Memahami manusianya dulu, baru menulis kode sistemnya.</p>
            </div>

            <ol class="grid md:grid-cols-3 divide-y divide-[var(--cakra-line)] md:divide-y-0 md:divide-x">
                @foreach ($approachSteps as $step)
                <li class="py-8 md:py-0 md:px-8 first:pt-0 md:first:pl-0 last:pb-0 md:last:pr-0" data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 100 }}">

                    <div class="flex items-center gap-3 mb-6">
                        <span
                            class="font-display text-sm font-semibold text-[var(--cakra-brand)]">{{ sprintf('%02d', $loop->iteration) }}</span>
                        <span class="h-px flex-1 bg-[var(--cakra-line)]" aria-hidden="true"></span>
                    </div>

                    <div
                        class="h-11 w-11 rounded-xl border border-[var(--cakra-line)] flex items-center justify-center text-[var(--cakra-brand)] mb-5">
                        @switch($step['icon'])
                        @case('chat')
                        <svg viewBox="0 0 24 24" class="cakra-icon h-5 w-5" aria-hidden="true">
                            <rect x="3" y="5" width="18" height="11" rx="3" />
                            <path d="M8 16v3.2L11.8 16" />
                            <circle cx="8.5" cy="10.5" r="0.8" fill="currentColor" stroke="none" />
                            <circle cx="12" cy="10.5" r="0.8" fill="currentColor" stroke="none" />
                            <circle cx="15.5" cy="10.5" r="0.8" fill="currentColor" stroke="none" />
                        </svg>
                        @break
                        @case('blueprint')
                        <svg viewBox="0 0 24 24" class="cakra-icon h-5 w-5" aria-hidden="true">
                            <rect x="4" y="4" width="16" height="16" rx="2" />
                            <path d="M4 9.5h16M9.5 4v16" />
                        </svg>
                        @break
                        @case('growth')
                        <svg viewBox="0 0 24 24" class="cakra-icon h-5 w-5" aria-hidden="true">
                            <path d="M4 20V14M9.5 20V10M15 20V6M20 20V13" />
                            <path d="M16 6h4v4" />
                        </svg>
                        @break
                        @endswitch
                    </div>

                    <h3 class="text-lg font-bold text-[var(--cakra-ink)] mb-2">{{ $step['title'] }}</h3>
                    <p class="text-sm text-[var(--cakra-muted)] leading-relaxed pr-0 md:pr-4">{{ $step['body'] }}</p>
                </li>
                @endforeach
            </ol>

        </div>
    </section>

    {{-- ============================================================
         KENAPA CAKRA
         Pernyataan + 3 alasan digabung jadi satu section (sebelumnya
         dua section terpisah dengan pesan tumpang tindih). Latar biru
         solid + pola "roda" tipis menggantikan dekorasi blob blur gelap.
    ============================================================ --}}
    <section class="cakra-section relative overflow-hidden bg-[var(--cakra-brand)] py-20 md:py-28">
        <svg class="absolute -right-40 top-1/2 -translate-y-1/2 w-[600px] h-[600px] opacity-[0.08] pointer-events-none"
            viewBox="0 0 600 600" aria-hidden="true">
            <g stroke="white" stroke-width="1.5" fill="none">
                <circle cx="300" cy="300" r="280" />
                <circle cx="300" cy="300" r="60" />
                <line x1="360" y1="300" x2="580" y2="300" />
                <line x1="300" y1="360" x2="300" y2="580" />
                <line x1="240" y1="300" x2="20" y2="300" />
                <line x1="300" y1="240" x2="300" y2="20" />
                <line x1="342.4" y1="342.4" x2="497.9" y2="497.9" />
                <line x1="257.6" y1="342.4" x2="102.1" y2="497.9" />
                <line x1="257.6" y1="257.6" x2="102.1" y2="102.1" />
                <line x1="342.4" y1="257.6" x2="497.9" y2="102.1" />
            </g>
        </svg>

        <div class="relative max-w-6xl mx-auto px-5 md:px-10">
            <div class="max-w-2xl mb-16" data-aos="fade-up">
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-white/70">Kenapa Cakra</span>
                <h2 class="font-display mt-4 text-3xl md:text-[2.6rem] leading-tight font-semibold text-white">
                    Sistem canggih tidak harus rumit dan menguras kantong.
                </h2>
                <p class="text-white/85 mt-5 leading-relaxed">
                    Kami menempatkan diri sebagai rekan diskusi yang menjembatani ambisi bisnis Anda dengan
                    eksekusi teknologi yang realistis — karena transformasi digital adalah hak setiap UMKM.
                </p>
            </div>

            <div class="grid md:grid-cols-3 divide-y divide-white/15 md:divide-y-0 md:divide-x md:divide-white/15">
                @foreach ($whyCakraPoints as $point)
                <div class="py-8 md:py-0 md:px-8 first:pt-0 md:first:pl-0 last:pb-0 md:last:pr-0" data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 100 }}">

                    <div
                        class="h-10 w-10 rounded-lg border border-white/30 flex items-center justify-center text-white mb-5">
                        @switch($point['icon'])
                        @case('chat-simple')
                        <svg viewBox="0 0 24 24" class="cakra-icon h-5 w-5" aria-hidden="true">
                            <rect x="3" y="5" width="18" height="11" rx="3" />
                            <path d="M8 16v3.2L11.8 16" />
                        </svg>
                        @break
                        @case('tag')
                        <svg viewBox="0 0 24 24" class="cakra-icon h-5 w-5" aria-hidden="true">
                            <path
                                d="M11 4h7a2 2 0 0 1 2 2v7a2 2 0 0 1-.59 1.41l-7 7a2 2 0 0 1-2.82 0l-7-7a2 2 0 0 1 0-2.82l7-7A2 2 0 0 1 11 4Z" />
                            <circle cx="15.5" cy="8.5" r="1.2" fill="currentColor" stroke="none" />
                        </svg>
                        @break
                        @case('coffee')
                        <svg viewBox="0 0 24 24" class="cakra-icon h-5 w-5" aria-hidden="true">
                            <path d="M5 9h11v5a4 4 0 0 1-4 4H9a4 4 0 0 1-4-4V9Z" />
                            <path d="M16 10h1.5a2 2 0 1 1 0 4H16" />
                        </svg>
                        @break
                        @endswitch
                    </div>

                    <h3 class="text-lg font-bold text-white mb-2">{{ $point['title'] }}</h3>
                    <p class="text-sm text-white/75 leading-relaxed">{{ $point['body'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================
         TIM KAMI
         Grid responsif (bukan carousel scroll-snap yang butuh JS) +
         lencana inisial heksagon menggantikan placeholder "Foto".
    ============================================================ --}}
    <section class="cakra-section bg-[var(--cakra-paper-soft)] py-20 md:py-28 border-t border-[var(--cakra-line)]">
        <div class="max-w-6xl mx-auto px-5 md:px-10">

            <div class="mb-14 max-w-xl" data-aos="fade-up">
                <span class="text-xs font-bold uppercase tracking-[0.18em] text-[var(--cakra-brand)]">Tim Kami</span>
                <h2 class="font-display mt-4 text-3xl md:text-4xl font-semibold text-[var(--cakra-ink)]">Wajah di balik
                    layar Cakra.</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($team as $member)
                <article class="bg-white rounded-2xl border border-[var(--cakra-line)] p-7" data-aos="fade-up"
                    data-aos-delay="{{ $loop->index * 100 }}">

                    <div
                        class="cakra-hex h-16 w-16 bg-[var(--cakra-paper-soft)] border border-[var(--cakra-line)] flex items-center justify-center mb-5">
                        <span
                            class="font-display text-lg font-semibold text-[var(--cakra-brand)]">{{ $member['initials'] }}</span>
                    </div>

                    <h3 class="font-bold text-lg text-[var(--cakra-ink)]">{{ $member['name'] }}</h3>
                    <p class="text-xs font-semibold uppercase tracking-wide text-[var(--cakra-brand)] mt-1 mb-4">
                        {{ $member['role'] }}</p>
                    <p
                        class="text-sm text-[var(--cakra-muted)] leading-relaxed border-t border-[var(--cakra-line)] pt-4">
                        {{ $member['note'] }}</p>
                </article>
                @endforeach
            </div>

        </div>
    </section>

    <style>
    /* Catatan: idealnya @import ini dipindah ke <head> layout utama
           (sebagai <link rel="preconnect"> + <link rel="stylesheet">)
           agar tidak render-blocking. Ditaruh di sini karena hanya
           file child ini yang bisa diedit saat ini. */
    @import url('https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

    :root {
        --cakra-ink: #10141F;
        --cakra-paper: #FFFFFF;
        --cakra-paper-soft: #F5F7FB;
        --cakra-brand: #1A4FD6;
        --cakra-accent: #E2A33B;
        --cakra-line: #E4E8F0;
        --cakra-muted: #5B6478;
    }

    .cakra-section {
        font-family: 'Plus Jakarta Sans', ui-sans-serif, system-ui, sans-serif;
    }

    .font-display {
        font-family: 'Fraunces', ui-serif, Georgia, serif;
    }

    .cakra-icon {
        fill: none;
        stroke: currentColor;
        stroke-width: 1.6;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .cakra-tick {
        fill: none;
        stroke: currentColor;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    /* Highlight ala stabilo — teks tetap warna ink, hanya latar
           yang berwarna, supaya kontras tetap aman dibaca (lihat
           penjelasan kontras pada respons utama). */
    .cakra-mark {
        background-image: linear-gradient(to top, var(--cakra-accent) 38%, transparent 38%);
        padding: 0 0.15em;
        box-decoration-break: clone;
        -webkit-box-decoration-break: clone;
    }

    .cakra-hex {
        clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
    }

    .cakra-section a:focus-visible,
    .cakra-section button:focus-visible {
        outline: 2.5px solid var(--cakra-brand);
        outline-offset: 3px;
        border-radius: 4px;
    }

    @media (prefers-reduced-motion: reduce) {
        .cakra-section [data-aos] {
            transition: none !important;
            transform: none !important;
            opacity: 1 !important;
        }
    }
    </style>

</x-layout.app>