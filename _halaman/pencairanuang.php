<?php
   session_start();
   $title="Pencairan Uang";
   $masuk = 10000;
   $keluar = 5000;
   $saldo = $masuk-$keluar;
?>
<?=content_open_full('')?>
<form role="form" method="POST">  
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group">
                                                <?php 
                                            $tanggal = mktime(date('m'), date("d"), date('Y'));
                                            echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
                                            date_default_timezone_set("Asia/Jakarta");
                                            $jam = date ("H:i:s");
                                            echo " | Pukul : <b> " . $jam . " " ." </b> ";
                                                ?>
                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Saldo yang tersedia</p>
                                            <span class="h2">Rp <?php echo$saldo;?></span>
                                            
                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Jumlah Saldo Yang ditarik</p>
                                              <input class="form-control" name="jml" type="number" />
                                            </div>
                                            <div class="form-group">
                                            <p class="mb-1 small text-muted">Waktu Pengambilan Uang</p>
                                                <input class="form-control" name="time" type="time" />
                                            </div>
                                            <?=button_modal('Ajukan','confirm-pass')?>
                                            </div>
<?=content_close()?>
<?=modal_tanpa_button($id='confirm-pass', 'Konfirmasi Password', '
 <label for="inputPassword" class="sr-only">Password</label>
 <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
</div>
<div class="checkbox mb-3">
</div>
<button class="btn btn-lg btn-primary btn-lg" type="submit">Konfirmasi</button>
')?>
