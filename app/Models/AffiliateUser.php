<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; // Import ini
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable; // Pastikan ini ada
use App\Models\Withdrawal;


class AffiliateUser extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = 'affiliate_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'whatsapp',
        'profile_photo',
        // Tambahkan baris di bawah ini jika belum ada
        'bank_name',
        'account_number',
        'account_holder_name',
        'referral_code',
    ];

    protected $hidden = [
        'password',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'affiliate_user_id');
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class, 'affiliate_user_id');
    }

    // Di Model AffiliateUser.php
}