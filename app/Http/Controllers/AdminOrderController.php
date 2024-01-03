<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderPurchase;
use App\Models\Products;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = OrderPurchase::with(['user', 'product', 'cart'])->get();

        return view('adminorder', compact('orders'));
    }

    public function markAsDelivered(Request $request)
    {
        $orderId = $request->input('order_id');
        $order = OrderPurchase::findOrFail($orderId);

        $order->status = 'delivered';
        $order->save();

        return response()->json(['message' => 'Order marked as delivered successfully']);
    }

    public function deliver(Request $request, OrderPurchase $order)
    {
        $order->status = 1;
        $order->save();

        return redirect()->back()->with('success', 'Order status updated to Delivered.');
    }
    public function adminorder(Request $request)
{
    $search = $request->query('search');

    // Perform the search query using the $search variable
    $orders = Order::whereHas('cart.user', function ($query) use ($search) {
        $query->where('label', 'like', '%' . $search . '%');
    })->orderByDesc('created_at')->get();

    // Pass the search results, search term, and user variable to the view
    return view('adminorder', compact('search', 'orders', 'user'));
}
}
