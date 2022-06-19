<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//get id yg ingin dihapus
$id = $_GET['id'];

//jika berhasil hapus, ada alert
if ($id > 0) {
   echo "<script>
   alert('data berhasil dihapus');
   document.location.href = 'indekx.php';
   </script>";
} else {
   echo "data gagal dihapus";
}

?>

<!-- halaman awal yg menampilkan seluruh data yang ada di db mahasiswa -->
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
   <h1> List Data Mahasiswa </h1>
   <a href="insert.php">Tambah Data</a>
   <table class="table table-hover">
      <!-- baris header  -->
      <tr>
         <th>no</th>
         <th>nim</th>
         <th>nama</th>
         <th>prodi</th>
         <th>foto</th>
         <th>aksi</th>
      </tr>

      <!-- baris data -->
      <!-- looping -->
      <?php $i = 1;
      foreach ($mahasiswa as $mhs); ?>
      <tr>
         <td><?= $i++; ?></td>
         <td><?= $mhs['nim']; ?></td>
         <td><?= $mhs['nama']; ?></td>
         <td><?= $mhs['prodi']; ?></td>
         <td><img src="<? $mhs['foto']; ?>" width="50px"></td>
         <td>
            <a href="">Ubah</a> | <a href="index.php?id=<?= $mhs['id']; ?>" onclick="return confirm 
            ('apakah anda yakin?');">Hapus</a>
         </td>
      </tr>
      <php endforeach; ?>

   </table>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>