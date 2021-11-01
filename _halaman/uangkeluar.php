<?php
session_start();
  $title="Uang Keluar";
  $servername = "localhost";
  $database = "spst"; 
  $username = "root";
  $password = "";
  $conn = mysqli_connect($servername, $username, $password, $database);

  $nama = $_SESSION['nama'];
  $sql ="SELECT * FROM `pengguna` WHERE Nama = '$nama'";
  $run = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($run);
  $email = $row['email'];
  $alamat = $row['alamat'];
?>
