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
   
   $ambil = mysqli_query($conn, "SELECT * FROM tabungan WHERE idp1='$id'");
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
<p class="lead text-muted">Selamat datang di Sistem Pengelolaan Sampah Terintegrasi, mari bersama menjaga lingkungan yang bersih! </p>
            <div class="mb-2 align-items-center">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row mt-1 align-items-center">
                      <div class="col-12 col-lg-4 text-left pl-4">
                        <span class="fe fe-credit-card text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Saldo</p>
                        <span class="h1">Rp <?php echo$saldo;?></span>
                     
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-down text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Pemasukan Terakhir</p>
                        <span class="h3">Rp 5000</span><br />
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-up text-danger fe-12"></span>
                        <p class="mb-1 small text-muted">Pengeluaran Terakhir</p>
                        <?php $Query = "SELECT * FROM notifikasi order by idp2=idt desc LIMIT 1";
                      $Run = mysqli_query($conn, $Query);
                      if(mysqli_num_rows($Run)>0){
                    while($Fetch = mysqli_fetch_assoc($Run)){
                      echo" <span class='h3'>Rp ".$Fetch['jumlah_tarik']."</span> 
                      ";
                    }
                  } ?>
                      </div>
                      
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-down text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Pemasukan Bulan Ini </p>
                        <span class="h3">Rp 10000

                        </span><br />
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
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title float-left">Catatan Aktivitas</strong>
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
              <img src="https://plastic.medion.co.id/wp-content/uploads/2021/04/sampah-plastik15-600x955.jpg" class="d-block w-100" alt="Slide 1">
          </div>
            <div class="carousel-item">
                <img src="https://generasi3r.files.wordpress.com/2015/11/jenis-plastik.jpg" class="d-block w-100" alt="Slide 2">
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