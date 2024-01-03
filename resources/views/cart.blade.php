<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .checkbox {
        padding: 25px;
    }
    .card{
        padding: 25px;
    }
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
        flex-shrink: 0;
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

    .content {
        flex: 1 0 auto;
    }
</style>
<body>
    @extends('layout')
    @section('content')
    <br> <br> <br>
    <div class="container" style="max-width: 1500px;">
        <form action="{{ route('order.purchased') }}" method="GET">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    @foreach ($cartItems->sortByDesc('created_at') as $cartItem)
                    <div class="card mb-3">
                        <div class="card-body d-flex align-items-center">
                            <div class="row">
                                <div class="col-md-1">
                                    <div>
                                        <input type="checkbox" name="checkout[]" value="{{ $cartItem->id }}" class="form-check-input me-3">
                                    </div>
                                    <input type="hidden" name="cart_id" value="{{ $cartItem->id }}">
                                </div>
                                <div class="col-md-3">
                                    <img src="/images/{{ $cartItem->product->image }}" alt="{{ $cartItem->product->label }}" class="img-fluid card-img" style="height:200px;width:200px;">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title">{{ $cartItem->product->label }}</h4>
                                    <h6 class="card-text">Quantity: {{ $cartItem->quantity }}</h6>
                                    <h6 class="card-text">Price: ₱{{ $cartItem->product->price }}</h6>
                                    <h6 class="card-text">Total: ₱{{ $cartItem->quantity * $cartItem->product->price }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="payment-method">
                        <div class="card">
                            <h6>Mode of payment</h6>
                            <label>
                                <input type="radio" name="payment" value="cash on delivery">
                                Cash on Delivery
                            </label>
                            
                            <br>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-danger">Proceed to Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
        </form>
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

    @if ($errors->any())
        <script>
            // Loop through the error messages and display them in SweetAlert
            @foreach ($errors->all() as $error)
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ $error }}',
                });
            @endforeach
        </script>
    @endif
</body>
</html>
