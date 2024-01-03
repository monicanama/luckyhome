<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet">
</head>
<style> 
    /* body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 130px;
        background-color: #f9f9f9;
    } */

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Add this CSS style */
    .card-details {
        text-align: right;
    }

    .card-text {
        text-align: right;
    }

    .total-amount {
        text-align: right;
    }

    .print-button {
        text-align: right;
        margin-top: 20px;
    }
</style>
<body>
@extends('layout')
@section('content')
    <div class="container py-5">
        
        <ul class="list-group list-group-flush">
            @foreach ($cartIds as $cartId)
                @php
                    $cartItem = \App\Models\Cart::find($cartId);
                    $product = $cartItem->product;
                @endphp

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-9">
                            <p><strong>Name:</strong> {{ $product->label }}</p>
                            <p><strong>Quantity:</strong> {{ $cartItem->quantity }}</p>
                            <p><strong>Price:</strong> ₱{{ $product->price }}</p>
                           
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="card-details">
            <h5 class="">Total Ammount:</h5>
            <p class="lead total-amount">₱{{ $totalCost }}</p>
        </div>
    </div>

   

    <!-- MDB JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>

@endsection
</body>
</html>
