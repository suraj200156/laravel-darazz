<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeders extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 9; $i++) {
            $cart = new Cart;
            $cart->user_id = 1 + $i;
            $cart->save();
        }
    }
}
