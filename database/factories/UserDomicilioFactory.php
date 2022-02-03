<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.--
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->numberBetween(11,98),
            'colonia' => $this->faker->streetAddress(),
            'cp' => $this->faker->numberBetween(11269,90265),
            'ciudad' => $this->faker->city(),
        ];
    }
}
