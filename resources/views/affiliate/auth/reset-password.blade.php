<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Password Baru - Cakra Inovasi</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}" class="h-16 w-auto">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 antialiased">
    <section class="pt-10 md:pt-32 pb-20 min-h-screen flex items-start md:items-center">
        <div class="max-w-md mx-auto px-6 w-full">
            <div class="bg-white rounded-[32px] shadow-2xl shadow-slate-200/50 p-8 lg:p-10 border border-slate-100">

                <div class="mb-8 text-center">
                    <h1 class="text-2xl font-extrabold text-slate-900 mb-2">Password Baru</h1>
                    <p class="text-slate-500 text-sm">Silakan buat password baru yang kuat dan mudah kamu ingat.</p>
                </div>

                <form action="{{ route('password.update') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ $email }}">

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Password Baru</label>
                        <input type="password" name="password" required
                            class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition"
                            placeholder="Minimal 8 karakter">
                        @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Ulangi Password Baru</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:ring-4 focus:ring-blue-100 focus:border-blue-600 outline-none transition"
                            placeholder="Masukkan ulang password baru">
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-4 rounded-2xl font-extrabold text-base hover:bg-blue-700 transition shadow-xl shadow-blue-200 active:scale-[0.98] cursor-pointer">
                        Perbarui Password
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>