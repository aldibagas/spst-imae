<?php
session_start();
unset($_session);
session_destroy();
session_write_close();
header('location:index.php?halaman=login');
die;
?>
