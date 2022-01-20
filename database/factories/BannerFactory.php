<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // $images = ["banner/b_1.jpg", "banner/b_1.jpg", "banner/b_1.jpg", "banner/banner"];
        return [
            'name'             => $this->faker->word(),
            'active'            =>true,
            "image"          => "banner/b_1.jpg",
        ];
    }
}
