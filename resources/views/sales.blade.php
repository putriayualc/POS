<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Penjualan</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f5;
            margin: 0;
            padding: 0;
        }

        div {
            max-width: 800px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #1c5072;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #296d9b;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        h3 {
            color: #0060a0;
            margin-top: 20px;
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
            background-color: #185076;
        }
    </style>
</head>
<body>
    <div>
        <h1>Laporan Penjualan</h1>

        {{-- Tabel Laporan Penjualan --}}
        <table border="1">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2022-03-01</td>
                    <td>Product 1</td>
                    <td>2</td>
                    <td>Rp. 50,000</td>
                </tr>
                <tr>
                    <td>2022-03-02</td>
                    <td>Product 2</td>
                    <td>1</td>
                    <td>Rp. 30,000</td>
                </tr>
                <tr>
                    <td>2022-03-03</td>
                    <td>Product 3</td>
                    <td>3</td>
                    <td>Rp. 70,000</td>
                </tr>
            </tbody>
        </table>

        {{-- Total Penjualan --}}
        <h3>Total Penjualan: Rp. 150,000</h3>
        <a class="button" href="/home">Back to Home</a>
    </div>
    
</body>
</html>
