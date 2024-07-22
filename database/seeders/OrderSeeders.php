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
        for ($i = 1; $i <= 9; $i++) {
            $Order = new Order;
            $Order->user_id = 1 + $i;
            $Order->total_amount = 200.50  * $i;
            $Order->save();
        }
    }
}
