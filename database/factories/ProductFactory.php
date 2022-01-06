<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

    {
        return [
            'name'             => $this->faker->words(),
            'details'           => $this->faker->sentences(),
            'price'             =>$this->faker->randomDigit(),
            "image"          =>$this->faker->image(null, 640, 480),
            "category_id" => rand(1, 10),

        ];
    }
}
