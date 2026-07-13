<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke Affiliator (Bisa null jika klien datang mandiri)
            // Ini adalah kunci untuk memunculkan data di dashboard affiliate nanti
            $table->foreignId('affiliate_user_id')
                  ->nullable()
                  ->constrained('affiliate_users')
                  ->onDelete('set null');

            // Data Proyek & Klien
            $table->string('client_name');
            $table->string('project_name');
            
            // Finansial: Menggunakan decimal agar perhitungan uang akurat
            $table->decimal('total_price', 15, 2)->default(0); 
            $table->decimal('commission_amount', 15, 2)->default(0); 

            // Status Proyek (Sesuai alur yang kita diskusikan)
            // 1. pending: Menunggu DP
            // 2. development: Proses Coding
            // 3. completed: Selesai & Komisi Cair
            $table->enum('status', ['pending', 'development', 'completed'])
                  ->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};