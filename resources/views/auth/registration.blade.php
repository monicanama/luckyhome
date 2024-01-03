<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.all.min.js"></script>

    <title>Register</title>
    <style>
        /* CSS */
       
            body {
                background-image: url('image/background.jpg'); /* Replace 'path-to-your-image.jpg' with the actual path to your background image file */
        background-size: cover; /* This will make the background image cover the entire body */
        background-repeat: no-repeat; /* Prevent the image from repeating */
        background-attachment: fixed; /* Keep the image fixed in place, so it doesn't scroll with the content */
    
}
        

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 50%;
            max-width: 200px;
        }

        .card-header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .text-danger {
            color: #FF4742;
        }

        .checkbox {
            margin-top: 10px;
        }

        .button {
            display: block;
            width: 100%;
            padding: 12px 14px;
            background-color: #FF4742;
            border: 1px solid #FF4742;
            border-radius: 6px;
            color: #FFFFFF;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        .button:hover,
        .button:active {
            background-color: #FFFFFF;
            color: #FF4742;
        }

        .button:active {
            opacity: 0.8;
        }
    </style>
</head>
<body>
@extends('layout')
@section('content')
    <div class="container">
        <div class="logo">
            <img src="image/p2.jpg" class ="rounded-circle"alt="Logo">
        </div>
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form action="{{ route('register.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" name="name" required autofocus>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email_address">E-Mail Address</label>
                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="button">Register</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
