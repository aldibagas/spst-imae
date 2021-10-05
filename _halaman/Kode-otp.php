<?php
   $title="login";
   $Template=false;
?>
<html>
<head>
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
	<div class="card" style="margin: 50px; width: 500px;">
	<div class="card-body">
		<h1 class="text-center">Kode OTP</h1>
		<label class="card-title text-center">Masukkan 4 digit kode verifikasi yang dikirimkan ke email anda</label>
		<div class="container">
            <div class="row">
              <div class="col-sm">
                <div class="border border-dark rounded" style="width: 40px;height: 40px;"></div>
              </div>
              <div class="col-sm">
                <div class="border border-dark rounded" style="width: 40px;height: 40px;"></div>
              </div>
              <div class="col-sm">
                <div class="border border-dark rounded" style="width: 40px;height: 40px;"></div>
              </div>
              <div class="col-sm">
                <div class="border border-dark rounded" style="width: 40px;height: 40px;"></div>
              </div>
            </div>
          </div>
    </div>
		<form>
			<button class="btn login btn-block rounded-pill"><a href="<?=url('beranda')?>" style="color:#30e64c;">Lanjut</a></button>
			</br>
		</form>
		
	</div>
	</div>
</body>
</html>