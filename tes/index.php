<?php
include'conn.php';
    if(isset($_POST['submit'])){

        $nama = $_POST['nama'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM `pengguna` WHERE `Nama` = '$nama' and `Sandi` = '$pass'";
        $run = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($run);
        echo $row['Nama'];
    }else{
        echo'0';
    }
    $sql1 = "SELECT * FROM `pemesanan`";
    $run1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($run1)>0){
        while($row1=mysqli_fetch_assoc($run1)){
            echo $row1['pesanan_1'].' '.$row1['pesanan_2'].'</br>';
        }
    }
?>
<html>
<head> 
</head>
<body>

<form method="post" action="">
    <input type="text" name="nama">
    <input type="password" name="pass">
    <input type ="submit" name="submit">
</form>

</body>
</html>