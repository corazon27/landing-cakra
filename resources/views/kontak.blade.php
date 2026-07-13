<x-layout.app>

    {{-- ============================================================
     SEO: Meta halaman /hubungi-kami
============================================================ --}}
    @php
    $title = 'Hubungi Kami — Konsultasi Gratis Jasa Website | Cakra Inovasi Digital';
    $metaDescription= 'Hubungi Cakra Inovasi Digital untuk konsultasi gratis jasa pembuatan website. Kami siap membantu
    Anda go-digital. Hubungi via WhatsApp, email, atau formulir kontak — respon cepat!';
    $metaKeywords = 'hubungi cakra inovasi digital, konsultasi jasa website, kontak web developer Sukoharjo, Jawa
    Tengah, tanya jasa website Indonesia';
    $ogType = 'website';
    $canonicalUrl = url('/hubungi-kami');


    $faqsData = [
    [
    'question' => 'Berapa lama respon setelah saya mengirim pesan?',
    'answer' => 'Tim kami biasanya membalas dalam waktu kurang dari 1 jam pada jam kerja. Untuk pesan di luar jam kerja,
    akan kami balas di hari berikutnya.'
    ],
    [
    'question' => 'Apakah sesi konsultasi ini benar-benar gratis?',
    'answer' => 'Ya, 100% gratis. Anda bisa tanya jawab seputar kebutuhan website, fitur, hingga estimasi budget tanpa
    biaya apapun.'
    ],
    [
    'question' => 'Bisa bertemu langsung (meeting offline)?',
    'answer' => 'Tentu. Anda bisa datang ke kantor kami di Sukoharjo sesuai jam operasional, atau kita bisa jadwalkan
    meeting via Zoom/Google Meet.'
    ],
    [
    'question' => 'Dokumen apa yang perlu saya siapkan sebelum konsultasi?',
    'answer' => 'Cukup siapkan ide bisnis Anda, referensi website yang disukai (jika ada), dan daftar fitur utama yang
    Anda butuhkan.'
    ],
    ];

    @endphp

    {{-- ============================================================
     SEO: Schema ContactPage + LocalBusiness
============================================================ --}}
    @push('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "@id": "{{ url('/hubungi-kami') }}/#contactpage",
        "name": "Hubungi Cakra Inovasi Digital",
        "description": "Halaman kontak Cakra Inovasi Digital untuk konsultasi gratis jasa pembuatan website profesional.",
        "url": "{{ url('/hubungi-kami') }}",
        "isPartOf": {
            "@id": "{{ url('/') }}/#website"
        },
        "about": {
            "@id": "{{ url('/') }}/#business"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "{{ url('/') }}/#business",
        "name": "Cakra Inovasi Digital",
        "url": "{{ url('/') }}",
        "telephone": "+6285865405330",
        "email": "info@cakrainovasidigital.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jl. Slamet Riyadi No. 250",
            "addressLocality": "Sukoharjo",
            "addressRegion": "Jawa Tengah",
            "postalCode": "57511",
            "addressCountry": "ID"
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
        ]
    }
    </script>
    @endpush

    {{-- ================================================================
     SECTION 1: HERO
================================================================ --}}
    <section class="pt-32 md:pt-36 pb-12 md:pb-16 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-4xl mx-auto px-5 md:px-6 text-center">

            <x-breadcrumb :items="[]" current="Hubungi Kami" />

            <div class="mt-8" data-aos="fade-up">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold uppercase tracking-wider mb-5">
                    Konsultasi 100% Gratis
                </span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight mb-5">
                    Siap Membantu Bisnis<br>
                    <span class="text-blue-600">Anda Go-Digital</span>
                </h1>
                <p class="text-slate-600 text-base md:text-lg leading-relaxed max-w-2xl mx-auto">
                    Ceritakan kebutuhan bisnis Anda — kami bantu carikan solusi website yang paling tepat. Konsultasi
                    pertama gratis, tanpa komitmen apapun.
                </p>
            </div>

            {{-- Quick contact pills --}}
            <div class="mt-8 flex flex-wrap justify-center gap-3" data-aos="fade-up" data-aos-delay="100">
                <a href="https://wa.me/6285865405330" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-emerald-500 text-white text-sm font-bold rounded-full hover:bg-emerald-600 transition shadow-md shadow-emerald-200">
                    <i class="fa-brands fa-whatsapp text-base" aria-hidden="true"></i>
                    +62 858-6540-5330
                </a>
                <a href="mailto:info@cakrainovasidigital.com"
                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-slate-200 text-slate-700 text-sm font-bold rounded-full hover:border-blue-300 hover:text-blue-600 transition shadow-sm">
                    <i class="fa-solid fa-envelope text-blue-500" aria-hidden="true"></i>
                    info@cakrainovasidigital.com
                </a>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 2: KONTEN UTAMA
     Layout: Formulir (kiri) + Info Kontak (kanan)
================================================================ --}}
    <section class="pb-20 md:pb-28 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12 items-start">

                {{-- ================================================
                 KOLOM KIRI: Formulir Kontak (3/5 lebar)
            ================================================ --}}
                <div class="lg:col-span-3" data-aos="fade-right">

                    <div class="bg-white border border-slate-200 rounded-3xl p-7 md:p-10 shadow-sm"
                        x-data="contactForm()">

                        <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-2">Kirim Pesan ke Kami</h2>
                        <p class="text-slate-500 text-sm mb-8">Isi formulir di bawah — tim kami akan membalas dalam
                            <strong class="text-slate-700">1×24 jam</strong> pada hari kerja.
                        </p>

                        {{-- Success State --}}
                        <div x-show="submitted" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            class="text-center py-12">
                            <div
                                class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-5">
                                <i class="fa-solid fa-circle-check text-3xl" aria-hidden="true"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Pesan Terkirim!</h3>
                            <p class="text-slate-500 text-sm mb-6">Terima kasih telah menghubungi kami. Tim kami akan
                                segera membalas pesan Anda.</p>
                            <p class="text-slate-400 text-xs">Atau langsung hubungi kami via WhatsApp untuk respon lebih
                                cepat:</p>
                            <a href="https://wa.me/6285865405330" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 mt-4 px-6 py-3 bg-emerald-500 text-white font-bold rounded-xl hover:bg-emerald-600 transition text-sm">
                                <i class="fa-brands fa-whatsapp text-base" aria-hidden="true"></i>
                                Chat WhatsApp Sekarang
                            </a>
                        </div>

                        {{-- Form --}}
                        <div x-show="!submitted">

                            {{-- Nama & No. HP --}}
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                                <div>
                                    <label for="contact_nama" class="block text-xs font-bold text-slate-700 mb-1.5">
                                        Nama <span class="text-red-500" aria-label="wajib diisi">*</span>
                                    </label>
                                    <input type="text" id="contact_nama" x-model="form.nama"
                                        placeholder="Nama Anda atau nama bisnis" autocomplete="name"
                                        class="w-full px-4 py-3 rounded-xl border text-sm transition-colors outline-none"
                                        :class="errors.nama
                                        ? 'border-red-300 bg-red-50 focus:ring-2 focus:ring-red-200'
                                        : 'border-slate-200 focus:border-blue-400 focus:ring-2 focus:ring-blue-100'">
                                    <p x-show="errors.nama" x-text="errors.nama" class="text-red-500 text-xs mt-1.5">
                                    </p>
                                </div>
                                <div>
                                    <label for="contact_hp" class="block text-xs font-bold text-slate-700 mb-1.5">
                                        No. WhatsApp <span class="text-red-500" aria-label="wajib diisi">*</span>
                                    </label>
                                    <input type="tel" id="contact_hp" x-model="form.hp" placeholder="08xxxxxxxxxx"
                                        autocomplete="tel"
                                        class="w-full px-4 py-3 rounded-xl border text-sm transition-colors outline-none"
                                        :class="errors.hp
                                        ? 'border-red-300 bg-red-50 focus:ring-2 focus:ring-red-200'
                                        : 'border-slate-200 focus:border-blue-400 focus:ring-2 focus:ring-blue-100'">
                                    <p x-show="errors.hp" x-text="errors.hp" class="text-red-500 text-xs mt-1.5"></p>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="mb-5">
                                <label for="contact_email" class="block text-xs font-bold text-slate-700 mb-1.5">
                                    Email <span class="text-slate-400 font-normal">(opsional)</span>
                                </label>
                                <input type="email" id="contact_email" x-model="form.email"
                                    placeholder="email@perusahaan.com" autocomplete="email"
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-400 focus:ring-2 focus:ring-blue-100 text-sm transition-colors outline-none">
                            </div>

                            {{-- Jenis Layanan --}}
                            <div class="mb-5">
                                <label for="contact_layanan" class="block text-xs font-bold text-slate-700 mb-1.5">
                                    Layanan yang Diminati <span class="text-red-500" aria-label="wajib diisi">*</span>
                                </label>
                                <select id="contact_layanan" x-model="form.layanan"
                                    class="w-full px-4 py-3 rounded-xl border text-sm transition-colors outline-none bg-white appearance-none"
                                    :class="errors.layanan
                                    ? 'border-red-300 bg-red-50 focus:ring-2 focus:ring-red-200'
                                    : 'border-slate-200 focus:border-blue-400 focus:ring-2 focus:ring-blue-100'">
                                    <option value="" disabled selected>Pilih jenis layanan...</option>
                                    <option value="Website ERP">Website Automasi Bisnis</option>
                                    <option value="Website Company Profile">Website Company Profile</option>
                                    <option value="Website Katalog Produk">Website Katalog Produk</option>
                                    <option value="Website Toko Online / POS">Website Toko Online / POS (Kasir Digital)
                                    </option>
                                    <option value="Konsultasi Umum">Konsultasi Umum (belum tahu mau pilih yang mana)
                                    </option>
                                </select>
                                <p x-show="errors.layanan" x-text="errors.layanan" class="text-red-500 text-xs mt-1.5">
                                </p>
                            </div>

                            {{-- Budget estimasi --}}
                            <div class="mb-5">
                                <label class="block text-xs font-bold text-slate-700 mb-2">
                                    Estimasi Budget <span class="text-slate-400 font-normal">(opsional — membantu kami
                                        merekomendasikan paket terbaik)</span>
                                </label>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                    @foreach(['< Rp 2jt', 'Rp 2–5jt' , 'Rp 5–10jt' , '> Rp 10jt' ] as $budget) <label
                                        class="cursor-pointer">
                                        <input type="radio" name="budget" value="{{ $budget }}" x-model="form.budget"
                                            class="sr-only">
                                        <div class="text-center px-3 py-2.5 rounded-xl border text-xs font-semibold transition-all duration-200 select-none"
                                            :class="form.budget === '{{ $budget }}'
                                             ? 'bg-blue-600 text-white border-blue-600 shadow-md'
                                             : 'bg-white text-slate-600 border-slate-200 hover:border-blue-300 hover:text-blue-600'">
                                            {{ $budget }}
                                        </div>
                                        </label>
                                        @endforeach
                                </div>
                            </div>

                            {{-- Pesan --}}
                            <div class="mb-7">
                                <label for="contact_pesan" class="block text-xs font-bold text-slate-700 mb-1.5">
                                    Ceritakan Kebutuhan Anda <span class="text-red-500"
                                        aria-label="wajib diisi">*</span>
                                </label>
                                <textarea id="contact_pesan" x-model="form.pesan" rows="4"
                                    placeholder="Contoh: Saya punya toko fashion online dan mau buat website toko online yang bisa terima pembayaran otomatis. Produk sekitar 50–100 item."
                                    class="w-full px-4 py-3 rounded-xl border text-sm transition-colors outline-none resize-none"
                                    :class="errors.pesan
                                    ? 'border-red-300 bg-red-50 focus:ring-2 focus:ring-red-200'
                                    : 'border-slate-200 focus:border-blue-400 focus:ring-2 focus:ring-blue-100'"></textarea>
                                <div class="flex items-center justify-between mt-1.5">
                                    <p x-show="errors.pesan" x-text="errors.pesan" class="text-red-500 text-xs"></p>
                                    <p class="text-slate-400 text-xs ml-auto"
                                        x-text="form.pesan.length + '/500 karakter'"></p>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="flex flex-col sm:flex-row gap-3">
                                <button type="button" @click="submitViaWA()"
                                    class="flex-1 inline-flex items-center justify-center gap-2.5 py-4 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-2xl transition-all shadow-lg shadow-emerald-200/60 text-sm cursor-pointer">
                                    <i class="fa-brands fa-whatsapp text-lg" aria-hidden="true"></i>
                                    Kirim via WhatsApp
                                </button>
                                <button type="button" @click="submitViaEmail()"
                                    class="sm:w-auto inline-flex items-center justify-center gap-2 py-4 px-6 bg-slate-900 hover:bg-slate-700 text-white font-bold rounded-2xl transition-all text-sm cursor-pointer">
                                    <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                    via Email
                                </button>
                            </div>

                            <p class="text-center text-xs text-slate-400 mt-4">
                                <i class="fa-solid fa-shield-check text-blue-400 mr-1" aria-hidden="true"></i>
                                Data Anda aman. Kami tidak membagikan informasi ke pihak manapun.
                            </p>

                        </div>
                    </div>

                </div>

                {{-- ================================================
                 KOLOM KANAN: Info Kontak (2/5 lebar)
            ================================================ --}}
                <div class="lg:col-span-2 space-y-5" data-aos="fade-left">

                    {{-- WhatsApp CTA --}}
                    <div class="bg-emerald-600 rounded-3xl p-6 text-white relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-white/10 rounded-full" aria-hidden="true">
                        </div>
                        <div class="relative z-10">
                            <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center mb-4">
                                <i class="fa-brands fa-whatsapp text-2xl" aria-hidden="true"></i>
                            </div>
                            <h3 class="font-extrabold text-base mb-1">Chat Langsung via WhatsApp</h3>
                            <p class="text-emerald-100 text-xs leading-relaxed mb-4">Respon lebih cepat! Tim kami siap
                                menjawab pertanyaan Anda saat jam kerja.</p>
                            <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20gratis%20mengenai%20jasa%20website."
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 bg-white text-emerald-700 px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-emerald-50 transition">
                                <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                                +62 858-6540-5330
                            </a>
                        </div>
                    </div>

                    {{-- Info Kontak Detail --}}
                    <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                        <h3 class="font-extrabold text-slate-900 text-base mb-5">Informasi Kontak</h3>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3.5">
                                <div
                                    class="w-9 h-9 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="fa-solid fa-location-dot text-sm" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-0.5">Alamat
                                    </p>
                                    <p class="text-sm text-slate-700 leading-relaxed">Jl. Slamet Riyadi No.
                                        250,<br>Sukoharjo, Jawa Tengah 57511</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div
                                    class="w-9 h-9 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="fa-brands fa-whatsapp text-sm" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-0.5">
                                        WhatsApp</p>
                                    <a href="https://wa.me/6285865405330" target="_blank" rel="noopener noreferrer"
                                        class="text-sm text-slate-700 hover:text-emerald-600 transition-colors font-medium">+62
                                        858-6540-5330</a>
                                </div>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div
                                    class="w-9 h-9 bg-violet-50 text-violet-600 rounded-xl flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="fa-solid fa-envelope text-sm" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-0.5">Email
                                    </p>
                                    <a href="mailto:info@cakrainovasidigital.com"
                                        class="text-sm text-slate-700 hover:text-violet-600 transition-colors font-medium break-all">info@cakrainovasidigital.com</a>
                                </div>
                            </li>
                        </ul>

                        {{-- Divider --}}
                        <div class="border-t border-slate-100 my-5"></div>

                        {{-- Jam Operasional --}}
                        <h3 class="font-extrabold text-slate-900 text-sm mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-clock text-blue-500 text-xs" aria-hidden="true"></i>
                            Jam Operasional
                        </h3>
                        <ul class="space-y-2.5" x-data="jamOperasional()">
                            <template x-for="jam in jadwal" :key="jam.hari">
                                <li class="flex items-center justify-between text-sm">
                                    <span class="text-slate-600 font-medium" x-text="jam.hari"></span>
                                    <span class="font-semibold rounded-full px-3 py-0.5 text-xs" :class="jam.buka
                                        ? (jam.isToday ? 'bg-emerald-100 text-emerald-700' : 'text-slate-700')
                                        : 'text-red-500'" x-text="jam.waktu"></span>
                                </li>
                            </template>
                            <li class="mt-3 pt-3 border-t border-slate-100">
                                <div class="flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full animate-pulse"
                                        :class="isOpen ? 'bg-emerald-500' : 'bg-red-400'"></div>
                                    <span class="text-xs font-semibold"
                                        :class="isOpen ? 'text-emerald-600' : 'text-red-500'"
                                        x-text="isOpen ? 'Sedang Buka — Kami siap membalas' : 'Sedang Tutup — Kami balas saat buka'">
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- Social Media --}}
                    <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                        <h3 class="font-extrabold text-slate-900 text-base mb-4">Ikuti Kami</h3>
                        <div class="grid grid-cols-2 gap-3">
                            <a href="https://www.instagram.com/cakrainovasidigital.id/" target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-2.5 p-3 rounded-xl bg-gradient-to-br from-pink-500 to-rose-600 text-white hover:opacity-90 transition-opacity">
                                <i class="fa-brands fa-instagram text-base shrink-0" aria-hidden="true"></i>
                                <span class="text-xs font-bold">Instagram</span>
                            </a>
                            <a href="https://www.linkedin.com/in/cakra-inovasi-digital-9141943b3/" target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-2.5 p-3 rounded-xl bg-blue-700 text-white hover:opacity-90 transition-opacity">
                                <i class="fa-brands fa-linkedin text-base shrink-0" aria-hidden="true"></i>
                                <span class="text-xs font-bold">LinkedIn</span>
                            </a>
                            <a href="https://www.facebook.com/cakrainovasidigital" target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-2.5 p-3 rounded-xl bg-blue-600 text-white hover:opacity-90 transition-opacity">
                                <i class="fa-brands fa-facebook text-base shrink-0" aria-hidden="true"></i>
                                <span class="text-xs font-bold">Facebook</span>
                            </a>
                            <a href="/" target="_blank" rel="noopener noreferrer"
                                class="flex items-center gap-2.5 p-3 rounded-xl bg-slate-900 text-white hover:opacity-90 transition-opacity">
                                <i class="fa-brands fa-x-twitter text-base shrink-0" aria-hidden="true"></i>
                                <span class="text-xs font-bold">X (Twitter)</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================
     SECTION 3: PETA LOKASI
================================================================ --}}
    <section class="pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-6">

            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6 gap-4"
                data-aos="fade-up">
                <div>
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-900 mb-1">Lokasi Kami</h2>
                    <p class="text-slate-500 text-sm">Jl. Slamet Riyadi No. 250, Sukoharjo, Jawa Tengah</p>
                </div>
                <a href="https://maps.google.com/?q=Jl.+Slamet+Riyadi+No.+250+Sukoharjo+Jawa+Tengah" target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-slate-200 hover:border-blue-400 hover:text-blue-600 text-slate-700 text-sm font-semibold rounded-full transition-all shadow-sm shrink-0">
                    <i class="fa-solid fa-location-arrow text-blue-500 text-xs" aria-hidden="true"></i>
                    Buka di Google Maps
                </a>
            </div>

            <div class="rounded-3xl overflow-hidden border border-slate-200 shadow-sm" data-aos="fade-up"
                data-aos-delay="100">
                <iframe
                    src="https://maps.google.com/maps?q=Jl.+Slamet+Riyadi+No.+250,+Sukoharjo,+Jawa+Tengah&output=embed"
                    width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Lokasi Cakra Inovasi Digital di Sukoharjo, Jawa Tengah"
                    aria-label="Peta lokasi kantor Cakra Inovasi Digital">
                </iframe>
            </div>

        </div>
    </section>

    {{-- ================================================================
     SECTION 4: FAQ KONTAK
================================================================ --}}
    <section id="faq" class="py-16 md:py-20 bg-slate-50" x-data="faqKontak()">
        <div class="max-w-3xl mx-auto px-5 md:px-6">

            <div class="text-center mb-10 md:mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3 md:mb-4">
                    Pertanyaan yang Sering Ditanyakan
                </h2>
                <p class="text-slate-600 text-sm md:text-base">Semua yang perlu Anda ketahui sebelum memulai proyek
                    bersama kami.</p>
            </div>

            <div class="space-y-2.5 md:space-y-3" data-aos="fade-up" data-aos-delay="100" itemscope
                itemtype="https://schema.org/FAQPage">

                <template x-for="(faq, index) in faqs" :key="faq.id">
                    <div class="faq-kontak-item group relative bg-white rounded-2xl overflow-hidden shadow-sm border transition-all duration-300"
                        :class="selected === faq.id ? 'border-blue-300 shadow-blue-100 shadow-md' : 'border-slate-200 hover:border-slate-300 hover:shadow-md'"
                        itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">

                        {{-- Garis Indikator Samping --}}
                        <div class="absolute left-0 top-0 bottom-0 w-1 rounded-l-full transition-all duration-300"
                            :class="selected === faq.id ? 'bg-blue-500 opacity-100' : 'opacity-0'"></div>

                        <button @click="toggleFaq(faq.id, $event)"
                            class="faq-kontak-btn w-full flex items-center gap-3 md:gap-4 px-4 md:px-6 py-4 md:py-5 text-left focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400 focus-visible:ring-inset relative overflow-hidden cursor-pointer"
                            :aria-expanded="selected === faq.id" :aria-controls="'faq-kontak-answer-' + faq.id">

                            {{-- Efek Ripple Sentuhan --}}
                            <span
                                class="faq-kontak-ripple absolute rounded-full bg-blue-100 opacity-0 pointer-events-none"
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
                        <div :id="'faq-kontak-answer-' + faq.id" class="faq-kontak-answer overflow-hidden"
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
        </div>
    </section>

    {{-- ================================================================
     SECTION 5: CTA AKHIR — Ajakan WhatsApp
================================================================ --}}
    <section class="py-16 md:py-20 bg-white">
        <div class="max-w-4xl mx-auto px-5 md:px-6">
            <div data-aos="zoom-in" data-aos-duration="700"
                class="bg-slate-900 rounded-[2rem] p-10 md:p-16 text-center relative overflow-hidden shadow-2xl">

                <div class="absolute inset-0 opacity-10" aria-hidden="true">
                    <div
                        class="absolute top-0 left-0 w-64 h-64 bg-blue-400 rounded-full -translate-x-1/2 -translate-y-1/2">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-64 h-64 bg-blue-400 rounded-full translate-x-1/2 translate-y-1/2">
                    </div>
                </div>

                <div class="relative z-10 text-white">
                    <div class="w-14 h-14 bg-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-5"
                        aria-hidden="true">
                        <i class="fa-brands fa-whatsapp text-2xl text-white"></i>
                    </div>
                    <h2 class="text-2xl md:text-4xl font-bold mb-4">Lebih Suka Ngobrol Langsung?</h2>
                    <p class="text-slate-400 mb-8 text-sm md:text-base max-w-lg mx-auto">
                        Tim kami senang bantu Anda. Klik tombol di bawah dan ceritakan kebutuhan bisnis Anda — kami siap
                        kasih rekomendasi terbaik, gratis!
                    </p>
                    <a href="https://wa.me/6285865405330?text=Halo%20Cakra%20Inovasi%20Digital%2C%20saya%20ingin%20konsultasi%20gratis%20mengenai%20jasa%20website."
                        target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center justify-center gap-3 px-8 md:px-10 py-4 bg-emerald-500 hover:bg-emerald-400 text-white font-bold rounded-2xl transition-all shadow-lg shadow-emerald-500/30 text-base">
                        <i class="fa-brands fa-whatsapp text-xl" aria-hidden="true"></i>
                        Mulai Chat WhatsApp
                    </a>
                    <p class="text-slate-500 text-xs mt-5">
                        Atau kirim email ke
                        <a href="mailto:info@cakrainovasidigital.com"
                            class="text-slate-400 hover:text-white transition-colors underline underline-offset-2">
                            info@cakrainovasidigital.com
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================
     SCRIPTS
================================================================ --}}
    @push('scripts')
    <script>
    function contactForm() {
        return {
            submitted: false,
            form: {
                nama: '',
                hp: '',
                email: '',
                layanan: '',
                budget: '',
                pesan: '',
            },
            errors: {},

            validate() {
                this.errors = {};
                if (!this.form.nama.trim()) this.errors.nama = 'Nama wajib diisi.';
                if (!this.form.hp.trim()) this.errors.hp = 'No. WhatsApp wajib diisi.';
                else if (!/^[0-9+\s\-]{9,15}$/.test(this.form.hp.trim()))
                    this.errors.hp = 'Format nomor tidak valid.';
                if (!this.form.layanan) this.errors.layanan = 'Pilih layanan yang diminati.';
                if (!this.form.pesan.trim()) this.errors.pesan = 'Ceritakan kebutuhan Anda.';
                else if (this.form.pesan.length > 500)
                    this.errors.pesan = 'Maksimal 500 karakter.';
                return Object.keys(this.errors).length === 0;
            },

            buildMessage() {
                const budget = this.form.budget ? `%0A*Estimasi Budget:* ${encodeURIComponent(this.form.budget)}` : '';
                const email = this.form.email ? `%0A*Email:* ${encodeURIComponent(this.form.email)}` : '';
                return `Halo Cakra Inovasi Digital,%0A%0ASaya ingin konsultasi:%0A%0A*Nama:* ${encodeURIComponent(this.form.nama)}%0A*No. WA:* ${encodeURIComponent(this.form.hp)}${email}%0A*Layanan:* ${encodeURIComponent(this.form.layanan)}${budget}%0A*Kebutuhan:*%0A${encodeURIComponent(this.form.pesan)}`;
            },

            submitViaWA() {
                if (!this.validate()) return;
                const url = `https://wa.me/6285865405330?text=${this.buildMessage()}`;
                window.open(url, '_blank');
                this.submitted = true;
            },

            submitViaEmail() {
                if (!this.validate()) return;
                const subject = encodeURIComponent(`Konsultasi Website — ${this.form.layanan}`);
                const body = encodeURIComponent(
                    `Nama: ${this.form.nama}\nNo. WA: ${this.form.hp}\nEmail: ${this.form.email || '-'}\nLayanan: ${this.form.layanan}\nBudget: ${this.form.budget || '-'}\n\nKebutuhan:\n${this.form.pesan}`
                );
                window.location.href = `mailto:info@cakrainovasidigital.com?subject=${subject}&body=${body}`;
                this.submitted = true;
            },
        };
    }

    function jamOperasional() {
        const now = new Date();
        const hari = now.getDay(); // 0=Min, 1=Sen, ..., 6=Sab
        const jam = now.getHours();
        const menit = now.getMinutes();
        const waktuDesimal = jam + menit / 60;

        const buka = (hari >= 1 && hari <= 5 && waktuDesimal >= 8 && waktuDesimal < 17) ||
            (hari === 6 && waktuDesimal >= 8 && waktuDesimal < 14);

        return {
            isOpen: buka,
            jadwal: [{
                    hari: 'Senin – Jumat',
                    waktu: '08.00 – 17.00',
                    buka: true,
                    isToday: hari >= 1 && hari <= 5
                },
                {
                    hari: 'Sabtu',
                    waktu: '08.00 – 14.00',
                    buka: true,
                    isToday: hari === 6
                },
                {
                    hari: 'Minggu',
                    waktu: 'Tutup',
                    buka: false,
                    isToday: hari === 0
                },
            ],
        };
    }

    function faqKontak() {
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
                const ripple = btn.querySelector('.faq-kontak-ripple');

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
                const el = document.getElementById('faq-kontak-answer-' + id);
                if (!el) return;
                const parent = el.closest('.faq-kontak-item');
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

    @push('styles')
    <style>
    .faq-kontak-answer {
        transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.28s ease;
    }

    .faq-kontak-ripple {
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
        .faq-kontak-answer {
            transition: none;
        }

        .faq-kontak-ripple {
            display: none;
        }
    }
    </style>
    @endpush

</x-layout.app>