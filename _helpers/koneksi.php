<?php
$hostname = "localhost";
$database = "spst_user";
$username = "root";
$password = "";
$kon = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi
if (!$kon) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?>