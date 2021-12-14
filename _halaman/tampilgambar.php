
            <?php
            include "koneksi.php";
            $tampil = mysqli_query($mysqli,"select * from gambar ORDER BY id DESC LIMIT 1");
            $sql = mysqli_num_rows($tampil);
                while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><img width="180" height="250" src="<?php echo "images/".$hasil['nama'];?>"></td>
            </tr>
            <?php
                
                }
            ?>
            <h4 class="mb-0">Foto Anda Berhasil Disimpan</h4>
            <?php 
            $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
            ?>
            <button onclick="goBack()">Go Back</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>

  