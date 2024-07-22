<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeders::class,
            CategoriesSeeders::class,
            ProductSeeders::class,
            CartSeeders::class,
            CartItemSeeder::class,
            OrderSeeders::class,
            OrderItemsSeeders::class,
            ReviewSeeder::class

        ]);
    }
}
// ProductSeeders::class,