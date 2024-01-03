<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
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
    .cont{
        width: 60%;
        margin: auto;
    }

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

    .desc{
        margin-top:20px;
    }

    .huh{
        margin-left:15px;
    }

    hr.hr-14 {
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8c8c, #f0f0f0);
    background-image: -moz-linear-gradient(left, #f0f0f0, #8c8c8c, #f0f0f0);
    background-image: -ms-linear-gradient(left, #f0f0f0, #8c8c8c, #f0f0f0);
    background-image: -o-linear-gradient(left, #f0f0f0, #8c8c8c, #f0f0f0);
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="number"],
    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button.button-18 {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
    }

    button.button-18:hover {
        background-color: #45a049;
    }
    footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
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
    .cont {
            width: 60%;
            margin: auto;
        }

        .bg-image {
            position: relative;
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
</style>
<body>
@extends('layout')
@section('content')
<div class="cont">
    <br> <br> <br>
    <div class="row">
        <div class="col-sm-5 col-md-6">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <span id="stock-quantity">{{ $product->quantity }}</span>
                <center>
                <img src="/images/{{ $product->image }}" alt="{{ $product->label }}" class="img-fluid card-img" style="height:490px;width:400px;">
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </center>
            </div>
        </div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <div class="desc">
                <h5>Product Name:</h5>
                <h5 class="huh">{{ $product->label }}</h5>
                <h5>Description:</h5>
                <h7 class="huh">{{ $product->description }}</h7>
                <br>
                <h1><b>₱{{ $product->price }}</b></h1>
                <b><hr class="hr-14"></b>
                <br>
                <!-- ... -->
                <form action="/add-to-cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" onchange="updateStockQuantity()" min="1" max="{{ $product->quantity }}" class="quantity-input">
                    <br><br>
                    
                    <label for="address">Address to deliver</label>
                    <input type="text" name="address" id="address">
                    <br><br>
                    
                    <label for="contact_number">Contact No:</label>
                    <input type="text" name="contact_number" id="contact_number">
                    <br><br>
                    
                    <button class="button-18" type="submit" role="button">
                        Add to cart
                    </button>
                </form>

            </div>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br>
</div>
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

<style>
    .quantity-input {
        width: 60px;
        padding: 5px;
        font-size: 16px;
    }
</style>

<script>
    function updateStockQuantity() {
        var stockQuantity = parseInt("{{ $product->quantity }}");
        var selectedQuantity = parseInt(document.getElementById("quantity").value);
        var updatedQuantity = stockQuantity - selectedQuantity;

        if (updatedQuantity >= 0) {
            document.getElementById("stock-quantity").textContent = updatedQuantity;
        } else {
            document.getElementById("quantity").value = stockQuantity;
            alert("Insufficient stock quantity!");
        }
    }
</script>

@endsection
</body>


