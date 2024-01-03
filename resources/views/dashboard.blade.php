<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
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
  <style>
    /* Reset and Global Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

header {
  background-color: #fff;
  padding: 10px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 10px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
}

.cta-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: blue;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  margin-right: 10px;
}

.cta-button:hover {
  background-color: #0073e6;
}



#home__about {
  background-color: #f5f5f5;
  padding: 50px 0;
}

.container {
  max-width: 960px;
  margin: 0 auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
}

.col-lg-6 {
  flex: 0 0 50%;
  max-width: 50%;
}

.about-image,
.product-image {
  max-width: 100%;
  height: auto;
}

.home__about h2 {
  font-size: 24px;
  margin-bottom: 20px;
  color: #333;
}

.about-content p,
.product-title p {
  font-size: 16px;
  color: #666;
  margin-bottom: 20px;
}

a {
  color: #333;
  text-decoration: none;
}

a:hover {
  color: #0073e6;
}

.product-card {
  margin-bottom: 20px;
  border: 1px solid #ddd;
  padding: 20px;
  background-color: #fff;
  border-radius: 4px;
}

.product-title h3 {
  font-size: 20px;
  margin-bottom: 10px;
}

.price {
  font-weight: bold;
  color: #0073e6;
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

  </style>
</head>
<body>
@extends('layout')
@section('content')

<br>


<section >

<img src="image/p3.jpg" class="container-fluid" alt="">
</div>
  
</section>
<br>
<br>


  <section id="home__about bg-light">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 order-2">
          <div class="padd-right">
            <h2>ABOUT US</h2>
            <p>Lucky Home is situated in San Vicente, Alcala, Pangasinan, and stands as a distinguished steel production enterprise. Boasting convenient transportation and well-established industrial facilities in the vicinity, our company leverages its strategic location and the advantages of self-built warehouses to cater to a diverse market. Committed to excellence, we have assembled a dedicated international trade service team and have earned ISO 9001:2000 certification.

Our comprehensive range of products includes PPGL, galvanized sheet, steel plate, steel pipe, stainless steel products, angle steel, steel pile, H-shaped steel, I-beam, angle steel, channel steel, and more. Equipped with top-notch, domestically first-class large-scale machinery, we offer a variety of processing services such as coil material processing, bending, laser cutting, water jet cutting, and more, providing customers with a seamless, one-stop solution.</p>
            <a href="#">Learn More &gt;</a>
          </div>
        </div>
        <div class="col-lg-6 order-1">
          <img src="image/p4.jpg" alt="About Us Image" class="d-block w-100" />
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>

  <section class="home__hot-listing">
    <div class="container-fluid">
        <div class="row text-center pb-5">
            <div class="col-12">
              <h2>OUR PRODUCT LISTINGS</h2>
            </div>
        </div>
        <div class="row pb-5">
          <div class="col-lg-4 col-6">
            <div class="product-card">
              <img src="image/p5.jpg" alt="Product Image" class="d-block w-100" />
              <div class="product-title">
                <h5>304L Stainless steel plate</h5>
                <p>304L stainless steel is mainly used in automobile accessories, hardware tools, tableware, cabinets, medical appliances, office equipment, weaving, handicrafts, petroleum, electronics, chemicals, textile, food, machinery, construction, nuclear power, aerospace, military and other industries.</p>
                <div class="price">Php 765.00</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-card">
              <img src="image/p6.jpg" alt="Product Image" class="d-block w-100" />
              <div class="product-title">
                <h5>304L Stainless steel plate</h5>
                <p>304L stainless steel is mainly used in automobile accessories, hardware tools, tableware, cabinets, medical appliances, office equipment, weaving, handicrafts, petroleum, electronics, chemicals, textile, food, machinery, construction, nuclear power, aerospace, military and other industries.</p>
                <div class="price">Php 765.00</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-card">
              <img src="image/p7.jpg" alt="Product Image" class="d-block w-100" />
              <div class="product-title">
                <h5>304L Stainless steel plate</h5>
                <p>304L stainless steel is mainly used in automobile accessories, hardware tools, tableware, cabinets, medical appliances, office equipment, weaving, handicrafts, petroleum, electronics, chemicals, textile, food, machinery, construction, nuclear power, aerospace, military and other industries.</p>
                <div class="price">Php 765.00</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-card">
              <img src="image/p8.jpg" alt="Product Image" class="d-block w-100" />
              <div class="product-title">
                <h5>304L Stainless steel plate</h5>
                <p>304L stainless steel is mainly used in automobile accessories, hardware tools, tableware, cabinets, medical appliances, office equipment, weaving, handicrafts, petroleum, electronics, chemicals, textile, food, machinery, construction, nuclear power, aerospace, military and other industries.</p>
                <div class="price">Php 765.00</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-card">
              <img src="image/p9.jpg" alt="Product Image" class="d-block w-100" />
              <div class="product-title">
                <h5>304L Stainless steel plate</h5>
                <p>304L stainless steel is mainly used in automobile accessories, hardware tools, tableware, cabinets, medical appliances, office equipment, weaving, handicrafts, petroleum, electronics, chemicals, textile, food, machinery, construction, nuclear power, aerospace, military and other industries.</p>
                <div class="price">Php 765.00</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="product-card">
              <img src="image/p10.jpg" alt="Product Image" class="d-block w-100" />
              <div class="product-title">
                <h5>304L Stainless steel plate</h5>
                <p>304L stainless steel is mainly used in automobile accessories, hardware tools, tableware, cabinets, medical appliances, office equipment, weaving, handicrafts, petroleum, electronics, chemicals, textile, food, machinery, construction, nuclear power, aerospace, military and other industries.</p>
                <div class="price">Php 765.00</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
          <a class="nav-link" href="{{ route('shop') }}"><b>Shop Now</b></a>
          </div>
        </div>
    </div>
  </section>
  


  

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
  <div>
  

  </div>
</body>
</html>