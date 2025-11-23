<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;
use App\Models\Customer;
use App\Models\DepositoType;
use Carbon\Carbon;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = Customer::all();
        $types = DepositoType::all();

        // Pastikan ada data customer dan tipe deposito
        if($customers->isEmpty() || $types->isEmpty()) return;

        // Buat Akun untuk Budi (Deposito Gold, Deposit 10 Juta, 12 bulan lalu)
        Account::create([
            'customer_id' => $customers[0]->id,
            'deposito_type_id' => $types->where('name', 'Deposito Gold')->first()->id,
            'balance' => 10000000,
            'transaction_date' => Carbon::now()->subMonths(12), // Setahun lalu
        ]);

        // Buat Akun untuk Siti (Deposito Silver, Deposit 5 Juta, 6 bulan lalu)
        Account::create([
            'customer_id' => $customers[1]->id,
            'deposito_type_id' => $types->where('name', 'Deposito Silver')->first()->id,
            'balance' => 5000000,
            'transaction_date' => Carbon::now()->subMonths(6), // 6 Bulan lalu
        ]);

        // Buat Akun untuk Andi (Deposito Bronze, Deposit 2 Juta, 3 bulan lalu)
        Account::create([
            'customer_id' => $customers[2]->id,
            'deposito_type_id' => $types->where('name', 'Deposito Bronze')->first()->id,
            'balance' => 2000000,
            'transaction_date' => Carbon::now()->subMonths(3), // 3 Bulan lalu
        ]);
    }
}
