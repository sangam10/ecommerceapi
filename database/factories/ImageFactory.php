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
            'imagable_type'=>'\App\Models\Image',
            'imagable_id'=>fake()->numberBetween(1,80),
            'image_url'=>'assets/images/product'. fake()->numberBetween(1,10) .'.jpg'
        ];
    }
}
