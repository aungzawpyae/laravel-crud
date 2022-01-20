<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'           => $this->faker->word(),
            'desc'           => $this->faker->sentence(),
            'is_new'         =>true,
            'creater_id'     =>rand(1,10)
        ];
    }
}
