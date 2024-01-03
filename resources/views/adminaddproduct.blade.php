<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <!-- Add MDB Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/mdb@5.3.0/dist/css/mdb.min.css" rel="stylesheet">
</head>
<style>
    /* CSS */
    body {
        padding-top: 40px;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group textarea,
    .form-group input[type="number"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .button-18 {
        align-items: center;
        background-color: blue;
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
        color: rgba(255, 255, 255, .7);
    }

    .button-18:disabled { 
        cursor: not-allowed;
        background: rgba(0, 0, 0, .08);
        color: rgba(0, 0, 0, .3);
    }
</style>
<body>
@extends('adminlayout')
@section('content')
<div class="container">
    <br> <br> <br>
    <form action="/store-product" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        
        <div class="form-group">
            <label for="label">Name</label>
            <input type="text" class="form-control" id="label" name="label" placeholder="Label" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Description" required></textarea>
        </div>
        
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required>
        </div>
        
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="Price" required>
        </div>
        
        <div class="text-center">
            <button type="submit" class="button-18" role="button">Add Supply</button>
        </div>
    </form>
</div>
@endsection

<!-- Add MDB Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/mdb@5.3.0/dist/js/mdb.min.js"></script>
</body>
</html>
