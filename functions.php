    <?php
    $conn = mysqli_connect("localhost", "root", "", "uasmila");

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $universitas = htmlspecialchars($data["universitas"]);

        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO data_barang VALUES
            ('', '$nama', '$email', '$jurusan', '$universitas', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload()
    {

        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $eror = $_FILES['gambar']['error'];
        $tmpname = $_FILES['gambar']['tmp_name'];

        if ($eror === 4) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu!');
                    </scrip>";
            return false;
        }

        $gambarvalid = ['jpg', 'jpeg', 'png'];
        $gambar = explode('.', $namafile);
        $gambar = strtolower(end($gambar));
        if (!in_array($gambar, $gambarvalid)) {
            echo "<script
                    alert('Mohon Maukkan gambar yang benar!');
                    </script>";
            return false;
        }

        if ($ukuranfile > 20000) {
            echo "<script
            alert('Ukuran gambar terlalu besar!');
            </script>";
            return false;
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $gambar;


        move_uploaded_file($tmpname, 'img/' . $namafilebaru);

        return $namafilebaru;
    }

    function hapus($id)
    {
        global $conn;
        mysqli_query($conn, "DELETE FROM data_barang WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data)
    {
        global $conn;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $universitas = htmlspecialchars($data["universitas"]);

        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        $query = "UPDATE data_barang SET
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    universitas = '$universitas',
                    gambar = '$gambar'
                    WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    ?>
