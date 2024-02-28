<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Category</title>

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

        .category-link {
            display: block;
            padding: 10px;
            margin: 10px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .category-link:hover {
            background-color: #2980b9;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #394a56;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: block; 
            margin: 0 auto; 
        }

        .button:hover {
            background-color: #2980b9;
        }

        div {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
    <div>
        <h1>Products Category</h1>
        <a class="category-link" href="{{ route('food') }}">Food and Beverage</a>
        <a class="category-link" href="{{ route('beauty') }}">Beauty and Health</a>
        <a class="category-link" href="{{ route('homeC') }}">Home Care</a>
        <a class="category-link" href="{{ route('baby') }}">Baby and Kids</a>    
    </div>
    <a class="button" href="/home">Back to Home</a>
    
</body>
</html>
