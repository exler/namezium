<?php

namespace Database\Factories;

use App\Models\Generator;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class GeneratorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Generator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => ucwords(implode(" ", $this->faker->words(2))),
            'description' => $this->faker->sentence(6),
            'category_id' => $this->faker->numberBetween(1, Category::count())
        ];
    }
}
