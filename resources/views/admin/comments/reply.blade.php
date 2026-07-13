@extends('components.layout.admin')

@section('title', 'Balas Komentar')

@section('content')
<div class="max-w-4xl">
    {{-- Header Halaman --}}
    <div class="mb-8">
        <h2 class="text-2xl font-extrabold text-slate-800 flex items-center gap-3">
            <i class="fa-solid fa-reply-all text-blue-600"></i>
            Balas Komentar Resmi
        </h2>
        <p class="text-slate-500 mt-1">Berikan respon profesional untuk menjaga reputasi layanan website Anda.</p>
    </div>

    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden">
        <form action="{{ route('admin.comments.storeReply', $comment->id) }}" method="POST">
            @csrf

            <div class="p-8 md:p-10">
                {{-- Box Komentar Klien --}}
                <div class="bg-slate-50/80 rounded-2xl p-6 mb-10 border border-slate-100 relative">
                    <div class="flex items-center gap-4 mb-4">
                        <div
                            class="w-12 h-12 bg-rose-500 rounded-full flex items-center justify-center text-white font-bold shadow-md shadow-rose-100 text-lg">
                            {{ strtoupper(substr($comment->name, 0, 1)) }}
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800">{{ $comment->name }}</h4>
                            <p class="text-xs text-slate-400 flex items-center gap-1">
                                <i class="fa-regular fa-clock"></i> {{ $comment->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                    <div class="text-slate-600 italic leading-relaxed pl-4 border-l-4 border-blue-500">
                        "{{ $comment->comment }}"
                    </div>

                    {{-- Badge Indikator --}}
                    <span
                        class="absolute -top-3 right-6 bg-white px-3 py-1 rounded-full text-[10px] font-bold text-slate-400 border border-slate-100 shadow-sm uppercase tracking-wider">
                        Komentar Klien
                    </span>
                </div>

                {{-- Input Balasan --}}
                <div class="space-y-4">
                    <label class="flex items-center gap-2 text-sm font-bold text-slate-700 ml-1">
                        <i class="fa-solid fa-pen-nib text-blue-500"></i>
                        Pesan Balasan Anda
                    </label>

                    <div class="relative group">
                        <textarea name="reply_comment" rows="6" required
                            placeholder="Tulis jawaban resmi Cakra Admin di sini..."
                            class="w-full p-5 bg-white border-2 border-slate-100 rounded-2xl focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all duration-300 text-slate-600 leading-relaxed placeholder:text-slate-300 shadow-inner"></textarea>
                    </div>
                </div>
            </div>

            {{-- Footer Action --}}
            <div class="px-8 py-6 bg-slate-50/50 border-t border-slate-50 flex items-center gap-4">
                <button type="submit"
                    class="group flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-10 rounded-2xl shadow-lg shadow-blue-200 transition-all active:scale-95">
                    <i class="fa-solid fa-paper-plane group-hover:translate-x-1 transition-transform"></i>
                    Kirim Balasan
                </button>

                <a href="{{ route('admin.comments.index') }}"
                    class="flex items-center gap-2 text-slate-400 hover:text-slate-600 font-bold px-4 py-2 transition-colors">
                    <i class="fa-solid fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection