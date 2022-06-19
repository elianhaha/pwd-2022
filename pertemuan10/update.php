<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Update Data</title>
</head>

<body>
   <h3>Form Update Data </h3>
   <form method="post" action="proses_ganti.php" enctype="multipart/form-data">
      <ul>
         <li>
            <label>
               nim:
               <input type="text" name="nim" value="<?php echo $data['nim']; ?>" readonly>
            </label>
         </li>
         <li>
            <label>
               nama:
               <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
            </label>
         </li>
         <li>
            <label>
               prodi:
               <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>">
            </label>
         </li>
         <li>
            <label>
               foto:
               <input type="file" name="file">
            </label>
         </li>
         <li>
            <input type="submit" name="tambah" value="Ganti">
         </li>
      </ul>
   </form>
</body>

</html>