<?php
   session_start();
   $title="Riwayat Transaksi";
   if(isset($_POST['edit'])){
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    $sql = "UPDATE `harga` SET `daftarharga`='$harga' WHERE `kategori` = '$jenis'";
    mysqli_query($conn, $sql);
}

    $sqlAmbil = "SELECT * FROM `transaksi`";
    $runAmbil = mysqli_query($conn, $sqlAmbil);

?>
            <div class="row mb-4 items-align-center">
                <div class="col-md">
                  <ul class="nav nav-pills justify-content-start">
                    <li class="nav-item">
                      <a class="nav-link active bg-transparent pr-2 pl-0 text-primary" href="#">Semua <span class="badge badge-pill bg-primary text-white ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Pending <span class="badge badge-pill bg-white border text-muted ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Diproses <span class="badge badge-pill bg-white border text-muted ml-2"></span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-muted px-2" href="#">Selesai <span class="badge badge-pill bg-white border text-muted ml-2"></span></a>
                    </li>
                  </ul>
                </div>
                <!--<div class="col-md-auto ml-auto text-right">
                  <span class="small bg-white border py-1 px-2 rounded mr-2 d-none d-lg-inline">
                    <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                    <span class="text-muted">April 14, 2020 - May 13, 2020</span>
                  </span>
                  <button type="button" class="btn"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                </div>
            </div>-->
            <?php

              $query = mysqli_query($conn, "SELECT * FROM transaksi");
              $results = mysqli_fetch_all ($query, MYSQLI_ASSOC);

            ?>
            <table class="table border table-hover bg-white">
                <head>
                  <tr role="row">
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Petugas</th>
                    <th>Aktivitas</th>
                    <th>Data Sampah</th>
                    <th>Harga Total</th>
                    <th>Metode Bayar</th>
                    <th>Metode Transaksi</th>
                    <th>Status </th>
                    <th>Aksi</th>
                  </tr>
                </head>
                <body>
                <?php foreach($results as $result): 
                  
                ?>
                  
                <tr>
                  
                    <td><?php echo $result['tanggal']?></td>
                    <td><?php echo $result['idp1']?></td>
                    <td><?php echo $result['idp2']?></td>
                    <td><?php echo $result['aktivitas']?></td>
                    <td><?php echo $result['data_sampah']?></td>
                    <td><?php echo $result['harga_total']?></td>
                    <td><?php echo $result['metode_bayar']?></td>
                    <td><?php echo $result['metode_transaksi']?></td>
                    <td><?php echo $result['status_setor']?></td> 
                    <td>
                    <div class='d-grid gap-2 d-md-block'>
                      <a class='btn btn-primary' type='button'>Edit</a>
                      <a class='btn btn-danger' type='button'>Hapus</a>
                      <?php

                        if(isset($_POST['edit'])){
                        $data_sampah = $_POST['data_sampah'];
                        $harga_total = $_POST['harga_total'];
                        $metode_bayar = $_POST['metode_bayar'];
                        $metode_transaksi = $_POST['metode_transaksi'];
                        $status_setor = $_POST['status_setor'];

                        $sql = "UPDATE `transaksi` SET `data_sampah` WHERE `metode_bayar`";
                        mysqli_query($conn, $sql);

                        $sqlAmbil = "SELECT * FROM `transaksi`";
                        $runAmbil = mysqli_query($conn, $sqlAmbil);

                      }

                      ?>
                      
                    </div>
                </td>
                </tr>
            <?php endforeach; ?> 
                </body>
              </table>