<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->unique()->title(),
            'desc'=>fake()->sentence(),
            'discount_percentage'=>fake()->numberBetween(4,20),
            'active'=>fake()->numberBetween(0,1)
        ];
    }
}
