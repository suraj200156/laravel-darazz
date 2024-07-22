<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 1; $i <= 6; $i++) {
            $orderItems = new OrderItem;

            $orderItems->quantity = 20 + $i;
            $orderItems->price = 1500 * $i;
            $orderItems->order_id = $i;
            $orderItems->product_id = 1 + $i;
            $orderItems->save();
        }
    }
}
