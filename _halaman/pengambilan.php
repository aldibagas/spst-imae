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
            <div class = "row-sm">
                <?=button_modal('Buat Pesanan', 'm_pesanan')?>
             </div>
             <?=modal_select('m_pesanan', 'Masukkan Data Sampah', '
             <div class="form-row">
             <div class="form-group col-md-6">
               <label for="simple-select2">sampah</label>
               <select class="form-control select2" id="simple-select2">
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
               <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah">
             </div>')?>
        </div>
    </div>
</div>