<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CashFlow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CashFlowController extends Controller
{
    /**
     * Menampilkan daftar arus kas
     */
    public function index()
    {
        // Ambil data terbaru dengan pagination
        $cashflows = CashFlow::with('user')->latest('id')->paginate(10);
        
        // Ambil saldo saat ini dari transaksi terakhir
        $currentBalance = CashFlow::getLatestBalance();

        return view('admin.cashflow.index', compact('cashflows', 'currentBalance'));
    }

    /**
     * Menampilkan form tambah transaksi
     */
    public function create()
    {
        return view('admin.cashflow.create');
    }

    /**
     * Menyimpan transaksi baru dan menghitung saldo otomatis
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            'transaction_date' => 'required|date',
            'description'      => 'required|string|max:255',
            'type'             => 'required|in:income,expense',
            'amount'           => 'required|numeric|min:1',
            'category'         => 'nullable|string|max:100',
        ]);

        // 2. Gunakan Database Transaction untuk keamanan data
        return DB::transaction(function () use ($validated) {
            // Ambil saldo terakhir sebagai saldo awal (balance_before)
            $balanceBefore = CashFlow::getLatestBalance();
            $amount = $validated['amount'];

            // 3. Hitung Saldo Akhir (balance_after)
            if ($validated['type'] === 'income') {
                $balanceAfter = $balanceBefore + $amount;
            } else {
                // Opsional: Validasi jika saldo tidak mencukupi untuk pengeluaran
                if ($balanceBefore < $amount) {
                    return back()->withInput()->with('error', 'Saldo tidak mencukupi untuk pengeluaran ini!');
                }
                $balanceAfter = $balanceBefore - $amount;
            }

            // 4. Simpan Data
            CashFlow::create([
                'transaction_date' => $validated['transaction_date'],
                'description'      => $validated['description'],
                'type'             => $validated['type'],
                'amount'           => $amount,
                'balance_before'   => $balanceBefore,
                'balance_after'    => $balanceAfter,
                'category'         => $validated['category'],
                'user_id'          => Auth::id(), // Audit trail
            ]);

            return redirect()->route('admin.cashflow.index')
                ->with('success', 'Transaksi berhasil dicatat!');
        });
    }
}