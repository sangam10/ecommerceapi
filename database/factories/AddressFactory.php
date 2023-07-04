<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address_line_1'=>fake()->address(),
            'address_line_2'=>fake()->address(),
            'postal_code'=>fake()->countryCode(),
            'city'=>fake()->city(),
            'country'=>fake()->country(),
            'phone'=>fake()->phoneNumber(),
            'user_id'=>fake()->numberBetween(1,20)
        ];
    }
}
