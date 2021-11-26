<?php
   session_start();
   include '_helpers/connect.php';
   $title="SETOR";
   
   if(isset($_POST['insert'])) 
   {
    $p1 = $_POST ['pesanan_1'];
    $p2 = $_POST ['pesanan_2'];
    $p3 = $_POST ['pesanan_3'];
    $p4 = $_POST ['pesanan_4'];

    $r1 = $_POST ['biaya_1'];
    $r2 = $_POST ['biaya_2'];
    $r3 = $_POST ['biaya_3'];
    $r4 = $_POST ['biaya_4'];

    $mt1 = $_POST ['metran_1']; 
    
    $sql1 = "INSERT INTO `transaksi` (`idp1`, `idp2`, `aktivitas`, `data_sampah`, `harga_total`, `metode_bayar`, `metode_transaksi`, `status_setor`, `jumlah_tarik`, `sandi`, `status_tarik` ) 
    VALUES ('1', '0', '0', '$p1 / $p2 / $p3 / $p4', '$r1', '0', '$mt1', '1', '0', '0', '0')";

    $sql2 = "INSERT INTO `notifikasi` (`idp`, `data_transaksi`, `biaya`, `status`) 
    VALUES ('1', '$p1 / $p2 / $p3 / $p4', '0', '0')";

    $query2  = mysqli_query($conn,$sql1);
    $query3  = mysqli_query($conn,$sql2);
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
<form action="" method="POST">
<div class="row">
    <div class="col">
    <label>Jenis Sampah</label>
    <br>
                            <select class="form-control select2" id="pilih" onchange="proses1()" name ="pesanan_1">
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
                            <input type="text" onchange="hargaBerat(this.value)" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_1">
    </div>

  </div>
  <div class="row">
    <div class="col">
    <select class="form-control select2" id="pilih1" onchange="proses2()" name ="pesanan_2">
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
    <input type="text" onchange="hargaBerat2(this.value)" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_2">
    </div>
  </div>

  <div class="row">
    <div class="col">
    <select class="form-control select2" id="pilih2" onchange="proses3()" name ="pesanan_3">
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
      <input type="text" onchange="hargaBerat3(this.value)" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_3">
    </div>
  </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                           
                            <?php
                              $hargaQuery = 'select * from harga';
                              $hargaRun = mysqli_query($conn, $hargaQuery);
                              while($harga = mysqli_fetch_assoc($hargaRun)){
                                echo '<div style="display:none" id="kategori-'.$harga['kategori'].'">'.$harga['daftarharga'].'</div>';
                              }
                            ?>
                            </div> <!-- form-group -->
                            <div class="form-group col-md-4">
                            
                            </div>
                        </div>

  <br>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div class="row">
    <div class="col">
    <select class="form-control select2" id="pilih2" onchange="proses3()" name ="pesanan_3">
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
    <input type="text" onchange="hargaBerat3(this.value)" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_3">
    </div>
  </div>
  </div>
</div>
    </div>
  <br>
    <p>
      <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        +
      </a>
    </p>

  <div class="row d-flex justify-content-center">
		<div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
	  </div>
      <center> <h2>METODE BAYAR</h2> </center>
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
                    <span class="h1 mb-0">AMBIL DI RUMAH</span>
                    <p class="text-muted"></p>
                      <li>Pilih Disini Jika Anda Hendak Mencairkan Uang Secara Tunai</li>
                    </ul>
                    <a href="<?=url('navigasi')?>">
                    <button type="button" class="btn mb-2 btn-primary btn-lg">Pilih</button>
</a>                    
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
<div class="card mb-4">      
                  <div class="card-body text-center my-4">
                    <a href="#">
</a>
                    <ul class="list-unstyled">
                    <p class="text-muted"></p>
                    <span class="h1 mb-0">SETOR KE BANK</span>
                    <p class="text-muted"></p>
                      <li>Pilih Disini Jika Anda Hendak Setor Ke Bank</li>
                    </ul>
                    <a href="<?=url('setor')?>">
                    <button type="button" class="btn mb-2 btn-primary btn-lg">Pilih</button>
</a>               
</div> <!-- .card-body -->
                </div> <!-- .card -->
</div>

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

  <div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">TRANSAKSI</h5>
    <p class="card-text">Silahkan untuk memilih metode transaksi dibawah ini :</p>
    <p class="card-text"><small class="text-muted">
    <div class="form-group">
  <label for="sel1">PILIH DISINI</label>
  <select class="form-control" id="simple-select2" name="metran_1">
  <optgroup label="METODE TRANSAKSI">
    <option value=0> TUNAI</option>
    <option value=1 >DITABUNG</option>
  </select>
</div>
<br>
<br>
<br>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  KIRIM
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center> <h1>Konfirmasi Pesanan</h1> </center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="text-muted"></p>
                      <h2>Data Transaksi</h2>
                      <br>
  <form>
  <div class="row">
    <div class="col">
      <h3><input<span id="harga"></span>> <h3>
    </div>
    <h1>+</h1>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
    <h3> = </h3>
    <h4>&nbsp Rp. </h4>
    <div class="col">
    <output type="text" class="form-control" placeholder="rupiah" aria-label="berat sampah" id="biaya_1" name="biaya_1">
    </div>
  </div>
</form>
<form>
  <div class="row">
    <div class="col">
    <h3><input<span id="harga1"></span>> <h3>
    </div>
    <h1>+</h1>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
    <h3> = </h3>
    <h4>&nbsp Rp. </h4>
    <div class="col">
    <output type="text" class="form-control" placeholder="rupiah" aria-label="berat sampah" id="biaya_2" name="biaya_2">
    </div>
  </div>
</form>
<form>
  <div class="row">
    <div class="col">
    <h3><input<span id="harga2"></span>> <h3>
    </div>
    <h1>+</h1>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
    <h3> = </h3>
    <h4> &nbsp Rp.</h4>
    <div class="col">
    <output type="text" class="form-control" placeholder="rupiah" aria-label="berat sampah" id="biaya_3" name="biaya_3">
    </div>
  </div>
</form>
<div class="col-sm px-0 my-3">
			<div class="border border-secondary">
      </div>
		</div>

    <h1 class="modal-title" id="exampleModalLabel"><h3>Total</h3></h1>
    <br>

    <h3>Keterangan</h3><br>
    <?php
                  $Query = "SELECT * FROM transaksi ORDER BY idt DESC LIMIT 1";
                  $Run = mysqli_query($conn, $Query);
                  
                  if(mysqli_num_rows($Run)>0){
                    while($Fetch = mysqli_fetch_assoc($Run)){
                      echo"
                        <h5> Metode Transaksi &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp ".$Fetch['metode_bayar']."</h5>";
                    }
                  }
    ?>
    <br>
    <?php
                  $Query = "SELECT * FROM transaksi ORDER BY idt DESC LIMIT 1";
                  $Run = mysqli_query($conn, $Query);
                  
                  if(mysqli_num_rows($Run)>0){
                    while($Fetch = mysqli_fetch_assoc($Run)){
                      echo"
                        <h5> Metode Bayar &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp ".$Fetch['status_setor']."</h5>";
                    }
                  }
    ?>

                        <div class="modal-footer">
                            <input type="submit" class="btn mb-2 btn-primary" type="submit" name="insert" value="SETOR">
                        </div>

<script>
function proses1()
{
  var harga = document.getElementById("pilih").value;
  document.getElementById("harga").innerHTML = harga;
  var e = document.getElementById("kategori-"+harga).innerHTML;
}
function hargaBerat(val){
  let harga = document.getElementById("pilih").value;
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
  let e = document.getElementById("kategori-"+harga2).innerHTML;
  console.log(typeof parseInt(val));
  console.log(typeof parseInt(e));
  let a = parseInt(val);
  let b = parseInt(e)
  let total = a * b;
  document.getElementById('biaya_3').value = total;
}
</script>