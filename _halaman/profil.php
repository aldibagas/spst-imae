<?php
session_start();
	$title = "Profil";
  

  $nama = $_SESSION['nama'];
  $sql ="SELECT * FROM pengguna WHERE Nama = '$nama'";
  $run = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($run);
  $email = $row['email'];
  $telp = $row['Telepon'];
  $alamat = $row['alamat'];
  $sandi = $row['Sandi'];
  $idp =$row['idp'];
  @$foto = $row['foto'];
?>
      <form method="post" action="_halaman/update-profil.php">
        <div class="col-md-7">
          <div class="col-md-3 text-center mb-5">
            <div class="avatar avatar-xl">
              <img src="<?=img()?>avatar1.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
          </div>

          <div class="col-md-7">
             <form action="upload.php" method="post" enctype="multipart/form-data">
               <div class="col border-0">              
                 <?php echo "<img src='<?=img()?>avatar1.jpg' class='ikon my-1'>" ?>
                 <h3 class="text-primary">Foto akun</h3>

          <div class="col-md-3 text-center mb-5">
            <div class="avatar avatar-xl">
            <label for="fileToUpload" class="forl-label">Ganti foto :</label>
                 	<input class="form-control" type="file" name="fileToUpload" id="fileToUpload" onchange="previewFile(this);">
            </div>
          </div>
          
          <div class="col-md-7">
                  <h3 class="text-primary">Foto baru</h3></br>
                  <img id="previewImg" alt="Foto" class="ikon my-1"></img>
                </div>
              </div>

              <div class="row card border-0 mt-3 mb-3">
               <div class="col">
                <input class="btn btn-primary" type="submit" value="Unggah Gambar" name="submit">
               </div>

          <div class="col">
            <div class="row align-items-center">
              <div class="col-md-7">
                <h4 class="mb-1"><?php echo$_SESSION['nama'];?></h4>
              </div>
            </div>

            <div class="row mb-4">

              <div class="col">
                <div class="row align-items-center">
                  <div class="col-md-7">
                  <p class="mb-1"><?php echo$alamat;?></p>
                  <p class="mb-1"><?php echo$telp;?></p>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>

        <hr class="my-4">
            <input type="hidden" value="<?php echo $idp ?>" nama="idpelanggan">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="firstname">Nama</label>
                <input type="text" name="Nama" id="firstname" class="form-control form-control-lg" placeholder="Nama" value="<?php echo $nama ?>">
              </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" name="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="<?php echo $email ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="telp">Nomor Telepon</label>
              <input type="telp" name="Telepon" class="form-control form-control-lg" id="telp" placeholder="Nomor Telepon" value="<?php echo $telp ?>">
            </div>
          </div>
            <div class="form-group">
              <label for="inputAddress5">Alamat</label>
              <input type="text" name="alamat" class="form-control form-control-lg" id="inputAddress5" placeholder="Alamat" value="<?php echo $alamat ?>">
            </div>
            <div class="form-group">
              <label for="inputAddress5">Kata Sandi</label>
              <input class="form-control" name="sandi" class="form-control form-control-lg" id="sandi" type="password" placeholder="Sandi" value="<?php echo $sandi ?>">
            </div>
            <hr class="my-4">
            <input type="submit" value="Ubah" name="tombolSimpan" class="btn btn-primary">
          </form>
        </div>
