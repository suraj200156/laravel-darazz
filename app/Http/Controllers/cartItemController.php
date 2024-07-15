<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class cartItemController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::get();
        return view('CartItem/cartItem', compact('cartItems'));
    }
}
