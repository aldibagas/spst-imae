<?php

//ambil id
$nama = $_SESSION['nama'];
$sql = "select * from pengguna where Nama = '$nama'";
$run = mysqli_query($conn, $sql);
$fch = mysqli_fetch_assoc($run);
$id = $fch['idp'];

//cek notofikasi
$sqlcek = "select * from notifikasi where idpetugas = $id and status_tarik is null order by idt desc";
$runcek = mysqli_query($conn, $sqlcek);
$numNotif = mysqli_num_rows($runcek);

//hapus notifikasi pengguna
if(isset($_POST['btnPenggunaHapusNtf'])){
  $sql = "update notifikasi set status_setor = '2' where idp2 = $id";
  mysqli_query($conn, $sql);
}
?>


<div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" style="height:auto!important;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Notifikasi <?php echo $numNotif; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group list-group-flush my-n3">
        </br>
        <?php
                  if ($_SESSION['kelas']=="petugas") {
                ?>
          <div class="list-group list-group-flush my-n3">Penarikan Uang</div></br>
              <?php
              if(mysqli_num_rows($runcek)>0){
                while($fch = mysqli_fetch_assoc($runcek)){
                  echo'
                  <a href = "?halaman=konfirmasipesanan&notif='.$fch['id'].'">
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-share fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Pengajuan Penarikan Uang Sebesar Rp '.$fch['jumlah_tarik'].'</strong></small>
                        <div class="my-0 text-muted small">id penarik: '.$fch['idp2'].'</div>
                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                      </div>
                    </div>
                  </div>
                  </a>
                  ';
                }
              }
              ?>
              <div class="list-group list-group-flush my-n3">Setor Sampah</div></br>
              <?php
              //notifikasi untuk setor sampah
              $sqlsetorsampah = "select * from notifikasi where idpetugas = $id and status_setor is null order by idt desc";
              $runsetorsampah = mysqli_query($conn, $sqlsetorsampah);
              if(mysqli_num_rows($runsetorsampah)>0){
                while($fch = mysqli_fetch_assoc($runsetorsampah)){
                  echo'
                    <a href = "?halaman=konfirmasi-setor&notif='.$fch['idt'].'">
                    <div class="list-group-item bg-transparent">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="fe fe-download fe-24"></span>
                        </div>
                        <div class="col">
                          <small><strong>Penyetoran Sampah Berjenis: '.$fch['data_sampah'].'</strong></small>
                          <div class="my-0 text-muted small">id penarik: '.$fch['idp2'].'</div>
                          <small class="badge badge-pill badge-light text-muted">1m ago</small>
                        </div>
                      </div>
                    </div>
                    </a>
                  ';
                }
              }
              ?>

            <div class="modal-body">
            <div class="list-group list-group-flush my-n3">
              <?php
              if(mysqli_num_rows($runcek)>0){
                while($fch = mysqli_fetch_assoc($runcek)){
                  echo'
                  <a href = "?halaman=konfirmasipesanan&notif='.$fch['idt'].'">
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-download fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Pengajuan Penyetoran Sampah '.$fch['data_sampah'].'</strong></small>
                        <div class="my-0 text-muted small">id penarik: '.$fch['idp2'].'</div>
                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                      </div>
                    </div>
                  </div>
                  </a>
                  ';
                }
              }
            }?>


              <?php
              
                  if ($_SESSION['kelas']=="pengguna") {
                ?>

              <div class="list-group-item bg-transparent">
                <?php
                //notifikasi untuk penerimaan sampah pengguna
                $sqlterima = "select * from notifikasi where idp2 = '$id' and status_setor = '1' order by idt desc";
                $runterima = mysqli_query($conn, $sqlterima);
                if(mysqli_num_rows($runterima)>0){
                  while($fch = mysqli_fetch_assoc($runterima)){
                    echo'
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-inbox fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Petugas menyetujui pencairan uang sebesar : '.$fch['harga_total'].'</strong></small>
                        <div class="my-0 text-muted small">Petugas</div>
                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                      </div>
                    </div>
                    ';
                  }
                  //hapus notifikasi pengguna
                  echo'
                    <form method="post" action="">
                      <input type="submit" value="Hapus notifikasi" name="btnPenggunaHapusNtf" class="btn btn-danger">
                    </form>
                  ';
                }
                ?>

                    <?php } else { ?>
              
                          
                        </div>
                        </a>
                        <?php } ?>
              
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="height:auto!important;" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body px-5">
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-success justify-content-center">
                  <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                </div>
                <p>Control area</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                </div>
                <p>Activity</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                </div>
                <p>Droplet</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                </div>
                <p>Upload</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-users fe-32 align-self-center text-white"></i>
                </div>
                <p>Users</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                </div>
                <p>Settings</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main> <!-- main -->