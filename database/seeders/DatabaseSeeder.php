<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LjubimacSeeder;
use Database\Seeders\GradSeeder;
use Database\Seeders\VlasnikSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $vseeder = new VlasnikSeeder();
        $gseeder = new GradSeeder();
        $ljseeder = new LjubimacSeeder();

        $vseeder->run();
        $gseeder->run();
        $ljseeder->run();
    }
}
