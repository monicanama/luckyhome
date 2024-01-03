<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
@extends('adminlayout')

@section('content')

<div class="container">
    <br> <br> 
    <div class="cont">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <!-- Dito nag didisplay lahat ng total -->
                    <div class="card-body">
                        <!-- Dito dini display nya yung total sale -->
                        <h5 class="card-title">Total Sale</h5>
                        <h3 class="card-text"><b>₱{{ number_format($totalSale, 2, '.', ',') }}</b></h3>
                        <i class="fas fa-chart-bar fa-3x float-right text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Income</h5>
                        <h3 class="card-text"><b>₱{{ number_format($totalSale * 0.8, 2, '.', ',') }}</b></h3>
                        <i class="fas fa-chart-bar fa-3x float-right text-primary"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Orders</h5>
                        <h3 class="card-text"><b>{{ $totalOrders }}</b></h3>
                        <i class="fas fa-shopping-cart fa-3x float-right text-primary"></i>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <h3 class="card-text"><b>{{ $totalUsers }}</b></h3>
                        <i class="fas fa-users fa-3x float-right text-primary "></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Roof</h5>
                        <h3 class="card-text"><b>{{ $totalProducts }}</b></h3>
                        <i class="fas fa-box fa-3x float-right text-primary "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br> <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- Dito naman is mag didisplay sya ng roofing list -->
                <div class="card-header text-left"><h3>ROOFING LIST</h3></div>
                <div class="card-body">
                    <div class="mb-3">
                        
                        <form action="{{ route('admindashboard') }}" method="GET" class="form-inline">
                            <div class="form-group">
                                <label for="search" class="mr-2">Search:</label>
                                <input type="text" id="search" name="search" class="form-control" value="{{ request()->query('search') }}" placeholder="Enter product name">
                            </div>
                            <button type="submit" class="btn btn-primary ml-2">Search</button>
                        </form>
                    </div>
                    <table class="table table-striped">
                        <thead class="blue darken-4 text-dark">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products->sortByDesc('created_at') as $product)
                                @if(request()->query('search') && stripos($product->label, request()->query('search')) === false)
                                    @continue
                                @endif
                                <tr>
                                    <td>{{ $product->label }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>₱{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>
                                        <span class="badge {{ $product->is_active ? 'bg-success' : 'bg-danger' }}">
                                            {{ $product->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" title="Edit">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('products.toggle', $product->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-danger" title="{{ $product->is_active ? 'Make Inactive' : 'Make Active' }}" onclick="return confirm('Are you sure you want to {{ $product->is_active ? 'make inactive' : 'make active' }} this product?')">
                                                    <i class="fas {{ $product->is_active ? 'fa-toggle-on' : 'fa-toggle-off' }}"></i> {{ $product->is_active ? 'Deactivate' : 'Activate' }}
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
</body>
</html>
