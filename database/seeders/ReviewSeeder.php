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
        $products = new Review;
        
     
        $products->rating = 5;
        $products->product_id = 1;
        $products->comment = "hello my name is suraj gurung. I am 23 year old";
        $products->user_id = 1;
        $products->save();
    }
    
}
