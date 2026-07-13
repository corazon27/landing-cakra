<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - Cakra Inovasi</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-cakra.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 antialiased">
    <section class="min-h-screen flex items-center justify-center p-6">
        <div
            class="max-w-md w-full bg-white rounded-[32px] shadow-2xl shadow-slate-200/50 p-10 text-center border border-slate-100">

            <div class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>

            <h1 class="text-2xl font-extrabold text-slate-900 mb-4">Verifikasi Email Kamu</h1>

            <p class="text-slate-500 leading-relaxed mb-8">
                Terima kasih telah mendaftar! Sebelum mulai, silakan klik link verifikasi yang baru saja kami kirimkan
                ke email kamu.
            </p>

            @if (session('message'))
            <div class="mb-6 p-4 bg-emerald-50 text-emerald-600 text-sm rounded-xl border border-emerald-100">
                Link verifikasi baru telah berhasil dikirim!
            </div>
            @endif

            <div class="space-y-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-4 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-100 cursor-pointer">
                        Kirim Ulang Email
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="text-sm text-slate-400 hover:text-slate-600 font-medium underline cursor-pointer">
                        Keluar / Ganti Akun
                    </button>
                </form>
            </div>

        </div>
    </section>
</body>

</html>