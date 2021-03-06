<?php
    @session_start();
    $title="Konfirmasi Pesanan";

    $userid = $_SESSION['id'];

    $ambil = mysqli_query($conn, "SELECT SUM(saldo) AS value_sum FROM tabungan WHERE idp1=1");
    $row = mysqli_fetch_assoc($ambil);
    $saldo = $row['value_sum'];

    $nav = "SELECT idt and alamat FROM navigasi INNER JOIN ON longitude latitude";

    if(isset($_POST['submit'])){
        $idnotif = $_POST['idNotif'];
        $konfirmasi = $_POST['submit'];
        
        function updateNotif($val,$idn){
            return "UPDATE notifikasi SET `status_setor`='$val' WHERE idt = $idn";
        }

        //ambil id pengguna
        $ambilIdp   = "select * from notifikasi where idt = $idnotif order by id desc limit 1";
        $runIdp     = mysqli_query($conn, $ambilIdp);
        $fetchIdp   = mysqli_fetch_assoc($runIdp);
        $idp        = $fetchIdp['idp2'];
        $harga_total= $fetchIdp['harga_total'];

        if($konfirmasi == 'Terima'){
            mysqli_query($conn, updateNotif(1, $idnotif));
            
            //ambil tabungan pengguna
            $sqlAmbl = "select * from tabungan where idp1 = '$idp'";
            $runAmbil = mysqli_query($conn, $sqlAmbl);
            $ambilSaldo = mysqli_fetch_assoc($runAmbil);

            //ambil harga total dari sampah pengguna
            $sqlUangSampah = "select * from notifikasi where idt = '$idnotif' and metode_bayar = 1";
            $runUangSampah = mysqli_query($conn, $sqlUangSampah);
            $ambilUangSampah = mysqli_fetch_assoc($runUangSampah);
            $uangSampah = 0;
            if($ambilUangSampah['harga_total'] != null){
              $uangSampah = $ambilUangSampah['harga_total'];
            }
            //penambahan
            $saldoAkhir = $ambilSaldo['saldo'] + $ambilUangSampah['harga_total'];

            $sqlTabungan = "UPDATE tabungan SET `saldo`='$saldoAkhir' WHERE `idp1`='$idp'";
            mysqli_query($conn, $sqlTabungan);

            //tentukan apakah ambil tunai atau ambil sampah
             if($ambilUangSampah['metode_transaksi'] == 0){
              header('location: ?halaman=navigasi&idt='.$idnotif);
             }
             else{
              header('location: ?halaman=dashboard');
             }
        }
        if($konfirmasi == 'Tolak'){
            mysqli_query($conn, updateNotif(0, $idnotif));
        }
    }
    
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<div class="card-deck my-4">
                <div class="card mb-4 shadow">
                  <div class="card-body text-center my-4">
                    <a href="#"> 
                    </a>
                  <p class="text-muted"></p>
                  <span class="h1 mb-0">Penyetoran Sampah</span>
                  <p class="text-muted"></p>
                  <ul class="list-unstyled">
                  <div class="col-sm px-0 my-3">
               <div class="border border-secondary">
                  </div>
                </div>
                  
<?=content_open_full('')?>
                    <?php
                    $notifId=0;
                    if(isset($_GET['notif'])){
                        $notifId = $_GET['notif'];
                    }
                    
                  //ambil data notifikasi
                  $Query = "
                  SELECT notifikasi.*, navigasi.latitude, navigasi.longitude, navigasi.alamat 
                  from notifikasi 
                  join navigasi on notifikasi.idt = navigasi.idt 
                  where notifikasi.idt = $notifId AND notifikasi.status_setor is null AND notifikasi.idpetugas = $userid";
                  $Run = mysqli_query($conn, $Query);
         
                  
                  if(mysqli_num_rows($Run)>0){
                    while($Fetch = mysqli_fetch_assoc($Run)){
                      $metodeBayar = '';
                      if($Fetch['metode_bayar'] == 0){
                        $metodeBayar = 'Tunai';
                      }else{
                        $metodeBayar = 'Saldo';
                      }

                      $metodetransaksi = '';
                      $alamatPengambilan = '';
                          if($Fetch['metode_transaksi'] == 0){
                            $metodetransaksi = 'Dijemput';
                            $alamatPengambilan = $Fetch['alamat'].'</br>'.$Fetch['latitude'].'</br>'.$Fetch['longitude'];
                          }else{
                            $metodetransaksi = 'Diserahkan';
                            $alamatPengambilan = 'Diserahkan';
                          }

                      $status_setor = '';
                      if($Fetch['status_setor'] == 0){
                        $status_setor = 'Batal';
                      }else{
                        $status_setor = 'Terima';
                      }
    
                       //ambil nama pengguna
                       $idpelanggan  = $Fetch['idp2'];
                       $sqlANP       = "select * from pengguna where idp = $idpelanggan";
                       $runANP       = mysqli_query($conn, $sqlANP);
                       $fchANP       = mysqli_fetch_assoc($runANP);
                       $namaPelanggan= $fchANP['Nama'];
 
                       echo"
                         <p align=left><b><mb-1 small text-muted>
                         Waktu Penyetoran &emsp;&ensp;&ensp;&nbsp;&nbsp;: ".$Fetch['tanggal']."</mb-1 small text-muted> </br>
                         <li></li>
                         <p align=left><b><mb-1 small text-muted>
                         Nama Pelanggan &emsp;&ensp;&emsp;&nbsp;&nbsp;: ".$namaPelanggan."</mb-1 small text-muted> </br>
                         <p align=left><b><mb-1 small text-muted>
                         Keterangan &emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;: ".$Fetch['data_sampah']."</mb-1 small text-muted> </br>
                         <p align=left><b><mb-1 small text-muted>
                         Metode Pembayaran &ensp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$metodeBayar."</mb-1 small text-muted> </br>
                        <p align=left><b><mb-1 small text-muted>
                        Metode Transaksi &ensp;&ensp;&nbsp;&nbsp;&emsp;&nbsp;: ".$metodetransaksi."</mb-1 small text-muted> </br>
                        <p align=left><b><mb-1 small text-muted>
                        Total Harga Sampah &emsp;&ensp;: Rp. <td>".$Fetch['harga_total']."</mb-1 small text-muted></br> 
                        <p align=left><b><mb-1 small text-muted>
                        Alamat &ensp;&ensp;&nbsp;&nbsp;&nbsp;&ensp;&ensp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: ".$alamatPengambilan."</mb-1 small text-muted> </br>
                        <li></li>
                      ";
                    }
                  }

                ?>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>

                    <form action="?halaman=konfirmasi-setor" method="post">
                        <div class="container">
                        <div class="row">
                        <div class="col-sm">
                        <input type='submit' class="btn btn-block btn-danger rounded-pill" name="submit" value="Tolak">
                        </div>
        
                        <div class="col-sm"></div>
                        <div class="col-sm">
                        <input type='submit' class="btn btn-block btn-success rounded-pill" name="submit" value="Terima">
                        </div>
                        </div>
                        </div>

                        <input type="hidden" name="idNotif" value="<?php echo$notifId; ?>">
                    </form>       
<?=content_close()?>
