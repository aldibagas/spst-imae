<?php
if($_SESSION['nama'] != null){
	$userFetch = "select * from pengguna where id='$_SESSION[nama]'";
	$userFetchRun = mysqli_query($servConnQuery, $userFetch);
	$userData = mysqli_fetch_assoc($userFetchRun);
	
	if($_SESSION['pengguna'])
	header('location:beranda.php');
	header('location:riwayat-aktivitas.php');
	header('location:pengambilan.php');
	header('location:profil.php');

	if($_SESSION['petugas'])
	header('location:dashboard.php');
	header('location:riwayat-transaksi.php');
	header('location:profil.php');
	header('location:signout.php');	

	$nama = $userData['Nama'];
	$userid = $userData['id'];
	$userrole = $userData['Kelas'];
}else{
	header('location:index.php');
}
?>