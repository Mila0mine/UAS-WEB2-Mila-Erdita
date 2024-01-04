<?php include("index.php");
if (!in_array("ketua", $_SESSION['admin_akses'])) {
    echo "kamu tidak memiliki akses";
    include("penutup.php");
    exit();
}

?>
<?php include("penutup.php");
?>

<?php
require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'user.php';
            </script>        
        ";
    } else {
        echo "
            <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'user.php';
            </script>        
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: pink;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
    }

    input {
        cursor: pointer;
    }

    .wrapper {
        max-width: 450px;
        margin: 20px auto;
        background-color: blueviolet;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .input-box {
        margin-bottom: 15px;
    }

    .label {
        display: block;
        margin-bottom: 5px;
    }

    .teks1 {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
        margin-bottom: -20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn-warning {
        position: relative;
        overflow: hidden;

        input {
            cursor: pointer;
            font-size: 20px;
        }
    }

    b {
        color: white;
    }

    #btn-1 {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 120px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin: auto;
        display: flex;
    }

    #btn-1:hover {
        background-color: #45a049;
    }

    .download {
        background-color: red;
        color: #fff;
        padding: 10px 120px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        text-decoration: none;
        display: inline-block;
        margin: auto;
        display: flex;
        margin-top: 7px;
    }

    .download:hover {
        background: #45a049;
    }

    a {
        color: white;
        text-decoration: none;
    }

    .file {
        background: red;
        color: white;
        width: 29.5%;
        border-radius: 5px;
        cursor: pointer;
        margin: auto;
        display: flex;
    }
    </style>
</head>

<body>
    <div>
        <div class="table">
        </div>
        <h1>Tambah barang</h1>
        <div>
            <div class="wrapper">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-box">
                        <label for="nama"><b>Nama Barang</b></label>
                        <input class="teks1" type="text" name="nama" id="nama" required>
                    </div>
                    <div>
                        <div class="input-box">
                            <label for="email"><b>Jenis Barang</b></label>
                            <input class="teks1" type="text" name="email" id="email" required>
                        </div>
                        <div>
                            <div class="input-box">
                                <label for="jurusan"><b>Harga</b></label>
                                <input class="teks1" type="text" name="jurusan" id="jurusan" required>
                            </div>
                            <div>
                                <div class="input-box">
                                    <label for="universitas"><b>Stok</b></label>
                                    <input class="teks1" type="text" name="universitas" id="universitas" required>
                                </div>
                                <br>
                                <div>
                                    <div class="btn-warning">
                                        <label for="gambar">
                                        </label>
                                        <input class="file" type="file" name="gambar" id="gambar" required>
                                        </input>
                                    </div>
                                    <br>
                                    <div>
                                        <button id="btn-1" type="submit" name="submit"><b>Tambah Kan</b></button>
                                    </div>
                </form>
            </div>

</body>
<button class="download"> <a href="download.php">Download pdf</button>

</html>