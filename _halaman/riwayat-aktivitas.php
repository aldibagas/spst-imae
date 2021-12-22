<?php
   session_start();
   $title="Riwayat Aktivitas";

   if(isset($_POST['edit'])){
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    $sql = "UPDATE `harga` SET `daftarharga`='$harga' WHERE `kategori` = '$jenis'";
    mysqli_query($conn, $sql);
}

    $sqlAmbil = "SELECT * FROM `transaksi`";
    $runAmbil = mysqli_query($conn, $sqlAmbil);

?>
                <!--<div class="col-md-auto ml-auto text-right">
                  <span class="small bg-white border py-1 px-2 rounded mr-2 d-none d-lg-inline">
                    <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
                    <span class="text-muted">April 14, 2020 - May 13, 2020</span>
                  </span>
                  <button type="button" class="btn"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                </div>
            </div>-->
            <?php
              $nama = $_SESSION['nama'];
              $sqlId = "select * from pengguna where Nama = '$nama'";
              $idRun = mysqli_query($conn, $sqlId);
              $ambilId = mysqli_fetch_assoc($idRun);
              $id  = $ambilId['idp'];
              $query = mysqli_query($conn, "SELECT * FROM notifikasi where idp2 = '$id' ORDER BY tanggal desc ");
              $results = mysqli_fetch_all ($query, MYSQLI_ASSOC);

            ?>
            <table class="table border table-hover bg-white">
                <head>
                  <tr role="row">
                    <th>Tanggal</th>
                    <td></td>
                    <td></td>
                    <th>Nama Petugas</th>
                    <th>Aktivitas</th>
                    <th>Keterangan</th>
                    <th>Total</th>
                    <th>Metode Bayar</th>
                    <th>Metode Transaksi</th>
                    <th>Bank</th>
                    <th></th>
                  </tr>
                </head>
                <body>
                <?php foreach($results as $result): 
                  $aktivitas = '';
                  if($result['aktivitas'] == 0){
                    $aktivitas = 'Setor';
                  }else{
                    $aktivitas = 'Tarik';
                  }
                  $metode_bayar = '';
                  if($result['metode_bayar'] == 0){
                    $metode_bayar = 'Tunai';
                  }else{
                    $metode_bayar = 'Saldo';
                  }
                  $metode_transaksi = '';
                  if($result['metode_transaksi'] == 0){
                    $metode_transaksi = 'Menyerahkan';
                  }else{
                    $metode_transaksi = 'Dijemput';
                  }

                  $status_setor = '';
                  if($result['status_setor'] == 0){
                    $status_setor = 'Berhasil';
                  }else{
                    $status_setor = 'Gagal';
                  }

                  $idpetugas = $result['idpetugas'];
                  $nmpetugasSql = "select * from pengguna where idp = '$idpetugas'";
                  $nmpetugasRun = mysqli_query($conn, $nmpetugasSql);
                  $nmpetugas = mysqli_fetch_assoc($nmpetugasRun)
                ?>
                <tr>
                  
                    <td><?php echo $result['tanggal']?></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $nmpetugas['Nama']?></td>
                    <td><?php echo $aktivitas?></td>
                    <?php
                    if($result['aktivitas']==0){
                      echo'<td>'.$result['data_sampah'].'</td>';
                    }else{
                      echo'<td>'.$result['waktu_tarik'].'</td>';
                    }
                    if($result['aktivitas']==0){
                      echo'<td>'.$result['harga_total'].'</td>';
                    }else{
                      echo'<td>'.$result['jumlah_tarik'].'</td>';
                    }
                    ?>
                    <td><?php echo $metode_bayar?></td>
                    <td><?php echo $metode_transaksi?></td>
                    <td><?php echo $result['bank']?></td>
                    <td>
                    
                      <?php

                        $sql = "UPDATE `transaksi` SET `data_sampah` WHERE `metode_bayar`";
                        mysqli_query($conn, $sql);

                        $sqlAmbil = "SELECT * FROM `transaksi`";
                        $runAmbil = mysqli_query($conn, $sqlAmbil);
                      ?>
                    </div>
                </td>
                </tr>
            <?php endforeach; ?> 
                </body>
              </table>