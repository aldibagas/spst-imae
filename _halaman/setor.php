<?php
   session_start();
   $title="SETOR";
   if(isset($_POST['insert'])) 
   {
     
     $p1 = $_POST ['pesanan_1'];
     $j1 = $_POST ['jumlah_1'];
     $p2 = $_POST ['pesanan_2'];
     $j2 = $_POST ['jumlah_2'];
     $p3 = $_POST ['pesanan_3'];
     $j3 = $_POST ['jumlah_3'];
     $tanggal = $_POST ['tanggal'];
     $lat = $_POST['lat'];
     $long= $_POST['long'];

     $tanggal = date('Y-m-d', strtotime($tanggal));
     $query1 = "INSERT INTO `transaksi`(`idp`, `pesanan_1`, `jumlah_1`, `pesanan_2`, `jumlah_2`, `pesanan_3`, `jumlah_3`) VALUES ('2' ,'$p1','$j1','$p2','$j2','$p3','$j3') ";
     $query_run1 = mysqli_query($conn,$query1); 

     $data = mysqli_query($conn, 'SELECT COUNT(idt) AS jumlah FROM pemesanan'); 
     $row= mysqli_fetch_assoc($data); 

      
   if($query_run1)
   {
     echo ' <script type="text/javaScript"> alert("Data Tersimpan") 
     </script>';
   }

   else
   {
     echo ' <script type="text/javaScript"> alert("Data Gagal Tersimpan") 
     </script>';
   }

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

 }
?>
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
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="simple-select2">Sampah</label>
                            <select class="form-control select2" id="simple-select2" name ="pesanan_1">
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
                            </div> <!-- form-group -->
                            <div class="form-group col-md-4">
                            <label>Jumlah (Kilograms)</label>
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_1">
                            </div>
                            <div class="form-group col-md-4">
                            <label>Harga</label>
                            <input type="text" class="form-control" placeholder="rupiah" aria-label="berat sampah" name="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="simple-select2">Sampah</label>
                            <select class="form-control select2" id="simple-select2" name="pesanan_2">
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
                            </div> <!-- form-group -->
                            <div class="form-group col-md-4">
                            <label>Jumlah (Kilograms)</label>
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_2">
                            </div>
                            <div class="form-group col-md-4">
                            <label>Harga</label>
                            <input type="text" class="form-control" placeholder="rupiah" aria-label="berat sampah" name="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="simple-select2">Sampah</label>
                            <select class="form-control select2" id="simple-select2" name="pesanan_3">
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
                            </div> <!-- form-group -->
                            <div class="form-group col-md-4">
                            <label>Jumlah (Kilograms)</label>
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_3">
                            </div>
                            <div class="form-group col-md-4">
                            <label>Harga</label>
                            <input type="text" class="form-control" placeholder="rupiah" aria-label="berat sampah" name="">
                            </div>
                        </div>


  <br>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
      <div class="row">
 <div class="col col-md-4">
                            <label for="simple-select2">Sampah</label>
                            <select class="form-control select2" id="simple-select2" name="pesanan_3">
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
 <div class="col col-md-4">
 <label>Jumlah (Kilograms)</label>
<input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_3">
 </div>
 <div class="col col-md-4">
 <label>Harga</label>
<input type="text" class="form-control" placeholder="rupiah" aria-label="berat sampah" name="">
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
                        <div class="modal-footer">
                            <input type="hidden" name="lat" id="insertLat" value="">
                            <input type="hidden" name="long" id="insertLong" value="">
                            <input type="submit" class="btn mb-2 btn-primary" name="insert" value="SETOR">
                        </div>
                      </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>