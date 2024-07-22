<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 9; $i++) {
            $product = new Product;

            $product->name = "Iphone " . ($i + 10) . " Pro Max";
            $product->price = 21402 * $i;
            $product->stocks = 15;
            $product->description = "Serious power. Serious value.";
            $product->category_id = $i;
            $product->save();
        }
    }
}
