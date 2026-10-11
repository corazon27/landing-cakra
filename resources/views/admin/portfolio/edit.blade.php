@extends('components.layout.admin')

@section('title', 'Edit Portfolio: ' . $portfolio->judul)
@section('header', 'Edit Portfolio')

@section('content')
<div class="max-w-4xl mx-auto">

    <a href="{{ route('admin.portfolio.index') }}"
        class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-slate-800 mb-4 transition font-medium">
        <i class="fas fa-arrow-left"></i> Kembali ke Daftar
    </a>

    @if ($errors->any())
    <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-xl">
        <div class="font-bold text-sm mb-1">Periksa kembali inputan Anda:</div>
        <ul class="list-disc list-inside text-xs space-y-1 opacity-90">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        {{-- 1. Informasi Utama Proyek --}}
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 space-y-4">
            <h3 class="text-base font-bold text-slate-900 border-b border-slate-100 pb-3 flex items-center gap-2">
                <i class="fas fa-info-circle text-blue-500"></i> Informasi Utama Proyek
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Judul Portfolio (Auto Slug)</label>
                    <input type="text" name="judul" value="{{ old('judul', $portfolio->judul) }}"
                        placeholder="Contoh: Sistem Kasir & POS Barokah Motor" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Filter Kategori (SEO/Front-end)</label>
                    <select name="filter" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                        <option value="">-- Pilih Filter Halaman Depan --</option>
                        <option value="pos" {{ old('filter', $portfolio->filter) == 'pos' ? 'selected' : '' }}>Kasir / POS</option>
                        <option value="company" {{ old('filter', $portfolio->filter) == 'company' ? 'selected' : '' }}>Company Profile</option>
                        <option value="katalog" {{ old('filter', $portfolio->filter) == 'katalog' ? 'selected' : '' }}>E-Commerce / Katalog</option>
                        <option value="erp" {{ old('filter', $portfolio->filter) == 'erp' ? 'selected' : '' }}>Sistem Kustom / ERP</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Label Kategori Tampilan</label>
                    <input type="text" name="kategori" value="{{ old('kategori', $portfolio->kategori) }}"
                        placeholder="Contoh: Web App & POS System" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Nama Klien / Industri</label>
                    <input type="text" name="klien_industri" value="{{ old('klien_industri', $portfolio->klien_industri) }}"
                        placeholder="Contoh: Bengkel Barokah Motor / Otomotif" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Durasi Pengerjaan</label>
                    <input type="text" name="durasi" value="{{ old('durasi', $portfolio->durasi) }}"
                        placeholder="Contoh: 1 Bulan (Selesai Tepat Waktu)" required
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Gambar Utama / Mockup (Akan Otomatis Dikonversi ke WebP)</label>

                @if($portfolio->gambar)
                <div class="mb-3">
                    <img src="{{ asset('storage/portofolio/' . $portfolio->gambar) }}" alt="Mockup {{ $portfolio->judul }}"
                        class="w-64 aspect-video object-cover rounded-xl border border-slate-200">
                    <p class="text-xs text-slate-400 mt-1.5"><i class="fas fa-info-circle mr-1"></i>Kosongkan pilihan file jika tidak ingin mengubah gambar.</p>
                </div>
                @endif

                <input type="file" name="gambar" accept="image/*"
                    class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:uppercase file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:transition file:cursor-pointer border border-slate-200 rounded-xl p-1.5 bg-slate-50">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Deskripsi Singkat (Muncul di Halaman Grid Depan)</label>
                <textarea name="deskripsi_singkat" rows="3" required
                    placeholder="Jelaskan secara ringkas esensi dari pembuatan web/sistem ini..."
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none resize-none">{{ old('deskripsi_singkat', $portfolio->deskripsi_singkat) }}</textarea>
            </div>
        </div>

        {{-- 2. Detail Teknis & Spesifikasi (Dinamis) --}}
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 space-y-6">
            <h3 class="text-base font-bold text-slate-900 border-b border-slate-100 pb-3 flex items-center gap-2">
                <i class="fas fa-layer-group text-blue-500"></i> Detail Teknis & Spesifikasi (Dinamis)
            </h3>

            {{-- Pain Points --}}
            <div x-data="{ items: {{ json_encode(old('pain_points', $portfolio->pain_points ?? [''])) }} }">
                <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Masalah Klien (Pain Points)</label>
                <div class="space-y-2">
                    <template x-for="(item, index) in items" :key="index">
                        <div class="flex items-center gap-2">
                            <input type="text" name="pain_points[]" x-model="items[index]"
                                placeholder="Contoh: Pencatatan stok masih manual menggunakan kertas pembukuan" required
                                class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                            <button type="button" @click="if(items.length > 1) items.splice(index, 1)"
                                class="p-2.5 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-xl transition">
                                <i class="fas fa-minus-circle"></i>
                            </button>
                        </div>
                    </template>
                </div>
                <button type="button" @click="items.push('')"
                    class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700 mt-2 transition">
                    <i class="fas fa-plus-circle"></i> Tambah Masalah
                </button>
            </div>

            {{-- Tech Stack --}}
            <div x-data="{ items: {{ json_encode(old('tech_stack', $portfolio->tech_stack ?? [''])) }} }">
                <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Teknologi yang Digunakan (Tech Stack)</label>
                <div class="space-y-2">
                    <template x-for="(item, index) in items" :key="index">
                        <div class="flex items-center gap-2">
                            <input type="text" name="tech_stack[]" x-model="items[index]"
                                placeholder="Contoh: Laravel 11, Tailwind CSS, Alpine.js, MySQL" required
                                class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                            <button type="button" @click="if(items.length > 1) items.splice(index, 1)"
                                class="p-2.5 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-xl transition">
                                <i class="fas fa-minus-circle"></i>
                            </button>
                        </div>
                    </template>
                </div>
                <button type="button" @click="items.push('')"
                    class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700 mt-2 transition">
                    <i class="fas fa-plus-circle"></i> Tambah Tech Stack
                </button>
            </div>

            {{-- Fitur Utama Sistem --}}
            <div x-data="{ items: {{ json_encode(old('fitur_utama', $portfolio->fitur_utama ?? [''])) }} }">
                <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Fitur-Fitur Utama Sistem</label>
                <div class="space-y-2">
                    <template x-for="(item, index) in items" :key="index">
                        <div class="flex items-center gap-2">
                            <input type="text" name="fitur_utama[]" x-model="items[index]"
                                placeholder="Contoh: Modul Kasir Kilat, Cetak Struk Thermal, Notifikasi WhatsApp, Laporan Otomatis" required
                                class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                            <button type="button" @click="if(items.length > 1) items.splice(index, 1)"
                                class="p-2.5 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-xl transition">
                                <i class="fas fa-minus-circle"></i>
                            </button>
                        </div>
                    </template>
                </div>
                <button type="button" @click="items.push('')"
                    class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700 mt-2 transition">
                    <i class="fas fa-plus-circle"></i> Tambah Fitur Utama
                </button>
            </div>
        </div>

        {{-- 3. Fitur Multi-Tab & Carousel Screenshot (Edit Modifies Existing Tabs) --}}
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 space-y-6" x-data="{
            tabs: {{ json_encode(old('tabs', $portfolio->tabs ?? [
                ['judul_tab' => '', 'deskripsi' => '', 'fitur_poin' => [''], 'images' => []]
            ])) }}
        }">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                <h3 class="text-base font-bold text-slate-900 flex items-center gap-2">
                    <i class="fas fa-window-restore text-blue-500"></i> Fitur Multi-Tab & Carousel Screenshot (Detail Interaktif)
                </h3>
                <button type="button" @click="tabs.push({ judul_tab: '', deskripsi: '', fitur_poin: [''], images: [] })"
                    class="inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 hover:text-blue-700 bg-blue-50 px-3.5 py-2 rounded-xl transition">
                    <i class="fas fa-plus-circle"></i> Tambah Tab Baru
                </button>
            </div>

            <div class="space-y-6">
                <template x-for="(tab, tabIndex) in tabs" :key="tabIndex">
                    <div class="p-5 bg-slate-50/70 border border-slate-200/80 rounded-2xl space-y-4 relative">
                        {{-- Header Bar Tab --}}
                        <div class="flex items-center justify-between border-b border-slate-200 pb-2.5">
                            <span class="text-xs font-extrabold uppercase text-slate-600 tracking-wider flex items-center gap-1.5">
                                <i class="fas fa-folder-open text-blue-500"></i> <span x-text="'Tab Fitur #' + (tabIndex + 1)"></span>
                            </span>
                            <button type="button" @click="if(tabs.length > 1) tabs.splice(tabIndex, 1)"
                                class="text-xs text-red-500 hover:text-red-700 font-bold inline-flex items-center gap-1 transition">
                                <i class="fas fa-trash-alt"></i> Hapus Tab Ini
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Judul Tab</label>
                                <input type="text" :name="`tabs[${tabIndex}][judul_tab]`" x-model="tab.judul_tab"
                                    placeholder="Contoh: Kasir / Penjualan" required
                                    class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Upload Carousel Screenshot Baru</label>
                                <input type="file" :name="`tabs[${tabIndex}][images][]`" multiple accept="image/*"
                                    class="w-full text-xs text-slate-500 file:mr-2 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 border border-slate-200 rounded-xl bg-white p-1">
                            </div>
                        </div>

                        {{-- Preview Gambar Carousel Lama yang Sudah Terupload --}}
                        <template x-if="tab.images && tab.images.length > 0">
                            <div>
                                <label class="block text-[11px] font-bold uppercase text-slate-500 tracking-wider mb-2">Gambar Carousel Saat Ini (Centang untuk Mempertahankan):</label>
                                <div class="flex flex-wrap gap-3">
                                    <template x-for="(img, imgIndex) in tab.images" :key="imgIndex">
                                        <div class="relative group bg-white p-1.5 rounded-xl border border-slate-200 shadow-sm flex flex-col items-center gap-1">
                                            <img :src="`{{ asset('storage/portofolio/tabs') }}/${img}`" class="w-20 h-14 object-cover rounded-lg">
                                            <label class="flex items-center gap-1 text-[10px] font-semibold text-slate-600 cursor-pointer">
                                                <input type="checkbox" :name="`tabs[${tabIndex}][existing_images][]`" :value="img" checked class="rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                                                Simpan
                                            </label>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </template>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Deskripsi / Penjelasan Tab</label>
                            <textarea :name="`tabs[${tabIndex}][deskripsi]`" x-model="tab.deskripsi" rows="2" required
                                placeholder="Catat transaksi penjualan jadi mudah dan fleksibel..."
                                class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none resize-none"></textarea>
                        </div>

                        {{-- Poin-poin Fitur dalam Tab --}}
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Poin-Poin Fitur di Tab Ini</label>
                            <div class="space-y-2">
                                <template x-for="(poin, poinIndex) in tab.fitur_poin" :key="poinIndex">
                                    <div class="flex items-center gap-2">
                                        <input type="text" :name="`tabs[${tabIndex}][fitur_poin][]`" x-model="tab.fitur_poin[poinIndex]"
                                            placeholder="Contoh: Penjualan Resep & Non Resep" required
                                            class="flex-1 bg-white border border-slate-200 rounded-xl px-3.5 py-2 text-xs focus:ring-2 focus:ring-blue-500/10 focus:border-blue-500 outline-none">
                                        <button type="button" @click="if(tab.fitur_poin.length > 1) tab.fitur_poin.splice(poinIndex, 1)"
                                            class="p-2 text-slate-400 hover:text-red-500 transition">
                                            <i class="fas fa-minus-circle"></i>
                                        </button>
                                    </div>
                                </template>
                            </div>
                            <button type="button" @click="tab.fitur_poin.push('')"
                                class="inline-flex items-center gap-1 text-xs font-bold text-blue-600 hover:text-blue-700 mt-2 transition">
                                <i class="fas fa-plus-circle"></i> Tambah Poin Fitur
                            </button>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        {{-- 4. Hasil Dampak & Testimoni --}}
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 space-y-4">
            <h3 class="text-base font-bold text-slate-900 border-b border-slate-100 pb-3 flex items-center gap-2">
                <i class="fas fa-chart-pie text-blue-500"></i> Hasil Dampak (Impact) & Testimoni Klien
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <label class="block text-[10px] font-bold uppercase text-slate-500 tracking-wider mb-1.5">Statistik 1</label>
                    <input type="text" name="impact_stat_1" value="{{ old('impact_stat_1', $portfolio->impact_stat_1) }}" placeholder="Contoh: 100%" required
                        class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-sm font-bold text-blue-600 outline-none mb-2">
                    <input type="text" name="impact_desc_1" value="{{ old('impact_desc_1', $portfolio->impact_desc_1) }}" placeholder="Keterangan (Stok Akurat)" required
                        class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-xs text-slate-600 outline-none">
                </div>
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <label class="block text-[10px] font-bold uppercase text-slate-500 tracking-wider mb-1.5">Statistik 2</label>
                    <input type="text" name="impact_stat_2" value="{{ old('impact_stat_2', $portfolio->impact_stat_2) }}" placeholder="Contoh: 4x Lipat" required
                        class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-sm font-bold text-blue-600 outline-none mb-2">
                    <input type="text" name="impact_desc_2" value="{{ old('impact_desc_2', $portfolio->impact_desc_2) }}" placeholder="Keterangan (Kasir Lebih Cepat)" required
                        class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-xs text-slate-600 outline-none">
                </div>
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <label class="block text-[10px] font-bold uppercase text-slate-500 tracking-wider mb-1.5">Statistik 3</label>
                    <input type="text" name="impact_stat_3" value="{{ old('impact_stat_3', $portfolio->impact_stat_3) }}" placeholder="Contoh: 0%" required
                        class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-sm font-bold text-blue-600 outline-none mb-2">
                    <input type="text" name="impact_desc_3" value="{{ old('impact_desc_3', $portfolio->impact_desc_3) }}" placeholder="Keterangan (Resiko Selisih Uang)" required
                        class="w-full bg-white border border-slate-200 rounded-lg px-3 py-2 text-xs text-slate-600 outline-none">
                </div>
            </div>

            <div class="pt-2 space-y-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Isi Testimoni Klien (Opsional)</label>
                    <textarea name="testimoni_konten" rows="3" placeholder="Masukkan ucapan kepuasan langsung dari klien jika ada..."
                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none resize-none">{{ old('testimoni_konten', $portfolio->testimoni_konten) }}</textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Nama Pemberi Testimoni</label>
                        <input type="text" name="testimoni_nama" value="{{ old('testimoni_nama', $portfolio->testimoni_nama) }}" placeholder="Contoh: Bpk. Haji Supardi"
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-600 tracking-wider mb-2">Jabatan / Posisi</label>
                        <input type="text" name="testimoni_jabatan" value="{{ old('testimoni_jabatan', $portfolio->testimoni_jabatan) }}" placeholder="Contoh: Owner Barokah Motor"
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:bg-white focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition outline-none">
                    </div>
                </div>
            </div>
        </div>

        {{-- Tombol Simpan --}}
        <div class="flex items-center justify-end gap-3 bg-slate-100 p-4 rounded-2xl border border-slate-200">
            <a href="{{ route('admin.portfolio.index') }}"
                class="px-5 py-2.5 rounded-xl border border-slate-300 text-sm font-semibold text-slate-600 hover:bg-slate-200 transition">Batal</a>
            <button type="submit"
                class="px-6 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-700 font-semibold text-white text-sm transition shadow-md shadow-blue-600/15">
                <i class="fas fa-save mr-1.5"></i> Simpan Perubahan
            </button>
        </div>

    </form>
</div>
@endsection
