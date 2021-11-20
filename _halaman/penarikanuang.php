<?php
   
   $title="Penarikan Uang";
   $ambil = mysqli_query($conn, "SELECT SUM(saldo) AS value_sum FROM tabungan WHERE kode=3");
   $row = mysqli_fetch_assoc($ambil);
   $saldo = $row['value_sum'];

   if(isset($_POST['kirim'])){
 
    $pass = $_POST['pass'];

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
                                              <input class="form-control" name="jml" type="number" />
                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Waktu Pengambilan Uang</p>
                                                <input class="form-control" name="time" type="time" />
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

