<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = 10;
        for ($i = 0; $i < $products; $i++) {
            Product::create([
                'name' => 'Product ' . $i,
                'price' => rand(1, 100),
                'qty' => rand(1, 100),
                'description' => fake()->sentence
            ]);
        }
    }
}
