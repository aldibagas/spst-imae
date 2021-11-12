<?php

if (isset($_GET["logout"])) {
    $_SESSION["notify"] = "You have been logged out.";
    header("location:index.php?halaman=login");
    

    
}
?>

if (isset($_GET["logout"])) {
    $_SESSION["notify"] = "You have been logged out.";
    header("Location: index.php");