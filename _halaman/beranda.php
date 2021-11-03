<?php
   session_start();
   $title="Beranda";
   include '_helpers/connect.php';

   $nama = $_SESSION['nama'];
   $sql ="SELECT * FROM `pengguna` WHERE Nama = '$nama'";
   $Query = "SELECT * FROM 'pemesanan' WHERE idp=1";
   $run = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($run);
   $email = $row['email'];
   $telp = $row['Telepon'];
   $alamat = $row['alamat'];
   $masuk = 10000;
   $keluar = 5000;
   $saldo = $masuk-$keluar;
   $Cari="SELECT * FROM pemesanan";
$Tampil = mysqli_query($conn, $Cari);
while 
(    $hasil = mysqli_fetch_array ($Tampil)) 
{
        $tanggal    = stripslashes ($hasil['tanggal']);
        $pesanan_1  = stripslashes ($hasil['pesanan_1']);
        $pesanan_2  = stripslashes ($hasil['pesanan_2']);
        $pesanan_3  = stripslashes ($hasil['pesanan_3']);
}
?>    
<p class="lead text-muted">Selamat datang di SPST, mari bersama menjaga lingkungan yang bersih! </p>
            <div class="mb-2 align-items-center">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row mt-1 align-items-center">
                      <div class="col-12 col-lg-4 text-left pl-4">
                        <span class="fe fe-credit-card text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Saldo</p>
                        <span class="h2">Rp <?php echo$saldo;?></span>
                     
                     
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-up text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Pemasukan terakhir</p>
                        <span class="h3">2000</span><br />
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-up text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Pemasukan Bulan ini</p>
                        <span class="h3">10000

                        </span><br />
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-down text-danger fe-12"></span>
                        <p class="mb-1 small text-muted">Pengeluaran Bulan ini</p>
                        <span class="h3">5000</span><br />
                      </div>
                    </div>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div>
      <div class ="row">
            <div class="col-md-6 mb-4">
                  <div class="card shadow">
                    <div class="card-header align-items-center">
                      <strong class="card-title">Daftar Harga Beli</strong>
                    </div>
                    <div class="card-body">
                    <div class="chart-widget">
                      <div id="columnChartWidget" width="300" height="200"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-6 text-center mb-3 border-right">
                        <p class="text-muted mb-1">PETE</p>
                        <h6 class="mb-1">- Rp 300</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                      <div class="col-6 text-center mb-3">
                        <p class="text-muted mb-1">HDPE</p>
                        <h6 class="mb-1">Rp 830</h6>
                        <p class="text-muted">/kg</p>
                      </div>
                      <div class="col-6 text-center border-right">
                        <p class="text-muted mb-1">PVC</p>
                        <h6 class="mb-1">Rp 200</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                      <div class="col-6 text-center">
                        <p class="text-muted mb-1">LDPE</p>
                        <h6 class="mb-1">Rp 430</h6>
                        <p class="text-muted">/kg</p>
                      </div>
                      <div class="col-6 text-center border-right">
                        <p class="text-muted mb-1">PP</p>
                        <h6 class="mb-1">Rp 200</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                      <div class="col-6 text-center">
                        <p class="text-muted mb-1">PS</p>
                        <h6 class="mb-1">Rp 430</h6>
                        <p class="text-muted">/kg</p>
                      </div>
                      <div class="col-6 text-center border-right">
                        <p class="text-muted mb-1">HVS</p>
                        <h6 class="mb-1">Rp 200</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                      <div class="col-6 text-center">
                        <p class="text-muted mb-1">Karton</p>
                        <h6 class="mb-1">Rp 430</h6>
                        <p class="text-muted">/kg</p>
                      </div>
                      <div class="col-6 text-center border-right">
                        <p class="text-muted mb-1">Kardus</p>
                        <h6 class="mb-1">Rp 200</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                    </div>
                  </div> <!-- .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->

               <!-- Recent Activity -->
               <div class="col-md-6 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title float-left">Catatan Aktivitas</strong>
                      <a class="float-right small text-muted" href="<?=url('riwayat-aktivitas')?>">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                      <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-up text-success fe-24"></span>
                            </div>
                            <div class="col">
                              <small><str><strong><?php echo$tanggal?></strong></small>
                              <div class="my-0 text-muted small">Menyerahkan <?php echo$pesanan_1;?>, <?php echo$pesanan_2?>, <?php echo$pesanan_3;?></div>
                              <small class="badge badge-light text-muted">kemarin</small>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-up text-success fe-24"></span>
                            </div>
                            <div class="col">
                              <small><str><strong><?php echo$tanggal?></strong></small>
                              <div class="my-0 text-muted small">Menyerahkan <?php echo$pesanan_1;?>, <?php echo$pesanan_2?>, <?php echo$pesanan_3;?></div>
                              <small class="badge badge-light text-muted">kemarin</small>
                              
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-up text-success fe-24"></span>
                            </div>
                            <div class="col">
                              <small><strong><?php echo$tanggal?></strong></small>
                              <div class="my-0 text-muted small">Menyerahkan <?php echo$pesanan_1;?>, <?php echo$pesanan_2?>, <?php echo$pesanan_3;?></div>
                              <small class="badge badge-light text-muted">kemarin</small>
                            </div>
                          </div>
                        </div>
                      </div> <!-- / .list-group -->
                    </div> <!-- / .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
      </div>
      <div class ="row">
            <div class="col-md-6 mb-4">
                  <div class="card shadow">
                    <div class="card-header align-items-center">
                      <strong class="card-title">Jasa Angkut Sampah</strong>
                    </div>
                    <div class="card-body">
                    <div class="chart-widget">
                      <div id="columnChartWidget" width="300" height="200"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-6 text-center mb-3 border-right">
                        <p class="text-muted mb-1">Sampah Basah</p>
                        <h6 class="mb-1">Rp 2000</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                      <div class="col-6 text-center mb-3">
                        <p class="text-muted mb-1">Sampah Kering</p>
                        <h6 class="mb-1">Rp 1000</h6>
                        <p class="text-muted">/kg</p>
                      </div>
                      </div>
                  </div> <!-- .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
<div class="row">
<?=content_open('Jenis-Jenis Plastik')?>
      <p class="card-text">Informasi seputar jenis-jenis plastik dan bagaimana penggunaanya dalam lingkungan sehari-hari</p>
      <?=button_modal('Lihat','konten1')?>
      <?=modal('konten1', 'Jenis-Jenis Plastik' , 'Plastik adalah komponen penting dan menjadi bahan baku dari banyak barang, contohnya seperti botol air, sisir, wadah minuman, peralatan makan, dan masih banyak lagi. Mengetahui perbedaan, jenis plastik, serta kode SPInya dapat membantu Anda dalam proses daur ulang sampah plastik.
      
      <div id="slideGambar" class="carousel slide" data-bs-ride="carousel">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
          <li data-bs-target="#slideGambar" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#slideGambar" data-bs-slide-to="1"></li>
      </ol>
      
      <!-- Wrapper for carousel items -->
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="https://oceana.org/sites/default/files/1069391/shutterstock_1537118990_1_-_2nd_version.jpg" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item">
              <img src="plastik.jfif" class="d-block w-100" alt="Slide 2">
          </div>
      </div>

      <!-- Carousel controls -->
      <a class="carousel-control-prev" href="#slideGambar" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#slideGambar" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
      </a>
  </div>
')?>
<?=content_close()?>

<?=content_open('Pentingnya lingkungan bersih')?>
      <p class="card-text">Kenapa kita harus menjaga agar lingkungan tetap bersih</p>
      <?=button_modal('Lihat','konten2')?>
      <?=modal('konten2', 'Lingkungan bersih' , 'Kebersihan lingkungan merupakan keadaan bebas dari kotoran, termasuk di dalamnya, debu,
sampah, dan bau. Di Indonesia, masalah kebersihan lingkungan selalu menjadi perdebatan
dan masalah yang berkembang. Kasus-kasus yang menyangkut masalah kebersihan
lingkungan setiap hari dan setiap tahun terus meningkat.
Oleh karena itu menjaga kebersihan lingkungan sangatlah berguna untuk kita semua karena
dapat menciptakan kehidupan yang aman, bersih, sejuk, dan sehat.
</br>
Manfaat menjaga kebersihan lingkungan antara lain:
</br>
1. Terhindar dari penyakit yang disebabkan lingkungan yang tidak sehat.
</br>
2. Lingkungan menjadi lebih sejuk.
</br>
3. Bebas dari polusi udara.
</br>
4. Air menjadi lebih bersih dan aman untuk di minum.
</br>
5. Lebih tenang dalam menjalankan aktivitas sehari hari.</br>
</br>
<!-- Wrapper for carousel items -->
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://1.bp.blogspot.com/-i0Q26eai6ZM/XV9k0Har_gI/AAAAAAAAWcU/-F9QuzqylAUa2WUA66NyzDR2_OA8g9GeQCLcBGAs/s1600/kerja%2Bbakti%2B%25281%2529.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        </div>
')
?>
<?=content_close()?>

<?=content_open('Waspadai Genangan Air')?>
      <p class="card-text">Informasi seputar bahaya yang ditimbulkan dari genangan air</p>
      <?=button_modal('Lihat','konten3')?>
      <?=modal('konten3', 'Lingkungan bersih' , 'Genangan air terdapat di tempat yang kotor. Genangan ini jika dibiarkan ada di sekitar rumah apalagi jika dilalui saat berjalan kaki akan menimbulkan bahaya kesehatan. Genangan air merupakan tempat berkembang biak nyamuk yang nantinya akan menjadi sumber penyakit yang ditularkan oleh nyamuk. 
      Pastikan segera membersihkan segala benda atau bagian tubuh yang bersentuhan dengan air genangan. Menjaga kaki tetap kering juga penting. Kontak yang terlalu lama dengan genangan air dapat menyebabkan pengembangan parasit kaki, yaitu suatu kondisi yang dapat menyebabkan lepuh dan pembusukan jaringan.
      <!-- Wrapper for carousel items -->
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://d1bpj0tv6vfxyp.cloudfront.net/waspada-banjir-ini-bahaya-genangan-air-2.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        </div>')?>
      
<?=content_close()?>
</div>