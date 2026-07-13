<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Affiliate - Cakra Inovasi</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}" class="h-16 w-auto">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 antialiased">
    <section class="pt-10 md:pt-32 pb-20 min-h-screen flex items-start md:items-center">
        <div class="max-w-4xl mx-auto px-6 w-full">
            <div
                class="bg-white rounded-[32px] shadow-2xl shadow-slate-200/50 overflow-hidden flex flex-col md:flex-row border border-slate-100 min-h-[550px]">

                <div class="md:w-7/12 p-8 lg:p-14 flex flex-col justify-center bg-white order-2 md:order-1">

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
                        <h1 class="text-3xl font-extrabold text-slate-900 mb-2">Selamat Datang Kembali</h1>
                        <p class="text-slate-500">Masuk untuk mengelola link affiliate kamu.</p>
                    </div>

                    <form action="{{ route('affiliate.login.post') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition"
                                placeholder="nama@email.com" autofocus>
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Password</label>
                            <input type="password" name="password" required
                                class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition"
                                placeholder="Masukkan password kamu">
                        </div>

                        {{-- BEST PRACTICE: Area Interaksi Tambahan (Remember Me & Lupa Password) --}}
                        <div class="flex items-center justify-between pt-1">
                            <label class="flex items-center select-none cursor-pointer group/remember">
                                <input type="checkbox" name="remember"
                                    class="w-4 h-4 rounded text-blue-600 border-slate-300 focus:ring-blue-500 cursor-pointer">
                                <span
                                    class="ml-2 text-xs font-semibold text-slate-500 group-hover/remember:text-slate-700 transition">Ingat
                                    Saya</span>
                            </label>
                            <a href="{{ route('password.request') }}"
                                class="text-xs font-bold text-blue-600 hover:text-blue-700 transition hover:underline">
                                Lupa Password?
                            </a>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-5 rounded-2xl font-extrabold text-lg hover:bg-blue-700 transition shadow-xl shadow-blue-200 active:scale-[0.98] cursor-pointer group">
                            Masuk Ke Dashboard
                        </button>

                        <p class="text-center text-slate-500 text-sm">
                            Belum punya akun? <a href="{{ route('affiliate.register') }}"
                                class="text-blue-600 font-bold hover:underline">Daftar Gratis</a>
                        </p>
                    </form>
                </div>

                <div
                    class="md:w-5/12 bg-blue-700 p-10 text-white flex flex-col justify-center relative overflow-hidden order-1 md:order-2">
                    <div class="relative z-10">
                        <h2 class="text-2xl font-bold mb-4">Akses Portal Eksklusif 🔒</h2>
                        <p class="text-white-400 text-sm leading-relaxed mb-6">
                            Pantau setiap klik, pendaftaran, dan komisi yang kamu hasilkan secara real-time.
                        </p>
                        <div class="p-4 bg-slate-800/50 border border-slate-700 rounded-2xl">
                            <p class="text-xs text-white-400 italic">"Gunakan dashboard ini untuk memaksimalkan
                                penghasilan pasifmu."</p>
                        </div>
                    </div>
                    <div class="absolute -top-20 -right-20 w-64 h-64 bg-blue-600/20 rounded-full blur-3xl"></div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>