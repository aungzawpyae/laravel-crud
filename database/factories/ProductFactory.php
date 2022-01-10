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
            "image"          => "products/W3JQQ1Hf2N94CirtUJg0n4fbd1L8ihVh9EXvlkMa.jpg",
            "category_id" => rand(1, 8),
        ];
    }
}
