<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('affiliate_users', function (Blueprint $table) {
            // Menambahkan kolom clicks setelah referral_code
            $table->integer('clicks')->default(0)->after('referral_code');
        });
    }

    public function down(): void
    {
        Schema::table('affiliate_users', function (Blueprint $table) {
            $table->dropColumn('clicks');
        });
    }
};