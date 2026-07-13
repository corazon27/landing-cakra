<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password Affiliate - Cakra Inovasi</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}" class="h-16 w-auto">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 antialiased">
    <section class="pt-10 md:pt-32 pb-20 min-h-screen flex items-start md:items-center">
        <div class="max-w-md mx-auto px-6 w-full">
            <div class="bg-white rounded-[32px] shadow-2xl shadow-slate-200/50 p-8 lg:p-10 border border-slate-100">

                @if (session('success'))
                <div
                    class="bg-emerald-50 text-emerald-600 p-4 rounded-xl text-sm mb-6 border border-emerald-100 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                @endif

                <div class="mb-8 text-center">
                    <h1 class="text-2xl font-extrabold text-slate-900 mb-2">Pemulihan Password</h1>
                    <p class="text-slate-500 text-sm">Masukkan email kamu, kami akan kirimkan link untuk membuat
                        password baru.</p>
                </div>

                <form action="{{ route('password.email') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Email Akun</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition"
                            placeholder="nama@email.com" autofocus>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-4 rounded-2xl font-extrabold text-base hover:bg-blue-700 transition shadow-xl shadow-blue-200 active:scale-[0.98] cursor-pointer">
                        Kirim Link Reset
                    </button>

                    <p class="text-center text-slate-500 text-sm">
                        Ingat password-mu? <a href="{{ route('affiliate.login') }}"
                            class="text-blue-600 font-bold hover:underline">Kembali Login</a>
                    </p>
                </form>
            </div>
        </div>
    </section>
</body>

</html>