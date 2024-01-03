<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\OrderPurchase;
use App\Models\Products;
use Illuminate\Support\Str;

class OrderPurchaseController extends Controller
{
    public function store(Request $request)
    {
        $cartIds = (array) $request->input('checkout', []);

        // Calculate the total cost
        $totalCost = 0;
        foreach ($cartIds as $cartId) {
            $cartItem = Cart::find($cartId);
            $totalCost += $cartItem->quantity * $cartItem->product->price;
            $payment = $request->input('payment');

            // Generate the reference number
            $referenceNumber = 'REF-' . Str::random(8);
            // You can modify the prefix and length of the reference number as needed

            // Store the order purchase for each cart item
            OrderPurchase::create([
                'cart_id' => $cartId,
                'totalcost' => $cartItem->quantity * $cartItem->product->price,
                'payment_method' => $payment,
                'reference_number' => $referenceNumber,
            ]);
        }

        // Deduct the quantity from the products table
        foreach ($cartIds as $cartItemId) {
            $cartItem = Cart::find($cartItemId);
            $product = Products::find($cartItem->product_id);

            if ($cartItem->quantity > $product->quantity) {
                return redirect()->back()->withErrors('Insufficient quantity available for ' . $product->name);
            }

            $product->quantity -= $cartItem->quantity;
            $product->save();
        }

        // If the loop completes without any errors, redirect to a success page or perform any other desired action
        return view('order', [
            'totalCost' => $totalCost,
            'cartIds' => $cartIds,
             // Pass the reference number to the view
        ]);
    }
}
