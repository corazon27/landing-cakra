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
        Schema::table('affiliate_users', function (Blueprint $table) {
            // Kita letakkan setelah email agar struktur table tetap rapi
            $table->string('referral_code', 20)->unique()->after('email');
        });
    }

    public function down(): void
    {
        Schema::table('affiliate_users', function (Blueprint $table) {
            $table->dropColumn('referral_code');
        });
    }
};