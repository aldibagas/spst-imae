<?php
$title="Update data";
$servername = "localhost";
$database = "cypr9718_spst"; 
$username = "cypr9718";
$password = "pq6SPaHWYiKe38";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}

?>



<?php

echo $idt = $_POST['idt'];
echo $tanggal = $_POST['tanggal'];
echo $idp1 = $_POST['idp1'];
echo $idpelanggan = $_POST['idPelanggan'];
echo $idp2 = $_POST['idp2'];
echo $idpetugas = $_POST['idpetugas'];
echo $aktivitas = $_POST['aktivitas'];
echo $data_sampah = $_POST['data_sampah'];
echo $harga_total = $_POST['harga_total'];
echo $metode_bayar = $_POST['metode_bayar'];
echo $metode_transaksi = $_POST['metode_transaksi'];
echo $status_setor = $_POST['status_setor'];
echo'</br>';

echo $sql = "UPDATE transaksi SET idt = '$idt', tanggal = '$tanggal', idp1 ='$idpelanggan',idp2 = '$idpetugas', aktivitas = '$aktivitas',data_sampah = '$data_sampah',harga_total = '$harga_total',metode_bayar = '$metode_bayar', metode_transaksi='$metode_transaksi',status_setor= '$status_setor' WHERE idt = '$idt' ";

$update = mysqli_query($conn, $sql);

if ($update)
    header('location:../?halaman=profil');
else 
    echo 'Update Data Gagal...';

?>