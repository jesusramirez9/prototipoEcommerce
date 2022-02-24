<?php

namespace Database\Factories;

use App\Models\Flayer;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flayer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'image' =>'flayers/'.$this->faker->image('public/storage/flayers', 640, 480, null, false),
            'status' => 2,
        ];
    }
}
