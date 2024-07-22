<?php

namespace Database\Seeders;

use  App\Models\CartItem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 6; $i++) {
            $cartitem = new CartItem;

            $cartitem->quantity = 14 + $i;
            $cartitem->cart_id = 1 + $i;
            $cartitem->product_id = 2 + $i;
            $cartitem->save();
        }
    }
}
