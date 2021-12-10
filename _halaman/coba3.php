<HTML>
  <?php
session_start();
$title = "Data Diri";
  
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
    <HEAD>
    <style> 

.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
    </style>
    </HEAD>
    <BODY>
    <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo$nama;?></h4>
                      <div>
                      <h3><p class="text-secondary mb-1"><?php echo$kelas;?></p><h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h4><font color='#000000'>Nama</font></h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <font color='#000000'><?php echo$nama;?></font>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <h4><font color='#000000'>Email</font></h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo$email;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <h4><font color='#000000'>No. Telepon</font></h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo$telp;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                    <h4><font color='#000000'>Alamat</font></h4>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo$alamat;?>
                    </div>
                  </div>
                  <hr>

                  <div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    <div class="col-sm-12">
                    </div> <!-- /.card-body -->
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">
  Edit
</button>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
         


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" class="btn btn-secondary" id="exampleModalLongTitle">EDIT PROFILE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">
      <div>
      <h6>Nama<h6> 
      <input class="form-control form-control-sm" id="aran" type="text" placeholder="Nama"><br>
      </div>
      <div>
      <h6>Tanggal Lahir<h6> 
      <input class="form-control form-control-sm" type="text" placeholder="Tanggal Lahir"><br>
      </div>
      <div>
      <h6>Alamat<h6> 
      <input class="form-control form-control-sm" type="text" placeholder="Alamat"><br>
      </div>
      <div>
      <h6>No. Handphone<h6> 
      <input class="form-control form-control-sm" type="text" placeholder="No. Handphone"><br>
      </div>
      <div>
      <h6>Email<h6> 
      <input class="form-control form-control-sm" type="text" placeholder="Email"><br>
      </div>
      <input type="file" name="file"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    </BODY>
    </HTML>