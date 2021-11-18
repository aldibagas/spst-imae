<?php
   $title="Navigasi";
   $fileJS='navigasi-js';
   $Template=true;

   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,'spst');
?>

<div class="mb-2 align-items-center">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div id="mapid"></div>
        </div>
    </div>
</div>
