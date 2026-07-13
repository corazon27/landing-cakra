<x-layout.app>

    <section class="py-20 bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-10 text-center">

            {{-- Navigasi Breadcrumbs di atas --}}
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb" data-aos="fade-down">
                <ol
                    class="inline-flex items-center bg-white/80 backdrop-blur-sm px-6 py-2.5 rounded-full border border-slate-200/60 shadow-sm">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="text-xs font-semibold text-slate-500 hover:text-blue-600 transition flex items-center">
                            <i class="fas fa-home mr-2.5"></i> Beranda
                        </a>
                    </li>

                    <li aria-current="page">
                        <div class="flex items-center">
                            {{-- Menggunakan mx-4 agar jarak ikon pas dan tidak rapat --}}
                            <i class="fas fa-chevron-right text-[9px] text-slate-300 mx-4"></i>
                            <span class="text-xs font-bold text-blue-600 tracking-wide">Tanya Jawab</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="max-w-6xl mx-auto px-10">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2" data-aos="fade-right">
                    <span
                        class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider">
                        Bantu Jawab Keraguan Anda
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold mt-6 mb-6 leading-tight text-slate-900">
                        Punya Pertanyaan? <br>
                        <span class="text-blue-600">Gak Perlu Sungkan</span> Buat Tanya.
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        Kami tahu, memulai sesuatu yang baru (apalagi urusan teknologi) pasti banyak pertimbangannya. Di
                        sini kami kumpulkan jawaban buat pertanyaan yang paling sering mampir ke meja diskusi kami.
                    </p>
                </div>

                <div class="md:w-1/2" data-aos="fade-left">
                    <div
                        class="aspect-square bg-slate-50 rounded-[40px] flex items-center justify-center p-12 relative mt-3">
                        <div class="text-center">
                            <div class="text-6xl mb-4">💬</div>
                            <p class="text-slate-500 font-medium italic">"Tanya-tanya dulu itu gratis, lho!"</p>
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-blue-600/5 rounded-full -z-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-4xl mx-auto px-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-slate-900">Paling Sering Ditanyain</h2>
                <p class="text-slate-500 mt-2">Masih ragu? Tenang, ini beberapa jawaban buat pertanyaan yang sering
                    mampir.
                </p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden" data-aos="fade-up">
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-slate-50 transition">
                        <span class="font-bold text-slate-900">"Mas, saya beneran gaptek, apa nanti bisa
                            pakainya?"</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="px-6 pb-6 text-slate-600 text-sm leading-relaxed">
                        Bisa banget! Kami nggak cuma kasih aplikasinya terus hilang. Kami bakal nemenin dan ajarin
                        pelan-pelan sampai Anda atau tim beneran mahir pakainya. Kalau lupa cara pakainya, tinggal WA
                        aja,
                        kami siap bantu.
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="100">
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-slate-50 transition">
                        <span class="font-bold text-slate-900">"Harganya bisa bayar bertahap atau dicicil nggak?"</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="px-6 pb-6 text-slate-600 text-sm leading-relaxed">
                        Sangat bisa! Kami paham kondisi UMKM. Pembayaran bisa disesuaikan dengan kesepakatan bareng,
                        biasanya ada DP di awal dan sisanya setelah aplikasi jadi atau siap pakai. Gak perlu berat di
                        awal.
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden" data-aos="fade-up"
                    data-aos-delay="200">
                    <button class="w-full p-6 text-left flex justify-between items-center hover:bg-slate-50 transition">
                        <span class="font-bold text-slate-900">"Kalau tiba-tiba ada error atau masalah gimana?"</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="px-6 pb-6 text-slate-600 text-sm leading-relaxed">
                        Kami kasih garansi perbaikan. Kalau ada kendala teknis, tim kami bakal gerak cepat buat benerin
                        supaya bisnis Anda nggak keganggu. Kami partner Anda, jadi kami nggak bakal lepas tangan.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-10 text-center" data-aos="zoom-in">
            <div class="bg-blue-600 rounded-[40px] p-12 text-white shadow-2xl shadow-blue-200">
                <h2 class="text-3xl font-bold mb-4">Masih ada yang mengganjal?</h2>
                <p class="text-blue-100 mb-8 leading-relaxed">
                    Gak usah sungkan, tanya-tanya itu gak bayar kok. Kita ngobrol santai aja dulu lewat WhatsApp, siapa
                    tahu kita bisa jadi partner tumbuh bareng!
                </p>
                <a href="https://wa.me/6285865405330?text=Halo%2C%20saya%20tadi%20baca%20halaman%20tanya-jawab%2C%20tapi%20masih%20ada%20yang%20mau%20saya%20tanyain%20langsung%20nih.%20Boleh%20bantu%20jawab%3F"
                    class="inline-block bg-white text-blue-600 px-10 py-4 rounded-2xl font-bold hover:bg-blue-50 transition">
                    Ngobrol di WhatsApp Yuk
                </a>
            </div>
        </div>
    </section>


</x-layout.app>