<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::where('id',1)->first();
        return view('profile', compact('user'));
    } 
}


