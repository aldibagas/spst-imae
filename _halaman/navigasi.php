<?php
   $title="Navigasi";
   $fileJS='navigasi-js';
   $Template=true;

   $Cari="SELECT * FROM navigasi where idt = 18";
   $Tampil = mysqli_query($conn, $Cari);
   $row = mysqli_fetch_assoc($Tampil);
   echo "<div id='lat' style='visibility:hidden'>".$row['latitude']."</div>
         <div id='long' style='visibility:hidden'>".$row['longitude']."</div>
   ";
?>

<div class="mb-2 align-items-center">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div id="mapid"></div>
        </div>
    </div>
</div>
