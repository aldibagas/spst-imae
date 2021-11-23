<?php
   session_start();
   $title="Pencairan Uang";
   $masuk = 10000;
   $keluar = 5000;
   $saldo = $masuk-$keluar;
?>
<form role="form" method="POST">  
                                            <div class="form-group">

                                            </div>
                                            <div class="form-group">
                                                <label>Saldo yang Tersedia</label>
                                            </br>
                                                <?php echo$saldo;?>
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
                                                <label>Jumlah Uang yang Ditarik</label>
                                                <input class="form-control" name="jml" type="number" />
                                            </div>
                                            
               <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modaltarik">Ajukan</button>;
                     <div class="modal fade" id="modaltarik" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel"></h5>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
          </div>
          <div class="checkbox mb-3">
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Konfirmasi</button>
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
               </div>
               </div>
               </div>

               <div class="modal fade" id="modaltarik" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel"></h5>
                    </div>
                    <div class="modal-body">
                                          
                                          <form role="form" method="POST">  
                                            <div class="form-group">

                                            <div class="form-group">
                                                <label>Jumlah Uang yang Ditarik</label>
                                                <input class="form-control" name="jml" type="number" />
                                                <div class="form-group">
                                                <label for="inputPassword" class="sr-only">Password</label>
                                                <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
                                            </div>
                                            <div class="checkbox mb-3">
                                             </div>
                                            <button class="btn btn-lg btn-primary btn-block" type="submit">Konfirmasi</button>
                                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="batal">Batal</button>
                                                <button type="button" class="btn btn-primary btn-lg" ><a href="index.php?halaman=confirm-pass">Kirim</button>
                                            </div>

<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Penarikan Uang</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php 

                                    		$no= 1;

                                    	?>

        
                                            </td>
                                        </tr>

                                   
                                        	
                                     
                                    </tbody>
                                     <tr>

                                    </tr>
                                 </table>
                            </div>

                         <!--halaman tambah-->

                        <div class="panel-body">
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Lengkapi Semua Data</h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <form role="form" method="POST">  
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input class="form-control" type="date" name="tgl" />
                                            </div>

                                            <div class="form-group">
                                                <label>Jumlah Uang yang Ditarik</label>
                                                <input class="form-control" name="jml" type="number" />
                                            </div>


                                            <div class="form-group">
                                                <label>Saldo yang Tersedia</label>
                                                <input class="form-control" name="jml" type="int" />
                                            </div>
     
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                       </form>


                                        </div>

                                </div>
                            </div>
                        </div>
                   

                        <?php 

                            if (isset($_POST['simpan'])) {
                                
                                $kode = $_POST['kode'];
                                $ket = $_POST['ket'];
                                $tgl = $_POST['tgl'];
                                $jml = $_POST['jml'];

                                $sql = $koneksi->query("insert into kas (kode, Keterangan, tgl, jumlah, jenis, keluar)values('$kode', '$ket', '$tgl', 0, 'keluar', '$jml')");

                                if ($sql) {
                                    ?>
                                        <script type="text/javascript">
                                        alert("Simpan Data Berhasil");
                                        window,location.href="?page=keluar";
                                       </script>
                                    <?php
                                   }   
                            }

                        ?>
                        <h3></h3>
                      <div class="panel-body">
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                                        </div>
                                        <div class="modal-body">
                                          
                 <!--akhir halaman tambah-->

                 <!--halaman ubah-->
                 <div class="panel-body">
                           
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
                                        </div>
                                        <div class="modal-body">
                                          
                                          <form role="form" method="POST">

                                            <div class="form-group">
                                                <label>Kode</label>
                                                <input class="form-control" name="kode" placeholder="Input Kode" />
                                            </div>

                                            <div class="form-group">
                                                <label>Uang</label>
                                                <input class="form-control" rows="3" name="ket"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input class="form-control" type="date" name="tgl" />
                                            </div>

                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input class="form-control" name="jml" type="number" />
                                            </div>

                                         
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                       </form>

                                       		<?php

                                       			if (isset($_POST['ubah'])){

                                       				$kode = $_POST['kode'];
                                       				$ket = $_POST['ket'];
                                       				$tgl = $_POST['tgl'];
                                       				$jml = $_POST['jml'];


                                       				$sql = $koneksi->query("update kas set keterangan ='$ket', tgl='$tgl',jumlah=0, jenis='keluar', keluar ='$jml' where kode='$kode'");
                                       				
                                       				if ($sql){
                                       					?>
                                       						<script type="text/javascript">
                                       							alert("ubah data berhasil");
                                       							window,location.href="?page=keluar";
                                       						</script>
                                       					<?php
                                       				}

                                       			}

                                       		?>

                                        </div>

                                </div>
                            </div>
                        </div>

                        <script src="assets/js/jquery-1.10.2.js"></script>

                        <script type="text/javascript">

                        $(document).on("click", "#edit_data", function(){

                        	var kode = $(this).data('id');
                        	var ket = $(this).data('ket');
                        	var tgl = $(this).data('tgl');
                        	var jml = $(this).data('jml');

                        	$("modal_edit #kode").val(kode);
                        	$("modal_edit #ket").val(ket);
                        	$("modal_edit #tgl").val(tgl);
                        	$("modal_edit #jml").val(jml);
                        })

                        </script>

                 <!--akhir halaman ubah-->



                    </div>
                </div>
</div>