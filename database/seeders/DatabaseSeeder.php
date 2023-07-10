<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Address::factory(20)->create();
        \App\Models\Image::factory(80)->create();
        \App\Models\Category::factory(4)->create();
        \App\Models\Discount::factory(4)->create();
        \App\Models\Product::factory(20)->create();
        \App\Models\Review::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
