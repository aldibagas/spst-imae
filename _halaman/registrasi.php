<?php
 $title="Registrasi";
 $Template=false;
 include '_helpers/connect.php';

 if(isset($_POST['kirim'])){
    $user = $_POST['username'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirpass = $_POST['confirpass'];
    
    $sql = "
    INSERT INTO `pengguna`(`id`, `Kelas`, `Nama`, `Nomor Telepon`, `Kata Sandi`, 'email') 
    VALUES (default,'testing','$user','$telp','$pass','$email')";
	
	if($run = mysqli_query($conn, $sql)){
		$cari = "select * from pengguna where `Nama` = '$user' and `Kata Sandi` = '$pass'";
		$cRun = mysqli_query($conn, $cari);
		$cRow = mysqli_fetch_assoc($cRun);
		$idp = $cRow['idp'];
		$tgl = date('Y-m-d');
		$tabungan = "INSERT INTO `tabungan`(`tanggal`, `idp1`, `saldo`)
				VALUES ('$tgl','$idp','0')";
		mysqli_query($conn, $tabungan);
		
		
        header('location:index.php?halaman=login');
        echo 'Berhasil Daftar';
    }else{
        echo 'Gagal Daftar';
    }
 }

?>
<html>
<head>
<title>Daftar</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<style>
 .login{
  background-color: #1b68ff;
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
   <input name = "telp" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Alamat</label><br>
   <input name ="alamat" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Kata Sandi</label><br>
   <input name ="pass"class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
   <label class="card-title">Konfirmasi Kata Sandi</label><br>
   <input name ="confirpass" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
   <input type="submit" name="kirim" value="Register" class="btn login btn-block rounded-pill">
   </br>

   <p> Sudah Memiliki Akun?
   <a href="index.php?halaman=login" style="color:#1b68ff;">Masuk</a>
   </p>
  </form>
  
 </div>
 </div>
</body>
</html>
