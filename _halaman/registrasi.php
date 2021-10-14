<?php
 $title="Registrasi";
 $Template=false;
 
    $servername = "localhost";

	/* nama database kita */
    $database = "spst_user"; 

    /* nama user yang terdaftar pada database (default: root) */
    $username = "root";

    /* password yang terdaftar pada database (default : "") */ 
    $password = ""; 

    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $database);

 if(isset($_POST['kirim'])){
    $user = $_POST['username'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirpass = $_POST['confirpass'];
    
    $sql = "
    INSERT INTO `tb_pengguna`(`id`, `Kelas`, `Nama`, `Nomor Telepon`, `Kata Sandi`) 
    VALUES (default,'testing','$user','$telp','$pass')";
	
	if($run = mysqli_query($conn, $sql)){
        echo 'berhasil daftar';
    }else{
        echo 'gagal daftar';
    }
 }

?>
<html>
<head>
<title>Daftar</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<style>
 .login{
  background-color: #30e64c;
  color: white;
 }
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>
      
<div class="d-flex justify-content-center">
 <div class="card" style="margin: 50px">
 <div class="card-body">
 
  <h1 class="text-center">Daftar</h1> 
  <form action="" method="post" >
   <label class="card-title">Nama</label><br>
   <input name ="username" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Email</label><br>
   <input name ="email" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Nomor Ponsel</label><br>
   <input name = "telp" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="number"/><br>
   <label class="card-title">Alamat</label><br>
   <input name ="alamat" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Kata Sandi</label><br>
   <input name ="pass"class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
   <label class="card-title">Konfirmasi Kata Sandi</label><br>
   <input name ="confirpass" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
   <input type="submit" name="kirim" value="Register" class="btn login btn-block rounded-pill">
   </br>

   <p> Sudah Memiliki Akun?
   <a href="index.php?halaman=login" style="color:#30e64c;">Masuk</a>
   </p>
  </form>
  
 </div>
 </div>
</body>
</html>
