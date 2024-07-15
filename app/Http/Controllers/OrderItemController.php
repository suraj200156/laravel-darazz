<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    public function index(){
        $orderItem = OrderItem::get();
        dd('Cart');
        dd($orderItem);
    } 
}
