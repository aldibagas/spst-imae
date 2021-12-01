
<?php
$title="Riwayat Transaksi";
$servername = "localhost";
$database = "spst"; 
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
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
            <?php

              $query = mysqli_query($conn, "SELECT * FROM transaksi");
              $results = mysqli_fetch_all ($query, MYSQLI_ASSOC);

            ?>
            <table class="table border table-hover bg-white">
                <head>
                  <tr role="row">
                    <th>Tanggal</th>
                    <th>Id Pelanggan</th>
                    <th>Id Petugas</th>
                    <th>Aktivitas</th>
                    <th>Data Sampah</th>
                    <th>Harga Total</th>
                    <th>Metode Bayar</th>
                    <th>Metode Transaksi</th>
                    <th>Status </th>
                    <th>Aksi</th>
                  </tr>
                </head>
                <tbody>
                <?php foreach($results as $result): ?>
                  
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
                      <a class='btn btn-primary' type='button' href="_halaman/edit.php?id=<?php echo $result['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a>
                      <a class='btn btn-danger' type='button' href="_halaman/delete.php?id=<?php echo $result['id']?>" onclick="return confirm('Yakin mau delete data?')" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> 
                        </svg></a>
                    </div>
                </td>
                </tr>
            <?php endforeach; ?> 
                </tbody>
              </table>