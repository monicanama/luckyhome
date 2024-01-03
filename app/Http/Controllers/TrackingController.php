<?php

namespace App\Http\Controllers;
use App\Models\OrderPurchase;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        return view('tracking');
    } 

    public function tracking()
    {
        // Retrieve the order purchased data from the database
        $orderPurchased = OrderPurchase::with('cart')->get();

        // Pass the $orderPurchased variable to the view
        return view('tracking', ['orderPurchased' => $orderPurchased]);
    }

    public function markOrderAsReceived($orderId)
    {
        // Retrieve the order from the database
        $order = OrderPurchase::findOrFail($orderId);

        // Update the status to "Completed"
        $order->status = 2;
        $order->save();

        // Optionally, you can add any additional logic or actions here

        // Redirect back to the previous page or any other appropriate response
        return redirect()->back()->with('success', 'Order marked as received successfully.');
    }
}
