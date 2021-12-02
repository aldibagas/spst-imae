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
?>

<div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Notifikasi <?php echo $numNotif; ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
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
                        <span class="fe fe-box fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>jumlah uang yang di ambil : '.$fch['jumlah_tarik'].'</strong></small>
                        <div class="my-0 text-muted small">id penarik: '.$fch['idp2'].'</div>
                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                      </div>
                    </div>
                  </div>
                  </a>
                  ';
                }
              }?>


              <?php
              
                  if ($_SESSION['kelas']=="pengguna") {
                ?>

              <div class="list-group-item bg-transparent">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="fe fe-inbox fe-24"></span>
                        </div>
                    <div class="col">
                          <small><strong>Petugas menyetujui pencairan uang</strong></small>
                          <div class="my-0 text-muted small">Petugas</div>
                          <small class="badge badge-pill badge-light text-muted">2m ago</small>
                        </div>
                      </div>
                    </div>
                    <?php } else { ?>
              <div class="list-group-item bg-transparent">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="fe fe-download fe-24"></span>
                        </div>
                        <div class="col">
                          <small><strong>Pesanan masuk</strong></small>
                          <a class="nav-link" href="<?=url('konfirmasipesanan')?>">
                          <div class="my-0 text-muted small">Pengguna 1</div>
                          <small class="badge badge-pill badge-light text-muted">2m ago</small>
                          <div class="row"> 
                            <div class="col">
                             </div>
                          </div>
                          
                        </div>
                        </a>
                        <?php } ?>
              
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Hapus Semua</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
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