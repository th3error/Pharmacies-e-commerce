<?php

namespace Database\Seeders;

use App\Models\PharmacyProduct;
use Illuminate\Database\Seeder;

class PharmacyProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PharmacyProduct::factory()->count(50000)->create();
    }
}
