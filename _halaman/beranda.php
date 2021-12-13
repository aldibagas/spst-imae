<?php
   session_start();
   $title="Beranda";
   include '_helpers/connect.php';

   if($_SESSION['id'] == null){
		header('Location:index.php?halaman=login');
	}

   $nama = $_SESSION['nama'];
   $sqlId = "select * from pengguna where Nama = '$nama'";
   $idRun = mysqli_query($conn, $sqlId);
   $ambilId = mysqli_fetch_assoc($idRun);
   $id  = $ambilId['idp'];
   

   $ambil = mysqli_query($conn, "SELECT * FROM transaksi WHERE idp1='$id'");
   $row = mysqli_fetch_assoc($ambil);
   @$jumlah_tarik=$row['jumlah_tarik'];
   
   $ambil = mysqli_query($conn, "SELECT * FROM notifikasi order by idp2 = '$id' desc LIMIT 1");
   $row = mysqli_fetch_assoc($ambil);
   $saldo=$row['saldo'];
   if($row['saldo']<=0){
    $saldo = 0;
   }else{
    $saldo = $row['saldo'];
   }
   
   $nama = $_SESSION['nama'];
   $sql ="SELECT * FROM `pengguna` WHERE Nama = '$nama'";
   $Query = "SELECT * FROM 'transaksi' WHERE idp1=1";
   $run = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($run);
   $email = $row['email'];
   $telp = $row['Telepon'];
   $alamat = $row['alamat'];
 
   $Cari="SELECT * FROM transaksi order by tanggal desc LIMIT 5";
   $Tampil = mysqli_query($conn, $Cari);
   $data = array();
   while($row = mysqli_fetch_assoc($Tampil)){
    $data[] = $row;
   }
?>   
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<h3>Pengelolaan Sampah Terintegrasi, Bersama Menjaga Lingkungan Yang Bersih! <h3>     
<div class="mb-2 align-items-center">
            <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row mt-1 align-items-center">
                      <div class="col-12 col-lg-4 text-left pl-4">
                        <span class="fe fe-credit-card text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Saldo</p>
                         <?php
                          $id = $_SESSION['id'];
                          $sql = "select * from notifikasi where idp2 = $id and year(`tanggal`)=year(now()) and status_setor between 1 and 2";
                          $run = mysqli_query($conn, $sql);
                          $total = 0;
                          while($row = mysqli_fetch_assoc($run)){
                            $total = $total + $row['harga_total'];
                          }
                        ?>
                        <span class="h1">Rp <?php echo$total;?></span></span>                     
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-down text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Pemasukan Terakhir</p>
                        <span class="h3"><?php
                        $Query = "SELECT * FROM notifikasi where idp2 = '$id' and status_setor between 1 and 2 order by id desc LIMIT 1";
                        $Run1 = mysqli_query($conn, $Query);
                        if(mysqli_num_rows($Run1)>0){
                        while($Fetch = mysqli_fetch_assoc($Run1)){
                            echo" <span class='h3'>Rp ".$Fetch['harga_total']."</span> ";
                        }
                        }else{
                          echo" <span class='h3'>Rp 0</span>";
                        } ?></span><br />
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-up text-danger fe-12"></span>
                        <p class="mb-1 small text-muted">Pengeluaran Terakhir</p>
                        <?php
    $id = $_SESSION['id'];
    $sql = "select jumlah_tarik from notifikasi where idp2 = '$id' order by id desc LIMIT 1";
    $run = mysqli_query($conn, $sql);
    $total = 0;
    if(mysqli_num_rows($run)>0){
    while($row = mysqli_fetch_assoc($run)){
    $total = $total + $row['jumlah_tarik'];
    }}
    ?>
    <span class="h3">Rp <?php echo $total; ?></span>
                      </div>
                      
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-down text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Pemasukan Bulan Ini </p>
                        <?php
                          $id = $_SESSION['id'];
                          $sql = "select * from notifikasi where idp2 = $id and month(`tanggal`)=month(now()) and status_setor between 1 and 2";
                          $run = mysqli_query($conn, $sql);
                          $total = 0;
                          while($row = mysqli_fetch_assoc($run)){
                            $total = $total + $row['harga_total'];
                          }
                        ?>
                        <span class="h3">Rp <?php echo $total; ?></span><br />
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-up text-danger fe-12"></span>
                        <p class="mb-1 small text-muted">Pengeluaran Bulan Ini</p>
                        <?php
                          $id = $_SESSION['id'];
                          $sql = "select jumlah_tarik from notifikasi where idp2 = $id and month(`tanggal`)=month(now())";
                          $run = mysqli_query($conn, $sql);
                          $total = 0;
                          while($row = mysqli_fetch_assoc($run)){
                            $total = $total + $row['jumlah_tarik'];
                          }
                        ?>
                        <span class="h3">Rp <?php echo $total; ?></span><br />
                      </div>
                    </div>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div>
            <br>

      <div class ="row">
            <div class="col-md-6 mb-4">
                  <div class="card" id="card4" name="card4">
                    <div class="card-body">
                    <h5><center>Daftar Harga Jual<center><h5>
                    </div>
                    <div class="card-body">
                    <div class="row mt-2">
                    <?php
                      $hbSql = "Select * from harga";
                      $hbRun = mysqli_query($conn, $hbSql);
                      while($hbRow = mysqli_fetch_assoc($hbRun)){
                        echo'
                        <div class="col-6 text-center mb-3 border-right">
                          <p class="text-muted mb-1">'.$hbRow['kategori'].'</p>
                          <h6 class="mb-1">Rp '.$hbRow['daftarharga'].'</h6>
                          <p class="text-muted mb-2">/kg</p>
                        </div>
                        ';
                      }
                      ?>
                    </div>
                  </div> <!-- .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->

               <!-- Recent Activity -->
               <div class="col-md-6 mb-4">
                  <div class="card" id="card5" name="card5">
                    <div class="card-body">
                    <h5><center>Catatan Transaksi<center><h5>
                      <a class="float-right small text-muted" href="<?=url('riwayat-aktivitas')?>">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                      <div class="list-group list-group-flush my-n3">
                        <?php foreach($data as $item){ ?>
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-up text-success fe-24"></span>
                            </div>
                            
                            <div class="col">
                              <small><str><strong><?php echo $item['tanggal'];?></strong></small>
                              <div class="my-0 text-muted small">Menyerahkan <?php echo$item['data_sampah'];?></div>
                             
                              <small class="badge badge-light text-muted">Berhasil</small>
                            </div>
                          </div>
                        </div>
                        <?php } ?>
                        
                      </div> <!-- / .list-group -->
                    </div> <!-- / .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
      </div>
  