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
        $cartitem = new CartItem;

        $cartitem->quantity = 20;
        $cartitem->cart_id = 1;
        $cartitem->product_id = 1;
        $cartitem->save();
    }
}
