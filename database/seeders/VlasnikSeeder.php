<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vlasnik;

class VlasnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vlasnik::factory()->count(30)->create();
    }
}
