<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            "image"          => "category/2uUHhnSQXSV6rQCc6k55VV68Lzx3dJHa0XZuJVHz.jpg",
        ];
    }
}
