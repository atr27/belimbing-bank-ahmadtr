<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DepositoType;

class DepositoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Deposito Bronze',
                'yearly_return' => 3.00 // 3% yearly
            ],
            [
                'name' => 'Deposito Silver',
                'yearly_return' => 5.00 // 5% yearly
            ],
            [
                'name' => 'Deposito Gold',
                'yearly_return' => 7.00 // 7% yearly
            ],
        ];

        foreach ($types as $type) {
            DepositoType::create($type);
        }
    }
}
