<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Menyimpan komentar dari pengunjung (Front-end)
     */
    public function store(Request $request, $articleId)
    {
    if ($request->filled('honeypot')) {
        return back()->with('error', 'Aktivitas mencurigakan terdeteksi.');
    }

    $validated = $request->validate([
        'name'      => auth()->check() ? 'nullable' : 'required|string|max:50',
        'email'     => auth()->check() ? 'nullable' : 'required|email|max:100',
        'comment'   => 'required|string|min:5|max:1000',
        'parent_id' => 'nullable|exists:comments,id',
    ]);

    // Tentukan apakah pengirim adalah admin cakra
    $isAdmin = auth()->check() && auth()->user()->username === 'cakra_admin';

    $comment = Comment::create([
        'article_id'  => $articleId,
        'parent_id'   => $request->parent_id,
        'user_id'     => auth()->id(), // Akan NULL jika tamu, akan terisi ID jika login
        'name'        => auth()->check() ? auth()->user()->name : $request->name,
        'email'       => auth()->check() ? auth()->user()->email : $request->email,
        'comment'     => strip_tags($request->comment),
        // Admin langsung disetujui, Tamu harus menunggu moderasi
        'is_approved' => $isAdmin ? true : false, 
    ]);

    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'message' => $isAdmin ? 'Balasan admin berhasil diterbitkan!' : 'Komentar Anda menunggu moderasi.',
            'data'    => [
                'name'       => $comment->name,
                'comment'    => $comment->comment,
                'is_admin'   => $comment->is_admin, // Memanggil Accessor yang Anda buat di Model
                'created_at' => $comment->created_at->diffForHumans(),
            ]
        ]);
    }

        $msg = $isAdmin ? 'Balasan berhasil diterbitkan.' : 'Komentar Anda sedang menunggu moderasi.';
        return back()->with('success', $msg);
    }

    /**
     * Menampilkan daftar komentar di Dashboard Admin
     */
    public function index()
    {
        // Mengambil komentar terbaru, termasuk data artikel terkait
        $comments = Comment::with('article')->latest()->paginate(10);
        
        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Menyetujui komentar (Moderasi Admin)
     */
    public function approve($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update(['is_approved' => true]);

        return back()->with('success', 'Komentar berhasil disetujui dan kini tampil di publik.');
    }

    public function reply($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comments.reply', compact('comment'));
    }

    public function storeReply(Request $request, $id)
    {
        $request->validate([
            'reply_comment' => 'required|string|max:1000',
        ]);

        $parent = Comment::findOrFail($id);

        Comment::create([
            'article_id'  => $parent->article_id,
            'parent_id'   => $parent->id,
            'user_id'     => auth()->id(), 
            'name'        => auth()->user()->name ?? 'Admin Cakra',
            // Gunakan email user login, jika null gunakan email statis bisnis Anda
            'email'       => auth()->user()->email ?? 'halo@cakra-inovasi.id',
            'comment'     => strip_tags($request->reply_comment),
            'is_approved' => true, 
        ]);

        return redirect()->route('admin.comments.index')->with('success', 'Balasan berhasil dikirim!');
    }
    /**
     * Menghapus komentar spam
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return back()->with('success', 'Komentar berhasil dihapus.');
    }
}