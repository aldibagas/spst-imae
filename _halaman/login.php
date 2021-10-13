<?php
$title="masuk";
$Template=false;

	$servername = "localhost";

	/* nama database kita */
    $database = "spst"; 

    /* nama user yang terdaftar pada database (default: root) */
    $username = "root";

    /* password yang terdaftar pada database (default : "") */ 
    $password = ""; 

    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $database);


if(isset($_POST['kirim'])){
	$user = $_POST['username'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM `pengguna` WHERE `Nama` = '$user' and `Kata Sandi` = '$pass'";
	$run = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($run);

	if($row > 0){
		session_start();
		$_SESSION['nama'] = $row['Nama'];
		header('location:index.php?halaman=beranda');
	}else{
		echo'
			<div style="width:100%;color:white;background-color:red;text-align:center;padding:5px;font-weight:bold;">Gagal</div>"
		';
	}
}

?>
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
	<div class="card" style="margin: 50px">
	<div class="card-body">
	
		<h1 class="text-center">Masuk</h1>	
		<form action="" method="post" >
			<label class="card-title">Nama Pengguna</label><br>
			<input name="username" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
			<label class="card-title">Kata Sandi</label><br>
			<input name="pass" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
			<input type="submit" name="kirim" value="Masuk" class="btn login btn-block rounded-pill">
			</br>
			<span class="d-flex justify-content-center">Lupa Kata Sandi?</span>
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
					Masuk Dengan Google
					</a>
				</div>
			</div>
			</br>

			<div class="row d-flex justify-content-center">
				<div class="col-sm">
					<a class="btn btn-outline-dark btn-block rounded-pill" href="" role="button" style="text-transform:none">
						<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1365px-Facebook_f_logo_%282019%29.svg.png" />
					Masuk Dengan Facebook
					</a>
				</div>
			</div>
			</br>


			<p> Belum punya akun?
			<a href="index.php?halaman=registrasi" style="color:#30e64c;">Register di sini</a>
			</p>
		</form>
		
	</div>
	</div>
</body>
</html>
