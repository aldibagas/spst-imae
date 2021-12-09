<?php
session_start();
$title="masuk";
$Template=false;
include '_helpers/connect.php';
?>
<html>
<head>
<title>Kata Sandi Baru</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
<style>
	.login{
		background-color: #1b68ff;;
		color: white;
	}
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>

<p class="text-center small">Masukkan Email</p>
                  </div>

                  <form class="row g-3 needs-validation" method="POST" action="reset-password.php">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Email</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="login">Kirim Password Reset Ke Email</button>
                    </div>
<div class="d-flex justify-content-center">
	<div class="card" style="margin: 50px; width: 500px;">
		<div class="card-body">
		<h1 class="text-center">Setel Ulang Kata Sandi</h1>
		<label class="card-title text-center">Silakan masukkan email anda untuk menerima kode verifikasi untuk membuat kata sandi baru melalui email</label>
		
		<form>
			<label class="card-title">Email</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text" placeholder="Email"/><br>
			<button class="btn login btn-block rounded-pill">Kirim</button>
			</br>

		</form>
		
	</div>
	</div>
</body>
</html>