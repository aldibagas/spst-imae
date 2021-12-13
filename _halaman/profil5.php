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
  $idp =$row['idp'];
  $foto = $row['foto'];
?>

			<div class="my-4">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab"  href="<?=url('profil')?>" >Umum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab"  href="<?=url('profil1')?>" >Keamanan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab"  href="<?=url('profil2')?>" >Notifikasi</a>
                  </li>
                </ul>

                <form method="post" action="_halaman/update-profil.php">
                  <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                      <div class="avatar avatar-xl">
                        <img src="<?=img()?>avatar1.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
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
                  <hr class="my-4">
                  <input type="submit" value="Simpan" name="tombolSimpan" class="btn btn-primary">
                </form>
              </div>
