<?php
function koneksi()
{
   return mysqli_connect('localhost', 'root', '', 'pwd_uas');
}

function query($data)
{
   $con = koneksi();
   $result = mysqli_query($con, $data);
   $baris = [];
   while ($a = mysqli_fetch_assoc($result)) {
      $baris[] = $a;
   }
   return $baris;
}

function get()
{
   return "SELECT * FROM kereta";
}
function getId($id)
{
   return "SELECT * FROM kereta where id=$id";
}
function post()
{
   $con = koneksi();
   $berangkat = $_POST["berangkat"];
   $tujuan = $_POST["tujuan"];
   $kelas = $_POST["kelas"];
   $tanggal_berangkat = $_POST["tanggal_berangkat"];
   $nomor_kursi = $_POST["nomor_kursi"];
   $nama_penumpang = $_POST["nama_penumpang"];


   $query = "INSERT INTO kereta VALUES (
      '',
      '$berangkat',
      '$tujuan',
      '$kelas',
      '$tanggal_berangkat',
      '$nomor_kursi',
      '$nama_penumpang',
   )";
   return mysqli_query($con, $query);
}
function postharga()
{
   $harga = $_POST["harga"];
   $jumlah_beli = htmlspecialchars((int)$_POST['jumlah_beli']);
   $total_bayar = $_POST["total_bayar"];
   $uang_bayar = $_POST["uang_bayar"];
   $uang_kembali = $_POST["uang_kembali"];
}
function delete($id)
{
   $con = koneksi();
   $query = "DELETE FROM mahasiswa where id = $id";
   mysqli_query($con, $query);

   return mysqli_affected_rows($con);
}
function update($id)
{
   $con = koneksi();
   $query = mysqli_query($con, "SELECT * FROM mahasiswa where id = '" . $_GET['id'] . "';");


   mysqli_query($con, $query);

   return mysqli_affected_rows($con);
}
