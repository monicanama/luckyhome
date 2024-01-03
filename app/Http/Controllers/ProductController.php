<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    $products = Products::all();
    return view('shop', ['products' => $products]);
    }

    public function showProduct($id)
    {
        $product = Products::find($id);

        if (!$product) {
            abort(404);
        }

        return view('showProduct', ['product' => $product]);
    }

    public function store(Request $request)
    {
        $product = new Products;
        $product->label = $request->input('label');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');

        // Handle image upload
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $product->image = $imageName;
        }

        $product->save();

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function update(Request $request, $id)
{
    // Validate the form input
    $validatedData = $request->validate([
        'label' => 'required',
        'description' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric',
    ]);

    // Find the product to update
    $product = Product::findOrFail($id);

    // Update the product with the validated data
    $product->label = $validatedData['label'];
    $product->description = $validatedData['description'];
    $product->quantity = $validatedData['quantity'];
    $product->price = $validatedData['price'];
    $product->save();

    // Redirect back to the product listing or show success message
    return redirect()->route('admindashboard')->with('success', 'Product updated successfully');

}


    public function updatetoggle(Request $request, Products $product)
    {
        $product->update([
            'is_active' => !$product->is_active
        ]);

        return redirect()->route('admindashboard');
    }
    

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }


    public function destroy(Products $product)
    {
        $product->update(['is_active' => false]);

    }

    public function index1()
    {
        $products = Products::all();
        return view('admindashboard', ['products' => $products]);
    }

    public function create1()
    {
        return view('products.create');
    }
    //
}
