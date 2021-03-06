<?php
    @session_start();
    $title="Konfirmasi Pesanan";
    $userid = $_SESSION['id'];

    $ambil = mysqli_query($conn, "SELECT SUM(saldo) AS value_sum FROM notifikasi WHERE idp2=$userid");
    $row = mysqli_fetch_assoc($ambil);
    $saldo = $row['value_sum'];

    if(isset($_POST['submit'])){
        $idnotif = $_POST['idNotif'];
        $konfirmasi = $_POST['submit'];
        
        function updateNotif($val,$idn){
            return "UPDATE notifikasi SET `status_tarik`='$val' WHERE idt = $idn";
        }

        //ambil id pengguna
        $ambilIdp   = "select * from notifikasi where id = $idnotif";
        $runIdp     = mysqli_query($conn, $ambilIdp);
        $fetchIdp   = mysqli_fetch_assoc($runIdp);
        $idp        = $fetchIdp['idp2'];
        $jumlah_tarik= $fetchIdp['jumlah_tarik'];

        if($konfirmasi == 'Terima'){
            $s = "UPDATE notifikasi SET `status_tarik`='1' WHERE id = $idnotif";
            mysqli_query($conn, $s);
            
            //ambil tabungan pengguna
            $sqlAmbl = "select * from tabungan where idp1 = '$idp'";
            $runAmbil = mysqli_query($conn, $sqlAmbl);
            $ambilSaldo = mysqli_fetch_assoc($runAmbil);

            //pengurangan
            $saldoAkhir = $ambilSaldo['saldo'] - $jumlah_tarik;

            $sqlTabungan = "UPDATE tabungan SET `saldo`='$saldoAkhir' WHERE `idp1`='$idp'";
            mysqli_query($conn, $sqlTabungan);
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
                  <span class="h1 mb-0">Penarikan Uang</span>
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
                    
                    
                  $Query = "SELECT * FROM notifikasi where id = $notifId and status_tarik is null and idpetugas = $userid ORDER BY idt DESC LIMIT 1";
                  $Run = mysqli_query($conn, $Query);
         
                  
                  if(mysqli_num_rows($Run)>0){
                    while($Fetch = mysqli_fetch_assoc($Run)){
                      $metodeBayar = '';
                      if($Fetch['metode_bayar'] == 0){
                        $metodeBayar = 'Tunai';
                      }else{
                        $metodeBayar = 'Saldo';
                      }

                      $status_tarik = '';
                      if($Fetch['status_tarik'] == 0){
                        $status_tarik = 'Batal';
                      }else{
                        $status_tarik = 'Terima';
                      }
    
                       //ambil nama pengguna
                       $idpelanggan  = $Fetch['idp2'];
                       $sqlANP       = "select * from pengguna where idp = $idpelanggan";
                       $runANP       = mysqli_query($conn, $sqlANP);
                       $fchANP       = mysqli_fetch_assoc($runANP);
                       $namaPelanggan= $fchANP['Nama'];
 
                       echo"
                       <p align=left><b><mb-1 small text-muted>
                         Tanggal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&nbsp;&nbsp;: ".$Fetch['tanggal']."</mb-1 small text-muted> </br>
                         <li></li>
                         <p align=left><b><mb-1 small text-muted>
                         Nama Pelanggan &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;: ".$namaPelanggan."</mb-1 small text-muted> </br>
                         <li></li>
                         <p align=left><b><mb-1 small text-muted>
                         Metode Pembayaran &emsp;&emsp;&ensp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp: ".$metodeBayar."</mb-1 small text-muted> </br>
                        <p align=left><b><mb-1 small text-muted>
                        Jumlah Uang Yang Ditarik &emsp;: Rp. <td>".$Fetch['jumlah_tarik']."</mb-1 small text-muted></br> 
                        <li></li>
                        <p align=left><b><mb-1 small text-muted>
                         Waktu Tarik &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;: ".$Fetch['waktu_tarik']."</mb-1 small text-muted> </br>
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

                    <form action="?halaman=konfirmasipesanan" method="post">
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