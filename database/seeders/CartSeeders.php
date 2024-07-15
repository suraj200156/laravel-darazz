<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cart = new Cart;
        $cart-> user_id	 = 1;
        $cart->save();
    }
}
