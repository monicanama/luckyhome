<?php

namespace App\Http\Controllers;
use App\Models\OrderPurchase;
use App\Models\User;
use App\Models\Products;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function adminDashboard()
{
    $totalSale = OrderPurchase::sum('totalcost');
    $totalOrders = OrderPurchase::count();
    $totalUsers = User::count();
    $totalProducts = Products::count();
    $products = Products::all();

    return view('admindashboard', [
        'totalSale' => $totalSale,
        'totalOrders' => $totalOrders,
        'totalUsers' => $totalUsers,
        'totalProducts' => $totalProducts,
        'products'=> $products,
    ]);
}


public function show(Products $product)
    {
        return view('admindashboard', compact('product'));
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);

        $validatedData = $request->validate([
            
            'label' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);
        
        $product->label = $validatedData['label'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];
        $product->save();

        return redirect()->route('admindashboard')->with('success', 'Product updated successfully.');
    }


    public function destroy(Products $product)
    {
        $product->delete();

        return redirect()->route('products.destroy')->with('success', 'Product deleted successfully.');
    }

    // public function adminOrder()
    // {
    //     $orders = OrderPurchase::with(['product', 'cart', 'user'])->get();
    //         return view('adminorder', compact('orders'));
    // }
    public function adminOrder()
    {
        $orderPurchased = OrderPurchase::all(); // Fetch the orderPurchased data from your model

        return view('adminorder', compact('orderPurchased'));
    }

    public function deliver($id)
    {
        $orderPurchase = OrderPurchase::findOrFail($id);

        // Update the status to 'delivered'
        $orderPurchase->status = 1;
        $orderPurchase->save();

        return redirect()->back()->with('success', 'Order purchase delivered successfully.');
    }
}
