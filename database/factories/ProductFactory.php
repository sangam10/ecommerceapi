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
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(),
            'desc'=>fake()->paragraph(),
            'featured_image_url'=>'product_'.fake()->numberBetween(1,10).'.png',
            'price'=>fake()->numberBetween(1000,5000),
            'quantity'=>fake()->numberBetween(100,500),
            'category_id'=>fake()->numberBetween(1,4),
            'discount_id'=>fake()->numberBetween(1,4)
        ];
    }
}
