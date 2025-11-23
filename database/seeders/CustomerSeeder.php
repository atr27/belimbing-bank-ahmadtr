<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Budi Santoso', 'Siti Aminah', 'Andi Wijaya', 'Dewi Lestari', 'Rahmat Hidayat'];

        foreach ($names as $name) {
            Customer::create(['name' => $name]);
        }
    }
}
