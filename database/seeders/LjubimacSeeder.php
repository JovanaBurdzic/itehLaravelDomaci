<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ljubimac;

class LjubimacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ljubimac::factory()->count(50)->create();
    }
}
