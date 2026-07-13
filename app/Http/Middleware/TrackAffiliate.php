<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\AffiliateUser;
use Illuminate\Support\Facades\Cookie;

class TrackAffiliate
{
    public function handle(Request $request, Closure $next): Response
    {
        $referralCode = $request->query('ref') ?: $request->cookie('affiliate_ref');
        $suffix = $referralCode ? " (ID Affiliator: $referralCode)" : "";
        view()->share('suffix', $suffix);

        $response = $next($request);

        if ($request->has('ref')) {
            $ref = $request->query('ref');
            
            // 1. Cek apakah user ini sudah pernah dihitung kliknya dalam sesi ini?
            // Kita cek keberadaan cookie khusus 'counted_click'
            $hasBeenCounted = $request->cookie('counted_click_' . $ref);

            if (!$hasBeenCounted) {
                $affiliator = AffiliateUser::where('referral_code', $ref)->first();
                
                if ($affiliator) {
                    // 2. Tambah klik hanya jika belum dihitung sebelumnya
                    $affiliator->increment('clicks');

                    // 3. Pasang cookie pengaman selama 24 jam (1440 menit)
                    // Agar refresh berulang kali tidak menambah angka klik
                    $response->cookie('counted_click_' . $ref, 'true', 1440);
                }
            }

            // Tetap simpan/perbarui cookie utama untuk keperluan suffix WhatsApp
            $response->cookie('affiliate_ref', $ref, 43200);
        }

        return $response;
    }
}