<?php
$title="Update data";

if (!$conn) { 
die("Tidak bisa terkoneksi ke database");
}
?>

<?php

echo $id = $_POST['id'];
echo $tanggal = $_POST['tanggal'];
echo $idp1 = $_POST['idp1'];
echo $idp2 = $_POST['idp2'];
echo $aktivitas = $_POST['aktivitas'];
echo $data_sampah = $_POST['data_sampah'];
echo $harga_total = $_POST['harga_total'];
echo $metode_bayar = $_POST['metode_bayar'];
echo $metode_transaksi = $_POST['metode_transaksi'];
echo $status_setor = $_POST['status_setor'];
echo'</br>';

echo $sql = "UPDATE transaksi SET id = '$id', tanggal = '$tanggal', idp1 ='$idp1',idp2 = '$idp2', aktivitas = '$aktivitas',data_sampah = '$data_sampah',harga_total = '$harga_total',metode_bayar = '$metode_bayar', metode_transaksi='$metode_transaksi',status_setor= '$status_setor' WHERE id = '$id' ";

$update = mysqli_query($conn, $sql);

if ($update)
    header('location:../?halaman=riwayat-transaksi');
else 
    echo 'Update Data Gagal...';

?>