<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productdeleteController extends Controller
{
    public function index()
    {
    return view('admindashboard');
    }

    public function updatetoggle(Request $request, Product $product)
    {
        $product->update([
            'is_active' => !$product->is_active // Toggling the value
        ]);

        return redirect()->route('admindashboard');
    }
}
