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
        $products = new Product;
        
        $products->name ='Iphone 15 pro max';
        $products->price = 2000;
        $products->stocks = 15;
        $products->description = "hello my name is suraj gurung. I am 23 year old";
        $products->category_id = 1;
        $products->save();
    }
}







