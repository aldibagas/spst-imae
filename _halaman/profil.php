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
  $kelas = $row['Kelas'];
?>

<style>

#card1 {
    box-shadow: 5px 3px 3px grey;
}
 

.card {
        outline-width: 2px;
        outline-style: solid;
        outline-color: grey;
    }
	</style>

<form method="post" action="_halaman/update-profil.php" enctype="multipart/form-data">


<div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card" id="card1">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    
                  <?php
            include "koneksi.php";
            $tampil = mysqli_query($mysqli,"select * from gambar ORDER BY id DESC LIMIT 1");
            $sql = mysqli_num_rows($tampil);
                while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><img width="200" height="250" src="<?php echo "images/".$hasil['nama'];?>"></td>
            </tr>
            <?php       
                }
            ?>

             <div class="mt-3">
                      <h4><?php echo$nama;?></h4>
                      <div>
                      <h3><p class="text-secondary mb-1"><?php echo$kelas;?></p><h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h4 class="mb-0">Nama</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo$nama;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h4 class="mb-0">Email</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo$email;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h4 class="mb-0">No. Handphone</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo$telp;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h4 class="mb-0">Alamat</h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo$alamat;?>
                    </div>
                  </div>
                  <br>
                  <br>
                  <br>
             
                  <input type="hidden" value="<?php echo $idp ?>" nama="idpelanggan">
                  

      <div class="form-row">

                 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="form-row">
                    <div class="form-group col-md-11">
                      <input type="hidden" name="Nama" id="firstname" class="form-control form-control-lg" placeholder="Nama" value="<?php echo $nama ?>" readonly>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-11">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="<?php echo $email ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-11">
                    <label for="telp">Nomor Telepon</label>
                    <input type="telp" name="Telepon" class="form-control form-control-lg" id="telp" placeholder="Nomor Telepon" value="<?php echo $telp ?>">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-11">
                    <label for="inputAddress5">Alamat</label>
                    <input type="text" name="alamat" class="form-control form-control-lg" id="inputAddress5" placeholder="Alamat" value="<?php echo $alamat ?>">
                  </div>

                  <Input type="file" name="gambar">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <input type="submit" value="Simpan" name="tombolSimpan" class="btn btn-primary">
      </div>
    </div>
  </div>
</div>

</form>

