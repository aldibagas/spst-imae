<?php
   session_start();

   $nama = $_SESSION['nama'];
   $sqlId = "select * from pengguna where Nama = '$nama'";
   $idRun = mysqli_query($conn, $sqlId);
   $ambilId = mysqli_fetch_assoc($idRun);
   $id  = $ambilId['idp'];

   include '_helpers/connect.php';
   $title="Penarikan Uang";
   $ambil = mysqli_query($conn, "SELECT * FROM tabungan WHERE idp1='$id'");
   $row = mysqli_fetch_assoc($ambil);
   $saldo=0;
   if($row['saldo']<=0){
    $saldo = 0;
   }else{
    $saldo = $row['saldo'];
   }

   if(isset($_POST['kirim'])){
    
    $sqlId = "select * from pengguna where Nama = '$nama'";
    $idRun = mysqli_query($conn, $sqlId);
    $ambilId = mysqli_fetch_assoc($idRun);
    $id  = $ambilId['idp'];

     //$idt = $_POST ['idt'];
     //$idp1 = $_POST ['idp1'];
     $idp2 = $id;
     @$aktivitas = $_POST ['aktivitas'];
     $waktu_tarik = $_POST ['waktu_tarik'];
     $jumlah_tarik = $_POST['jumlah_tarik'];
     @$metode_bayar= $_POST['metode_bayar'];
     @$metode_transaksi= $_POST['metode_transaksi'];
     @$status= $_POST['status'];
     $pass = $_POST['pass'];

     //$sql1 ="INSERT INTO `transaksi` ( `idt`, `idp1`, `idp2`, `aktivitas`, `waktu_tarik`, `jumlah_tarik`, `metode_bayar`, `metode_transaksi`, `status_tarik`, `sandi`) 
     //VALUES ('4', '2', '3', '1', '$waktu_tarik', '$jumlah_tarik', '0', '0', '0','$pass')";

    //kirim notifikasi pada petugas secara acak
    //pemilihan petugas
    $sqlRand = "select idp from pengguna where kelas = 'petugas'";
    $runRand = mysqli_query($conn, $sqlRand);
    $idPetugasRand = array();
    while($fchRand = mysqli_fetch_assoc($runRand)){
        $idPetugasRand[] = $fchRand['idp'];
    }
    $rand = array_rand($idPetugasRand);
    $idPetugas = $idPetugasRand[$rand];

    //pengiriman notifikasi
     $sqlnotif = "INSERT INTO `notifikasi` (`idt`,`idp2`, `idpetugas`,`waktu_tarik`,`jumlah_tarik`,`metode_bayar`, `metode_transaksi`,`status_tarik`)
     VALUES ('', '$id', '$idPetugas','$waktu_tarik', '$jumlah_tarik', '0', '0', null)";

    //ambil
    $sqlAmbl = "select * from tabungan where idp1 = '$idp2'";
    $runAmbil = mysqli_query($conn, $sqlAmbl);
    $ambilSaldo = mysqli_fetch_assoc($runAmbil);

    //pengurangan
    $saldoAkhir = $ambilSaldo['saldo'] - $jumlah_tarik;

    $sqlTabungan = "UPDATE `tabungan` SET `tanggal`='$waktu_tarik',`saldo`='$saldoAkhir' WHERE `idp1`='$id'";

     //$query2 = mysqli_query($conn,$sql1); 

     mysqli_commit($conn);

     $sql = "SELECT * FROM `pengguna` WHERE `Sandi` = '$pass'";
     $run = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($run);

    if($row > 0){
        //jika password benar
        //update
        mysqli_query($conn, $sqlTabungan);
        mysqli_query($conn,$sqlnotif);
        //header('location:index.php?halaman=transaksi');
    }else{
        echo'
        <div style="width:100%;color:white;background-color:red;text-align:center;padding:5px;font-weight:bold;">Password Salah</div>"
        ';
    }
}

?>
<?=content_open_full('')?>
                                            <form role="form" method="POST">  
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group">
                                            <?php
                                            
                                            $tanggal = mktime(date('m'), date("d"), date('Y'));
                                            echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
                                            date_default_timezone_set("Asia/Jakarta");
                                            $jam = date ("H:i:s");
                                            echo " | Pukul : <b> " . $jam . " " ." </b> ";
                                            ?>

                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Saldo yang tersedia</p>
                                            <?php echo '<span class="h2">Rp '.$saldo.'</span>';?>

                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Jumlah Saldo Yang ditarik</p>
                                            <input type="text" class="form-control" aria-label="saldo" name="jumlah_tarik">

                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Waktu Pengambilan Uang</p>
                                            <div class="form-group mb-3">
                                            <input type="time" class="form-control"  aria-label="saldo" name="waktu_tarik">

                                            </div>
                                            <?=button_modal('Ajukan','confirm-pass')?>
                                            </div>
<?=content_close()?>
<?=modal_tanpa_button($id='confirm-pass', 'Konfirmasi Password', '
<label for="inputPassword" class="sr-only">Password</label>
<label for="inputPassword" class="sr-only">Password</label>
<input type="password" input name="pass" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
</div>
<div class="checkbox mb-3">
</div>
<input type="submit" name="kirim" value="Konfirmasi" button class="btn btn-lg btn-primary btn-lg" type="submit"></button>
')?>