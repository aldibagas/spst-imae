<?php
   session_start();
   $title="Transaksi";
   $masuk = 10000;
   $keluar = 5000;
   $saldo = $masuk-$keluar;
?>
<div class="card-deck my-4">
                <div class="card mb-4 shadow">
                  <div class="card-body text-center my-4">
                    <a href="#"> 
                    </a>
                    <p class="text-muted"></p>
                    <span class="h1 mb-0">Setor Sampah</span>
                    <p class="text-muted"></p>
                    <ul class="list-unstyled">
                      <li>Setor sampah adalah program yang menawarkan setiap orang untuk berpartisipasi aktif mengelola sampahnya secara bertanggung jawab.</li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                    <button type="button" class="btn mb-2 btn-primary btn-lg" data-toggle="modal" data-target="#modaltransaksi">SETOR</button>                    
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
<div class="card mb-4">      
                  <div class="card-body text-center my-4">
                    <a href="#">
</a>
                    <p class="text-muted"></p>
                    <span class="h1 mb-0">Pencairan Uang</span>
                    <p class="text-muted"></p>
                    <ul class="list-unstyled">
                      <li>Uang yang telah terkumpul dari tabungan, dapat dicairkan melalui kantor. Nominal untuk pencairan uang sesuai dengan keinginan pelanggan.</li>
                      <li</li>
                      <li></li>
                      <li></li>
                    </ul>
                     <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modaltarik">AJUKAN</button>
                     <div class="modal fade" id="modaltarik" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Lengkapi Semua Data</h5>
                    </div>
                    <div class="modal-body">
                                          
                                          <form role="form" method="POST">  
                                            <div class="form-group">
                                                <?php
                                                echo date("Y-m-d");
                                                "</br>"
                                                ?> 
                                            </div>

                                            <div class="form-group">
                                                <label>Saldo yang Tersedia</label>
                                            </br>
                                                <?php echo$saldo;?>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Uang yang Ditarik</label>
                                                <input class="form-control" name="jml" type="number" />
                                            </div>
                                            <input type="submit" class="btn mb-2 btn-primary" name="insert" value="Ajukan">
               </div>
             </div>
             </div>
                      </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- Modal -->
            <div class="modal fade" id="modaltransaksi" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Data Pesanan</h5>
                    </div>
                    <div class="modal-body">
                      <form action="" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="simple-select2">Sampah</label>
                            <select class="form-control select2" id="simple-select2" name ="pesanan_1">
                                <optgroup label="Plastik">
                                  <option value="PET">PET</option>
                                  <option value="HDPE">HDPE</option>
                                  <option value="PVC">PVC</option>
                                  <option value="LDPE">LDPE</option>
                                  <option value="PP">PP</option>
                                  <option value="PS">PS</option>
                                </optgroup>
                                <optgroup label="Kertas">
                                  <option value="HVS">HVS</option>
                                  <option value="KRT">Karton</option>
                                  <option value="KRD">Kardus</option>
                                </optgroup>
                                <optgroup label="Organik">
                                  <option value="SB">Sampah Basah</option>
                                  <option value="SK">Sampah Kering</option>
                                </optgroup>
                            </select>
                            </div> <!-- form-group -->
                            <div class="form-group col-md-6">
                            <label>Jumlah (Kilograms)</label>
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_1">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <select class="form-control select2" id="simple-select2" name="pesanan_2">
                                <optgroup label="Plastik">
                                  <option value="PET">PET</option>
                                  <option value="HDPE">HDPE</option>
                                  <option value="PVC">PVC</option>
                                  <option value="LDPE">LDPE</option>
                                  <option value="PP">PP</option>
                                  <option value="PS">PS</option>
                                </optgroup>
                                <optgroup label="Kertas">
                                  <option value="HVS">HVS</option>
                                  <option value="KRT">Karton</option>
                                  <option value="KRD">Kardus</option>
                                </optgroup>
                                <optgroup label="Organik">
                                  <option value="SB">Sampah Basah</option>
                                  <option value="SK">Sampah Kering</option>
                                </optgroup>
                            </select>
                            </div> <!-- form-group -->
                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_2">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <select class="form-control select2" id="simple-select2" name="pesanan_3">
                                <optgroup label="Plastik">
                                  <option value="PET">PET</option>
                                  <option value="HDPE">HDPE</option>
                                  <option value="PVC">PVC</option>
                                  <option value="LDPE">LDPE</option>
                                  <option value="PP">PP</option>
                                  <option value="PS">PS</option>
                                </optgroup>
                                <optgroup label="Kertas">
                                  <option value="HVS">HVS</option>
                                  <option value="KRT">Karton</option>
                                  <option value="KRD">Kardus</option>
                                </optgroup>
                                <optgroup label="Organik">
                                  <option value="SB">Sampah Basah</option>
                                  <option value="SK">Sampah Kering</option>
                                </optgroup>
                            </select>
                            </div> <!-- form-group -->
                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="berat sampah" aria-label="berat sampah" name="jumlah_3">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="lat" id="insertLat" value="">
                            <input type="hidden" name="long" id="insertLong" value="">
                            <input type="submit" class="btn mb-2 btn-primary" name="insert" value="Setor">
                        </div>
                      </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>