<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\Customer;
use App\Models\DepositoType;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Menampilkan daftar akun
    public function index() {
        $accounts = Account::with(['customer', 'depositoType'])->get();
        return view('accounts.index', compact('accounts'));
    }

    // Form Create
    public function create() {
        $customers = Customer::all();
        $types = DepositoType::all();
        return view('accounts.create', compact('customers', 'types'));
    }

    // Store (Menangani Deposit Awal) 
    public function store(Request $request) {
        $request->validate([
            'customer_id' => 'required',
            'deposito_type_id' => 'required',
            'balance' => 'required|numeric|min:0',
            'transaction_date' => 'required|date',
        ]);

        Account::create($request->all());
        return redirect()->route('accounts.index')->with('success', 'Akun berhasil dibuat');
    }

    // Halaman Withdraw 
    public function withdrawForm($id) {
        $account = Account::findOrFail($id);
        return view('accounts.withdraw', compact('account'));
    }

    // Logika Perhitungan Withdraw [cite: 58, 59, 60]
    public function calculateWithdraw(Request $request, $id) {
        $account = Account::findOrFail($id);
        $withdrawDate = Carbon::parse($request->withdraw_date);
        $startDate = Carbon::parse($account->transaction_date);

        if ($withdrawDate->lt($startDate)) {
            return back()->withErrors(['msg' => 'Tanggal withdraw tidak boleh sebelum tanggal deposit']);
        }

        // Hitung durasi bulan
        $months = (int) $startDate->diffInMonths($withdrawDate);
        
        // Ambil yearly return (persen)
        $yearlyReturnPercent = $account->depositoType->yearly_return;
        
        // Rumus sesuai dokumen[cite: 60]: Monthly return = Yearly / 12
        $monthlyReturnRate = ($yearlyReturnPercent / 100) / 12;

        // Rumus Ending Balance[cite: 59]: starting * months * monthly return
        // CATATAN: Rumus di dokumen sepertinya merujuk pada "Bunga yang didapat". 
        // Jika "Ending Balance" maksudnya total uang, rumusnya harusnya: Balance + Bunga.
        // Kode di bawah menghitung TOTAL saldo akhir (Principal + Interest).
        
        $interest = $account->balance * $months * $monthlyReturnRate;
        $endingBalance = $account->balance + $interest;

        return view('accounts.result', compact('account', 'months', 'interest', 'endingBalance', 'withdrawDate'));
    }
}
