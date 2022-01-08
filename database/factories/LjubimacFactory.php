<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vlasnik;

class LjubimacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tip' => $this->faker->randomElement($array = array('pas', 'macka', 'papagaj', 'prase', 'hrcak', 'ribice', 'kornjaca')),
            'rasa' => $this->faker->randomElement($array = array('domaca', 'strana')),
            'ime' => $this->faker->firstName(),
            'godine' => $this->faker->numberBetween($min = 1, $max = 31),
            'vlasnik_id' => Vlasnik::factory()
        ];
    }
}
