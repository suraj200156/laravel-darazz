<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('User/user', compact('users'));
    }

    public function create()
    {
        return view('User/signup');
    }

    public function logout()
    {
        Auth::logout();
        toastr()->success('Log out sucess');
        return redirect()->route('user.form');
       
        
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->warning('please check your form and ty again');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            toastr()->success('Login successful');
            return redirect()->route('dashboard');
        } else {
            toastr()->error('Password incorrect');
            return redirect()->route('user.form');
        }
    }

    public function loginForm()
    {
        return view('User/signin');
    }

    public function store(Request $request)
    {
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->phone_number = $request->phone_number;
        $newUser->password = Hash::make($request->password);

        $newUser->save();

        return redirect()->route('user.view');
    }
}
