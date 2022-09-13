<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FirmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'adresa' => $this->faker->streetName(),
            'grad' => $this->faker->city(),
            'sajt' => $this->faker->unique()->domainName(),
        ];
    }
}
