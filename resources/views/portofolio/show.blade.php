<x-layout.app>
    <main class="bg-slate-50/50 min-h-screen pt-32 pb-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Breadcrumb & Kembali --}}
            <div class="max-w-6xl mx-auto text-center mb-10">
                <x-breadcrumb :items="[['name' => 'Portofolio', 'url' => url('/portofolio')]]"
                    current="Detail Portofolio" />
            </div>

            {{-- Header Judul & Kategori --}}
            <div class="mb-8" data-aos="fade-up">
                <span
                    class="inline-block bg-blue-50 text-blue-700 text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider mb-3">
                    {{ $portfolio->kategori }}
                </span>
                <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    {{ $portfolio->judul }}
                </h1>
            </div>

            {{-- Main Mockup / Gambar Utama --}}
            <div class="mb-12 rounded-[32px] overflow-hidden shadow-md border border-slate-100 bg-white p-3"
                data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-[16/9] w-full rounded-[24px] overflow-hidden bg-slate-100 relative">
                    @if($portfolio->gambar)
                    <img src="{{ asset('storage/portofolio/' . $portfolio->gambar) }}" alt="{{ $portfolio->judul }}"
                        class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full bg-blue-600 flex items-center justify-center text-white">
                        <span class="text-8xl">💼</span>
                    </div>
                    @endif
                </div>
            </div>

            {{-- Dua Kolom Konten --}}
            <div class="grid lg:grid-cols-3 gap-8 items-start">

                {{-- Kolom Kiri: Detail & Fitur Utama --}}
                <div class="lg:col-span-2 space-y-8" data-aos="fade-up" data-aos-delay="200">

                    {{-- Deskripsi --}}
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
                        <h2 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-blue-500 text-base"></i> Detail Proyek
                        </h2>
                        <p class="text-slate-600 leading-relaxed whitespace-pre-line">
                            {{ $portfolio->deskripsi_singkat }}
                        </p>
                    </div>

                    {{-- Pain Points (Tantangan Klien) --}}
                    @if(!empty($portfolio->pain_points))
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
                        <h2 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-triangle-exclamation text-amber-500 text-base"></i> Masalah Klien /
                            Pain
                            Points
                        </h2>
                        <ul class="space-y-3">
                            @foreach($portfolio->pain_points as $point)
                            <li class="flex items-start gap-3 text-slate-600 leading-relaxed">
                                <span class="w-2 h-2 rounded-full bg-amber-500 mt-2.5 shrink-0"></span>
                                <span>{{ $point }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- Fitur Utama Sistem --}}
                    @if(!empty($portfolio->fitur_utama))
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100">
                        <h2 class="text-xl font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-cubes text-blue-500 text-base"></i> Fitur Utama yang Dikembangkan
                        </h2>
                        <div class="grid sm:grid-cols-2 gap-4">
                            @foreach($portfolio->fitur_utama as $fitur)
                            <div class="flex items-center gap-3 p-3 bg-slate-50 rounded-xl border border-slate-100">
                                <div
                                    class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                    <i class="fa-solid fa-circle-check text-sm"></i>
                                </div>
                                <span class="text-sm font-semibold text-slate-700">{{ $fitur }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                {{-- Kolom Kanan: Spesifikasi / Meta Data Widget --}}
                <aside class="space-y-6 lg:sticky lg:top-24" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100">
                        <h3 class="text-lg font-bold text-slate-900 mb-4">Informasi Proyek</h3>

                        <div class="space-y-4">
                            {{-- Klien --}}
                            <div class="flex items-center gap-4 py-3 border-b border-slate-50">
                                <div
                                    class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-slate-500 shrink-0">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>
                                <div>
                                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Nama Klien
                                        /
                                        Industri</p>
                                    <p class="text-sm font-bold text-slate-800">{{ $portfolio->klien_industri ?? '-' }}
                                    </p>
                                </div>
                            </div>

                            {{-- Durasi --}}
                            <div class="flex items-center gap-4 py-3 border-b border-slate-50">
                                <div
                                    class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-slate-500 shrink-0">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div>
                                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Durasi
                                        Pengerjaan</p>
                                    <p class="text-sm font-bold text-slate-800">{{ $portfolio->durasi ?? '-' }}</p>
                                </div>
                            </div>

                            {{-- Demo Live Link (Opsional jika Anda berencana menambahkannya nanti) --}}
                            @if(!empty($portfolio->live_url))
                            <a href="{{ $portfolio->live_url }}" target="_blank"
                                class="w-full mt-2 inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-3.5 px-4 rounded-xl transition-all shadow-md shadow-blue-100 hover:shadow-lg">
                                <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                Kunjungi Live Website
                            </a>
                            @endif
                        </div>
                    </div>

                    {{-- Tech Stack Widget --}}
                    @if(!empty($portfolio->tech_stack))
                    <div class="bg-white rounded-3xl p-6 shadow-sm border border-slate-100">
                        <h3 class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-4">Teknologi & Framework
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($portfolio->tech_stack as $tech)
                            <span
                                class="bg-slate-100 hover:bg-blue-50 hover:text-blue-600 text-slate-600 text-xs font-semibold px-3 py-1.5 rounded-lg transition-colors border border-slate-200/60">
                                {{ $tech }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </aside>

            </div>
        </div>
    </main>
</x-layout.app>