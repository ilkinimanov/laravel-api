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
        $description = $this->faker->paragraph(2);
        $title = $this->faker->word();
        $price = $this->faker->randomFloat(1, 20, 30);

        return [
            //
            'title' => $title,
            'description' => $description,
            'price' => $price
        ];
    }
}
