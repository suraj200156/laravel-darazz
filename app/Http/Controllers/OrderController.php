<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function index()

    {

        $orders = Order::join('users', 'orders.user_id', 'users.id')->with('orderItems')
            ->select('orders.id as order_id', 'orders.*', 'users.name', 'users.use_image_url')->get();
        return view('Order.order', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('orders.id', $id)->with('orderItems')->first();
        return view('Order.view', compact('orders'));
    }
}


     // $orders = Order::where('user_id', 2)->first();
        // $orders->orderItems_test = OrderItem::where('order_id', $orders->id)->get();

        //  dd($orders);

        // $order = Order::with('orderItems')->where('user_id', 2)->first();