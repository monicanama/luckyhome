<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();

        return view('cart', ['cartItems' => $cartItems]);
    }

    public function addToCart(Request $request)
    {
        $user = Auth::user();

        $cartItem = new Cart();
        $cartItem->user_id = $user->id;
        $cartItem->product_id = $request->input('product_id');
        $cartItem->quantity = $request->input('quantity');
        $cartItem->address = $request->input('address');
        $cartItem->contact_number = $request->input('contact_number'); 
        $cartItem->total = 0;
        $cartItem->save();

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeFromCart($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Cart item not found!');
        }

        $cartItem->delete();

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }

    public function remove($id)
    {
        Cart::destroy($id);

        return view('cart');
    }
}
