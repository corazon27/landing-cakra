@extends('components.layout.admin')

@section('title', 'Edit Artikel')
@section('header', 'Edit Konten Artikel')

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
            <h3 class="text-red-800 font-bold">Gagal memperbarui artikel:</h3>
        </div>
        <ul class="list-disc list-inside text-sm text-red-700">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="bg-white rounded-[2.5rem] shadow-sm border border-slate-100 p-10">
        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="space-y-8">
                {{-- Judul Artikel --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Judul Artikel</label>
                    <input type="text" name="title" required placeholder="Contoh: 5 Tips Memulai Bisnis Affiliate"
                        value="{{ old('title', $article->title) }}"
                        class="w-full px-5 py-4 bg-slate-50 border {{ $errors->has('title') ? 'border-red-400' : 'border-slate-200' }} rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                    @error('title')
                    <p class="text-red-500 text-xs mt-2 font-medium"><i class="fas fa-info-circle mr-1"></i>
                        {{ $message }}</p>
                    @enderror
                </div>

                {{-- Gambar Utama (Thumbnail) --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Gambar Utama (Thumbnail)</label>
                    <div
                        class="flex flex-col items-center justify-center w-full p-6 bg-slate-50 border-2 border-dashed {{ $errors->has('thumbnail') ? 'border-red-300 bg-red-50/30' : 'border-slate-200' }} rounded-2xl transition hover:border-blue-400">

                        <div id="image-preview-container" class="{{ $article->thumbnail ? '' : 'hidden' }} mb-4">
                            <img id="image-preview"
                                src="{{ $article->thumbnail ? asset('storage/' . $article->thumbnail) : '#' }}"
                                alt="Preview" class="max-h-64 rounded-xl shadow-md border-4 border-white">
                        </div>

                        <div id="upload-placeholder" class="text-center {{ $article->thumbnail ? 'hidden' : '' }}">
                            <i class="fas fa-cloud-upload-alt text-4xl text-slate-300 mb-2"></i>
                            <p class="text-sm text-slate-500">Klik untuk unggah gambar baru</p>
                            <p class="text-[10px] text-slate-400 mt-1">Maksimal 2MB (JPG, PNG, JPEG)</p>
                        </div>

                        <input type="file" name="thumbnail" id="thumbnail-input" accept="image/*"
                            class="mt-4 text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    </div>
                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2 font-medium"><i class="fas fa-info-circle mr-1"></i>
                        {{ $message }}</p>
                    @enderror
                    <p class="text-xs text-slate-400 mt-3 text-center italic">Kosongkan jika tidak ingin mengubah gambar utama.</p>
                </div>

                {{-- TAMBAHAN: Alt Text Gambar --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Alt Text Gambar (SEO)</label>
                    <input type="text" name="alt_text" placeholder="Contoh: Desain landing page modern menggunakan Tailwind CSS"
                        value="{{ old('alt_text', $article->alt_text) }}"
                        class="w-full px-5 py-4 bg-slate-50 border {{ $errors->has('alt_text') ? 'border-red-400' : 'border-slate-200' }} rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition">
                    @error('alt_text')
                    <p class="text-red-500 text-xs mt-2 font-medium"><i class="fas fa-info-circle mr-1"></i>
                        {{ $message }}</p>
                    @enderror
                    <p class="text-xs text-slate-400 mt-2 italic">Deskripsikan gambar utama secara singkat untuk aksesibilitas screen reader dan optimasi Google Images.</p>
                </div>

                {{-- Isi Artikel --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Isi Artikel</label>
                    <div
                        class="prose max-w-none {{ $errors->has('content') ? 'border-red-400 rounded-2xl border' : '' }}">
                        <textarea id="editor" name="content">{{ old('content', $article->content) }}</textarea>
                    </div>
                    @error('content')
                    <p class="text-red-500 text-xs mt-2 font-medium"><i class="fas fa-info-circle mr-1"></i>
                        {{ $message }}</p>
                    @enderror
                </div>

                {{-- TAMBAHAN: Meta Description --}}
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Meta Description (SEO)</label>
                    <textarea name="meta_description" rows="3" placeholder="Masukkan ringkasan artikel untuk pencarian Google (maksimal 160 karakter)..."
                        class="w-full px-5 py-4 bg-slate-50 border {{ $errors->has('meta_description') ? 'border-red-400' : 'border-slate-200' }} rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition resize-none">{{ old('meta_description', $article->meta_description) }}</textarea>
                    @error('meta_description')
                    <p class="text-red-500 text-xs mt-2 font-medium"><i class="fas fa-info-circle mr-1"></i>
                        {{ $message }}</p>
                    @enderror
                    <p class="text-xs text-slate-400 mt-2 italic">Ringkasan deskripsi yang akan muncul di halaman hasil pencarian (SERP) Google.</p>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Schema JSON-LD / FAQ Schema <span class="text-slate-400 font-normal text-xs ml-1">(Opsional)</span></label>
                    <textarea name="schema" rows="4"
                        placeholder="Paste kode script JSON-LD dari hasil generate AI atau Google Structured Data di sini..."
                        class="w-full px-5 py-4 bg-slate-50 border {{ $errors->has('schema') ? 'border-red-400' : 'border-slate-200' }} rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition text-sm font-mono text-slate-600">{{ old('schema', $article->schema) }}</textarea>
                </div>

                {{-- Status & Jadwal Terbit --}}
                <div class="flex flex-col md:flex-row items-end justify-between pt-8 border-t border-slate-100 gap-6">
                    <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">

                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-700">Status:</label>
                            <select name="status" id="status-select"
                                class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold outline-none focus:ring-2 focus:ring-blue-500 transition">
                                <option value="draft"
                                    {{ old('status', $article->status) == 'draft' ? 'selected' : '' }}>Simpan Draft
                                </option>
                                <option value="published"
                                    {{ old('status', $article->status) == 'published' ? 'selected' : '' }}>Terbitkan /
                                    Jadwalkan</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2" id="schedule-container">
                            <label class="text-sm font-bold text-slate-700">Tanggal Terbit:</label>
                            <input type="datetime-local" name="published_at"
                                value="{{ old('published_at', $article->published_at ? $article->published_at->format('Y-m-d\TH:i') : now()->format('Y-m-d\TH:i')) }}"
                                class="bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm font-semibold outline-none focus:ring-2 focus:ring-blue-500 transition text-slate-600">
                        </div>
                    </div>

                    <div class="flex gap-3 w-full md:w-auto">
                        <a href="{{ route('admin.articles.index') }}"
                            class="text-center flex-1 md:flex-none bg-slate-100 text-slate-600 px-6 py-4 rounded-2xl font-bold hover:bg-slate-200 transition">
                            Batal
                        </a>
                        <button type="submit"
                            class="flex-1 md:flex-none bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl font-bold shadow-lg shadow-blue-200 transition-all hover:-translate-y-1">
                            <i class="fas fa-save mr-2"></i> Simpan Perubahan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
.ck-editor__editable {
    min-height: 450px;
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
            // Konfigurasi image untuk resize dan styling
            image: {
                toolbar: [
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side',
                    '|',
                    'toggleImageCaption',
                    'imageTextAlternative',
                    '|', // <--- SUDAH DIPERBAIKI DI SINI
                    'resizeImage:50',
                    'resizeImage:75',
                    'resizeImage:original'
                ],
                resizeUnit: '%',
                resizeOptions: [
                    {
                        name: 'resizeImage:original',
                        value: null,
                        label: 'Original'
                    },
                    {
                        name: 'resizeImage:25',
                        value: '25',
                        label: '25%'
                    },
                    {
                        name: 'resizeImage:50',
                        value: '50',
                        label: '50%'
                    },
                    {
                        name: 'resizeImage:75',
                        value: '75',
                        label: '75%'
                    }
                ]
            },
            toolbar: [
                'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                'blockQuote', 'insertTable', 'imageUpload', 'undo', 'redo'
            ]
        })
        .catch(error => console.error(error));
});
</script>
@endpush