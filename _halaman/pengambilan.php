<?php
   session_start();
   $title="Pesan Pengambilan";
   $fileJS='pengambilan-js';
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'spst');

   if(isset($_POST['insert'])) 
   {
     
     $u = $_POST [1];
     $p1 = $_POST ['pesanan_1'];
     $j1 = $_POST ['jumlah_1'];
     $p2 = $_POST ['pesanan_2'];
     $j2 = $_POST ['jumlah_2'];
     $p3 = $_POST ['pesanan_3'];
     $j3 = $_POST ['jumlah_3'];
     $lat = $_POST['lat'];
     $long= $_POST['long'];
     $id= $_POST['idpemesan'];

     $query1 = "INSERT INTO `pemesanan`(`user_id`, `pesanan_1`, `jumlah_1`, `pesanan_2`, `jumlah_2`, `pesanan_3`, `jumlah_3`) VALUES ('$u' ,'$p1','$j1','$p2','$j2','$p3','$j3') ";
     $query_run1 = mysqli_query($connection,$query1); 

     $query2 = "INSERT INTO `navigasi`(`user_id`, `latitute`, `longitude`) VALUES ( '$u' , '$lat','$long') ";
     $query_run2 = mysqli_query($connection,$query2); 
   if($query_run1 && $query_run2)
   {
     echo ' <script type="text/javaScript"> alert("Data Tersimpan") 
     </script>';
   }

   else
   {
     echo ' <script type="text/javaScript"> alert("Data Gagal Tersimpan") 
     </script>';
   }
 }
?>
<div class="mb-2 align-items-center">
    <div class="card shadow mb-4">
         <div class="card-body">
             <p id="notif" class="lead text-muted"></p>
             <div class = "row">
               <div class = "col-7">
                 <div id="testTampil"></div>
                  <input type="text" id="example-helping" class="form-control" placeholder="Lokasi pengambilan sampah">
               </div>
               <div class = "col d-grid gap-2 p-0">
                  <button type="button" class="btn mb-2 btn-primary">Cari</button>
               </div>
               <div class = "col d-grid gap-2 p-0">
                  <button type="button" class="btn btn-outline-primary" onclick="getLocation()">Lokasi saat ini</button>
               </div>
               <div class = "col d-grid gap-2 p-0">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaltransaksi">Buat Pesanan</button>
               </div>
             </div>
            <div id="mapid"></div>
            <!-- Modal -->
            <div class="modal fade" id="modaltransaksi" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Data Pesanan</h5>
                    </div>
                    <div class="modal-body">
                      <form action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="simple-select2">sampah</label>
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
                            <div class="form-group col-md-6">
                            <label>Jumlah (Kilograms)</label>
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_1">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
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
                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
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
                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_3">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="lat" id="insertLat" value="">
                            <input type="hidden" name="long" id="insertLong" value="">
                            <input type="submit" class="btn mb-2 btn-primary" name="insert" value="pesan">
                        </div>
                      </form>
                    </div>
                  
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
