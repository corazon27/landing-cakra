@props([
'items' => [],
'current' => '',
])

<nav class="flex justify-center mb-6" aria-label="Breadcrumb" data-aos="fade-down">
    <ol class="inline-flex items-center bg-white/80 backdrop-blur-sm px-6 py-2.5 rounded-full border border-slate-200/60 shadow-sm"
        itemscope itemtype="https://schema.org/BreadcrumbList">

        <li class="inline-flex items-center" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
            <a href="{{ url('/') }}" itemprop="item"
                class="text-xs font-semibold text-slate-500 hover:text-blue-600 transition flex items-center">
                <i class="fas fa-home mr-2.5" aria-hidden="true"></i>
                <span itemprop="name">Beranda</span>
            </a>
            <meta itemprop="position" content="1">
        </li>

        @foreach($items as $index => $item)
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <div class="flex items-center">
                <i class="fas fa-chevron-right text-[9px] text-slate-300 mx-4" aria-hidden="true"></i>
                <a href="{{ $item['url'] }}" itemprop="item"
                    class="text-xs font-semibold text-slate-500 hover:text-blue-600 transition">
                    <span itemprop="name">{{ $item['name'] }}</span>
                </a>
                <meta itemprop="position" content="{{ $index + 2 }}">
            </div>
        </li>
        @endforeach

        @if($current)
        <li aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <div class="flex items-center">
                <i class="fas fa-chevron-right text-[9px] text-slate-300 mx-4" aria-hidden="true"></i>
                <span class="text-xs font-bold text-blue-600 tracking-wide" itemprop="name">{{ $current }}</span>
                <meta itemprop="position" content="{{ count($items) + 2 }}">
            </div>
        </li>
        @endif

    </ol>
</nav>