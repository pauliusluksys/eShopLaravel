<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->randomNumber(5, false),
            'name'=>$this->faker->words(rand(1, 4), true),
            'description' => $this->faker->text,
            'unit_quantity' =>$this->faker->numberBetween(1, 100),
            'price' =>$this->faker->numberBetween(99, 99999),

        ];
    }

}
