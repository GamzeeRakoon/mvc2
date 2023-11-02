<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
    public function definition()
    {
        $categoryIds = Category::pluck('id')->toArray();

        return [
            'name' => $this->faker->uuid(),
            'supply' => $this->faker->numberBetween(0, 25),
            'brand' => $this->faker->company(),
            'image_path' => null,
            'category_id' => $this->faker->randomElement($categoryIds),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
