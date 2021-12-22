
<?php
session_start();
$title="Riwayat Transaksi";

$nama = $_SESSION['nama'];
$sqlId = "select * from pengguna where Nama = '$nama'";
$idRun = mysqli_query($conn, $sqlId);
$ambilId = mysqli_fetch_assoc($idRun);
$id  = $ambilId['idp'];


if (!$conn) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
?>
            
                
            <?php
              $nama = $_SESSION['nama'];
              $sqlId = "select * from pengguna where Nama = '$nama'";
              $idRun = mysqli_query($conn, $sqlId);
              $ambilId = mysqli_fetch_assoc($idRun);
              $id  = $ambilId['idp'];
              $query = mysqli_query($conn, "SELECT * FROM notifikasi where idpetugas = '$id' ORDER BY tanggal desc ");
              $results = mysqli_fetch_all ($query, MYSQLI_ASSOC);

            ?>

            <?php


            ?>
            <table class="table border table-hover bg-white">
                <head>
                  <tr role="row">
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Petugas</th>
                    <th>Aktivitas</th>
                    <th>Keterangan</th>
                    <th>Harga Total</th>
                    <th>Metode Bayar</th>
                    <th>Metode Transaksi</th>
                    <th>Status </th>
                    <th>Aksi</th>
                  </tr>
                </head>
                <tbody>
                
                <?php foreach($results as $result): 
                  $aktivitas = '';
                  if($result['aktivitas'] == 1){
                    $aktivitas = 'Setor';
                  }else{
                    $aktivitas = 'Tarik';
                  }

                  $metode_bayar = '';
                  if($result['metode_bayar'] == 1){
                    $metode_bayar = 'Tunai';
                  }else{
                    $metode_bayar = 'Saldo';
                  }
                  
                  $metode_transaksi = '';
                  if($result['metode_transaksi'] == 1){
                    $metode_transaksi = 'Dijemput';
                  }else{
                    $metode_transaksi = 'Diserahkan';
                  }
                  
                  $status_setor = '';
                  if($result['status_setor'] == 1){
                    $status_setor = 'Berhasil';
                  }else{
                    $status_setor = 'Gagal';
                  }

                    $idtransaksi =$result['idt'];
                    $idpelanggan = $result['idp2'];
                    $nmpelangganSql = "select * from pengguna where idp = $idpelanggan";
                    $nmpesRunpelanggan = mysqli_query($conn, $nmpelangganSql);
                    $nmpelanggan = mysqli_fetch_assoc($nmpesRunpelanggan);
                    $jeneng = $nmpelanggan['Nama'];

                    $idpetugas=$result['idpetugas'];
                    $nmpetugasSql = "select * from pengguna where idp = $idpetugas";
                    $nmpesRunpetugas = mysqli_query($conn, $nmpetugasSql);
                    $nmpetugas = mysqli_fetch_assoc($nmpesRunpetugas);
                    @$jeneng2 = $nmpetugas['Nama'];
                  ?>
                  
                <tr>
                  
                    <td><?php echo $result['tanggal']?></td>
                    <td><?php echo $jeneng?></td>
                    <td><?php echo $jeneng2?></td>
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
                    <td><?php echo $status_setor?></td> 
                    <td>
                    <div class='d-grid gap-2 d-md-block'>
                      <a class='btn btn-primary' type='button' href="_halaman/edit.php?id=<?php echo $result['idt']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a>

                      <a class='btn btn-danger' type='button' href="_halaman/delete.php?id=<?php echo $result['idt']?>" onclick="return confirm('Yakin mau delete data?')" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> 
                        </svg></a>
                    </div>
                </td>
                </tr>
            <?php endforeach; ?> 
                </tbody>
              </table>