# pwd-2022
Project Pemrograman Web Dasar
for loop(i<=penumpang){
   mysqli_query(conn, "INSERT INTO pemesanan VALUES(...))
   //jadi insert sebanyak penumpang yang dimasukkan
}
"pembelian.php?id=<?= $kt['id'] ?>"

<div class="card">
         <div class="card-body mx-4">
            <div class="container">

               <p class="my-5 mx-5" style="font-size: 30px;">Thank for your purchase</p>
               <div class="row">
                  <ul class="list-unstyled">
                     <li class="text-black"></li>
                     <!-- <li><?= $kereta[0]['nama_kereta'] ?></li> -->
                     <li class="text-black mt-1"><?php echo date($_POST['tanggal']); ?></li>
                     <li class="text-black mt-1"><?php echo date('l d M Y') ?></li>
                  </ul>
                  <hr>
                  <div class="col-xl-10">

                     <p>Kelas</p>
                  </div>
                  <div class="col-xl-2">

                     <!-- <p class="float-end"><?= $pemesanan[0]['kelas'] ?> -->
                     </p>
                  </div>
                  <hr>
               </div>
               <div class="row">
                  <div class="col-xl-10">
                     <p>Kursi</p>
                     <!-- <a href="ganti-kursi.php?=<?= $pemesanan[0]["id"] ?>">Ganti kursi</a> -->
                  </div>
                  <div class="col-xl-2">

                  </div>
                  <hr>
               </div>
               <div class="row">
                  <div class="col-xl-10">
                     <div class="row">
                        <p>Harga</p>

                     </div>
                     <div class="row">

                        <p>Jumlah Penumpang</p>
                     </div>
                     <div class="row">
                        <p>Total</p>

                     </div>
                  </div>
                  <div class="col-xl-2">
                     <div class="row">
                        <!-- <p class="float-end"><?php echo $pemesanan[0]["harga"] ?></p> -->

                     </div>
                     <div class="row">
                        <!-- <p class="float-end"><?php echo $_POST['penumpang']; ?></p> -->

                     </div>
                     <div class="row">
                        <!-- <p class="float-end">Rp<?= $pemesanan[0]["harga"] * $pemesanan[0]['penumpang'] ?>
                        </p> -->

                     </div>

                  </div>
                  <hr style="border: 2px solid black;">
               </div>
               <div class="row text-black">

                  <div class="col-xl-12">
                     <p class="float-end fw-bold">Total: $10.00
                     </p>
                  </div>
                  <hr style="border: 2px solid black;">
               </div>
               <div class="text-center" style="margin-top: 90px;">
                  <a><u class="text-info">View in browser</u></a>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
               </div>

            </div>
         </div>
      </div>
      

mysqli_query($conn, "INSERT INTO pemesanan VALUES('','$nama_kereta[$i]','$kelas[$i]','$username[$i]','$berangkat[$i]','$jam_berangkat[$i]','$tujuan[$i]','$jam_tujuan[$i]',$harga[$i],$gerbong[$i],$tanggal[$i],'$kursi[$i]',now())");