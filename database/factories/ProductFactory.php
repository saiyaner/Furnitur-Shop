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
        $categories = ['chair', 'sofa', 'table', 'bed', 'cabinet', 'shelf'];
        $colors = ['red', 'blue', 'green', 'black', 'white', 'brown', 'gray'];

        return [
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'category' => $this->faker->randomElement($categories),
            'rate' => $this->faker->randomFloat(1, 1, 5),
            'color' => [
                [
                    'name' => $this->faker->randomElement($colors),
                    'stock' => $this->faker->numberBetween(5, 50)
                ],
                [
                    'name' => $this->faker->randomElement($colors),
                    'stock' => $this->faker->numberBetween(5, 50)
                ]
            ],
            'description' => $this->faker->paragraph(3),
            'image' => $this->faker->imageUrl(400, 300, 'furniture', true, 'chair', true),
        ];
    }
}