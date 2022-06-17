<?php 
//koneksi DB
$koneksi=mysqli_connect('localhost','root','','pwd_2022');
echo "koneksi sukses"

//menampilkan data dari db ke tabel
//1. query isi tabel
$result = mysqli_query($koneksi,'SELECT*FROM mahasiswa');

//2. ubah data ke dalam array
//* array numerik
//* array associative
$data = mysqli_fetch_assoc($result);
var_dump($data);

//3.looping data
$baris = [];
while ($data = mysqli_fetch_assoc($result)){
   $baris[] = $data;
}

//4.tampung hasil loooping ke dalam variabel
$mahasiswa = $baris;
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latihan Koneksi DB</title>
</head>

<body>
   <h2>Data Mahasiswa</h2>
   <table border="1" cellspacing="" cellpadding="10">
      <!-- baris header -->
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
      <?php $=1;
       foreach ($mahasiswa as $mhs);?>
      <tr>
         <td><?= $i++; ?></td>
         <td><?= $mhs[nim]; ?></td>
         <td><?= $mhs[nama]; ?></td>
         <td><?= $mhs[prodi]; ?></td>
         <td>foto</td>
         <td>
            <a href="">Ubah</a> | <a href="">Hapus</a>
         </td>
      </tr>
      <?php endforeach; ?>
   </table>
</body>

</html>