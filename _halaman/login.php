<?php
   $title="Masuk";
   $Template=false;
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Masuk</title>
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
	<div class="card">
	<div class="card-body">
	
		<h1 class="text-center">Masuk</h1>	
		<form>
			<label class="card-title">Telepon</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="number"/><br>
			<label class="card-title">Kata Sandi</label><br>
			<input class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
			<a href="<?=url('Kode-otp')?>"><button class="btn login btn-block rounded-pill">Masuk</button></a>
			</br>
			<span class="d-flex justify-content-center">Lupa Kata Sandi? <a href="<?=url('registrasi')?>" style="color:#30e64c;">Setel ulang kata sandi</a></span>
			</br>
			
			<div class="row d-flex justify-content-center">
				<div class="col-sm px-0 my-3">
					<div class="border border-secondary"></div>
				</div>
				<div class="col-sm px-0">
					<p class="card-text text-center">atau</p>
				</div>
				<div class="col-sm px-0 my-3">
					<div class="border border-secondary"></div>
				</div>
			</div>
			</br>
			
			<div class="row d-flex justify-content-center">
				<div class="col-sm">
					<a class="btn btn-outline-dark btn-block rounded-pill" href="" role="button" style="text-transform:none">
						<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
					Masuk dengan Google
					</a>
				</div>
			</div>
			</br>

			<div class="row d-flex justify-content-center">
				<div class="col-sm">
					<a class="btn btn-outline-dark btn-block rounded-pill" href="" role="button" style="text-transform:none">
						<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1365px-Facebook_f_logo_%282019%29.svg.png" />
					Masuk dengan Facebook
					</a>
				</div>
			</div>
			</br>

			<p> Belum punya akun?
			<a href="<?=url('registrasi')?>" style="color:#30e64c;">Daftar di sini</a>
			</p>
		</form>
		
	</div>
	</div>
</body>
</html>