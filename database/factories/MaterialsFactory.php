<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MaterialsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->uuid(),
            'supply' => fake()->numberBetween(0,25),
            'brand' => fake()->company(),
            'image_path' => null,
            'category_id' => fake()->numberBetween(1,10),
            'created_at' => Carbon::now(),
            'updated_at' => now()
        ];
    }
}
