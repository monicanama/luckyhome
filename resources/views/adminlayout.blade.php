<!DOCTYPE html>
<html>
<head>
    <title>Admin Layout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
            padding: 8px;
        }

        .navbar-brand, .nav-link, .my-form, .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .navbar-nav .nav-link {
            padding: 0.5rem 1rem;
        }

        .navbar-nav .nav-link:hover {
            background-color: #f8f9fa;
        }

        .navbar-nav .active .nav-link {
            background-color: #e9ecef;
        }

        .navbar-brand img {
            width: 50px;
            height: auto;
            margin-right: 8px;
        }
       
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">
            
            <h4><b>LUCKY HOME ORDERING SYSTEM</b></h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><b>Login</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><b>Register</b></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admindashboard') }}"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminaddproduct') }}"><b>Add Roofing</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminorder') }}"><b>Orders</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('adminlogout') }}"><b>Logout</b></a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
  
@yield('content')
     
</body>
</html>
