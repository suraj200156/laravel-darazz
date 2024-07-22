<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeders extends Seeder
{
    public function run(): void
    {
        $categories = ['Smartphones', 'Laptops', 'Tablets', 'Cameras', 'Accessories', 'Televisions', 'Headphones', 'Wearables', 'Gaming Consoles', 'Speakers'];

        foreach ($categories as $categoryName) {
            $category = new Category;
            $category->name = $categoryName;
            $category->save();
        }
    }
}
