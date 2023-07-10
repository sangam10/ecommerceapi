<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imagable_type'=>'App\Models\Product',
            'imagable_id'=>fake()->numberBetween(1,20),
            'image_url'=>'product'. fake()->numberBetween(1,10) .'.jpg'
        ];
    }
}
