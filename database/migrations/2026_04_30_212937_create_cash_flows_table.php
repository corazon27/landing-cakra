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
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->id();
            
            // Tanggal transaksi (bisa diisi manual jika mencatat transaksi kemarin)
            $table->date('transaction_date');
            
            // Keterangan (Contoh: "Closing Project Landing Page Client A")
            $table->string('description');
            
            // Tipe transaksi
            $table->enum('type', ['income', 'expense']);
            
            // Nominal transaksi
            $table->decimal('amount', 15, 2);
            
            // Snapshot Saldo (Sangat penting untuk tracking manual)
            $table->decimal('balance_before', 15, 2)->default(0); // Saldo awal
            $table->decimal('balance_after', 15, 2)->default(0);  // Saldo akhir
            
            // Opsional: Kategori sederhana (Project, Operasional, Ads, dll)
            $table->string('category')->nullable();
            
            // Audit Trail: Mencatat siapa yang melakukan input data
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_flows');
    }
};