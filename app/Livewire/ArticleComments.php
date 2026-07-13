<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class ArticleComments extends Component
{
    public $articleId;
    public $name, $email, $comment, $parentId = null;
    public $showReplyForm = null;


    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];

    public function mount($articleId)
    {
        $this->articleId = $articleId;
    }

   // app/Livewire/ArticleComments.php

    
    public function toggleReply($id)
    {
        // Jika tombol yang sama diklik lagi, tutup formnya.
        // Jika tombol komentar lain diklik, pindahkan form ke komentar tersebut.
        if ($this->parentId === $id) {
            $this->parentId = null;
        } else {
            $this->parentId = $id;
        }
    }

    // app/Livewire/ArticleComments.php
    public function postComment()
    {
        $this->validate([
            'comment' => 'required|min:3',
            'name'    => 'required',
            'email'   => 'required|email',
        ]);

        Comment::create([
            'article_id' => $this->articleId,
            'parent_id'  => $this->parentId,
            'name'       => $this->name,
            'email'      => $this->email,
            'comment'    => $this->comment,
            'is_approved' => false, // Set false agar admin harus menyetujui dulu
        ]);

        // Tambahkan baris di bawah ini untuk mengosongkan form
        $this->reset(['comment', 'name', 'email', 'parentId']); 

        session()->flash('message', 'Komentar Anda sedang menunggu persetujuan admin.');
    }

    public function render()
    {
        return view('livewire.article-comments', [
            'comments' => Comment::where('article_id', $this->articleId)
                ->whereNull('parent_id') // Ambil hanya komentar utama
                ->where('is_approved', true)
                ->with(['replies' => function($query) {
                    $query->where('is_approved', true); // Pastikan balasan juga harus disetujui
                }])
                ->latest()
                ->get()
        ]);
    }
}