@extends('components.layout.admin')

@section('title', 'Tulis Artikel Baru')
@section('header', 'Buat Konten Pancingan SEO')

@section('content')
<div class="max-w-4xl mx-auto">
    {{-- Tombol Kembali --}}
    <div class="mb-6">
        <a href="{{ route('admin.articles.index') }}"
            class="text-slate-500 hover:text-blue-600 transition flex items-center gap-2 text-sm font-medium">
            <i class="fas fa-arrow-left"></i> Kembali ke Daftar
        </a>
    </div>

    {{-- Notifikasi Error Global --}}
    @if ($errors->any())
    <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-xl shadow-sm">
        <div class="flex items-center mb-2">
            <i class="fas fa-exclamation-circle text-red-500 mr-2"></i>
            <h3 class="text-red-800 font-bold">Ada kesalahan pada input Anda:</h3>
        </div>
        <ul class="list-disc list-inside text-sm text-red-700">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-10">
        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-8">

                {{-- Input Judul --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Judul Artikel <span class="text-red-500">*</span></label>
                    <input type="text" name="title" required value="{{ old('title') }}"
                        placeholder="Contoh: 5 Tips Memulai Bisnis Affiliate"
                        class="w-full px-5 py-4 bg-slate-50 border {{ $errors->has('title') ? 'border-red-400' : 'border-slate-200' }} rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                    @error('title')
                    <p class="text-red-500 text-xs mt-2 font-medium"><i class="fas fa-info-circle mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Input Custom Slug (SEO) --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Custom URL Slug (Opsional)</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-4 bg-slate-100 border border-r-0 border-slate-200 text-slate-500 text-sm rounded-l-2xl">
                            websitemu.com/
                        </span>
                        <input type="text" name="slug" value="{{ old('slug') }}"
                            placeholder="sistem-kasir-toko-online"
                            class="flex-1 px-5 py-4 bg-slate-50 border {{ $errors->has('slug') ? 'border-red-400' : 'border-slate-200' }} rounded-r-2xl focus:ring-2 focus:ring-blue-500 outline-none transition text-sm">
                    </div>
                    <p class="text-xs text-slate-400 mt-2">*Kosongkan jika ingin dibuat otomatis dari judul.</p>
                </div>

                {{-- Input Thumbnail dengan Preview --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Gambar Utama (Thumbnail)</label>
                    <div
                        class="flex flex-col items-center justify-center w-full p-6 bg-slate-50 border-2 border-dashed {{ $errors->has('thumbnail') ? 'border-red-300 bg-red-50/30' : 'border-slate-200' }} rounded-2xl transition hover:border-blue-400">

                        <div id="image-preview-container" class="hidden mb-4">
                            <img id="image-preview" src="#" alt="Preview"
                                class="max-h-64 rounded-xl shadow-md border-4 border-white text-center">
                        </div>

                        <div id="upload-placeholder" class="text-center">
                            <i class="fas fa-cloud-upload-alt text-4xl text-slate-300 mb-2"></i>
                            <p class="text-sm text-slate-500">Klik untuk unggah atau drag gambar ke sini</p>
                            <p class="text-[10px] text-slate-400 mt-1">Maksimal 2MB (JPG, PNG, JPEG, WEBP)</p>
                        </div>

                        <input type="file" name="thumbnail" id="thumbnail-input" accept="image/*"
                            class="mt-4 text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2 font-medium"><i class="fas fa-info-circle mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Input Alt Text Gambar (SEO) --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Alt Text Gambar (SEO) <span class="text-slate-400 font-normal text-xs ml-1">(Opsional)</span></label>
                    <input type="text" name="alt_text" value="{{ old('alt_text') }}"
                        placeholder="Contoh: Ilustrasi dashboard sistem kasir terintegrasi"
                        class="w-full px-5 py-3 bg-slate-50 border {{ $errors->has('alt_text') ? 'border-red-400' : 'border-slate-200' }} rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition text-sm">
                    <p class="text-xs text-slate-400 mt-2">*Penjelasan singkat gambar agar terbaca oleh robot Google Image.</p>
                </div>

                {{-- Editor Konten --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Isi Artikel <span class="text-red-500">*</span></label>
                    <div
                        class="prose max-w-none {{ $errors->has('content') ? 'border-red-400 rounded-2xl border' : '' }}">
                        <textarea id="editor" name="content">{{ old('content') }}</textarea>
                    </div>
                    @error('content')
                    <p class="text-red-500 text-xs mt-2 font-medium"><i class="fas fa-info-circle mr-1"></i> {{ $message }}</p>
                    @enderror
                </div>

                {{-- Meta Description (SEO) --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Meta Description (SEO) <span class="text-slate-400 font-normal text-xs ml-1">(Opsional)</span></label>
                    <textarea name="meta_description" rows="2" maxlength="160"
                        placeholder="Ringkasan artikel maksimal 160 karakter untuk ditampilkan di hasil pencarian Google..."
                        class="w-full px-5 py-4 bg-slate-50 border {{ $errors->has('meta_description') ? 'border-red-400' : 'border-slate-200' }} rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition text-sm">{{ old('meta_description') }}</textarea>
                </div>

                {{-- Schema JSON-LD (SEO) --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Schema JSON-LD / FAQ Schema <span class="text-slate-400 font-normal text-xs ml-1">(Opsional)</span></label>
                    <textarea name="schema" rows="4"
                        placeholder="Paste kode script JSON-LD dari hasil generate AI atau Google Structured Data di sini..."
                        class="w-full px-5 py-4 bg-slate-50 border {{ $errors->has('schema') ? 'border-red-400' : 'border-slate-200' }} rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition text-sm font-mono text-slate-600">{{ old('schema') }}</textarea>
                    <p class="text-xs text-slate-400 mt-2">*Gunakan class font-mono agar penulisan format kode JSON jauh lebih mudah dibaca.</p>
                </div>

                {{-- Pengaturan Status & Jadwal --}}
                <div class="flex flex-col md:flex-row items-end justify-between pt-8 border-t border-slate-100 gap-6">
                    <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">

                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-700">Status:</label>
                            <select name="status" id="status-select"
                                class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold outline-none focus:ring-2 focus:ring-blue-500 transition">
                                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Simpan Draft</option>
                                <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Terbitkan / Jadwalkan</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2" id="schedule-container">
                            <label class="text-sm font-bold text-slate-700">Tanggal Terbit:</label>
                            <input type="datetime-local" name="published_at"
                                value="{{ old('published_at', now()->format('Y-m-d\TH:i')) }}"
                                class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold outline-none focus:ring-2 focus:ring-blue-500 transition text-slate-600">
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl font-bold shadow-lg shadow-blue-200 transition-all hover:-translate-y-1">
                        <i class="fas fa-save mr-2"></i> Simpan Artikel
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- CSS --}}
<style>
.ck-editor__editable {
    min-height: 400px;
    border-radius: 0 0 1.5rem 1.5rem !important;
    background-color: #f8fafc !important;
}

.ck-toolbar {
    border-radius: 1.5rem 1.5rem 0 0 !important;
    background-color: #fff !important;
    border-bottom: 1px solid #e2e8f0 !important;
}

#schedule-container {
    transition: all 0.3s ease;
}
</style>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const statusSelect = document.getElementById('status-select');
    const scheduleContainer = document.getElementById('schedule-container');

    function toggleSchedule() {
        if (statusSelect.value === 'published') {
            scheduleContainer.style.opacity = '1';
            scheduleContainer.style.pointerEvents = 'auto';
        } else {
            scheduleContainer.style.opacity = '0.5';
            scheduleContainer.style.pointerEvents = 'none';
        }
    }

    statusSelect.addEventListener('change', toggleSchedule);
    toggleSchedule(); 

    // Preview Gambar
    const thumbnailInput = document.getElementById('thumbnail-input');
    const imagePreview = document.getElementById('image-preview');
    const previewContainer = document.getElementById('image-preview-container');
    const uploadPlaceholder = document.getElementById('upload-placeholder');

    thumbnailInput.onchange = evt => {
        const [file] = thumbnailInput.files;
        if (file) {
            imagePreview.src = URL.createObjectURL(file);
            previewContainer.classList.remove('hidden');
            uploadPlaceholder.classList.add('hidden');
        }
    }

    ClassicEditor
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: "{{ route('admin.articles.upload', ['_token' => csrf_token()]) }}"
            },
            toolbar: [
                'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                'blockQuote', 'insertTable', 'imageUpload', 'undo', 'redo'
            ]
        })
        .catch(error => {
            console.error(error);
        });
});
</script>
@endpush