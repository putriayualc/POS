<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food and Beverages</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        .product-list {
            width: 80%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .product-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #3498db;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Beauty and Health</h1>
    
    <div class="product-list">
        <div class="product-item">
            <span>Product 1</span>
            <span>Rp 89.000</span>
        </div>
        <div class="product-item">
            <span>Product 2</span>
            <span>Rp 26000</span>
        </div>
        <div class="product-item">
            <span>Product 3</span>
            <span>Rp 70000</span>
        </div>
        <div class="product-item">
            <span>Product 4</span>
            <span>Rp 77000</span>
        </div>
        <div class="product-item">
            <span>Product 5</span>
            <span>Rp 94000</span>
        </div>
        <div class="product-item">
            <span>Product 6</span>
            <span>Rp 19000</span>
        </div>
        <div class="product-item">
            <span>Product 7</span>
            <span>Rp 34000</span>
        </div>
        <div class="product-item">
            <span>Product 8</span>
            <span>Rp 11000</span>
        </div>
        
    </div>

    <a class="button" href="{{route('index')}}">Back</a>
</body>
</html>
