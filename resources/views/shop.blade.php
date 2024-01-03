<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
 

    /* CSS */
    .button-18 {
    align-items: center;
    background-color: #FF4742;
    border: 0;
    border-radius: 100px;
    box-sizing: border-box;
    color: #ffffff;
    cursor: pointer;
    display: inline-flex;
    font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 600;
    justify-content: center;
    line-height: 20px;
    max-width: 480px;
    min-height: 40px;
    min-width: 0px;
    overflow: hidden;
    padding: 0px;
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    touch-action: manipulation;
    transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    }

    .button-18:hover,
    .button-18:focus { 
    background-color: #FF4742;
    color: #ffffff;
    }

    .button-18:active {
    background: #09223b;
    color: rgb(255, 255, 255, .7);
    }

    .button-18:disabled { 
    cursor: not-allowed;
    background: rgba(0, 0, 0, .08);
    color: rgba(0, 0, 0, .3);
    }

    /* CSS */
    .button-27 {
    width: 100%;
    align-items: center;
    background-color: black;
    border: 0;
    border-radius: 100px;
    box-sizing: border-box;
    color: #ffffff;
    cursor: pointer;
    display: inline-flex;
    font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 600;
    justify-content: center;
    line-height: 20px;
    max-width: 480px;
    min-height: 40px;
    min-width: 0px;
    overflow: hidden;
    padding: 0px;
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    touch-action: manipulation;
    transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    }

    .button-27:disabled {
    pointer-events: none;
    }

    .button-27:hover {
    box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
    transform: translateY(-2px);
    }

    .button-27:active {
    box-shadow: none;
    transform: translateY(0);
    }

    /* Updated CSS */
    .card-body {
    background-color: rgba(255, 255, 255, 0.7);
    }

    .labels{
        padding-top:5px;
        padding-bottom:25px;
    }
    

footer p {
  margin: 10;
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
    #stock-quantity {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #FF4742;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 50%;
            font-size: 14px;
        }

        /* Add this CSS to your existing styles */
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


        
   

</style>
<body>
@extends('layout')
@section('content')
<div class="cont">
    <div class="row justify-content-center">
      <div class="container">
        <br> <br> <br>
        <h3><b>Available Supply</b></h3>
        <div class="row">
          <!-- Loop through products and generate product cards -->
          @foreach ($products as $product)
          @if ($product->is_active)
          <div class="col-md-6">
          <div class="col-sm-5 col-md-6">
            
        </div>
        
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <span id="stock-quantity">{{ $product->quantity }}</span>
              <img src="/images/{{ $product->image }}" alt="{{ $product->label }}" class="img-fluid card-img" style="height: 390px;">
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="labels">
            
              <center>
                <h5 class="card-title">{{ $product->label }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">Price: <span><b>₱{{ $product->price }}</b></span></p>
              </center>
              <br>
              <a href="{{ route('product.showProduct', ['id' => $product->id]) }}" class="button-27" style="text-decoration: none; color: white; height: 15px;">Buy now</a>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
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
