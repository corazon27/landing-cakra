<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AffiliateUser;


class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'affiliate_user_id',
        'amount',
        'status',
        'bank_name',
        'account_number',
        'account_name',
        'admin_note'
    ];

    // Relasi balik ke User
    public function affiliateUser()
    {
        return $this->belongsTo(AffiliateUser::class, 'affiliate_user_id');
    }
}