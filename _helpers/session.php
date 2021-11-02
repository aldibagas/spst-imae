<?php
if($_SESSION['nama'] != null){
	$userFetch = "select * from pengguna where id='$_SESSION[nama]'";
	$userFetchRun = mysqli_query($servConnQuery, $userFetch);
	$userData = mysqli_fetch_assoc($userFetchRun);
	
	$nama = $userData['Nama'];
	$userid = $userData['id'];
	$userrole = $userData['Kelas'];
}else{
	header('location:index.php');
}
?>