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

        Product::factory()->create([
            'name' => 'Kursi Kayu Product',
            'price' => 89.99,
            'stock' => 60,
            'category' => 'chair',
            'rate' => 4.2,
            'color' => [
                ['name' => 'brown', 'stock' => 30],
                ['name' => 'beige', 'stock' => 30],
            ],
            'description' => 'This is a wooden chair product description.',
            'image' => '',
        ]);

        Product::factory()->create([
            'name' => 'Sofa Kulit Product',
            'price' => 299.99,
            'stock' => 15,
            'category' => 'sofa',
            'rate' => 4.7,
            'color' => [
                ['name' => 'black', 'stock' => 10],
                ['name' => 'white', 'stock' => 5],
            ],
            'description' => 'This is a leather sofa product description.',
            'image' => '',
        ]);

        Product::factory()->create([
            'name' => 'Meja Makan Product',
            'price' => 179.99,
            'stock' => 25,
            'category' => 'table',
            'rate' => 4.3,
            'color' => [
                ['name' => 'dark brown', 'stock' => 15],
                ['name' => 'light brown', 'stock' => 10],
            ],
            'description' => 'This is a dining table product description.',
            'image' => '',
        ]);

        Product::factory()->create([
            'name' => 'Lampu Meja Product',
            'price' => 39.99,
            'stock' => 70,
            'category' => 'lamp',
            'rate' => 3.9,
            'color' => [
                ['name' => 'silver', 'stock' => 40],
                ['name' => 'gold', 'stock' => 30],
            ],
            'description' => 'This is a table lamp product description.',
            'image' => '',
        ]);

        Product::factory()->create([
            'name' => 'Tempat Tidur Kayu Product',
            'price' => 249.99,
            'stock' => 10,
            'category' => 'bed',
            'rate' => 4.6,
            'color' => [
                ['name' => 'oak', 'stock' => 5],
                ['name' => 'walnut', 'stock' => 5],
            ],
            'description' => 'This is a wooden bed product description.',
            'image' => '',
        ]);

        Product::factory()->create([
            'name' => 'Recliner Sofa Product',
            'price' => 349.99,
            'stock' => 12,
            'category' => 'sofa',
            'rate' => 4.9,
            'color' => [
                ['name' => 'grey', 'stock' => 7],
                ['name' => 'navy', 'stock' => 5],
            ],
            'description' => 'This is a recliner sofa product description.',
            'image' => '',
        ]);

    }
}
