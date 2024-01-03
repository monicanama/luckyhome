<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.all.min.js"></script>

    <title>Login</title>
    <style>
        /* CSS */
        body {
            
            background-image: url('image/background.jpg'); /* Replace 'path-to-your-image.jpg' with the actual path to your background image file */
        background-size: cover; /* This will make the background image cover the entire body */
        background-repeat: no-repeat; /* Prevent the image from repeating */
        background-attachment: fixed;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #eaeaea;
            border-radius: 4px;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-form .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form .logo img {
            max-width: 100%;
            height: auto;
        }

        .login-form form .form-group {
            margin-bottom: 20px;
        }

        .login-form form label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .login-form form input[type="text"],
        .login-form form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #eaeaea;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .login-form form .checkbox label {
            font-weight: normal;
        }

        .login-form form .checkbox input[type="checkbox"] {
            margin-right: 5px;
        }

        .login-form form button[type="submit"] {
            background-color: #FF4742;
            border: none;
            color: #ffffff;
            cursor: pointer;
            display: block;
            width: 100%;
            padding: 12px 0;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px;
        }

        .login-form form button[type="submit"]:hover {
            background-color: #e63f3a;
        }
    </style>
</head>
<body>
@extends('layout')
@section('content')
<main class="login-form">
    <div class="container">
        <div class="logo">
            <img src="image/p2.jpg" class="rounded-circle" alt="Logo">
        </div>
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
        <div class="card-body">
        <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email_address"><b>E-Mail Address</b></label>
                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password"><b>Password</b></label>
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

                <div class="form-group">
                    <button type="submit"><b>Login</b></button>
                </div>
                <center><a href="{{ route('adminlogin') }}"> Admin Login</a></center>
            </form>
        </div>
    </div>
</main>
    @endsection
</body>
</html>



