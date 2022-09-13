<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KlijentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->name(),
            'adresa' => $this->faker->streetName(),
            'broj_telefona' => $this->faker->phoneNumber()
        ];
    }
}
