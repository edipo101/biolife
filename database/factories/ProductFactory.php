<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->sentence($this->faker->numberBetween(1, 3));
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $this->faker->sentence(),
            'current_price' => $this->faker->randomNumber(2),
            'previous_price' => $this->faker->randomNumber(2),
            'image_id' => $this->faker->numberBetween(10, 30),
            'category_id' => $this->faker->numberBetween(1, 10),
            'star1' => $this->faker->numberBetween(5, 20),
            'star2' => $this->faker->numberBetween(5, 20),
            'star3' => $this->faker->numberBetween(20, 80),
            'star4' => $this->faker->numberBetween(30, 90),
            'star5' => $this->faker->numberBetween(60, 100),
        ];
    }
}
