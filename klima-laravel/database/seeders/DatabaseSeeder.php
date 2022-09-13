<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FirmaSeeder;
use Database\Seeders\KlijentSeeder;
use Database\Seeders\ServisSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $firmaS = new FirmaSeeder();
        $klijentS = new KlijentSeeder();
        $servisS = new ServisSeeder();
        $servisS->run();
        $firmaS->run();
        $klijentS->run();
    }
}
