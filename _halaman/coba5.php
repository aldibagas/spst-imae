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

<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<style>

.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
    outline-width: 2px;
    outline-style: solid;
    outline-color: grey;
    box-shadow: 10px 8px 8px grey;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}


</style>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="profile.png" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Nama  : <?php echo$nama;?>
                                    </h5>
                                    <h6>
                                        <?php echo$kelas;?>
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Diri</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
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
               
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="row">
  <div class="col-sm-8">
    <div class="row">
    <div class="col-md-6">
    <label>Email</label>
    </div>
    <div class="col-md-6">
    <?php echo$email;?>
     </div>
    <div class="col">
    </div>
    </div>

    <div class="row">
    <div class="col-md-6">
    <label>No. Telepon</label>
    </div>
    <div class="col-md-6">
    <?php echo$telp;?>
     </div>
    <div class="col">
    </div>
    </div>

    <div class="row">
    <div class="col-md-6">
    <label>Alamat</label>
    </div>
    <div class="col-md-6">
    <?php echo$alamat;?>
     </div>
    <div class="col">
    </div>
    </div>
  </div>
</div>

    
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</body>
</html>
