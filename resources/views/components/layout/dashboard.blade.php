<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Affiliate - Cakra Inovasi Digital</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite('resources/css/app.css')
</head>

<body class="bg-slate-50 text-slate-900 antialiased">

    <div class="flex min-h-screen" x-data="{ sidebarOpen: true }">
        <aside :class="sidebarOpen ? 'w-64' : 'w-20'"
            class="bg-white border-r border-slate-200 hidden md:flex flex-col sticky top-0 h-screen transition-all duration-300">

            <div class="p-6 flex items-center justify-between">
                <div class="flex items-center gap-3" x-show="sidebarOpen">
                    <img src="{{ asset('images/logo-cakra.png') }}" class="h-8 w-auto">
                    <span class="font-bold text-lg tracking-tight">Cakra<span class="text-blue-600">Dash</span></span>
                </div>
                <button @click="sidebarOpen = !sidebarOpen"
                    class="text-slate-400 hover:text-blue-600 cursor-pointer group">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

            <nav class="flex-1 px-4 space-y-2 mt-4">
                <a href="{{ route('affiliate.dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition 
   {{ request()->routeIs('affiliate.dashboard') ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-slate-500 hover:bg-slate-50' }}">
                    <i class="fa-solid fa-house w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="font-medium text-sm">Dashboard</span>
                </a>

                <a href="{{ route('affiliate.riwayat') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition 
   {{ request()->routeIs('affiliate.riwayat') ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-slate-500 hover:bg-slate-50' }}">
                    <i class="fa-solid fa-wallet w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="font-medium text-sm">Riwayat Komisi</span>
                </a>

                <a href="{{ route('affiliate.withdraw') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition 
   {{ request()->routeIs('affiliate.withdraw') ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-slate-500 hover:bg-slate-50' }}">
                    <i class="fa-solid fa-money-bill-transfer w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="font-medium text-sm">Tarik Komisi</span>
                </a>

                <a href="{{ route('affiliate.settings') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition 
   {{ request()->routeIs('affiliate.settings*') ? 'bg-blue-50 text-blue-600 border-r-4 border-blue-600' : 'text-slate-500 hover:bg-slate-50' }}">
                    <i class="fa-solid fa-gear w-5 text-center"></i>
                    <span x-show="sidebarOpen" class="font-medium text-sm">Pengaturan</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-100">
                <form action="{{ route('affiliate.logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                        class="flex items-center gap-3 px-4 py-3 w-full rounded-xl text-red-500 hover:bg-red-50 transition cursor-pointer group">
                        <i class="fa-solid fa-arrow-right-from-bracket w-5 text-center"></i>
                        <span x-show="sidebarOpen" class="font-medium text-sm">Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 flex flex-col">
            <header
                class="h-16 bg-white border-b border-slate-100 flex items-center justify-between px-8 sticky top-0 z-10">
                <div class="text-sm font-medium text-slate-500">
                    Panel Affiliate / <span class="text-slate-900 capitalize">{{ Request::segment(2) }}</span>
                </div>

                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-slate-900">{{ Auth::guard('affiliate')->user()->name }}</p>
                        <p class="text-[10px] text-slate-400">ID: #{{ Auth::guard('affiliate')->user()->id }}</p>
                    </div>
                    <img src="{{ Auth::guard('affiliate')->user()->profile_photo ? asset('storage/' . Auth::guard('affiliate')->user()->profile_photo) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::guard('affiliate')->user()->name) . '&background=0D8ABC&color=fff' }}"
                        class="w-10 h-10 rounded-full border-2 border-white shadow-sm object-cover">
                </div>
            </header>

            <div class="p-8">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>