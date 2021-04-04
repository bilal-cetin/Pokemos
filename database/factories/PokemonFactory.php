<?php

namespace Database\Factories;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pokemon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'pokemon_photo_path'=>$this->faker->image(),
            'age'=>$this->faker->numberBetween($min=1, $max=10),
            'height'=>$this->faker->randomFloat($nbMaxDecimals = 3,$min=1, $max=10),
            'evolves_from'=>$this->faker->text(),
            'evolves_to'=>$this->faker->text(),
            'weakness'=>$this->faker->text(),
            'ability'=>$this->faker->text()
        ];
    }
}
