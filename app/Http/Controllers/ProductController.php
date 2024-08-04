<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('Product/product', compact('products'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('product.create', compact('categories'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::where('id', $id)->first();
        return view('product.edit', compact('categories', 'product'));
    }


    public function delete($id)
    {
        Product::where('id', $id)->delete();
        toastr()->success('Product deleted successfully.');
        return redirect()->back();
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:products,name',
            'stock' => 'required|numeric|gt:0',
            'price' => 'required',
            'categoryId' => 'required|exists:categories,id',
            'imageUrlPath' => 'nullable',
            'description' => 'required',
        ]);

        if ($validator->fails()) {

            // dd($validator->errors());
            toastr()->warning('please check your form and ty again');
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator->errors());
        }

        // dd($request->all());

        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->stocks = $request->stock;
        $newProduct->price = $request->price;
        $newProduct->category_id  = $request->categoryId;
        $newProduct->description = $request->description;


        if ($request->hasFile('imageUrlPath')) {
            $image = $request->file('imageUrlPath');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images/products', $imageName);
            $newProduct->product_image_url = $imageName;
        }

        $newProduct->save();

        return redirect()->route('product.index');
    }




    public function update(Request $request)
    {

        $product = Product::where('id', $request->id)->first();
        $product->name = $request->name;
        $product->stocks = $request->stock;
        $product->price = $request->price;
        $product->category_id  = $request->categoryId;
        $product->description = $request->description;

        $product->save();

        toastr()->success('Product update successfully.');
        return redirect()->back();
    }
}
