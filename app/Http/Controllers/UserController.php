<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('User/user', compact('users'));


        // $user = User::where('id', 1)->first()->name;

        // $user = User::where('email', '@gmail.com')->first()->id;

        // $user = User::where('id',1)->first(['name', 'email']);

      
    }
}
