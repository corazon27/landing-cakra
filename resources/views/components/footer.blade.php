<footer class="bg-slate-900 text-white pt-16 pb-8 relative z-30">
    <div class="max-w-6xl mx-auto px-6 lg:px-10">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

            <div class="lg:col-span-1">
                <a href="{{ url('/') }}" class="inline-block mb-3" aria-label="Beranda Cakra Inovasi Digital">
                    <div class="text-2xl font-bold leading-tight">
                        Cakra<span class="text-blue-400"> Inovasi Digital</span>
                    </div>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed mb-5">
                    Solusi teknologi andal untuk transformasi digital bisnis Anda.
                </p>

                <div class="flex items-center gap-4" aria-label="Media sosial kami">
                    @php
                    $socials = [
                    ['href' => 'https://www.instagram.com/cakrainovasidigital.id/', 'icon' => 'fa-instagram', 'label' =>
                    'Instagram'],
                    ['href' => 'https://www.linkedin.com/in/cakra-inovasi-digital-9141943b3/', 'icon' => 'fa-linkedin',
                    'label' => 'LinkedIn'],
                    ['href' => 'https://www.facebook.com/cakrainovasidigital', 'icon' => 'fa-facebook', 'label' =>
                    'Facebook'],
                    ['href' => 'https://x.com/CakraInovasiDig', 'icon' => 'fa-x-twitter', 'label' => 'X (Twitter)'],
                    ];
                    @endphp
                    @foreach($socials as $social)
                    <a href="{{ $social['href'] }}" aria-label="{{ $social['label'] }} Cakra Inovasi Digital"
                        title="{{ $social['label'] }}" target="_blank" rel="noopener noreferrer"
                        class="w-9 h-9 flex items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-blue-600 hover:text-white transition-all duration-200">
                        <i class="fa-brands {{ $social['icon'] }} text-sm" aria-hidden="true"></i>
                    </a>
                    @endforeach
                </div>
            </div>

            <nav aria-label="Navigasi footer">
                <h4 class="font-bold text-sm uppercase tracking-widest text-slate-300 mb-4">Navigasi</h4>
                <ul class="space-y-2.5" role="list">
                    @php
                    $navLinks = [
                    ['href' => url('/'), 'label' => 'Beranda'],
                    ['href' => url('/layanan'), 'label' => 'Layanan'],
                    ['href' => url('/affiliate'), 'label' => 'Program Affiliate'],
                    ['href' => url('/portofolio'), 'label' => 'Portofolio'],
                    ['href' => route('front.artikel.index'), 'label' => 'Artikel'],
                    ['href' => url('/hubungi-kami'), 'label' => 'Hubungi Kami'],
                    ];
                    @endphp
                    @foreach($navLinks as $link)
                    <li>
                        <a href="{{ $link['href'] }}"
                            class="text-slate-400 text-sm hover:text-white hover:pl-1 transition-all duration-150">
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>

            <div>
                <h4 class="font-bold text-sm uppercase tracking-widest text-slate-300 mb-4">Kontak & Jam Kerja</h4>
                <address class="not-italic">
                    <ul class="space-y-4 text-sm text-slate-400" role="list">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 mt-0.5 text-blue-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true" width="16" height="16">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Jl. Slamet Riyadi No. 250, Magelang, Jawa Tengah</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-blue-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true" width="16" height="16">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="tel:+6285865405330" class="hover:text-white transition-colors">
                                +62 858-6540-5330
                            </a>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 mt-0.5 text-blue-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true" width="16" height="16">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div class="leading-relaxed">
                                <p class="font-semibold text-slate-300 mb-0.5">Jam Operasional</p>
                                <p>Senin – Jumat: 08.00 – 17.00</p>
                                <p>Sabtu: 08.00 – 14.00</p>
                                <p class="text-red-400 text-xs mt-1 italic">Minggu & Hari Merah: Tutup</p>
                            </div>
                        </li>
                    </ul>
                </address>
            </div>

            <div>
                <h4 class="font-bold text-sm uppercase tracking-widest text-slate-300 mb-4">Lokasi Kami</h4>
                <p class="text-slate-400 text-sm mb-4 leading-relaxed">
                    Kami berlokasi di Magelang, Jawa Tengah. Kunjungi kami atau dapatkan petunjuk arah langsung via
                    Google Maps.
                </p>
                <a href="https://maps.google.com/?q=Cakra+Inovasi+Digital+Magelang" target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 px-4 py-2 border border-slate-600 rounded-full text-sm text-slate-300 hover:border-blue-400 hover:text-white hover:bg-blue-600/10 transition-all duration-200">
                    <i class="fa-solid fa-location-arrow text-blue-400 text-xs" aria-hidden="true"></i>
                    Petunjuk Arah
                </a>
            </div>

        </div>

        <div
            class="border-t border-slate-800 pt-6 flex flex-col sm:flex-row justify-between items-center gap-3 text-slate-500 text-xs">
            <p>© {{ date('Y') }} Cakra Inovasi Digital. Seluruh hak cipta dilindungi.</p>
            <p>Dibuat dengan <span class="text-red-400" aria-label="cinta">♥</span> di Magelang, Jawa Tengah</p>
        </div>

    </div>
</footer>