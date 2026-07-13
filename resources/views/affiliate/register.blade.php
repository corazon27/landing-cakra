<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Affiliate - Cakra Inovasi</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}" class="h-16 w-auto">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
    [x-cloak] {
        display: none !important;
    }
    </style>
</head>

<body class="bg-slate-50 antialiased">
    <section class="pt-10 md:pt-32 pb-20 min-h-screen flex items-start md:items-center" x-data="{ 
                password: '', 
                confirm_password: '',
                get strength() {
                    if (this.password.length === 0) return 0;
                    let s = 0;
                    if (this.password.length >= 8) s++;
                    if (/[A-Z]/.test(this.password)) s++;
                    if (/[0-9]/.test(this.password)) s++;
                    if (/[^A-Za-z0-9]/.test(this.password)) s++;
                    return s;
                }
             }">

        <div class="max-w-5xl mx-auto px-6 w-full">
            <div
                class="bg-white rounded-[32px] shadow-2xl shadow-slate-200/50 overflow-hidden flex flex-col md:flex-row border border-slate-100 min-h-[650px]">

                <div
                    class="md:w-5/12 bg-blue-600 p-10 text-white flex flex-col justify-center relative overflow-hidden">
                    <div class="relative z-10">
                        <a href="/"
                            class="inline-flex items-center text-blue-100 hover:text-white mb-12 transition group">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2 transform group-hover:-translate-x-1 transition" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Kembali ke Beranda
                        </a>

                        <h2 class="text-3xl font-bold mb-6 italic leading-tight text-white">Mulai Langkah Suksesmu di
                            Sini 🚀</h2>
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4">
                                <div class="bg-blue-500/50 backdrop-blur-sm rounded-lg p-2 text-xs">✅</div>
                                <p class="text-blue-50 text-sm">Akses dashboard tracking real-time setelah daftar.</p>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="bg-blue-500/50 backdrop-blur-sm rounded-lg p-2 text-xs">✅</div>
                                <p class="text-blue-50 text-sm">Komisi 10% langsung cair setelah klien lunas.</p>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="bg-blue-500/50 backdrop-blur-sm rounded-lg p-2 text-xs">✅</div>
                                <p class="text-blue-50 text-sm">Materi promosi (copywriting & banner) sudah siap pakai.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-blue-500 rounded-full opacity-50 blur-3xl">
                    </div>
                </div>

                <div class="md:w-7/12 p-8 lg:p-14 flex flex-col justify-center bg-white">

                    @if (session('success'))
                    <div
                        class="bg-emerald-50 text-emerald-600 p-4 rounded-xl text-sm mb-6 border border-emerald-100 flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="mb-8">
                        <h1 class="text-3xl font-extrabold text-slate-900 mb-2 tracking-tight">Daftar Affiliate</h1>
                        <p class="text-slate-500">Lengkapi data diri kamu untuk mulai mendapatkan komisi.</p>
                    </div>

                    <form action="#" method="POST" class="space-y-5">
                        @csrf

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" required
                                class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition text-slate-700 placeholder:text-slate-400"
                                placeholder="Masukkan nama sesuai rekening bank">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Email Aktif</label>
                                <input type="email" name="email" required
                                    class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition text-slate-700 placeholder:text-slate-400"
                                    placeholder="nama@email.com">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">No. WhatsApp</label>
                                <input type="tel" name="whatsapp" required
                                    class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition text-slate-700 placeholder:text-slate-400"
                                    placeholder="0812xxxx">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Password</label>
                            <input type="password" name="password" x-model="password" required
                                class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition text-slate-700 placeholder:text-slate-400"
                                placeholder="Min. 8 karakter">

                            <div class="flex gap-1 mt-3 h-1.5">
                                <div :class="strength >= 1 ? (strength <= 2 ? 'bg-red-400' : (strength === 3 ? 'bg-yellow-400' : 'bg-emerald-500')) : 'bg-slate-200'"
                                    class="h-full flex-1 rounded-full transition-all duration-500"></div>
                                <div :class="strength >= 2 ? (strength <= 2 ? 'bg-red-400' : (strength === 3 ? 'bg-yellow-400' : 'bg-emerald-500')) : 'bg-slate-200'"
                                    class="h-full flex-1 rounded-full transition-all duration-500"></div>
                                <div :class="strength >= 3 ? (strength === 3 ? 'bg-yellow-400' : 'bg-emerald-500') : 'bg-slate-200'"
                                    class="h-full flex-1 rounded-full transition-all duration-500"></div>
                                <div :class="strength >= 4 ? 'bg-emerald-500' : 'bg-slate-200'"
                                    class="h-full flex-1 rounded-full transition-all duration-500"></div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Ulangi Password</label>
                            <input type="password" name="password_confirmation" x-model="confirm_password" required
                                :class="confirm_password.length > 0 ? (password === confirm_password ? 'border-emerald-500 ring-emerald-100' : 'border-red-500 ring-red-100') : ''"
                                class="w-full px-5 py-3.5 rounded-xl border border-slate-200 focus:ring-4 outline-none transition text-slate-700 placeholder:text-slate-400"
                                placeholder="Ketik ulang password">

                            <p x-show="confirm_password.length > 0 && password !== confirm_password"
                                class="text-[11px] text-red-500 font-bold mt-2 uppercase italic" x-cloak>Password tidak
                                cocok!</p>
                        </div>

                        @if ($errors->any())
                        <div class="bg-red-50 text-red-600 p-4 rounded-xl text-sm border border-red-100">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-5 rounded-2xl font-extrabold text-lg hover:bg-blue-700 transition shadow-xl shadow-blue-200 active:scale-[0.98] disabled:opacity-50 disabled:cursor-not-allowed cursor-pointer group"
                            :disabled="password !== confirm_password || password.length < 8">
                            Gabung Sekarang (Gratis)
                        </button>

                        <p class="text-center text-slate-500 text-sm mt-4">
                            Sudah punya akun? <a href="/affiliate/login"
                                class="text-blue-600 font-bold hover:underline transition">Log In di sini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>