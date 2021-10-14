<?php

session_start();
if($_SESSION['nama']){
    header("location:index.php?halaman=login");

    
}
?>
