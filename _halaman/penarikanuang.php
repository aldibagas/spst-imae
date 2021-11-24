<?php
   session_start();
   include '_helpers/connect.php';
   $title="Penarikan Uang";
   $ambil = mysqli_query($conn, "SELECT SUM(saldo) AS value_sum FROM tabungan WHERE idp1=1");
   $row = mysqli_fetch_assoc($ambil);
   $saldo = $row['value_sum'];


   if(isset($_POST['kirim'])){
    
     $idt = $_POST ['idt'];
     $idp1 = $_POST ['idp1'];
     $idp2 = $_POST ['idp2'];
     $aktivitas = $_POST ['aktivitas'];
     $waktu_tarik = $_POST ['waktu_tarik'];
     $jumlah_tarik = $_POST['jumlah_tarik'];
     $metode_bayar= $_POST['metode_bayar'];
     $metode_transaksi= $_POST['metode_transaksi'];
     $status= $_POST['status'];
     $pass = $_POST['pass'];

     $sql1 ="INSERT INTO `transaksi` ( `idt`, `idp1`, `idp2`, `aktivitas`, `waktu_tarik`, `jumlah_tarik`, `metode_bayar`, `metode_transaksi`, `status_tarik`, `sandi`) 
     VALUES ('9', '1', '2', '1', '$waktu_tarik', '$jumlah_tarik', '0', '0', '2','$pass')";

     $sql2 = "INSERT INTO `notifikasi` (`idt`,`idp2`,`jumlah_tarik`,`status_tarik`)
     VALUES ('9', '2', '$jumlah_tarik', '0')";
     $query2 = mysqli_query($conn,$sql1); 
     $query3 = mysqli_query($conn,$sql2);

     mysqli_commit($conn);

    $sql = "SELECT * FROM `pengguna` WHERE `Sandi` = '$pass'";
    $run = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($run);

    if($row > 0){
        session_start();
        $_SESSION['nama'] = $row['Nama'];
        header('location:index.php?halaman=transaksi');
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
<form action="" method="post">
<label for="inputPassword" class="sr-only">Password</label>
<label for="inputPassword" class="sr-only">Password</label>
<input type="password" input name="pass" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
</div>
<div class="checkbox mb-3">
</div>
<input type="submit" name="kirim" value="Konfirmasi" button class="btn btn-lg btn-primary btn-lg" type="submit"></button>
')?>