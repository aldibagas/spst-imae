<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menampilkan Gambar</title>
</head>

<body>
<table width="70%" border="1" cellpadding="4" cellspacing="4" align="center">
<tr>
    <th>ID</th>
    <th>FOTO</th>
    <th>KETERANGAN</th>
    <th colspan="3">AKSI</th>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("spst");
$sql=mysql_query("SELECT * FROM pengguna");
while ($data=mysql_fetch_array($sql)){
?>
<tr>
    <td><?=$data['id']?></td>
    <td><?="<img src='image/".$data['foto']."'style='width:200px; height:100px;'>"?></td>
    <td><?=$data['keterangan']?></td>
    <td><a href="edit3.php?id=<?=$data['id']?>" style="background-color:#009900; border-radius:50px; padding:5px; text-decoration:none; color:#FFFFFF;">Edit</a></td>
    <td><a href="hapus?id=<?=$data['id']?>" style="background-color:#009900; border-radius:50px; padding:5px; text-decoration:none; color:#FFFFFF;">Hapus</a></td>
</tr>
<?php }?>
</table>
</body>
</html>
