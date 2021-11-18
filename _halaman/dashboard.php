<?php
   $title="Dashboard";

   $data = mysqli_query($conn, 'SELECT SUM(saldo) AS value_sum FROM tabungan'); 
   $row = mysqli_fetch_assoc($data); 
   $saldo_total = $row['value_sum'];
   
   $data1 = mysqli_query($conn, 'SELECT SUM(berat) AS berat_total FROM pemesanan'); 
   $row1 = mysqli_fetch_assoc($data1); 
   $berat_total = $row1['berat_total'];

   $data2 = mysqli_query($conn, 'SELECT COUNT(status) AS n FROM pemesanan WHERE status=2'); 
   $row2= mysqli_fetch_assoc($data2); 
   $n = $row2['n'];

   $data3 = mysqli_query($conn, 'SELECT COUNT(status) AS jumlah FROM pemesanan'); 
   $row3= mysqli_fetch_assoc($data3); 
   $jumlah = $row3['jumlah'];
   $persen_proses = round(($n / $jumlah)*100,1);

   $sekarang = 0;
   $data4 = mysqli_query($conn, "SELECT SUM(berat) AS berat_avg FROM pemesanan WHERE date(tanggal) = CURDATE()"); 
   $row4 = mysqli_fetch_assoc($data4); 
   $berat_avg = $row4['berat_avg'];
   if($berat_avg <= 1){
     $berat_avg = 0;
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
              <div class="row align-items-center my-2">
                <div class="col-auto ml-auto">
                  <form class="form-inline">
                    <div class="form-group">
                      <label for="reportrange" class="sr-only">Date Ranges</label>
                      <div id="reportrange" class="px-2 py-2 text-muted">
                        <i class="fe fe-calendar fe-16 mx-2"></i>
                        <span class="small"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-12 text-muted"></span></button>
                      <button type="button" class="btn btn-sm"><span class="fe fe-filter fe-12 text-muted"></span></button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- charts-->
              <div class="row my-4">
                <div class="col-md-12">
                  <div class="chart-box">
                    <div id="columnChart"></div>
                  </div>
                </div> <!-- .col -->
              </div> <!-- end section -->