<?php
$conn = mysqli_connect('localhost', 'root', '', 'pwd_uas');
if (isset($_POST["submit"])) {
   $berangkat = htmlspecialchars($_POST["berangkat"]);
   $tujuan = htmlspecialchars($_POST["tujuan"]);
   $kelas = htmlspecialchars($_POST["kelas"]);
   $tanggal_berangkat = htmlspecialchars($_POST["tanggal_berangkat"]);
   $nomor_kursi = htmlspecialchars($_POST["nomor_kursi"]);
   $nama_penumpang = htmlspecialchars($_POST["nama_penumpang"]);


   $query = "INSERT INTO kereta VALUES (
      '$berangkat',
      '$tujuan',
      '$kelas',
      '$tanggal_berangkat',
      '$nomor_kursi',
      '$nama_penumpang',
   )";
   mysqli_query($conn, $query);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <title>Form Tambah Data</title>
</head>

<body>
   <?php include('navbar.php') ?>
   <!-- action = kosong krn ketika data disubmit akan dikembalikan ke halaman yg sama -->
   <div class="container mt-5">
      <h3> Form Tambah Data </h3>
      <form method="post" action="">
         <div class="col-md-5">Nama<input class="form-control" name="nama_penumpang" id="nama_penumpang"></div>
         <div class="row">
            <div class="col">Berangkat
               <input type="text" class="form-control" name="berangkat" id="berangkat">
            </div>

            <div class="col">Tujuan
               <input type="text" class="form-control" name="tujuan" id="tujuan">
            </div>
         </div>
         <div class="row">
            <!-- <div class="col-md-4">
               <div class="form-group">
                  <label class="form-label">Kelas</label>
                  <select class="form-control" name="kelas">
                     <option selected>Pilih Kelas</option>
                     <option>Eksekutif</option>
                     <option>Bisnis</option>
                     <option>Ekonomi</option>
                  </select>
               </div>
            </div> -->
            <div class="col-md-4">
               <input type="text" name="kelas" id="kelas"></input>
            </div>
            <div class="col-md-4 mt-1">
               <label for="inputState" class="form-label">Date</label>
               <br>
               <input type="text" id="tanggal_berangkat" name="tanggal_berangkat">
            </div>
         </div>
         <br>
         <div class="row">
            <!-- <label>Kursi</label>
            <div class="col-md-5">
               <div class="form">
                  <select class="form-select" name="nomor_kursi">
                     <option selected>Kursi</option>
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                  </select>

               </div> -->
            <div class="col-md-4">
               <input type="text" name="nomor_kursi" id="nomor_kursi"></input>
            </div>
         </div>

   </div>

   <input type="submit" name="submit" value="submit">
   <p> <a href="index.php">&laquo; back</a> </p>
   </div>

   </form>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>