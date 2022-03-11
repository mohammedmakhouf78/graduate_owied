<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2,50,1000),
            'description' => $this->faker->text(),
            'is_approved' => $this->faker->boolean(),
            'category_id' => rand(1,49),
            'user_id' => rand(1,49),
        ];
    }
}
