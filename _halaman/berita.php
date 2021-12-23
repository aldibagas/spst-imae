<?php
// session_start();
// if($_SESSION['id'] == null){
//     header('Location:index.php?halaman=login');
// }
?>

<?=berita_head()?>
<?=berita_header()?>
<?=berita_isi('direktori gambar', 'tanggal berita', 'direktori halaman', 'judul berita', 'cuplikan konten')?>
<?=berita_tutup()?>


