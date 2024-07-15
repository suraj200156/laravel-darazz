<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class cartItemController extends Controller
{
    public function index(){
        $cartItem = CartItem::get();
        dd('CartItem');
        dd($cartItem);
    } 
}
