<?php
require 'function.php';
$kereta = query(get());


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Document</title>
</head>

<body>
   <?php include('navbar.php') ?>
   <div class="container mt-5">
      <h1> List Data Kereta Api </h1>
      <a class="btn btn-primary" href="insert.php">Tambah Penumpang</a>
      <table class="table table-hover table-bordered table-striped mt-5">
         <!-- baris header  -->
         <tr>
            <th>No</th>
            <th>Berangkat</th>
            <th>Tujuan</th>
            <th>Kelas</th>
            <th>Harga</th>
            <th>Tanggal Berangkat</th>
            <th>Nomor Kursi</th>
            <th>Nama Penumpang</th>
            <th>Jumlah Beli</th>
            <th>Total Bayar</th>
            <th>Uang Bayar</th>
            <th>Uang Kembali</th>
         </tr>

         <!-- baris data -->
         <!-- looping -->
         <?php $i = 1;
         foreach ($kereta as $krt); ?>
         <tr>
            <td><?= $i++; ?></td>
            <td><?= ucfirst($krt['berangkat']); ?></td>
            <td><?= ucfirst($krt['tujuan']); ?></td>
            <td><?= ucfirst($krt['kelas']); ?></td>
            <td><?= $krt['harga']; ?></td>
            <td><?php echo date($krt['tanggal_berangkat']) ?></td>
            <td><?= $krt['nomor_kursi']; ?></td>
            <td><?= $krt['nama_penumpang']; ?></td>
            <td><?= $krt['jumlah_beli']; ?></td>
            <td><?= $krt['total_bayar']; ?></td>
            <td><?= $krt['uang_bayar']; ?></td>
            <td><?= $krt['uang_kembali']; ?></td>
         </tr>
         <php endforeach; ?>

      </table>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>