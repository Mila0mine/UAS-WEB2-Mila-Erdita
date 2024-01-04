<?php
session_start();
include("inc_koneksi.php");
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 3px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            background-color: blueviolet;
            text-decoration: none;
            margin-right: 3px;
            margin-left: 3px;
        }

        nav ul li a:hover {
            background: #333;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav>
            <ul>
                <li> <a href="dashboard.php">DASHBOARD</a></li>
                <?php if (in_array("ketua", $_SESSION['admin_akses'])) { ?>
                    <li> <a href="ketua.php">BOS/KETUA</a></li>
                <?php } ?>
                <?php if (in_array("user", $_SESSION['admin_akses'])) { ?>
                    <li> <a href="user.php">BARANG</a></li>
                <?php } ?>
                <?php if (in_array("admin", $_SESSION['admin_akses'])) { ?>
                    <li> <a href="admin.php">ADMIN</a></li>
                <?php } ?>
                <li> <a href="logout.php" style="margin-left: 850%;">Logout?</a></li>
            </ul>
        </nav>

    </div>
</body>

</html>