<?php
   $title="Dashboard";
   $fileJS='dashboard-js';

   $data = mysqli_query($conn, 'SELECT SUM(saldo) AS value_sum FROM tabungan'); 
   $row = mysqli_fetch_assoc($data); 
   $saldo_total = $row['value_sum'];
   
   $data1 = mysqli_query($conn, 'SELECT SUM(berat) AS berat_total FROM transaksi'); 
   $row1 = mysqli_fetch_assoc($data1); 
   $berat_total = $row1['berat_total'];

   $data2 = mysqli_query($conn, 'SELECT COUNT(status) AS n FROM transaksi WHERE status=2'); 
   $row2= mysqli_fetch_assoc($data2); 
   $n = $row2['n'];

   $data3 = mysqli_query($conn, 'SELECT COUNT(status) AS jumlah FROM transaksi'); 
   $row3= mysqli_fetch_assoc($data3); 
   $jumlah = $row3['jumlah'];
   $persen_proses = round(($n / $jumlah)*100,1);

   $sekarang = 0;
   $data4 = mysqli_query($conn, "SELECT SUM(berat) AS berat_avg FROM transaksi WHERE date(tanggal) = CURDATE()"); 
   $row4 = mysqli_fetch_assoc($data4); 
   $berat_avg = $row4['berat_avg'];
   if($berat_avg <= 1){
     $berat_avg = 0;
   }

   $Cari="SELECT * FROM transaksi order by tanggal desc LIMIT 5";
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
                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                          </span>
                        </div>
                        <div class="col pr-0">
                          <p class="small text-muted mb-0">Total Penyimpanan</p>
                          <?php echo '<span class="h3 mb-0">'.$berat_total.'</span>'; ?>
                          <span class="small text-success">kg</span>
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
                          <p class="small text-muted mb-0">Sudah Diproses</p>
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
              $connect = mysqli_connect("localhost", "cypr9718", "pq6SPaHWYiKe38", "cypr9718_spst");
              $query = "SELECT * FROM datauang";
              $result = mysqli_query($connect, $query);
              $chart_data = '';
              while($row = mysqli_fetch_array($result))
              {
              $chart_data .= "{ tanggal:'".$row["tanggal"]."', uangmasuk:".$row["uangmasuk"].", uangkeluar:".$row["uangkeluar"]." }, ";
              }
              $chart_data = substr($chart_data, 0, -2);
              ?>
              <div class="row my-5">
                <div class="col-md-12">
                <div class="card shadow">
                  <div class="chart-box">
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
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title float-left">Catatan Transaksi</strong>
                      <a class="float-right small text-muted" href="<?=url('riwayat-transaksi')?>">Lihat Semua</a>
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
                              <div class="my-0 text-muted small">Menyerahkan <?php echo$item['pesanan_1'];?>, <?php echo$item['pesanan_2']?>, <?php echo$item['pesanan_3'];?></div>
                              <small class="badge badge-light text-muted">kemarin</small>
                            </div>
                          </div>
                        </div>
                        <?php } ?>
                        
                      </div> <!-- / .list-group -->
                    </div> <!-- / .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
              </div>