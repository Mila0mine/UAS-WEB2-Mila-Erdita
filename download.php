<?php include("penutup.php");
require 'functions.php';
$result = mysqli_query($conn, "SELECT * FROM data_barang");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cetak</title>
    <style>
        body {
            background-color: pink;
        }

        h2 {
            color: black;
            font-size: 40px;
            text-align: center;
            margin-top: 25px;
        }

        th {
            color: white;
            font-weight: bold;
            background: blueviolet;
            font-size: 25px;
        }

        tr {
            margin: auto;
            text-align: center;
            align-items: center;
        }

        td {
            color: black;
            font-weight: bold;
        }

        table {
            margin: auto;
            border-collapse: collapse;
        }

        i {
            margin: auto;
            font-size: 35px;
        }

        a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <h2>Data Barang</h2>

    <?php
    include 'penutup.php';
    ?>
    <table border="1" cellpadding="10" style="background: white; box-shadow: 0 0 10px rgba(1, 1, 1, 0.8); width: 80%;">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?> </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["universitas"]; ?></td>
                <td><img src="img/<?php echo $row["gambar"]; ?> " width="50"></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>