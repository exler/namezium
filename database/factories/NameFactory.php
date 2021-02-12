<?php

namespace Database\Factories;

use App\Models\Name;
use App\Models\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;

class NameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Name::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => ucwords($this->faker->word()),
            'generator_id' => $this->faker->numberBetween(1, Generator::count())
        ];
    }
}
