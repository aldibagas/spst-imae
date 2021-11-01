<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Rekap
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Tanggal(s)</th>
                                            <th>Keterangan</th>
                                            <th>Masuk</th>
                                            <th>jenis</th>
                                            <th>Keluar</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php 
                                    		$no= 1;
                                            $database = "spst"; 
                                            $conn = mysqli_connect($servername, $username, $password, $database);
                                            $sql = "SELECT * FROM `kas` ";
                                            $run = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($run);
                                    			
                                    		

                                    	?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['kode']; ?></td>
                                            <td><?php echo date('d-m-y', strtotime($data['tgl'])) ; ?></td>
                                            <td><?php echo $data['keterangan']; ?></td>
                                            <td align="right"><?php echo number_format($data['jumlah']).",-"; ?></td> 
                                            <td><?php echo $data['jenis']; ?></td>
                                            <td align="right"><?php echo number_format($data['keluar']).",-"; ?></td>  
                                                                                      
                                        </tr>

                                        <?php
                                            $total_masuk=@$total_masuk+$data['jumlah'];
                                            $total_keluar=@$total_keluar+$data['keluar'];
                                            $saldo_akhir=$total_masuk-$total_keluar;
                                        ?>
                                    </tbody>
                                     <tr>
                                        <th colspan="4" style="text-align: center; font-size: 20px">Total Kas Masuk</th>
                                        <td style="font-size: 17px; text-align: right;"><?php echo "Rp." . 
                                            number_format($total_masuk).",-";?></td>
                                    </tr>
                                        <th colspan="4" style="text-align: center; font-size: 20px">Total Kas Keluar</th>
                                        <td style="font-size: 17px; text-align: right;"><?php echo "Rp." . 
                                            number_format($total_keluar).",-";?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4" style="text-align: center; font-size: 20px">Saldo Akhir</th>
                                        <td style="font-size: 17px; text-align: right;"><?php echo "Rp." . 
                                            number_format($saldo_akhir).",-";?></td>
                                    </tr>
                                 </table>
                             
</div>