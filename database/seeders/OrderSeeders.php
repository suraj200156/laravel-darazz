<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Order;

class OrderSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Order = new Order;
        $Order->user_id = 1;
        $Order->total_amount = 2000.50;
        $Order->save();
    }
}
