<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'affiliate_user_id',
        'client_name',
        'project_name',
        'total_price',
        'commission_amount',
        'status'
    ];

    /**
     * Relasi Balik: Satu proyek dimiliki oleh satu Affiliator (opsional)
     */
    public function affiliateUser()
    {
        return $this->belongsTo(AffiliateUser::class, 'affiliate_user_id');
    }
}