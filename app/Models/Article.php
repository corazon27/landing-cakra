<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug', 
        'thumbnail', 
        'content', 
        'status', 
        'views',
        'published_at',
        'alt_text',
        'meta_description',
        'schema'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Opsional: Memastikan views selalu mulai dari 0 jika tidak diisi
    protected $attributes = [
        'views' => 0,
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('is_approved', true)->latest();
    }
}