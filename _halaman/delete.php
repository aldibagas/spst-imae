<?php
session_start();
$title="Delete Data";

$idt = $_GET['id'];
$servername = "localhost";
$database = "spst"; 
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}

$delete = mysqli_query($conn, "DELETE FROM transaksi WHERE idt='$idt' ");

if ($delete)
header('location:../?halaman=riwayat-transaksi');
else 
echo 'Hapus data gagal...';

?>