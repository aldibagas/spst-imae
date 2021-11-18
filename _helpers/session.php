<?php
	$userFetch = "select * from pengguna where id='$USERID'";
	$userFetchRun = mysqli_query($conn, $userFetch);
	$userData = mysqli_fetch_assoc($userFetchRun);
	$nama = $userData['Nama'];
	$userid = $userData['id'];
	$userrole = $userData['Kelas'];
?>