<?php
session_start();

$title="Update profil";
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

echo $idp = $_SESSION['id'];
echo $nama= $_POST['Nama'];
echo $email = $_POST['email'];
echo $telp = $_POST['Telepon'];
echo $alamat = $_POST['alamat'];
//echo $foto = $_FILES['foto']['name'];
//echo $tmp = $_FILES['foto']['tmp_name'];

$sql = "UPDATE pengguna SET  idp = '$idp', Nama = '$nama', email = '$email', Telepon = '$telp', alamat ='$alamat' WHERE idp = '$idp' ";

$update = mysqli_query($conn, $sql);

if ($update){
    header('location:../?halaman=profil');
}else{
    echo 'Update Data Gagal...';
}
?>

<?php
    //mengambil data gambar dan menyimpannya kedalam variabel
    include "koneksi.php";
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    $path = "images/".$nama_file;

    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
        if($ukuran_file <= 1000000){ 

          //memindahkan lokasi gambar dari tempat asal ke dalam folder website
          //memiliki 2 parameter yang harus diisi, yaitu parameter tempat asal gambar dan paramter tempat tujuan gambar
          if(move_uploaded_file($tmp_file, $path)){ 
            //query untuk memasukkan data ke dalam database
            $sql = mysqli_query($mysqli,"insert into gambar set nama='$nama_file', ukuran='$ukuran_file', tipe='$tipe_file'");
            //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
            if($sql){ 
              header("location: ../index.php?halaman=profil"); 
            }else{
              //jika gagal insert data ke database maka akan memunculkan pesan seperti di bawah ini
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              //link menuju halaman insert gambar
              echo "<br><a href='form.php'>Kembali Ke Form</a>";
            }
          }else{
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='form.php'>Kembali Ke Form</a>";
          }
        }else{
          //jika ukuran gambar lebih besar dari 1MB maka akan memunculkan pesan seperti di bawah ini
          echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
          echo "<br><a href='form.php'>Kembali Ke Form</a>";
        }
      }else{
        //jika tipe gambar yang diupload bukan jpg atau png maka akan memunculkan pesan seperti di bawah ini
        echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
        echo "<br><a href='form.php'>Kembali Ke Form</a>";
      }
?>