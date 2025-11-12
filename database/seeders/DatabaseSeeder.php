<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Product::factory()->create(
            [
            'name' => 'Sample Product',
            'price' => 99.99,
            'stock' => 50,
            'category' => 'chair',
            'rate' => 4.5,
            'color' => [
                ['name' => 'red', 'stock' => 20],
                ['name' => 'blue', 'stock' => 30],
            ],
            'description' => 'This is a sample product description.',
            'image' => '',
        ]);
        Product::factory()->create(
            [
            'name' => 'Shifan Product',
            'price' => 99.99,
            'stock' => 50,
            'category' => 'sofa',
            'rate' => 4.5,
            'color' => [
                ['name' => 'red', 'stock' => 20],
                ['name' => 'blue', 'stock' => 30],
            ],
            'description' => 'This is a sample product description.',
            'image' => '',
        ]);
        Product::factory()->create(
        [
            'name' => 'Table Bundar Product',
            'price' => 149.99,
            'stock' => 30,
            'category' => 'table',
            'rate' => 4.0,
            'color' => [
                ['name' => 'green', 'stock' => 15],
                ['name' => 'yellow', 'stock' => 15],
            ],
            'description' => 'This is another sample product description.',
            'image' => '',
        ]);
        Product::factory()->create(
        [
            'name' => 'Lampu Hias Product',
            'price' => 59.99,
            'stock' => 40,
            'category' => 'lamp',
            'rate' => 3.5,
            'color' => [
                ['name' => 'white', 'stock' => 25],
                ['name' => 'black', 'stock' => 15],
            ],
            'description' => 'This is yet another sample product description.',
            'image' => '',
        ]);
        Product::factory()->create(
        [
            'name' => 'Kasur Empuk Product',
            'price' => 199.99,
            'stock' => 20,
            'category' => 'bed',
            'rate' => 4.8,
            'color' => [
                ['name' => 'pink', 'stock' => 10],
                ['name' => 'purple', 'stock' => 10],
            ],
            'description' => 'This is a comfortable bed product description.',
            'image' => '',
        ]);

    }
}
