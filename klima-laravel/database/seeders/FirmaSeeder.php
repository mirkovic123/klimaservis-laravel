<?php

namespace Database\Seeders;

use App\Models\Firma;
use Illuminate\Database\Seeder;

class FirmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Firma::factory()->count(70)->create();
    }
}
