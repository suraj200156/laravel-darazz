<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function index()

    {
        // $order = Order::with('orderItems')->where('user_id', 2)->first();
        // return view('Order.order', compact('order'));

        $order = Order::join('users', 'orders.user_id', 'users.id')->get();
        return view('Order.order', compact('order'));
    }

    public function view($id)
    {
        $orders = Order::join('users', 'orders.user_id', 'users.id')->where('orders.id', $id)->with('orderItems')->first();
        return view('OrderItem/orderItem', compact('orders'));
    }
}


     // $orders = Order::where('user_id', 2)->first();
        // $orders->orderItems_test = OrderItem::where('order_id', $orders->id)->get();

        //  dd($orders);

        // $order = Order::with('orderItems')->where('user_id', 2)->first();