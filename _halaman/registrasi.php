<?php
   $title="Daftar";
   $Template=false;
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Daftar</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<style>
	.login{
		background-color: #30e64c;
		color: white;
	}
</style>
</head>

<body>
      
<div class="d-flex justify-content-center">
	<div class="card" style="margin: 50px">
	<div class="card-body">
	
		<h1 class="text-center">Daftar</h1>	
		<form>
			<label class="card-title">Nama</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
			<label class="card-title">Email</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
			<label class="card-title">Nomor Ponsel</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="number"/><br>
			<label class="card-title">Alamat</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
			<label class="card-title">Kata Sandi</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
			<label class="card-title">Konfirmasi Kata Sandi</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
			<button class="btn login btn-block rounded-pill">Daftar</button>
			</br>

			<p> Sudah memiliki akun?
			<a href="<?=url('login')?>" style="color:#30e64c;">Masuk</a>
			</p>
		</form>
		
	</div>
	</div>
</body>
</html>