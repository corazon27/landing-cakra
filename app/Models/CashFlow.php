<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    use HasFactory;

    // Field yang boleh diisi secara mass-assignment
    protected $fillable = [
        'transaction_date',
        'description',
        'type',
        'amount',
        'balance_before',
        'balance_after',
        'category',
        'user_id'
    ];

    // Casting tipe data agar otomatis menjadi objek Carbon (untuk tanggal) 
    // atau tipe data numerik saat dipanggil di Blade
    protected $casts = [
        'transaction_date' => 'date',
        'amount' => 'float',
        'balance_before' => 'float',
        'balance_after' => 'float',
    ];

    /**
     * Relasi ke User (Siapa yang mencatat transaksi ini)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Logic: Mendapatkan Saldo Terakhir (Latest Balance After)
     * Ini akan digunakan sebagai 'balance_before' untuk transaksi berikutnya.
     */
    public static function getLatestBalance()
    {
        // Ambil transaksi terakhir berdasarkan ID terbesar
        $lastTransaction = self::latest('id')->first();
        
        // Jika belum ada transaksi sama sekali, kembalikan 0
        return $lastTransaction ? $lastTransaction->balance_after : 0;
    }

    /**
     * Scope untuk filter Pemasukan (Opsional, untuk laporan)
     */
    public function scopeIncome($query)
    {
        return $query->where('type', 'income');
    }

    /**
     * Scope untuk filter Pengeluaran (Opsional, untuk laporan)
     */
    public function scopeExpense($query)
    {
        return $query->where('type', 'expense');
    }
}