@extends('components.layout.admin')

@section('title', 'Kelola Komentar')
@section('header', 'Manajemen Komentar')

@section('content')
<div class="container mx-auto px-6 py-8">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-slate-800">Kelola Komentar</h2>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 border-b border-slate-100">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Pengirim</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Komentar</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Artikel</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Status</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse($comments as $comment)
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4">
                        <div class="text-sm font-bold text-slate-800">{{ $comment->name }}</div>
                        <div class="text-xs text-slate-500">{{ $comment->email }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="text-sm text-slate-600 line-clamp-2 w-64">{{ $comment->comment }}</p>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-xs font-medium px-2 py-1 bg-slate-100 rounded-md text-slate-600">
                            {{ $comment->article->title }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        @if($comment->is_approved)
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Disetujui
                        </span>
                        @else
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Pending
                        </span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.comments.reply', $comment->id) }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-bold py-2 px-4 rounded-lg transition">
                                Balas
                            </a>
                            @if(!$comment->is_approved)
                            <form action="{{ route('admin.comments.approve', $comment->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                    class="text-xs bg-emerald-500 hover:bg-emerald-600 text-white px-3 py-1.5 rounded-lg transition">
                                    Setujui
                                </button>
                            </form>
                            @endif

                            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST"
                                onsubmit="return confirm('Hapus komentar ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-xs bg-rose-500 hover:bg-rose-600 text-white px-3 py-1.5 rounded-lg transition">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-slate-500 italic">
                        Belum ada komentar yang masuk.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="px-6 py-4 bg-slate-50">
            {{ $comments->links() }}
        </div>
    </div>
</div>

<!-- Modal Balasan -->
<div id="replyModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm" onclick="closeReplyModal()"></div>

        <div class="relative bg-white rounded-3xl shadow-xl w-full max-w-md p-8">
            <h3 class="text-xl font-bold text-slate-800 mb-2">Balas Komentar</h3>
            <p id="replyingTo" class="text-sm text-slate-500 mb-6"></p>

            <form id="replyForm" method="POST">
                @csrf
                <textarea name="reply_comment" required rows="4" placeholder="Tulis balasan resmi Anda..."
                    class="w-full p-4 bg-slate-50 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-blue-500 outline-none transition mb-4"></textarea>

                <div class="flex justify-end gap-3">
                    <button type="button" onclick="closeReplyModal()"
                        class="text-slate-400 font-bold px-4 py-2 hover:text-slate-600">Batal</button>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-full shadow-lg shadow-blue-100 transition">
                        Kirim Balasan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function openReplyModal(id, name) {
    document.getElementById('replyModal').classList.remove('hidden');
    document.getElementById('replyingTo').innerText = 'Membalas komentar dari: ' + name;
    // Update action form secara dinamis
    document.getElementById('replyForm').action = '/admin/comments/' + id + '/reply';
}

function closeReplyModal() {
    document.getElementById('replyModal').classList.add('hidden');
}
</script>
@endsection