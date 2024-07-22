<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 7; $i++) {
            $products = new Review;
            $products->rating = rand(1, 5);
            $products->product_id = 1 + $i;
            $products->comment = "Wow nice webside";
            $products->user_id = $i;
            $products->save();
        }
    }
}
