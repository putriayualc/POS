<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        h3 {
            color: #555;
            text-align: center;
        }

        a {
            color: #555;
            text-decoration: none;
            display: block;
            margin-top: 10px;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>INI HALAMAN HOME</h1>
    <h3>Menu</h3>
    <a href="{{ route('profile', ['id' => 20, 'name' => 'Putri Ayu Aliciawati']) }}">Profile</a>
    <a href="{{ url('/sales') }}">Sales</a>
    <a href="{{ url('/products/category/') }}">Products</a>
</body>
</html>
