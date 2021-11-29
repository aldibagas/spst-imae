<?php
   session_start();
   include '_helpers/connect.php';
   $title="SETOR";
   
   if(isset($_POST['insert'])) 
   {
    $p1 = $_POST ['pesanan_1'];
    $p2 = $_POST ['pesanan_2'];
    $p3 = $_POST ['pesanan_3'];
   

    $r1 = $_POST ['biaya_1'];
    $r2 = $_POST ['biaya_2'];
    $r3 = $_POST ['biaya_3'];
  

    $th = $_POST ['totalHarga'];

    $mb1 = $_POST ['metbay1']; 
    $mt1 = $_POST ['metodeBayar']; 

    $latitude = $_POST ['latNow'];
    $longitude = $_POST ['lngNow'];

    $ala = $_POST ['message']; 

    
    $sql1 = "INSERT INTO `transaksi` (`idp1`, `idp2`, `aktivitas`, `data_sampah`, `harga_total`, `metode_bayar`, `metode_transaksi`, `status_setor`, `jumlah_tarik`, `sandi`, `status_tarik` ) 
    VALUES ('1', '0', '0', '$p1 / $p2 / $p3', '$th', '$mb1', '$mt1', '1', '0', '0', '0')";

    $sql2 = "INSERT INTO `notifikasi` (`idp`, `data_transaksi`, `biaya`, `status`) 
    VALUES ('1', '$p1 / $p2 / $p3', '$th', '0')";

    $sql3 = "INSERT INTO `navigasi` (`idp1`, `idp2`, `latitude`, `longitude`, `alamat`) 
    VALUES ('1', '2', '$latitude', '$longitude','$ala')";

    $query2  = mysqli_query($conn,$sql1);
    $query3  = mysqli_query($conn,$sql2);
    $query4  = mysqli_query($conn,$sql3);
  
    mysqli_commit($conn);
 }
?>

<div class="card">
  <div class="card-body">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <div class="row d-flex justify-content-center">
		<div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
	  </div>
      <center> <h2>DATA SAMPAH</h2> </center>
    <div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
		</div>
	</div>
  
  <div>
<form name="rega"action="" method="POST">
<div class="row">
    <div class="col">
    <label for="simple-select2">Sampah</label>
      <select class="form-control select2" id="pilih" onchange="proses1()" name ="pesanan_1">
      <option value="" disabled selected hidden>Pilih Bahan</option>
                                <optgroup label="Plastik">
                                  <option value="PET">PET</option>
                                  <option value="HDPE">HDPE</option>
                                  <option value="PVC">PVC</option>
                                  <option value="LDPE">LDPE</option>
                                  <option value="PP">PP</option>
                                  <option value="PS">PS</option>
                                </optgroup>
                                <optgroup label="Kertas">
                                  <option value="HVS">HVS</option>
                                  <option value="KRT">Karton</option>
                                  <option value="KRD">Kardus</option>
                                </optgroup>
                                <optgroup label="Organik">
                                  <option value="SB">Sampah Basah</option>
                                  <option value="SK">Sampah Kering</option>
                                </optgroup>
                            </select>
    </div>
    <div class="col">
    <label>Jumlah (Kilograms)</label>
                            <input type="text" onchange="hargaBerat(this.value)" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_1" id="jumlah_1">
    </div>
  </div>

  <div class="row">
    <div class="col">
     <select class="form-control select2" id="pilih1" onchange="proses2()" name ="pesanan_2">
     <option value="" disabled selected hidden>Pilih Bahan</option>
                                <optgroup label="Plastik">
                                  <option value="PET">PET</option>
                                  <option value="HDPE">HDPE</option>
                                  <option value="PVC">PVC</option>
                                  <option value="LDPE">LDPE</option>
                                  <option value="PP">PP</option>
                                  <option value="PS">PS</option>
                                </optgroup>
                                <optgroup label="Kertas">
                                  <option value="HVS">HVS</option>
                                  <option value="KRT">Karton</option>
                                  <option value="KRD">Kardus</option>
                                </optgroup>
                                <optgroup label="Organik">
                                  <option value="SB">Sampah Basah</option>
                                  <option value="SK">Sampah Kering</option>
                                </optgroup>
                            </select>

    </div>
    <div class="col">
    <input type="text" onchange="hargaBerat2(this.value)" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_2" id="jumlah_2">
    </div>
  </div>

  <div class="row">
    <div class="col">
    <select class="form-control select2" id="pilih2" onchange="proses3()" name ="pesanan_3">
    <option value="" disabled selected hidden>Pilih Bahan</option>
                                <optgroup label="Plastik">
                                  <option value="PET">PET</option>
                                  <option value="HDPE">HDPE</option>
                                  <option value="PVC">PVC</option>
                                  <option value="LDPE">LDPE</option>
                                  <option value="PP">PP</option>
                                  <option value="PS">PS</option>
                                </optgroup>
                                <optgroup label="Kertas">
                                  <option value="HVS">HVS</option>
                                  <option value="KRT">Karton</option>
                                  <option value="KRD">Kardus</option>
                                </optgroup>
                                <optgroup label="Organik">
                                  <option value="SB">Sampah Basah</option>
                                  <option value="SK">Sampah Kering</option>
                                </optgroup>
                            </select>
    </div>
    <div class="col">
    <input type="text" onchange="hargaBerat3(this.value)" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_3" id="jumlah_3">
    </div>
  </div>
 

                            <?php
                              $hargaQuery = 'select * from harga';
                              $hargaRun = mysqli_query($conn, $hargaQuery);
                              while($harga = mysqli_fetch_assoc($hargaRun)){
                                echo '<div style="display:none" id="kategori-'.$harga['kategori'].'">'.$harga['daftarharga'].'</div>';
                              }
                            ?>
                            
<br>
<br>
<br>

<div class="row d-flex justify-content-center">
		<div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
	  </div>
      <center> <h2>METODE PEMBAYARAN</h2> </center>
    <div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
		</div>
	</div>
  <br>
  
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <h5>PEMBAYARAN</h5>
    <p>Silahkan untuk memilih metode transaksi dibawah ini :</p>
  <select class="form-control" id="metbay1" name="metbay1" onchange="metran()">
  <option value="" disabled selected hidden>Pilih Disini</option>
  <optgroup label="METODE TRANSAKSI">
    <br>
    <option value=0> CASH</option>
    <option value=1 >SALDO</option>
  </select>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <h5>LOKASI</h5>
    <p>Silahkan untuk memilih Lokasi yang Dikehendaki :</p>
  <select class="form-control" id="lokasi" name="lokasi1" onchange="lokasi()">
  <option value="" disabled selected hidden>Pilih Disini</option>
  <optgroup label="">
    <br>
    <option value=0> BANK 1 </option>
    <option value=1> BANK 2 </option>
    <option value=2> BANK 3 </option>
    <option value=3> BANK 4 </option>
  </select>
  
      </div>
    </div>
  </div>
</div>


<br>
<br>
<br>

<div class="row d-flex justify-content-center">
		<div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
	  </div>
      <center> <h2>METODE TRANSAKSI</h2> </center>
    <div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
		</div>
	</div>


  
  <div class="card-deck my-4">
                <div class="card mb-4 shadow">
                  <div class="card-body text-center my-4">
                    <a href="#"> 
                    </a>
                    <ul class="list-unstyled">
                    <p class="text-muted"></p>
                    <span class="h1 mb-0">DIJEMPUT</span>
                    <p class="text-muted"></p>
                      <li>PILIH DISINI JIKA ANDA HENDAK MEMILIH METODE PEMBAYARAN DENGAN CARA DIJEMPUT</li>
                    </ul>

</a>                    
<div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg btn-block" id="myBtn" value=0 onclick="myFunction(); getLocation()" data-toggle="modal" data-target="#exampleModalCenter">
  PILIH
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><center> <h2>ISIKAN ALAMAT ANDA DISINI</h2> </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <textarea name="message" id="user_input" rows="5" cols="50" placeholder="ISIKAN ALAMAT ANDA DISINI"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">KEMBALI</button>
        <button type="button" onclick="showInput();" class="btn btn-primary">SIMPAN</button>
      </div>
    </div>
  </div>
</div>
</div>

<script language="JavaScript">
    function showInput() 
    {
        document.getElementById('display').innerHTML = 
        document.getElementById("user_input").value;
    }
  </script>

                  </div> <!-- .card-body -->
                </div> <!-- .card -->
<div class="card mb-4">      
                  <div class="card-body text-center my-4">
                    <a href="#">
</a>
                    <ul class="list-unstyled">
                    <p class="text-muted"></p>
                    <span class="h1 mb-0">DISERAHKAN </span>
                    <p class="text-muted"></p>
                      <li>PILIH DISINI JIKA ANDA HENDAK MEMILIH METODE PEMBAYARAN DENGAN CARA DISERAHKAN</li>
                    </ul>
                    <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" id="myBtn1" name="metodeBayar" class="btn btn-primary btn-lg btn-block" data-toggle="modal" value=1 data-target="#myModal" onclick="myFunction1(); zonk()">PILIH</button>
 
  <input type="radio" name="metodeBayar" id="metodeBayar0" value="0" style="display: none;">
  <input type="radio" name="metodeBayar" id="metodeBayar1" value="1" style="display: none;">
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p><h5>Uang Anda Akan Disetorkan Ke Bank<h5></p>
        </div>
        <div class="modal-footer">
          <button type="button" id="metodeBayar1" name="metodeBayar" onclick="metbay()" class="btn mb-2 btn-primary btn-lg" data-dismiss="modal">Kirim</button>
        </div>
      </div>
    </div>
  </div>
</div>
</a>               
</div> <!-- .card-body -->
                </div> <!-- .card -->
</div>


  <br>
  <br>

<!-- Button trigger modal -->
<button type="button" onclick="total(); total1();" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  SETOR
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center> <h2>KONFIRMASI PEMESANAN</h2> </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="text-muted"></p>
                      <h2>Data Transaksi</h2>
                      <br>
                      <div class="row">
    <div class="col">
    <output type="text" id="harga" name="harga" class="form-control" >
    </div>
    <h1>x</h1>
    <div class="col">
    <output type="text" id="berat1" name="berat1" class="form-control">
    </div>
    <h3> = </h3>
    <h4> &nbsp Rp.</h4>
    <div class="col">
    <input type="text" class="form-control" aria-label="berat sampah" id="biaya_1" name="biaya_1" >
    </div>
  </div>


  <div class="row">
    <div class="col">
    <output type="text" id="harga1" name="harga1" class="form-control" >
    </div>
    <h1>x</h1>
    <div class="col">
    <output type="text" id="berat2" name="berat2" class="form-control" >
    </div>
    <h3> = </h3>
    <h4>&nbsp Rp. </h4>
    <div class="col">
    <input type="text" class="form-control"  aria-label="berat sampah" id="biaya_2" name="biaya_2" >
    </div>
  </div>

  <div class="row">
    <div class="col">
    <output type="text" id="harga2" name="harga2" class="form-control" >
    </div>
    <h1>x</h1>
    <div class="col">
    <output type="text" id="berat3" name="berat3" class="form-control" >
    </div>
    <h3> = </h3>
    <h4> &nbsp Rp.</h4>
    <div class="col">
    <input type="text" class="form-control"  aria-label="berat sampah" id="biaya_3" name="biaya_3" >
    </div>
  </div>

<div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
		</div>

    <div class="row">
    <div class="col">
    <h1 class="modal-title" id="exampleModalLabel"><h3>Total</h3></h1>
    </div>
  
    <div class="col">

    </div>
 
    <h4> &nbsp Rp.</h4>
    <div class="col">
    <input type="text" id="totalHarga" name="totalHarga" class="form-control"  value="0">
    </div>
  </div>

    <br>
    <h3>Keterangan</h3><br>
    <div class="row">
    <div class="col">
    <h5> Metode Bayar&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: </h5>
    </div>
    <div class="col">
    <h5><div id = 'tampilPembayaran'></div><h5>
    </div>
  </div>
    
  <br>
    <div class="row">
    <div class="col">
    <h5> Metode Transaksi&emsp;&emsp;&emsp;: </h5>
    </div>
    <div class="col">
    <h5><div id = 'bijil'></div><h5>
    </div>
  </div>

  <br>

   <div class="row">
    <div class="col">
    <h5>Lokasi saya &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: </h5>
    </div>
    <div class="col">
    <p id="demo"></p>
    </div>
    </div>

    <input type="hidden" name="latNow" id="latNow">
    <input type="hidden" name="lngNow" id="lngNow">
    <br>

    <div class="row">
    <div class="col">
    <h5>Alamat Saya &emsp;&emsp;&emsp;&emsp;&emsp;: </h5>
    </div>
    <div class="col">
    <span id='display'></span>
    </div>
    </div>
    

<script>
var x = document.getElementById("demo");
 
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation tidak didukung oleh browser ini.";
  }

}
 
function showPosition(position) {
  x.innerHTML = "<b>Latitude &ensp;&ensp; :</b> " + position.coords.latitude + 
  "<br><b>Longitude &ensp; :</b> " + position.coords.longitude + 
  "<br><b>Lokasi Anda Terdeteksi</b>"; 
  $("#latNow").val(position.coords.latitude);
	$("#lngNow").val(position.coords.longitude);

}

function zonk() {
  var aksi = document.getElementById("myBtn").value;
  let x =` `;
  aksi=parseInt(aksi);
  if(aksi==1){
    x = '';
  }else{
    x =''
  }
  document.getElementById("demo").innerHTML = x; 
}
</script>
                      
      </div>
      <div class="btn-group" role="group" aria-label="Basic example">
        <input type="submit" class="btn btn-secondary" name="insert" value="KIRIM">
      </div>


      
 </form>

<script>
function proses1()
{
  var harga = document.getElementById("pilih").value;
  document.getElementById("harga").innerHTML = harga;
  var e = document.getElementById("kategori-"+harga).innerHTML;
}
function hargaBerat(val){
  let harga = document.getElementById("pilih").value;
  document.getElementById("berat1").value = val;
  let e = document.getElementById("kategori-"+harga).innerHTML;
  console.log(typeof parseInt(val));
  console.log(typeof parseInt(e));
  let a = parseInt(val);
  let b = parseInt(e)
  let total = a * b;
  document.getElementById('biaya_1').value = total;
}


function proses2()
{
  var harga1 = document.getElementById("pilih1").value;
  document.getElementById("harga1").innerHTML = harga1;
  var e = document.getElementById("kategori-"+harga1).innerHTML;
}
function hargaBerat2(val){
  let harga1 = document.getElementById("pilih1").value;
  document.getElementById("berat2").value = val;
  let e = document.getElementById("kategori-"+harga1).innerHTML;
  console.log(typeof parseInt(val));
  console.log(typeof parseInt(e));
  let a = parseInt(val);
  let b = parseInt(e)
  let total = a * b;
  document.getElementById('biaya_2').value = total;
}

function proses3()
{
  var harga2 = document.getElementById("pilih2").value;
  document.getElementById("harga2").innerHTML = harga2;
  var e = document.getElementById("kategori-"+harga2).innerHTML;
}
function hargaBerat3(val){
  let harga2 = document.getElementById("pilih2").value;
  document.getElementById("berat3").value = val;
  let e = document.getElementById("kategori-"+harga2).innerHTML;
  console.log(typeof parseInt(val));
  console.log(typeof parseInt(e));
  let a = parseInt(val);
  let b = parseInt(e)
  let total = a * b;
  document.getElementById('biaya_3').value = total;
}

function proses4()
{
  var harga3 = document.getElementById("pilih3").value;
  document.getElementById("harga3").innerHTML = harga3;
  var e = document.getElementById("kategori-"+harga3).innerHTML;
}
function hargaBerat4(val){
  let harga2 = document.getElementById("pilih3").value;
  document.getElementById("berat4").value = val;
  let e = document.getElementById("kategori-"+harga3).innerHTML;
  console.log(typeof parseInt(val));
  console.log(typeof parseInt(e));
  let a = parseInt(val);
  let b = parseInt(e)
  let total = a * b;
  document.getElementById('biaya_4').value = total;
}


function total(){
  let j1 = document.getElementById("biaya_1").value;
  let j2 = document.getElementById("biaya_2").value;
  let j3 = document.getElementById("biaya_3").value;

  j1 = parseInt(j1);
  j2 = parseInt(j2);
  j3 = parseInt(j3);

  let x = j1 + j2 + j3;
  console.log(x);
  document.getElementById("totalHarga").value = x;
}


function metran()
{
  var harga = document.getElementById("metbay1").value;
  let x='';
  harga=parseInt(harga);
  if(harga==0){
    x = 'CASH';
  }else{
    x ='SALDO'
  }
  document.getElementById("tampilPembayaran").innerHTML = x;
}
</script>

<script>
function myFunction() {
  var aksi = document.getElementById("myBtn").value;
  let x =` `;
  aksi=parseInt(aksi);
  if(aksi==1){
    x = 'DISERAHKAN';
  }else{
    x ='DIJEMPUT'
  }
  document.getElementById("metodeBayar0").checked = true;
  document.getElementById("bijil").innerHTML = x; 
}

function myFunction1() {
  var aksi = document.getElementById("myBtn").value;
  let x =` `;
  aksi=parseInt(aksi);
  if(aksi==1){
    x = 'DIJEMPUT';
  }else{
    x ='DISERAHKAN'
  }
  document.getElementById("metodeBayar1").checked = true;
  document.getElementById("bijil").innerHTML = x; 
}
</script>

<script>
function startCalc()
{
interval = setInterval("calc()",1);
}

function calc()
{
one = document.rega.harga.value;
two = document.rega.jumlah.value;
three = document.rega.diskon.value;
document.rega.total.value = (one * 1) + (two * 1) + (three * 1);
}

function stopCalc()
{
clearInterval(interval);}
</script>