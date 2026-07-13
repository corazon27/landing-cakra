<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendali Pusat - @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-slate-50 font-sans">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-slate-900 text-slate-300 flex-shrink-0 hidden md:flex flex-col">
            <div class="p-6">
                <h1 class="text-white font-bold text-xl flex items-center gap-2">
                    <i class="fas fa-shield-halved text-blue-500"></i> Cakra Admin
                </h1>
            </div>

            <nav class="flex-1 px-4 space-y-2 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="fas fa-chart-line w-5 text-center"></i> Dashboard
                </a>

                <a href="{{ route('admin.articles.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition {{ request()->routeIs('admin.articles.*') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="fas fa-newspaper w-5 text-center"></i> Kelola Artikel
                </a>

                <a href="{{ route('admin.comments.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition {{ request()->routeIs('admin.comments.*') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="fas fa-comments w-5 text-center"></i> Kelola Komentar
                </a>

                <a href="{{ route('admin.cashflow.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition {{ request()->routeIs('admin.cashflow.*') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="fas fa-coins w-5 text-center"></i> Kelola Arus Kas
                </a>

                <a href="{{ route('admin.portfolio.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition {{ request()->routeIs('admin.portfolio.*') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="fas fa-folder-open w-5 text-center"></i> Kelola Portfolio
                </a>

                <div class="pt-4 pb-2 px-4 text-xs font-bold uppercase text-slate-500 tracking-wider">
                    Sistem Affiliasi
                </div>

                <a href="{{ route('admin.affiliates.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition {{ request()->routeIs('admin.affiliates.*') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="fas fa-users w-5 text-center"></i> Data Affiliator
                </a>

                <a href="{{ route('admin.projects.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition {{ request()->routeIs('admin.projects.*') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="fas fa-briefcase w-5 text-center"></i> Kelola Proyek
                </a>

                <a href="{{ route('admin.withdrawals.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 transition {{ request()->routeIs('admin.withdrawals.*') ? 'bg-blue-600 text-white' : '' }}">
                    <i class="fas fa-money-bill-wave w-5 text-center"></i> Kelola Penarikan
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl transition">
                        <i class="fas fa-sign-out-alt w-5 text-center"></i> Keluar Sesi
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 flex flex-col">
            <header class="bg-white border-b border-slate-200 h-16 flex items-center justify-between px-8">
                <div class="text-slate-600 font-medium">@yield('header')</div>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-semibold text-slate-700">{{ Auth::user()->name }}</span>
                    <div
                        class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                </div>
            </header>

            <div class="p-8">
                @yield('content')
            </div>
        </main>
    </div>
    @stack('scripts')

</body>

</html>