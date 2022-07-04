<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:../login.php");
    exit;
}
require "../function.php";
require "kereta.php";
$username = $_SESSION['username'];
$kereta = mysqli_query($connect, "SELECT * FROM kereta");

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | <?php echo ucfirst($username) ?></title>
</head>

<body>
    <?php include('navbar.php') ?>

    <div class="container">
        <h1>Admin <?php echo ucfirst($username) ?></h1>
        <a href="tambahkereta.php" class="btn btn-primary">Tambah Kereta</a>
        <form action="" method="GET">
            <input type="text" name="keyword" placeholder="Search....">
            <input type="submit" value="cari">
        </form>
        <table class="table table-hover table-striped table-bordered mt-3">

            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kereta</th>
                <th scope="col">Berangkat</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Harga</th>
            </tr>
            <?php
            if (isset($_GET['keyword'])) {
                $keyword = $_GET['keyword'];
                $kereta = mysqli_query($connect, "SELECT * FROM kereta WHERE nama_kereta like '%" . $keyword . "%'");
            } else {
                $kereta = mysqli_query($connect, "SELECT * FROM kereta");
            }
            $i = 1;
            while ($row = mysqli_fetch_array($kereta)) : ?>
                <tr>
                    <td scope="row"><?= $i++; ?></td>
                    <td><?= $row['nama_kereta']; ?></td>
                    <td><?= $row['berangkat']; ?><br>
                        <?= $row['jam_berangkat']; ?></td>
                    <td><?= $row['tujuan']; ?><br>
                        <?= $row['jam_tujuan']; ?></td>
                    <td>Rp <?= $row['harga']; ?></td>

                </tr>
            <?php endwhile; ?>
        </table>
    </div>

</body>

</html>
