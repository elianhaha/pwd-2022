<?php
$connect = mysqli_connect('localhost', 'root', '', 'test');

function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahkereta($data)
{
    global $connect;
    $nama_kereta = $data['nama_kereta'];
    $berangkat = $data['berangkat'];
    $tujuan = $data['tujuan'];
    $harga = $data['harga'];

    mysqli_query($connect, "INSERT INTO kereta VALUES('','$nama_kereta','$berangkat','$tujuan',$harga)");
}

function search($keyword)
{
    $query = "SELECT * FROM kereta WHERE nama_kereta = '$keyword'";
    return query($query);
}
?>
