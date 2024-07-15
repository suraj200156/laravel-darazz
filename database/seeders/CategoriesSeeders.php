<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeders extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $category = new Category;
            $category->name = "Laptop " . $i;
            $category->save();
        }
    }
}
