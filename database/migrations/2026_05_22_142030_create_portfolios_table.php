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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique(); // Untuk URL SEO Friendly
            $table->string('filter'); // pos, company, katalog, erp
            $table->string('kategori'); // Teks tampilan: 'Kasir / POS'
            $table->string('klien_industri');
            $table->string('durasi');
            $table->string('gambar')->nullable(); // Nama file mockup utama
            $table->text('deskripsi_singkat'); // Muncul di halaman grid depan
            
            // Menggunakan json agar fleksibel menyimpan banyak poin masalah/fitur/tech stack
            $table->json('pain_points'); 
            $table->json('tech_stack'); 
            $table->json('fitur_utama'); 
            
            // Data impact & testimoni
            $table->string('impact_stat_1'); // Misal: "100%"
            $table->string('impact_desc_1'); // Misal: "Stok Tercatat"
            $table->string('impact_stat_2');
            $table->string('impact_desc_2');
            $table->string('impact_stat_3');
            $table->string('impact_desc_3');
            
            $table->text('testimoni_konten')->nullable();
            $table->string('testimoni_nama')->nullable();
            $table->string('testimoni_jabatan')->nullable(); // Owner / Direktur
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};