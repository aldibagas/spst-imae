<?php
 $title="Registrasi";
 $Template=false;
 session_start();
 include '_helpers/connect.php';
 
    

 if(isset($_POST['kirim'])){
    $user = $_POST['username'];
    $kelas = $_POST['kelas'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $afiliasi = $_POST['afiliasi'];
    $confirpass = $_POST['confirpass'];
   
    
    $sql = "
    INSERT INTO `pengguna` (`afiliasi`, `Kelas`, `Nama`, `email`, `alamat`, `Telepon`, `Sandi`) 
    VALUES ('$afiliasi', '$kelas', '$user', '$email', '$alamat', '$telp', '$pass')";
	
	if($run = mysqli_query($conn, $sql)){
        header('location:index.php?halaman=login');
        echo 'Berhasil Daftar';
    }else{
        echo '
        <div style="width:100%;color:white;background-color:red;text-align:center;padding:5px;font-weight:bold;">Gagal</div>"
    ';
    }
 }


?>


<html>
<head>
<title>Daftar</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />


<style>
		.login{
			background-color: #1b68ff;
			color: black;
		}
        body
        {
            background-color: lightblue
        }

		p {
    padding: 10px;
		}



#card1 {
    box-shadow: 10px 8px 8px grey;
}


.card {
        outline-width: 2px;
        outline-style: solid;
        outline-color: grey;
    }
	</style>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<body>
      
 <div class="d-flex justify-content-center">
 <div class="card" style="margin: 50px" id="card1" name="card1">
 <div class="card-body">
 
  <h1 class="text-center">Daftar</h1> 
  <form action="" method="post" >
   <label class="card-title">Nama</label><br>
   <input name ="username" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Email</label><br>
   <input name ="email" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Mitra</label><br>
                            
                            <select class="form-control border-0 rounded-pill select2" id="affiliasi" onchange="aff()" style="background-color:#d1d1d1" id="simple-select2" name ="kelas"placeholder ="kelas">
                                <optgroup label="Pilih">
                                 <option value="" disabled selected hidden>Pilih Disini</option>
                                  <option value="pengguna">Pelanggan</option>
                                  <option value="petugas">Petugas</option>
                                </optgroup>
                            </select>
<script>
     function aff(){
        let e = document.getElementById('affiliasi').value;
        if(e == 'pengguna'){
            document.getElementById("bank").disabled = true;
        }else{
            document.getElementById("bank").disabled = false;
        }
     }
</script>
</br>
<?php
         $kelas ="pengguna";

         if ($kelas == "pengguna") {
                echo "";
          }
?>

   <label class="card-title">Afiliasi</label><br>
                            
                            <select class="form-control border-0 rounded-pill select2" id="bank" style="background-color:#d1d1d1" id="simple-select2" name ="afiliasi">
                                <optgroup label="Pilih">
                                <option value="" disabled selected hidden>Pilih Disini</option>
                                  <option value="1">BANK 1</option>
                                  <option value="2">BANK 2</option>
                                  <option value="3">BANK 3</option>
                                </optgroup>
                            </select>
</br>
   <label class="card-title">Nomor Ponsel</label><br>
   <input name = "telp" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Alamat</label><br>
   <input name ="alamat" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="text"/><br>
   <label class="card-title">Kata Sandi</label><br>
   <input name ="pass"class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
   <label class="card-title">Konfirmasi Kata Sandi</label><br>
   <input name ="confirpass" class="form-control border-0 rounded-pill" style="background-color:#d1d1d1" type="password"/><br>
   <input type="submit" name="kirim" value="Register" class="btn login btn-block rounded-pill">
   </br>

   <p> Sudah Memiliki Akun?
   <a href="index.php?halaman=login" style="color:#1b68ff;">Masuk</a>
   </p>
  </form>
  
 </div>
 </div>


</body>
</html>