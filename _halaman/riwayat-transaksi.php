<?php
   session_start();
   $title="Riwayat Transaksi";
?>
            <div class="row mb-4 items-align-center">
                <div class="col-md">
                  <ul class="nav nav-pills justify-content-start">
                    <li class="nav-item">
                      <a class="nav-link active bg-transparent pr-2 pl-0 text-primary" href="#">Semua <span class="badge badge-pill bg-primary text-white ml-2">164</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Pending <span class="badge badge-pill bg-white border text-muted ml-2">64</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Diproses <span class="badge badge-pill bg-white border text-muted ml-2">48</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Selesai <span class="badge badge-pill bg-white border text-muted ml-2">52</span></a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-auto ml-auto text-right">
                  <span class="small bg-white border py-1 px-2 rounded mr-2 d-none d-lg-inline">
                    <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                    <span class="text-muted">April 14, 2020 - May 13, 2020</span>
                  </span>
                  <button type="button" class="btn"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                </div>
            </div>
            <table class="table border table-hover bg-white">
                <thead>
                  <tr role="row">
                    <th>Tanggal</th>
                    <th>Nama Pemesan</th>
                    <th>Nama Petugas</th>
                    <th>Biaya</th>
                    <th>Metode Pembayaran</th>
                    <th>Metode Transaksi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $Query = "select * from pemesanan";
                  $Run = mysqli_query($conn, $Query);
                  
                  if(mysqli_num_rows($Run)>0){
                    while($Fetch = mysqli_fetch_assoc($Run)){
                        $idp = $Fetch['idp'];
                        $ambil_nama = "SELECT Nama FROM pengguna WHERE id = $idp";
                        $run1 = mysqli_query($conn, $ambil_nama);
                        $data1 = mysqli_fetch_assoc($run1);
                        $nama = $data1['Nama'];

                        $data_bayar = $Fetch['metodebayar'];
                        if($data_bayar == 0 ){
                            $metode_bayar = "Diserahkan";
                        }
                        else{
                            $metode_bayar = "Dijemput";
                        }

                        $data_transaksi = $Fetch['metodetransaksi'];
                        if($data_transaksi == 0 ){
                            $metode_transaksi = "Ditabung";
                        }
                        else{
                            $metode_transaksi = "Tunai";
                        }

                        $data_status = $Fetch['status'];
                        if($data_status == 1){
                            $status = "pending";
                        }
                        else if ($data_status == 2){
                            $status = "diproses";
                        }

                        else if ($data_status == 3){
                            $status = "selesai";
                        }

                      echo"
                        <tr>
                          <td>".$Fetch['tanggal']."</td>
                          <td>".$nama."</td>
                          <td></td>
                          <td>".$Fetch['biaya']."</td>
                          <td>".$metode_bayar."</td>
                          <td>".$metode_transaksi."</td>
                          <td>".$status."</td>
                          <td>
                          <div class='dropdown'>
                            <button class='btn btn-sm dropdown-toggle more-vertical' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                              <span class='text-muted sr-only'>Action</span>
                            </button>
                            <div class='dropdown-menu dropdown-menu-right ' name='aksi'>
                              <a class='dropdown-item' value='1'>Pending</a>
                              <a class='dropdown-item' value='2'>Terima</a>
                              <a class='dropdown-item' value='3'>Tolak</a>
                            </div>
                          </div>
                        </td>   
                      ";
                    }
                  }
                ?>    
                </tbody>
              </table>