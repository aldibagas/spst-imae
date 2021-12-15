<?php
        mysqli_connect("localhost","root","");   
        mysqli_select_db("db_images");
        $lokasi_file    = $_FILES['gambar']['tmp_name'];
        $nama_file      = $_FILES['gambar']['name'];
        $acak           = rand(1,99);
        $nama_file_unik = $acak.$nama_file;
        $vdir_upload = "img/";
        $vfile_upload = $vdir_upload . $nama_file_unik;
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $vfile_upload);
       
        $simpan=$_POST['simpan'];   
       
        if ($simpan){
            if (empty($lokasi_file)){
            //echo "<center><font color='#FF0000' size='+2'>Maaf Anda belum memilih Gambar<br></font></center>";
            ?><script language="javascript">alert('Maaf Anda belum memilih Gambar')</script><?php
            ?><script>document.location.href="input_image.php";</script><?php
    }else{
        mysqli_query("INSERT INTO tb_images VALUES ('','$nama_file_unik')")or die (Error.mysqli_error());
        //echo "<center><font color='#FF0000' size='+1'>Berhasil disimpan</font></center><br>";
                ?><script language="javascript">alert('Images Berhasil Disimpan')</script><?php
            ?><script>document.location.href="view_image.php";</script><?php
    }
        }
        ?>

    <title>Input Images</title>
    <form action="<?php $_SERVER[PHP_SELF]; ?>" method="post" enctype="multipart/form-data" name="form" target="_self" id="form">
    <table width="63%" border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td colspan="3"><input name="gambar" type="file" id="gambar" size="30" maxlength="30" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3"><input type="submit" name="simpan" id="simpan" value="Simpan" class="button"/></td>
      </tr>
    </table>
    </form>