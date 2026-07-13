<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    protected $fillable = [
        'judul', 'slug', 'filter', 'kategori', 'klien_industri', 'durasi', 'gambar',
        'deskripsi_singkat', 'pain_points', 'tech_stack', 'fitur_utama',
        'impact_stat_1', 'impact_desc_1', 'impact_stat_2', 'impact_desc_2', 'impact_stat_3', 'impact_desc_3',
        'testimoni_konten', 'testimoni_nama', 'testimoni_jabatan'
    ];

    // Mengonversi data JSON otomatis menjadi Array saat dipanggil di Blade
    protected $casts = [
        'pain_points' => 'array',
        'tech_stack' => 'array',
        'fitur_utama' => 'array',
    ];

    /**
     * Fitur Auto-Convert Slug Otomatis Laravel
     */
    protected static function boot()
    {
        parent::boot();

        // Saat data akan dibuat (creating)
        static::creating(function ($portfolio) {
            $portfolio->slug = static::generateUniqueSlug($portfolio->judul);
        });

        // Saat data akan diubah (updating)
        static::updating(function ($portfolio) {
            $portfolio->slug = static::generateUniqueSlug($portfolio->judul, $portfolio->id);
        });
    }

    /**
     * Fungsi untuk memastikan slug selalu unik di database
     */
    private static function generateUniqueSlug($judul, $id = 0)
    {
        $slug = Str::slug($judul);
        $originalSlug = $slug;
        $count = 1;

        // Cek jika slug sudah dipakai oleh data lain
        while (static::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}