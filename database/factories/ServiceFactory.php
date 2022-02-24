<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(600),
            'image' => 'services/'. $this->faker->image('public/storage/services', 800, 600, null, false),
            'status' => 2
        ];
    }
}
