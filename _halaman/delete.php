<?php

session_start();
$title="Delete Data";

$id = $_GET['id'];

if (!$conn) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}

$delete = mysqli_query($conn, "DELETE FROM transaksi WHERE id='$id' ");

if ($delete)
header('location:../?halaman=riwayat-transaksi');
else 
echo 'Hapus data gagal...';

?>