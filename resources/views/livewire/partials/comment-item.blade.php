<div class="space-y-4 mt-2">
    {{-- Card Komentar --}}
    <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center gap-3">
                {{-- Avatar: Gunakan icon shield jika admin --}}
                <div
                    class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold {{ $comment->is_admin ? 'bg-blue-600 shadow-lg shadow-blue-100' : 'bg-rose-500' }}">
                    @if($comment->is_admin)
                    <i class="fa-solid fa-shield-halved text-sm"></i>
                    @else
                    {{ strtoupper(substr($comment->name, 0, 1)) }}
                    @endif
                </div>

                <div>
                    <div class="flex items-center gap-2">
                        <h4 class="font-bold {{ $comment->is_admin ? 'text-blue-900' : 'text-slate-800' }}">
                            {{ $comment->name }}
                        </h4>

                        {{-- BADGE OFFICIAL --}}
                        @if($comment->is_admin)
                        <span
                            class="inline-flex items-center gap-1 bg-blue-600 text-white text-[9px] font-black px-2 py-0.5 rounded-full uppercase tracking-tighter shadow-sm">
                            <i class="fa-solid fa-circle-check"></i> Admin
                        </span>
                        @endif
                    </div>
                    <p class="text-xs text-slate-500">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
            </div>

            <button wire:click="toggleReply({{ $comment->id }})"
                class="text-rose-500 text-xs font-bold hover:underline cursor-pointer">
                Balas
            </button>
        </div>
        <p class="text-slate-600 leading-relaxed">{{ $comment->comment }}</p>

        {{-- Form Balasan Dinamis --}}
        @if($parentId === $comment->id)
        <div class="mt-6 p-6 bg-white rounded-xl border border-slate-200 shadow-inner">
            <h5 class="text-sm font-bold mb-3">Balas ke {{ $comment->name }}</h5>
            <form wire:submit.prevent="postComment" class="space-y-3">
                <textarea wire:model="comment" placeholder="Tulis balasan..." rows="2"
                    class="w-full p-3 bg-slate-50 border rounded-lg text-sm focus:ring-2 focus:ring-rose-500 outline-none"></textarea>
                <div class="flex gap-2">
                    <input type="text" wire:model="name" placeholder="Nama"
                        class="p-2 border rounded-lg text-sm w-full">
                    <input type="email" wire:model="email" placeholder="Email"
                        class="p-2 border rounded-lg text-sm w-full">
                </div>
                <div class="flex gap-2">
                    <button type="submit"
                        class="bg-slate-800 text-white text-xs px-4 py-2 rounded-lg hover:bg-black transition cursor-pointer">
                        Kirim Balasan
                    </button>
                    <button type="button" wire:click="$set('parentId', null)"
                        class="text-slate-400 text-xs px-2 hover:text-slate-600 cursor-pointer">
                        Batal
                    </button>
                </div>
            </form>
        </div>
        @endif
    </div>

    {{-- Tampilan Balasan Bersarang (Rekursif) --}}
    @if($comment->replies->count() > 0)
    <div class="ml-10 md:ml-16 border-l-2 border-slate-100 pl-4 space-y-4">
        @foreach($comment->replies as $reply)
        @include('livewire.partials.comment-item', ['comment' => $reply])
        @endforeach
    </div>
    @endif
</div>