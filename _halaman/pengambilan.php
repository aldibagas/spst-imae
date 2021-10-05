<?php
   $title="Pesan Pengambilan";
   $fileJS='pengambilan-js';
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
        </div>
    </div>
</div>