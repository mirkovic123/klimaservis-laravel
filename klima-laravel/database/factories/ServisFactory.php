<?php

namespace Database\Factories;

use App\Models\Firma;
use App\Models\Klijent;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tip' => $this->faker->randomElement($array = array('BASIC', 'MEDIUM', 'ADVANCED')),
            'cena' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 500, $max = 50000),
            'serviser' => $this->faker->name(),
            'napomena' => $this->faker->text($maxNbChars = 100),
            'klijent_id' => Klijent::factory(),
            'firma_id' => Firma::factory()
        ];
    }
}
