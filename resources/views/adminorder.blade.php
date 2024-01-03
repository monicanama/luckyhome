<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
</head>
<style>
    .container{
        width:80%;
        margin:auto;
    }
</style>
<body>
    <!-- adminorder.blade.php -->

    @extends('adminlayout')

    @section('content')
    <div class="container-fluid">
    <br> <br>
    <h1>Orders</h1>
    
    <form action="{{ route('adminorder') }}" method="GET" class="form-inline">
        <div class="form-group">
            <label for="search" class="mr-2">Search:</label>
            <input type="text" id="search" name="search" class="form-control" value="{{ request()->query('search') }}" placeholder="Enter Client name">
        </div>
        <button type="submit" class="btn btn-primary ml-2">Search</button>
    </form>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="blue darken-4 white-text">
                <tr>
                    <th>Order ID</th>
                    
                    <th>Client Name</th>
                    <th>Name Of Roof</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Quantity</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Time of Purchase</th>
                   
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders->sortByDesc('created_at') as $order)
                    @if(request()->query('search') && strpos(strtolower($order->cart->user->name), strtolower(request()->query('search'))) === false)
                        @continue
                    @endif
                    <tr>
                        <td>{{ $order->id }}</td>
                        
                        <td>{{ $order->cart->user->name }}</td>
                        <td>{{ $order->cart->product->label }}</td>
                        <td>{{ $order->cart->address }}</td>
                        <td>{{ $order->cart->contact_number }}</td>
                        <td>{{ $order->cart->quantity }}</td>
                        <td>{{ $order->payment_method }}</td>
                        <td>
                                @if($order->status == 0)
                                    <span class="badge badge-danger rounded-pill d-inline">Pending</span>
                                @elseif($order->status == 1)
                                    <span class="badge badge-success rounded-pill d-inline">Shipped</span>
                                @elseif($order->status == 2)
                                    <span class="badge badge-primary rounded-pill d-inline">Delivered</span>
                                @endif
                            </td> <!-- Status: pending or delivered -->
                        <td>{{ $order->created_at }}</td> 
                        <td>
                            @if($order->status == 0)
                                <form action="{{ route('admin.orders.deliver', ['order' => $order->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success btn-sm">Ship</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br> <br>
</div>

    @endsection

    @section('scripts')
        <!-- MDBootstrap JS -->
        <script src="{{ asset('js/mdb.min.js') }}"></script>
    @endsection
</body>

</html>