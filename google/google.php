<?php
// Include file gpconfig
include_once 'gpconfig.php';

if(isset($_GET['code'])){
	$gclient->authenticate($_GET['code']);
	$_SESSION['token'] = $gclient->getAccessToken();
	header('Location: ' . filter_var($redirect_url, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gclient->setAccessToken($_SESSION['token']);
}

if ($gclient->getAccessToken()) {
	include '../_helpers/connect.php';

	// Get user profile data from google
	$gpuserprofile = $google_oauthv2->userinfo->get();

	// buat kata sandi acak untuk pengguna
	function random_str(
		int $length = 64,
		string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
	): string {
		if ($length < 1) {
			throw new \RangeException("Length must be a positive integer");
		}
		$pieces = [];
		$max = mb_strlen($keyspace, '8bit') - 1;
		for ($i = 0; $i < $length; ++$i) {
			$pieces []= $keyspace[random_int(0, $max)];
		}
		return implode('', $pieces);
	}

	$nama = $gpuserprofile['given_name']." ".$gpuserprofile['family_name']; // Ambil nama dari Akun Google
	$email = $gpuserprofile['email']; // Ambil email Akun Google nya
	$pass = random_str(8);

	// Buat query untuk mengecek apakah data user dengan email tersebut sudah ada atau belum
	// Jika ada, ambil id, username, dan nama dari user tersebut
	$sql = mysqli_query($conn, "SELECT * FROM pengguna WHERE email = '".$email."'");
	$user = mysqli_fetch_array($sql); // Ambil datanya dari hasil query tadi

	if(empty($user)){ // Jika User dengan email tersebut belum ada
		// Ambil username dari kata sebelum simbol @ pada email
		$ex = explode('@', $email); // Pisahkan berdasarkan "@"
		$username = $ex[0]; // Ambil kata pertama

		// Lakukan insert data user baru tanpa password
		$insNew = "INSERT INTO `pengguna`(`afiliasi`, `Kelas`, `Nama`, `email`, `alamat`, `Telepon`, `Sandi`) VALUES ('0','pengguna','$nama','$email','-','-','$pass')";
		mysqli_query($conn, $insNew);

	}else{
		$_SESSION['nama'] = $user['Nama'];
		$userid = $user['idp'];
		$_SESSION['id'] = $userid;
		$_SESSION['kelas'] = $user['Kelas'];
	}

	$_SESSION['nama'] = $user['Nama'];
	$userid = $user['idp'];
	$_SESSION['id'] = $userid;
	$_SESSION['kelas'] = $user['Kelas'];

    header("location:../index.php?halaman=beranda");
	//header("location: welcome.php");
} else {
	$authUrl = $gclient->createAuthUrl();
	header("location: ".$authUrl);
}
?>
