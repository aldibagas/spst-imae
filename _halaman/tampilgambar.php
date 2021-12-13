
            <?php
            include "koneksi.php";
            $tampil = mysqli_query($mysqli,"select * from gambar ORDER BY id DESC LIMIT 1");
            $sql = mysqli_num_rows($tampil);
                while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><img width="200" height="250" src="<?php echo "images/".$hasil['nama'];?>"></td>
            </tr>
            <?php
                
                }
            ?>
  