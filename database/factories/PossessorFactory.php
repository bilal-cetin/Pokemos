<?php

namespace Database\Factories;

use App\Models\Possessor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PossessorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Possessor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'image'=>$this->faker->imageUrl($width = 50, $height = 40),
            'age'=>$this->faker->numberBetween($min=1, $max=30),
            'score'=>$this->faker->numberBetween($min=1, $max=200)
        ];
    }
}
