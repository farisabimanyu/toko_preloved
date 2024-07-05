<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Buat 50 produk
        for ($i = 0; $i < 50; $i++) {
            $product = new Product;
            $product->name = $faker->word;
            $product->description = $faker->paragraph;
            $product->price = $faker->randomFloat(2, 0, 100);
            $product->category_id = rand(1, 10);
            $product->save();
        }
    }
}
