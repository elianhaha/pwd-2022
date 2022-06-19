<?php
require 'function.php';

//cek apakah tombol submit klik
if (isset($_POST['tambah'])) {
   // echo "berhasil";
   // tambahData($_POST);
   if (tambahData($_POST) > 0) {
      echo "<script>
   alert('data berhasil ditambahkan');
   document.location.href = 'index.php';
   </script>";
   } else {
      echo "data gagal ditambahkan";
   }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Tambah Data</title>
</head>

<body>
   <h3> Form Tambah Data </h3>
   <!-- action = kosong krn ketika data disubmit akan dikembalikan ke halaman yg sama -->
   <form method="post" action="">
      <ul>
         <li>
            <label>
               nim :
               <input type="text" name="nim" required>
            </label>
         </li>
         <li>
            <label>
               nama:
               <input type="text" name="nama" required>
            </label>
         </li>
         <li>
            <label>
               prodi:
               <input type="text" name="prodi" required>
            </label>
         </li>
         <li>
            <label>
               foto:
               <input type="file" name="foto" required>
            </label>
         </li>
         <li>
            <input type="submit" name="tambah" value="Tambah">
         </li>
      </ul>




   </form>
</body>

</html>