<?php include("index.php");
if (!in_array("admin", $_SESSION['admin_akses'])) {
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
        padding: 0;
        background-color: pink;
    }

    h1 {
        text-align: center;
        color: blue;
        font-family: Arial;
    }

    th {
        color: black;
        font-size: 25px;
        background: yellow;
    }

    tr {
        margin: auto;
        text-align: center;
        align-items: center;
    }

    td {
        color: white;
        background: blueviolet;
    }

    table {
        margin: auto;
    }

    #btn-2 {
        padding: 10px 25px;
        background: red;
        border: transparent;
        border-radius: 10px;
        margin: auto;
        display: flex;
        margin-top: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    #btn-2:hover {
        background: red;
        transform: scale(1.03);
    }

    a {
        color: white;
        text-decoration: none;
        text-align: center;
        margin: auto;
    }

    .download {
        margin: auto;
        display: block;
        background: black;
        padding: 10px 25px;
        border: none;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <diiv>
        <h1>DATA BARANG HALAMAN ADMIN</h1>
        <table border="1" cellpadding="10" cellspacing="0" style="width:70%">

            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>JENIS</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>GAMBAR</th>
                <th>AKSI</th>
            </tr>

            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?> </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["universitas"]; ?></td>
                <td><img src="img/<?php echo $row["gambar"]; ?>" width="50">
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?> ">UBAH</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="
                        return confirm('Yakin?');">HAPUS</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>

        </table>
    </diiv>
    <button id="btn-2"> <a href="Tambah.php" target="_blank"> Tambah Barang</a> </button>
    <br>
    <button class="download"> <a href="download.php" target="_blank">Download pdf</button>
</body>

</html>