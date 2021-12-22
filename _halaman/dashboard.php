<?php
   $title="Dashboard";
   $fileJS='dashboard-js';


   @$nama = $_SESSION['nama'];
   $sqlId = "select * from pengguna where Nama = '$nama'";
   $idRun = mysqli_query($conn, $sqlId);
   $ambilId = mysqli_fetch_assoc($idRun);
   @$id  = $ambilId['idp'];
   $query = mysqli_query($conn, "SELECT * FROM notifikasi where idpetugas = '$id' ORDER BY tanggal desc");
   $results = mysqli_fetch_all ($query, MYSQLI_ASSOC);

   $ambil = mysqli_query($conn, "SELECT * FROM transaksi WHERE idp2='$id'");
   $row = mysqli_fetch_assoc($ambil);


   $data = mysqli_query($conn, 'SELECT SUM(saldo) AS value_sum FROM tabungan'); 
   $row = mysqli_fetch_assoc($data); 
   $saldo_total = $row['value_sum'];
   
   $data1 = mysqli_query($conn, 'SELECT SUM(berat) AS berat_total FROM transaksi'); 
   $row1 = mysqli_fetch_assoc($data1); 
   $berat_total = $row1['berat_total'];

   $data2 = mysqli_query($conn, 'SELECT COUNT(status_setor) AS n FROM notifikasi WHERE status_setor=2'); 
   $row2= mysqli_fetch_assoc($data2); 
   $n = $row2['n'];

   $data3 = mysqli_query($conn, 'SELECT COUNT(status_setor) AS jumlah FROM notifikasi'); 
   $row3= mysqli_fetch_assoc($data3); 
   $jumlah = $row3['jumlah'];
   $persen_proses = round(($n / $jumlah)*100,1);

   $data4 = mysqli_query($conn, 'SELECT COUNT(status_tarik) AS n1 FROM notifikasi WHERE status_tarik=1'); 
   $row4= mysqli_fetch_assoc($data4); 
   $n1 = $row4['n1'];

   $data5 = mysqli_query($conn, 'SELECT COUNT(status_tarik) AS jumlah2 FROM notifikasi'); 
   $row5= mysqli_fetch_assoc($data5); 
   $jumlah2 = $row5['jumlah2'];
   $persen_proses2 = round(($n1 / $jumlah2)*100,1);

   $sekarang = 0;
   $data4 = mysqli_query($conn, "SELECT SUM(berat) AS berat_avg FROM transaksi WHERE date(tanggal) = CURDATE()"); 
   $row4 = mysqli_fetch_assoc($data4); 
   $berat_avg = $row4['berat_avg'];
   if($berat_avg <= 1){
     $berat_avg = 0;
   }

   $Cari="SELECT * FROM notifikasi ORDER BY tanggal desc LIMIT 5 ";
   $Tampil = mysqli_query($conn, $Cari);
   $data = array();
   while($row = mysqli_fetch_assoc($Tampil)){
    $data[] = $row;
   }
?>

              <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow bg-primary text-white border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary-light">
                            <i class="fe fe-16 fe-credit-card text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">Total Saldo</p>
                          <?php echo '<span class="h3 mb-0 text-white">Rp '.$saldo_total.'</span>'; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-filter text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col">
                          <p class="small text-muted mb-0">Penyetoran Sampah Berhasil</p>
                          <div class="row align-items-center no-gutters">
                            <div class="col-auto">
                              <?php echo '<span class="h3 mr-2 mb-0">'.$persen_proses.' % </span>'; ?>
                            </div>
                            <div class="col-md-12 col-lg">
                              <div class="progress progress-sm mt-2" style="height:3px">
                                <?php echo '<div class="progress-bar bg-success" role="progressbar" style="width: '.$persen_proses.'%" aria-valuenow="'.$persen_proses.'" aria-valuemin="0" aria-valuemax="100"></div>'; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-filter text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col">
                          <p class="small text-muted mb-0">Penarikan Uang Berhasil</p>
                          <div class="row align-items-center no-gutters">
                            <div class="col-auto">
                              <?php echo '<span class="h3 mr-2 mb-0">'.$persen_proses2.' % </span>'; ?>
                            </div>
                            <div class="col-md-12 col-lg">
                              <div class="progress progress-sm mt-2" style="height:3px">
                                <?php echo '<div class="progress-bar bg-success" role="progressbar" style="width: '.$persen_proses2.'%" aria-valuenow="'.$persen_proses2.'" aria-valuemin="0" aria-valuemax="100"></div>'; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                  <div class="card shadow border-0">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-activity text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col">
                          <p class="small text-muted mb-0">Pemasukan Harian</p>
                          <?php echo'<span class="h3 mb-0">'.$berat_avg.'</span>'; ?>
                          <span class="small text-success">kg</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
              
              <!-- charts-->
              <?php 
              //index.php
              $connect = mysqli_connect("localhost", "root", "", "spst");
              $query = "SELECT * FROM datauang where tanggal > current_date - interval 7 day order by date(tanggal) desc";
              $result = mysqli_query($connect, $query);
              $chart_data = '';
              while($row = mysqli_fetch_array($result))
              {
                $tgl = date_create($row["tanggal"]);
                $tgl = date_format($tgl, 'd-m');
                $chart_data .= "{ tanggal:'".$tgl."', uangmasuk:".$row["uangmasuk"].", uangkeluar:".$row["uangkeluar"]." }, ";
              }
              $chart_data = substr($chart_data, 0, -2);
              
              ?>

              <style>
                  .mbox {   
                      display: inline-block;
                      border: 1px solid black;
                      width: 20px;
                      height: 20px;
                      margin: 10px 10px 10px 10px;
                      padding-left: 4px;
                  }
              </style>

              <div class="row my-5">
                <div class="col-md-12">
                <div class="card shadow">
                  <div class="chart-box">
                    
                  <div class="row fw-semi-bold m-0 justify-content-md-center">
                    <span class="col-auto m-1 mr-2">
                      <div class="border border-dark mt-1" style="background-color:rgb(11, 98, 164);width:15px;height:15px;display:inline-block;"></div>
                      uang masuk
                    </span>
                    
                    <span class="col-auto m-1 mr-2">
                      <div class="border border-dark mt-1" style="background-color:rgb(122, 146, 163);width:15px;height:15px;display:inline-block;"></div>
                      uang keluar
                    </span>
                  </div>

                    <div id="chart"></div>
                  </div>
                </div>
                </div> <!-- .col -->
              </div> <!-- end section -->
              <div class ="row">
            <div class="col-md-6 mb-4">
                  <div class="card shadow">
                    <div class="card-header align-items-center">
                    <strong class="card-title">Daftar Harga Beli</strong>
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
                          <h6 class="mb-1">Rp. '.$hbRow['daftarharga'].'</h6>
                          <p class="text-muted mb-2">/kg</p>
                        </div>
                        ';
                      }
                      ?>
                    </div>
                  </div> <!-- .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
                
               <div class="col-md-6 mb-4">
                  <div class="card" id="card5" name="card5">
                    <div class="card-body">
                    <h5><center>Catatan Aktivitas<center><h5>
                      <a class="float-right small text-muted" href="<?=url('riwayat-aktivitas')?>">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                      <div class="list-group list-group-flush my-n3">
                        <?php foreach($data as $item){
                          $aktivitas = $item['aktivitas'];
                          if($aktivitas == 0){
                            $status = $item['status_setor'];
                            if($status == 0){
                              $status_setor = "Gagal";
                            }
                            if($status == 2){
                              $status_setor = "Sukses";
                            } ?>
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-down text-success fe-24"></span>
                            </div>
                            
                            <div class="col">
                              <small><str><strong><?php echo $item['tanggal'];?></strong></small>
                              <div class="my-0 text-muted small">Sampah Masuk <?php echo$item['data_sampah'];?></div>
                             
                              <small class="badge badge-light text-muted"><?php echo$status_setor;?></small>
                            </div>
                          </div>
                        </div>
                        <?php }
                        
                        if($aktivitas==1){
                          $status1 = $item['status_tarik'];
                          if($status1 == 0){
                            $status_tarik = "Gagal";
                          }
                          if($status1 == 1){
                            $status_tarik = "Sukses";
                          }
                          ?>
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-up text-danger fe-24"></span>
                            </div>
                            
                            <div class="col">
                              <small><str><strong><?php echo $item['tanggal'];?></strong></small>
                              <div class="my-0 text-muted small">Penarikan Uang Rp <?php echo$item['jumlah_tarik'];?></div>
                             
                              <small class="badge badge-light text-muted"><?php echo$status_tarik;?></small>
                            </div>
                          </div>
                        </div>
                        <?php }
                        }?>
                      </div> <!-- / .list-group -->
                    </div> <!-- / .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
      </div>