<?php
        mysql_connect("localhost","root","");   
        mysql_select_db("db_images");
       
        $id=$_GET['id'];
    $sql = mysql_query("SELECT * FROM tb_images WHERE id='$id'")or die ("gagal query!".mysql_error());
    while($hs = mysql_fetch_array($sql)){      
            $img=$hs['images'];
    }
        ?>
    <title>Input Images</title>
    <form action="<?php $_SERVER[PHP_SELF]; ?>" method="post" enctype="multipart/form-data" name="form" target="_self" id="form">
    <table width="63%" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3"><img src='img/<? echo "$img";?>' title='Edit' width="150" height="120"/></td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td colspan="3"><input name="gambar" type="file" id="gambar" size="30" maxlength="30" />
          <input name="x" type="hidden" id="x" value="<? echo "$img";?>" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3"><input type="submit" name="update" id="update" value="Update" class="button"/></td>
      </tr>
    </table>
    </form>
    <?
    $x=$_POST['x'];
    $foto         =$_FILES['gambar']['tmp_name'];
    $foto_name     =$_FILES['gambar']['name'];
    $acak        = rand(1,99);
    $tujuan_foto = $acak.$foto_name;
    $tempat_foto = 'img/'.$tujuan_foto;
           
    if (isset($_POST['update'])){
    if (!$foto==""){
        $buat_foto=$tujuan_foto;
        $d = 'img/'.$x;
        @unlink ("$d");
        copy ($foto,$tempat_foto);
    }else{
        $buat_foto=$x;
    }
                $qu=mysql_query("UPDATE tb_images SET
                images='$buat_foto'
                WHERE id='$id'")or die (mysql_error());
               
        ?><script language="javascript">alert("Data Berhasil Diupdate")</script><?
        ?><script>document.location='view_image.php';</script><?
        }
    ?>