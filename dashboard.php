<?php include("index.php");
?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home Barang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: pink;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            width: 100%;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .barang {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .barang-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 30%;
            box-sizing: border-box;
        }

        .barang-item img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Data Barang</h1>
    </header>

    <div class="container">
        <div class="barang">
            <div class="barang-item">
                <img src="berasnaruto.jpeg" alt="Barang 1">
                <h2>Beras</h2>
                <p>Beras Naruto Sedap dan Murah</p>
                <p>Harga: 100000</p>
            </div>

            <div class="barang-item">
                <img src="minyakgoreng.jpeg" alt="Barang 2">
                <h2>Minyak Goreng</h2>
                <p>Minyak yang sangat Bagus</p>
                <p>Harga: 25000</p>
            </div>

            <div class="barang-item">
                <img src="gulapasir.jpeg" alt="Barang 2">
                <h2>Gula pasir</h2>
                <p>Minyak yang sangat Bagus</p>
                <p>Harga: 25000</p>
            </div>

            <div class="barang-item">
                <img src="minyakgoreng.jpeg" alt="Barang 2">
                <h2>Minyak Goreng</h2>
                <p>Minyak yang sangat Bagus</p>
                <p>Harga: 25000</p>
            </div>

            <div class="barang-item">
                <img src="gulapasir.jpeg" alt="Barang 1">
                <h2>GulaKu</h2>
                <p>Beras Naruto Sedap dan Murah</p>
                <p>Harga: 100000</p>
            </div>

            <div class="barang-item">
                <img src="berasnaruto.jpeg" alt="Barang 1">
                <h2>Beras</h2>
                <p>Beras Naruto Sedap dan Murah</p>
                <p>Harga: 100000</p>
            </div>

        </div>
    </div>
</body>
</html>
