<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tracking</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
    rel="stylesheet"
    />
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
    ></script>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url('image/background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
    }

    .cont {
        flex: 1; /* This makes the content fill the available vertical space */
        padding: 20px; /* Add spacing as needed */
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
        flex-shrink: 0; /* Prevent footer from shrinking */
    }

    footer p {
        margin: 0;
    }

    footer ul {
        list-style-type: none;
        padding: 0;
        margin: 10px 0;
    }

    footer ul li {
        display: inline;
        margin-right: 10px;
    }

    footer ul li a {
        color: #fff;
        text-decoration: none;
    }
</style>
<body>
@extends('layout')
@section('content')
<div class="containerbody">
    <br><br><br>
    <div class="cont">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex3-tab-1" data-mdb-toggle="tab" href="#ex3-tabs-1" role="tab" aria-controls="ex3-tabs-1" aria-selected="true">
                <i class="fas fa-truck fa-lg" style="color: red; margin-right: 5px;"></i><h6 style="display: inline-block; margin-bottom: 0;"><b>To Ship</b></h6>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex3-tab-2" data-mdb-toggle="tab" href="#ex3-tabs-2" role="tab" aria-controls="ex3-tabs-2" aria-selected="false">
                <i class="fas fa-receipt fa-lg" style="color: blue; margin-right: 5px;"></i><h6 style="display: inline-block; margin-bottom: 0;"><b>To Receive</b></h6>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex3-tab-3" data-mdb-toggle="tab" href="#ex3-tabs-3" role="tab" aria-controls="ex3-tabs-3" aria-selected="false">
                <i class="fas fa-check-circle fa-lg" style="color: green; margin-right: 5px;"></i><h6 style="display: inline-block; margin-bottom: 0;"><b>Completed</b></h6>
            </a>
        </li>
    </ul>


    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex2-content">
    <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
        @foreach ($orderPurchased as $order)
            @if (($order->status == 0 || $order->status == 'pending') && $order->cart->user_id == Auth::user()->id)
                @if ($order->cart)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/images/{{ $order->cart->product->image }}" alt="Product Image" style="margin-left:53px;max-width: 230px; height: 300px;">
                                </div>
                                <div class="col-md-9">
                                    <br><br>
                                    <h4><b>{{ $order->cart->product->label }}</b></h4>
                                    <p><b>{{ $order->cart->product->description }}</b></p>
                                    <h5><b>Total Price: {{ $order->totalcost }}</b></h5>
                                    <p><b>Order ID: {{ $order->id }}</b></p>
                                    @if ($order->status == 0)
                                        <p><b>Status: <span class="badge bg-danger" style="font-size: 12px;">Pending</span></b></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endif
            @else
            @endif
        @endforeach

        @if ($orderPurchased->isEmpty())
            <div class="text-center">
                <center>
                    <img src="image/Self checkout-pana.png" style="width:20%;" alt="">
                </center>
                <p><b>Nothing to see here.</b></p>
            </div>
        @endif
    </div>

    <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
        @foreach ($orderPurchased as $order)
            @if (($order->status == 1 || $order->status == 'shipped') && $order->cart->user_id == Auth::user()->id)
                @if ($order->status != 0 && $order->status != 'pending' && $order->cart)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/images/{{ $order->cart->product->image }}" alt="Product Image" style="margin-left: 53px; max-width: 230px; height: 300px;">
                                </div>
                                <div class="col-md-9">
                                    <br><br>
                                    <h4><b>{{ $order->cart->product->label }}</b></h4>
                                    <p><b>{{ $order->cart->product->description }}</b></p>
                                    <h5><b>Price: {{ $order->totalcost }}</b></h5>
                                    <p><b>Order ID: {{ $order->id }}</b></p>
                                    @if ($order->status == 1)
                                        <p><b>Status: <span class="badge bg-success" style="font-size: 14px;">shipped</span></b></p>
                                        <form action="{{ route('order.received', ['orderId' => $order->id]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Order Received</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endif
            @endif
        @endforeach

        @if ($orderPurchased->isEmpty())
            <div class="text-center">
                <center>
                    <img src="image/Self checkout-pana.png" style="width: 20%;" alt="">
                </center>
                <p><b>Nothing to see here.</b></p>
            </div>
        @endif
    </div>


    <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
        @foreach ($orderPurchased as $order)
            @if (($order->status == 2 || $order->status == 'completed') && ($order->status != 0 && $order->status != 'pending') && $order->cart->user_id == Auth::user()->id)
                @if ($order->cart)
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/images/{{ $order->cart->product->image }}" alt="Product Image" style="margin-left: 53px; max-width: 230px; height: 300px;">
                                </div>
                                <div class="col-md-9">
                                    <br><br>
                                    <h4><b>{{ $order->cart->product->label }}</b></h4>
                                    <p><b>{{ $order->cart->product->description }}</b></p>
                                    <h5><b>Price: {{ $order->totalcost }}</b></h5>
                                    <p><b>Order ID: {{ $order->id }}</b></p>
                                    @if ($order->status == 2)
                                        <p><b>Status: <span class="badge bg-success" style="font-size: 14px;">Order Received</span></b></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                @endif
            @endif
        @endforeach

        @if ($orderPurchased->isEmpty())
            <div class="text-center">
                <center>
                    <img src="image/Self checkout-pana.png" style="width: 20%;" alt="">
                </center>
                <p><b>Nothing to see here.</b></p>
            </div>
        @endif
    </div>
    </div>

    <!-- Tabs content -->
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
</div>
<!-- <footer>
    <p>&copy; 2023 Alpha Metal System. All rights reserved.</p>
    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#products">Products</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </footer> -->
  <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on Facebook:</span>
      <a href="https://www.facebook.com/lucky.home.942?mibextid=ZbWKwL" class="me-4 text-reset">
        <i class="fab fa-facebook">Lucky Home</i>
      </a>

    </div>
    <!-- Left -->

   
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Lucky Home
          </h6>
          <p>
          Our comprehensive range of products includes PPGL, galvanized sheet, steel plate, steel pipe, stainless steel products, angle steel, steel pile, H-shaped steel, I-beam, angle steel, channel steel, and more. 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i>Alcala, Pangasinan</p>
          <!-- <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p> -->
          <p><i class="fas fa-phone me-3"></i>09154368842</p>
          <p><i class="fas fa-phone me-3"></i>0966351554</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <p>&copy; 2023 Lucky Home. All rights reserved.</p>
  <!-- Copyright -->
</footer>
<!-- Footer -->


@endsection
</body>
</html>