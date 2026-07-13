<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke tabel articles
            // Pastikan nama tabel Anda adalah 'articles'
            $table->foreignId('article_id')
                  ->constrained()
                  ->onDelete('cascade'); 

            // Informasi Pengunjung
            $table->string('name');
            $table->string('email');

            // Isi Komentar
            $table->text('comment');

            // Sistem Moderasi (Best Practice SEO)
            // Default false agar admin harus menyetujui sebelum tampil ke publik
            $table->boolean('is_approved')->default(false);

            // Menyimpan jejak waktu (created_at & updated_at)
            $table->timestamps();
            
            // Indexing untuk mempercepat query saat menampilkan komentar per artikel
            $table->index(['article_id', 'is_approved']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};