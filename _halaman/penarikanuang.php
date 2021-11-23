<?php
   session_start();
   include '_helpers/connect.php';
   $title="Penarikan Uang";
   $ambil = mysqli_query($conn, "SELECT SUM(saldo) AS value_sum FROM tabungan WHERE kode=3");
   $row = mysqli_fetch_assoc($ambil);
   $saldo = $row['value_sum'];

   if(isset($_POST['kirim'])){
 
     $idt = $_POST ['idt'];
     $idp = $_POST ['idp'];
     $idp2 = $_POST ['idp2'];
     $aktivitas = $_POST ['aktivitas'];
<<<<<<< HEAD
     $waktu_transaksi = $_POST ['waktu_transaksi'];
=======
     $data_transaksi = $_POST ['data_transaksi'];
>>>>>>> 5c011b1d9b025395ed2a63ad859e145eb7117185
     $biaya = $_POST['biaya'];
     $metode_bayar= $_POST['metode_bayar'];
     $metode_transaksi= $_POST['metode_transaksi'];
     $status= $_POST['status'];
     $pass = $_POST['pass'];

<<<<<<< HEAD
     $query1 = "INSERT INTO `transaksi` ( `idt`, `idp`, `idp2`, `aktivitas`, `waktu_transaksi`, `biaya`, `metode_bayar`, `metode_transaksi`, `status`, `sandi`) 
     VALUES ('1', '1', '1', '1', '$waktu_transaksi', '$biaya', '0', '0', '2','$pass')";
=======
     $query1 = "INSERT INTO `transaksi` ( `idt`, `idp`, `idp2`, `aktivitas`, `data_transaksi`, `biaya`, `metode_bayar`, `metode_transaksi`, `status`, `sandi`) 
     VALUES ('1', '3', '3', '1', '$data_transaksi', '$biaya', '0', '0', '2','$pass')";
>>>>>>> 5c011b1d9b025395ed2a63ad859e145eb7117185
     $query_run1 = mysqli_query($conn,$query1); 

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
                                            <input type="text" class="form-control" aria-label="saldo" name="biaya">

                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Waktu Pengambilan Uang</p>
                                            <div class="form-group mb-3">
<<<<<<< HEAD
                                            <input type="time" class="form-control"  aria-label="saldo" name="waktu_transaksi">

=======
                                            <label for="">Time</label>
                                            <input type="time" name="time" class="form-control">
>>>>>>> 5c011b1d9b025395ed2a63ad859e145eb7117185
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
<<<<<<< HEAD
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
=======
>>>>>>> 5c011b1d9b025395ed2a63ad859e145eb7117185
