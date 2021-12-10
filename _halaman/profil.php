<?php
session_start();
	$title = "Profil";
  $id = $_SESSION['id'];
  
  if(isset($_POST['kirim'])){
    $uNama = $_POST['ubahNama'];
    $uEmail = $_POST['ubahEmail'];
    $uTelp = $_POST['ubahTelp'];
    $uAlamat = $_POST['ubahAlamat'];

    $ganti = "UPDATE `pengguna` SET `Nama`='$uNama',`email`='$uEmail',`alamat`='$uAlamat',`Telepon`='$uTelp' WHERE idp = '$id'";
    mysqli_query($conn, $ganti);
  }

 

  $nama = $_SESSION['nama'];
  $sql ="SELECT * FROM `pengguna` WHERE Nama = '$nama'";
  $run = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($run);  
  $email = $row['email'];
  $kelas = $row['Kelas'];
  $nama = $row['Nama'];
  $telp = $row['Telepon'];
  $alamat = $row['alamat'];

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
                <form>
                  <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                      <div class="avatar avatar-xl">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                      </div>
                    </div>
                    <div class="col">
                      <div class="row align-items-center">
                        <div class="col-md-7">
                          <h4 class="mb-1"><?php echo$_SESSION['nama'];?></h4>
                          <p class="medium mb-5"><span class="badge badge-dark"><?php echo$kelas;?></span></p>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col">
                          <p class="small mb-0 text-muted"><?php echo$alamat;?></p>
                          <p class="mb-1"><?php echo$telp;?></p>
                         
                          <hr class="my-4">

                        </div>
                      </div>
                    </div>
                  </div>

                  <hr class="my-4">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="firstname">Nama</label>
                      <h5><div id="firstname" name="firstname"><?php echo$nama;?></div><h5>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <h5><div id="inputEmail4" name="inputEmail4"><?php echo$email;?></div><h5>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="telp">Nomor Telepon</label>
                    <h5><div id="telp" name="telp"><?php echo$telp;?></div><h5>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="inputAddress5">Alamat</label>
                    <h5><div id="inputAddress5" name="inputAddress5"><?php echo$alamat;?></div><h5>
                  </div>
                  <hr class="my-4">
                </form>
              </div> <!-- /.card-body -->
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">EDIT PROFILE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">
      <div>
        <form method="post" action="">
      <h6>Nama<h6> 
      <input class="form-control form-control-sm" name="ubahNama" id="aran" type="text" placeholder="Nama"><br>
      </div>
      <div>
      <h6>Email<h6> 
      <input class="form-control form-control-sm" name="ubahEmail" type="text" placeholder="Email"><br>
      </div>
      <div>
      <h6>Nomer Telepon<h6> 
      <input class="form-control form-control-sm" name="ubahTelp" type="text" placeholder="Nomer Telepon"><br>
      </div>
      <div>
      <h6>Alamat<h6> 
      <input class="form-control form-control-sm" name="ubahAlamat" type="text" placeholder="Alamat"><br>
      </div>  
      </div>
      <div class="modal-footer">
        
        <input type="submit" name="kirim" value="Simpan" class="btn btn-primary">
</form>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
      </div>
    </div>
  </div>
</div>

              <script>
                document.getElementById('firstname').value =  '<?php echo$_SESSION['nama'];?>';
                document.getElementById('inputEmail4').value =  '<?php echo$email;?>';
                document.getElementById('telp').value =  '<?php echo$telp;?>';
                document.getElementById('inputAddress5').value =  '<?php echo$alamat;?>';
                
                
                </script>