<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function purchase(Request $request)
    {
        $selectedItems = $request->input('checkout', []);

        $cartItems = Cart::whereIn('id', $selectedItems)
            ->with('product')
            ->get();

        // Calculate the total cost
        $totalCost = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        $userId = Auth::id();
        $cartId = Cart::where('user_id', $userId)->value('id');

        // Create a new purchase record
        $purchase = new Purchase();
        $purchase->user_id = $userId;
        $purchase->cart_id = $cartId;
        $purchase->total_cost = $totalCost;
        $purchase->save();


        // Remove the purchased items from the cart
        Cart::whereIn('id', $selectedItems)->delete();

        return view('purchase')->with('cartItems', $cartItems);
    }
}
