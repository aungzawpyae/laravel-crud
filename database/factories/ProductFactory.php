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
            'name'             => $this->faker->word(),
            'details'           => $this->faker->sentence(),
            'price'             =>$this->faker->randomNumber(6),
            "image"          => "public/products/U1ljNLfaV2IFBQaafXfmILXl747xpMdtPqBBmK74.jpg",
            "category_id" => rand(1, 8),
        ];
    }
}
