<?php
   session_start();

   if($_SESSION['nama'] == null){
    header('Location:index.php?halaman=login');
}


   $nama = $_SESSION['nama'];
   $sqlId = "select * from pengguna where Nama = '$nama'";
   $idRun = mysqli_query($conn, $sqlId);
   $ambilId = mysqli_fetch_assoc($idRun);
   $id  = $ambilId['idp'];

   include '_helpers/connect.php';
   $title="Penarikan Uang";
   $id;
   $ambil = mysqli_query($conn, "SELECT * FROM notifikasi WHERE idp2='$id'");
   $row = mysqli_fetch_assoc($ambil);
   $saldo=0;
   if($row['saldo']<=0){
    $saldo = 0;
   }else{
    $saldo = $row['saldo'];
   }

    $id = $_SESSION['id'];
    $sql = "select * from notifikasi where idp2 = $id and year(`tanggal`)=year(now()) and status_setor between 1 and 2";
    $run = mysqli_query($conn, $sql);
    $total = 0;
    while($row = mysqli_fetch_assoc($run)){
    $total = $total + $row['harga_total'];
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
     @$bank = $_POST['bank'];

     //$sql1 ="INSERT INTO `transaksi` ( `idt`, `idp1`, `idp2`, `aktivitas`, `waktu_tarik`, `jumlah_tarik`, `metode_bayar`, `metode_transaksi`, `status_tarik`, `sandi`) 
     //VALUES ('4', '2', '3', '1', '$waktu_tarik', '$jumlah_tarik', '0', '0', '0','$pass')";
    $x = $total - $jumlah_tarik;
        if(($jumlah_tarik % 1000) == 0){
            if($x > 0){

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
                 $sqlnotif = "INSERT INTO `notifikasi` (`idt`,`idp2`, `idpetugas`, `aktivitas`, `waktu_tarik`,`jumlah_tarik`, `bank`, `metode_bayar`, `metode_transaksi`,`status_tarik`)
                 VALUES ('', '$id', '$idPetugas', '1', '$waktu_tarik', '$jumlah_tarik', '$bank', '0', '0', null)";
            
                 //$query2 = mysqli_query($conn,$sql1); 
            
                 mysqli_commit($conn);
            
                 $sql = "SELECT * FROM `pengguna` WHERE `Sandi` = '$pass'";
                 $run = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($run);
            
                    if($row > 0){
                        //jika password benar
                        //update
                        mysqli_query($conn,$sqlnotif);
                        echo "<script> alert('Transaksi Berhasil!')</script>";
                        //header('location:index.php?halaman=transaksi');
                    }else{
                        echo'
                        <div style="width:100%;color:white;background-color:red;text-align:center;padding:5px;font-weight:bold;">Password Salah</div>"
                        ';
                    }
                }else{
                    echo "<script> alert('transaksi gagal')</script>";
                }
            
        }else{
            echo "<script> alert('bukan kelipatan 1000')</script>";
        }
    }

?>
<?php

$cekHari = "SELECT * FROM `datauang` WHERE tanggal = CURDATE()";
$runHari = mysqli_query($conn, $cekHari);
if(mysqli_num_rows($runHari) == null){
    //hari belum ada
    $inputSql = "insert into datauang(uangkeluar, tanggal) value('1',CURRENT_TIMESTAMP)";
    mysqli_query($conn, $inputSql);
}else{

    $ambilSql = "SELECT * FROM `datauang` WHERE `tanggal` = CURRENT_DATE";
    $ambilRun = mysqli_query($conn, $ambilSql);
    $ambilRow = mysqli_fetch_assoc($ambilRun);

    $tot = $ambilRow['uangkeluar'] +1;

    //tambah data login
    $tambahSql = "UPDATE datauang set uangkeluar = '$tot' where tanggal = CURRENT_DATE";
    mysqli_query($conn, $tambahSql);
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
                                            <?php echo '<span class="h2">Rp '.$total.'</span>';?>

                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Jumlah Saldo Yang ditarik</p>
                                            <input type="number"placeholder = "Kelipatan Rp 1000" class="form-control" aria-label="saldo" name="jumlah_tarik" required min="0" >

                                            <div>
                                            <form action="" method="POST">
                                            <div class="row">
                                                <div class="col">
                                                <p class="mb-1 small text-muted">Tempat Penarikan Uang</p>
                                                <select class="form-control select2" >
                                                <option value="" disabled selected hidden>Bank</option>
                                                        <option value=>Bank 1</option>
                                                        <option value=>Bank 2</option>
                                                        <option value=>Bank 3</option>
                                                        <option value=>Bank 4</option>
                                                        </select>
                                                        </div>
                                                        </div>
                                                        </div>

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