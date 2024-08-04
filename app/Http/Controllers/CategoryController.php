<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('Category/category', compact('categories'));
    }

    public function create()
    {
        return view('Category.create');
    }

    public function store(Request $request)
    {
        $newUser = new Category();
        $newUser->name = $request->name;

        $newUser->save();

        return redirect()->route('product.index');
    }

    public function view($id)
    {
        $categories = Category::with('products')->where('id', $id)->first();
        return view('Category.view', compact('categories'));
    }
}
