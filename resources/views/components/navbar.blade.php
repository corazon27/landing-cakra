@php
$layananMenu = [
['href' => '/layanan/web-katalog-produk', 'label' => 'Website Katalog Produk'],
['href' => '/layanan/web-kasir', 'label' => 'Website Kasir Digital / POS'],
['href' => '/layanan/web-company-profile', 'label' => 'Website Company Profile'],
['href' => '/layanan/web-erp', 'label' => 'Website Sistem Manajemen Bisnis (ERP)'],
];
@endphp

<header class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 shadow-sm">
    <nav x-data="{ mobileOpen: false, layananOpen: false }" aria-label="Navigasi utama">

        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

            {{-- Gunakan h-36 atau h-40 untuk ukuran ekstra besar --}}
            <a href="{{ url('/') }}" aria-label="Cakra Inovasi Digital — Beranda"
                class="flex items-center gap-3 hover:opacity-85 transition-opacity flex-shrink-0">
                {{--
                    PERBAIKAN (PageSpeed "Improve image delivery"): width/height
                    diubah dari 330x330 ke 320x320, mengikuti file gambar baru
                    yang sudah di-resize dari 500x500 (14 KiB) ke 320x320 (~10 KiB).
                    Alasan pilih 320 (bukan pas 294 hasil ukur Lighthouse):
                    kasih sedikit headroom untuk layar dengan pixel density
                    lebih tinggi dari device pixel ratio 1x, tanpa membawa balik
                    ukuran berlebih seperti file lama.
                --}}
                <img src="{{ asset('images/logo-cakra-alt-400.webp') }}" alt="Logo Cakra Inovasi Digital" width="320"
                    height="320" fetchpriority="high" class="h-42 md:h-52 w-auto object-contain">
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <ul class="flex items-center gap-8" role="list">
                    <li>
                        <a href="/"
                            class="{{ request()->routeIs('front.home') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors"
                            @if(request()->routeIs('front.home')) aria-current="page" @endif>
                            Beranda
                        </a>
                    </li>

                    <li class="relative group flex items-center h-20" @mouseleave="layananOpen = false">
                        <button type="button" @click="layananOpen = !layananOpen"
                            class="flex items-center gap-1.5 {{ request()->is('layanan*') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors cursor-pointer"
                            aria-haspopup="true" :aria-expanded="layananOpen">
                            Layanan
                            <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-200"
                                :class="layananOpen || 'group-hover:rotate-180'" aria-hidden="true"></i>
                        </button>

                        <div class="absolute top-[72px] left-0 w-64 bg-white border border-slate-100 rounded-xl shadow-xl py-2 z-50
                                    opacity-0 invisible translate-y-2
                                    group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                                    transition-all duration-200" role="menu">
                            @foreach($layananMenu as $item)
                            <a href="{{ $item['href'] }}" role="menuitem"
                                class="block px-4 py-2.5 text-xs uppercase font-bold tracking-wider transition-colors
                                          text-slate-600 hover:bg-blue-50 hover:text-blue-600
                                          {{ !$loop->last ? 'border-b border-slate-50' : '' }}
                                          {{ request()->is(ltrim($item['href'], '/')) ? 'text-blue-600 bg-blue-50' : '' }}">
                                {{ $item['label'] }}
                            </a>
                            @endforeach
                        </div>
                    </li>

                    <li>
                        <a href="/affiliate"
                            class="{{ request()->is('affiliate') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors"
                            @if(request()->is('affiliate')) aria-current="page" @endif>
                            Program Affiliate
                        </a>
                    </li>

                    <li>
                        <a href="/portofolio"
                            class="{{ request()->is('portofolio') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors"
                            @if(request()->is('portofolio')) aria-current="page" @endif>
                            Portofolio
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('front.artikel.index') }}"
                            class="{{ request()->is('artikel*') ? 'text-blue-600 font-bold' : 'text-slate-600' }} hover:text-blue-600 transition-colors"
                            @if(request()->is('artikel*')) aria-current="page" @endif>
                            Artikel
                        </a>
                    </li>
                </ul>

                <a href="/hubungi-kami"
                    class="bg-slate-900 text-white px-5 py-2.5 rounded-lg font-semibold text-sm hover:bg-blue-600 transition-colors duration-200 whitespace-nowrap">
                    Hubungi Kami
                </a>
            </div>

            <button type="button" @click="mobileOpen = !mobileOpen" :aria-expanded="mobileOpen"
                aria-label="Toggle menu navigasi"
                class="md:hidden text-slate-700 hover:text-blue-600 transition-colors focus:outline-none cursor-pointer p-2">
                <i class="fa-solid text-2xl" :class="mobileOpen ? 'fa-xmark' : 'fa-bars'" aria-hidden="true"></i>
            </button>

        </div>

        <div x-show="mobileOpen" x-cloak x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2" @click.outside="mobileOpen = false"
            class="md:hidden bg-white border-t border-slate-100 shadow-lg overflow-y-auto max-h-[calc(100vh-80px)]">

            <div class="px-6 py-5 flex flex-col space-y-1">
                <a href="/"
                    class="py-3 text-sm font-medium rounded-lg px-3 transition-colors
                          {{ request()->routeIs('front.home') ? 'text-blue-600 bg-blue-50 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                    Beranda
                </a>

                <div>
                    <button type="button" @click="layananOpen = !layananOpen" :aria-expanded="layananOpen"
                        class="w-full flex items-center justify-between py-3 px-3 text-sm font-medium rounded-lg transition-colors cursor-pointer
                                   {{ request()->is('layanan*') ? 'text-blue-600 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                        Layanan
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200"
                            :class="layananOpen ? 'rotate-180' : ''" aria-hidden="true"></i>
                    </button>

                    <div x-show="layananOpen" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 -translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="mt-1 ml-3 pl-3 border-l-2 border-blue-100 flex flex-col space-y-1">
                        @foreach($layananMenu as $item)
                        <a href="{{ $item['href'] }}"
                            class="py-2.5 px-2 text-sm transition-colors
                                      {{ request()->is(ltrim($item['href'], '/')) ? 'text-blue-600 font-semibold' : 'text-slate-600 hover:text-blue-600' }}">
                            {{ $item['label'] }}
                        </a>
                        @endforeach
                    </div>
                </div>

                <a href="/affiliate"
                    class="py-3 text-sm font-medium rounded-lg px-3 transition-colors
                          {{ request()->is('affiliate') ? 'text-blue-600 bg-blue-50 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                    Program Affiliate
                </a>

                <a href="/portofolio"
                    class="py-3 text-sm font-medium rounded-lg px-3 transition-colors
                          {{ request()->is('portofolio') ? 'text-blue-600 bg-blue-50 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                    Portofolio
                </a>

                <a href="{{ route('front.artikel.index') }}"
                    class="py-3 text-sm font-medium rounded-lg px-3 transition-colors
                          {{ request()->is('artikel*') ? 'text-blue-600 bg-blue-50 font-bold' : 'text-slate-700 hover:bg-slate-50' }}">
                    Artikel
                </a>

                <div class="pt-4">
                    <a href="/hubungi-kami"
                        class="block w-full text-center bg-slate-900 text-white px-5 py-4 rounded-lg font-semibold text-sm hover:bg-blue-600 transition-colors duration-200">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>