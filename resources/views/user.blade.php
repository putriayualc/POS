<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>

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
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 10px;
        }

        h4 {
            color: #555;
            margin-top: 10px;
        }

        div {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin-bottom: 20px; /* Tambahkan margin bottom */
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #3498db;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: block; /* Ubah display menjadi block */
            margin: 0 auto; /* Tengahkan tombol */
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div>
        <h1>USER PROFILE</h1>
        <h4>Nama : {{ $name }}</h4>
        <h4>ID : {{ $id }}</h4>
        <a class="button" href="/home">Back to Home</a>
    </div>
    
</body>
</html>
