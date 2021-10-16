<?php
   $title="Pesan Pengambilan";
   $fileJS='pengambilan-js';
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'spst');

   if(isset($_POST['insert'])) 
   {
     $sampah = $_POST ['sampah'];
     $jumlah = $_POST ['jumlah'];

     $query = "INSERT INTO jual (sampah,jumlah) VALUES ('$sampah','$jumlah') ";
     $query_run = mysqli_query($connection,$query); 
   
   if($query_run)
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
               <div class = "col-md">
                  <input type="text" id="example-helping" class="form-control" placeholder="Lokasi pengambilan sampah">
               </div>
               <div class = ".col-sm">
                  <button type="button" class="btn mb-2 btn-primary">Cari</button>
               </div>
               <div class = ".col-sm">
                  <button type="button" class="btn mb-2 btn-outline-primary" onclick="getLocation()">Lokasi saat ini</button>
                  
               </div>
             </div>
            <div id="mapid"></div>
            <div class = "row-sm">
             </div>
               <div class="container">
               <form action="" method="POST">  
               <label> Sampah </label><br>
                 <select name="sampah">
                 <option value="">- Plastik -</option>
                 <option value="PET">PET</option>
                   <option value="HDPE">HDPE</option>
                   <option value="PVC">PVC</option>
                   <option value="LDPE">LDPE</option>
                   <option value="PP">PP</option>
                   <option value="PS">PS</option>
      
                 <option value="">- Kertas -</option>
                   <option value="HVS">HVS</option>
                   <option value="KRT">Karton</option>
                   <option value="KRD">Kardus</option>
                 </optgroup>
                 <option value="">- Organik -</option>
                 <option value="SB">Sampah Basah</option>
                 <option value="SK">Sampah Kering</option>
               </optgroup>
               </select><br><br>
             </div> <!-- form-group -->
             <div class="form-group col-md-6">
               <label>Jumlah (Kilograms)</label><br>
               <input type="jumlah" class="int" name="jumlah"> </div>
               <input type="submit" class="txt" name="insert" value="Buat Pesanan"/>
               
              </div>
        </div>
    </div>
</div>
