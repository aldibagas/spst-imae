<?php
@session_start();

$mysqli = new mysqli("localhost", "root", "", "spst");

$data = mysqli_query($conn, 'SELECT SUM(status_tarik) AS value_sum FROM notifikasi'); 
$row = mysqli_fetch_assoc($data); 
$notif = $row['value_sum'];
?>

<style>
  img {
     border-radius: 20%;
}
 sumber: https://www.posciety.com/cara-membuat-gambar-bulat-melingkar-bundar-html-css/
</style>
    <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          
          <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
              <span class="fe fe-bell fe-16"></span>
              <?php 
              if($notif != 0){ echo'<span class="dot dot-md bg-success"></span>'; } ?>
            </a>
          </li>
          <?php
           $nama = $_SESSION['nama'];
            $sqlId = "select * from pengguna where Nama = '$nama'";
            $idRun = mysqli_query($conn, $sqlId);
            $ambilId = mysqli_fetch_assoc($idRun);
            $id  = $ambilId['idp'];
            $tampil = mysqli_query($mysqli,"SELECT * FROM gambar WHERE idp=$id ORDER BY id=$id DESC LIMIT 1");
            $sql = mysqli_num_rows($tampil);
                while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><img class="img-circle" width="40"height="45" src="<?php echo "_halaman/images/".$hasil['nama'];?>"></td>
            </tr>
            <?php
                
                }
            ?>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="index.php?halaman=profil">Profil</a>
              <a class="dropdown-item" href="<?=url('logout')?>">Keluar</a>
            </div>
          </li>
        </ul>
    </nav>