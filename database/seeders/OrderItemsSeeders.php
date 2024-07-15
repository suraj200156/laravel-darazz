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
        $orderItems = new OrderItem;
        
        $orderItems->quantity = 20;
        $orderItems->price = 1500;
        $orderItems->order_id = 1;
        $orderItems->product_id = 1;
        $orderItems->save();
    }
}
