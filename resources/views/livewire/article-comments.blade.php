<div>
    {{-- Notifikasi Sukses --}}
    @if (session()->has('message'))
    <div class="bg-emerald-100 text-emerald-700 p-4 rounded-lg mb-6 border border-emerald-200">
        {{ session('message') }}
    </div>
    @endif

    {{-- Form Input Komentar Utama (Tanpa Refresh) --}}
    <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm mb-12">
        <h3 class="text-xl font-bold text-slate-800 mb-6">Tinggalkan Komentar</h3>
        <form wire:submit.prevent="postComment" class="space-y-4">
            <textarea wire:model="comment" wire:key="input-comment-{{ time() }}" placeholder="Tulis komentar Anda..."
                rows="4"
                class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-rose-500 outline-none transition"></textarea>
            @error('comment') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <input type="text" wire:model="name" wire:key="input-name-{{ time() }}" placeholder="Nama Lengkap"
                        class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-rose-500 outline-none transition">
                    @error('name') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="email" wire:model="email" wire:key="input-email-{{ time() }}"
                        placeholder="Alamat Email"
                        class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-rose-500 outline-none transition">
                    @error('email') <span class="text-rose-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <button type="button" wire:click="postComment" wire:loading.attr="disabled"
                class="bg-rose-500 hover:bg-rose-600 text-white font-bold py-3 px-8 rounded-full transition shadow-lg shadow-rose-200 cursor-pointer">
                <span wire:loading.remove>Kirim Komentar</span>
                <span wire:loading>Mengirim...</span>
            </button>
        </form>
    </div>

    {{-- Daftar Komentar Utama --}}
    <div class="space-y-6">
        @foreach ($comments->where('parent_id', null) as $comment)
        {{-- Memanggil File Partial untuk Komentar --}}
        @include('livewire.partials.comment-item', ['comment' => $comment])
        @endforeach
    </div>
</div>