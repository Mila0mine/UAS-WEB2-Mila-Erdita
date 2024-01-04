<?php include("index.php");
if (!in_array("user", $_SESSION['admin_akses'])) {
    echo "kamu tidak memiliki akses";
    include("penutup.php");
    exit();
}
?>
<?php include("penutup.php");
require 'functions.php';
$result = mysqli_query ($conn, "SELECT * FROM data_barang");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background: #dedede;
        margin: 0;
        background-color: pink;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: black;
        font-family: Arial;
    }

    th {
        color: black;
        font-size: 35px;
        background: yellow;
    }

    tr {
        margin: auto;
        font-size: 25px;
        text-align: center;
        color: white;
        align-items: center;
        background: blueviolet;
    }

    table {
        margin: auto;
    }

    #btn-2 {
        padding: 10px 25px;
        background: white;
        border: transparent;
        border-radius: 10px;
        margin: auto;
        display: flex;
        margin-top: 30px;
        box-shadow: 0 0 10px rgba(1, 1, 1, 0.8);
    }

    #btn-2:hover {
        background: #333;
        transform: scale(1.03);
    }

    a {
        color: red;
        text-decoration: none;
        text-align: center;
        margin: auto;
    }
    </style>
</head>

<body>
    <div>
        <h1>DATA BARANG</h1>
        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                <th>ID</th>
                <th>NAMA BARANG</th>
                <th>JENIS</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>GAMBAR</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?> </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["universitas"]; ?></td>
                <td><img src="img/<?php echo $row["gambar"]; ?>" width="70"></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>

        </table>
    </div>
</body>

</html>