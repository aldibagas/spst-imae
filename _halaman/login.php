<?php

session_start();
	$title="masuk";
	$Template=false;
	include '_helpers/connect.php';

	if(isset($_POST['kirim'])){
		$user = $_POST['username'];
		$pass = $_POST['pass'];

		$sql = "SELECT * FROM `pengguna` WHERE `Nama` = '$user' and `Sandi` = '$pass'";
		$run = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($run);

		if($row > 0){
		$_SESSION['nama'] = $row['Nama'];
		$userid = $row['idp'];
		$_SESSION['id'] = $userid;
		$_SESSION['kelas'] = $row['Kelas'];
		if ($row['Kelas']=="pengguna")	{
			header('Location:index.php?halaman=beranda');
		}
		if ($row['Kelas']=="petugas")	{
			header('Location:index.php?halaman=dashboard');
		}
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
			background-color: #1b68ff;
			color: black;
		}
        body
        {
            background-color: lightblue
        }

		p {
    padding: 10px;
		}



#card1 {
    box-shadow: 10px 8px 8px grey;
}
 

.card {
        outline-width: 2px;
        outline-style: solid;
        outline-color: grey;
    }
	</style>
	</head>

	<body>
		
	<div class="d-flex justify-content-center">
		<div class="card" id="card1" style="margin: 50px">
		<div class="card-body">

		
			<h1 class="text-center">MASUK</h1>	
			<form action="" method="post" >
				<label class="card-title">Nama Pengguna</label><br>
				<input name="username" placeholder="Nama Pengguna" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
				<label class="card-title">Kata Sandi</label><br>
				<input name="pass" placeholder="Kata Sandi" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
				<input type="submit" name="kirim" value="Masuk" class="btn login btn-block rounded-pill">
				</br>
				<a class="d-flex justify-content-center" href="index.php?halaman=lupasandi" style="color:#000000">Lupa Kata Sandi?</a>
					
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
						<a class="btn btn-outline-dark btn-block rounded-pill" href="google/google.php" role="button" style="text-transform:none">
							<img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
						Masuk Dengan Google
						</a>
					</div>
				</div>
				</br>

				<div class="row d-flex justify-content-center">
					<div class="col-sm">
					</div>
				</div>
				</br>

				<div class="row d-flex justify-content-center">
					<p> Belum punya akun?
					<a  href="index.php?halaman=daftar" style="color:#1b68ff;">Daftar</a>
					</p>
				</div>
			</form>
			
		</div>
		</div>
	</body>
	</html>