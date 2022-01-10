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
        return [
            'name'             => $this->faker->word(),
            'active'            =>true,
            "image"          => "banner/XuaeyfMmeBYoB8ty0adfSNMqq3E8iDSbTJYj96a4.jpg",
            "product_id" => rand(1, 10),
        ];
    }
}
