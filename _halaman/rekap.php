<?php
session_start();
  $title="Rekapitulasi Saldo";
  include 'connect.php';
  $sql ="SELECT * FROM `pemesanan` WHERE pesanan_1 = '$p1'";
  $run = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($run);

  $pet = 300;
  $hdpe = 830;
  $pvc = 200;
  $ldpe = 400;
  $pp = 200;
  $ps = 430;
  $hvs = 200;
  $karton = 150;
  $kardus = 600;
  $sbasah = -500;
  $skering = -300;
  $hasil1= $j1 * $ldpe;
  $hasil2= $j2 * $pvc;
  $hasil3= $j3 * $karton;

  echo " Hasil Perkalian : Rp. $hasil1 <br>";
  echo " Hasil Perkalian : Rp. $hasil2 <br>";
  echo " Hasil Perkalian : Rp. $hasil3 <br>";
?>

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
                                            <th>Uang Masuk</th>
                                            <th>Uang Keluar</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['kode']; ?></td>
                                            <td><?php echo date('d-m-y', strtotime($data['tgl'])) ; ?></td>
                                            <td><?php echo $data['keterangan']; ?></td>
                                            <td align="right"><?php echo number_format($data['jumlah']).",-"; ?></td>                                   
                                        </tr>
                                        <?php
                                            $totalsaldo=$uangmasuk-$uangkeluar['jumlah'];
                                            $hasil3= $j3 * $karton;['keluar'];
                                            echo " Hasil Perkalian : Rp. $hasil1 <br>";
                                        ?>
                                    </tbody>
                                     <tr>
                                        <th colspan="4" style="text-align: center; font-size: 20px">Uang Masuk</th>
                                        <td style="font-size: 17px; text-align: right;"><?php echo "Rp." . 
                                            number_format($total_masuk).",-";?></td>
                                    </tr>
                                        <th colspan="4" style="text-align: center; font-size: 20px">Uang Keluar</th>
                                        <td style="font-size: 17px; text-align: right;"><?php echo "Rp." . 
                                            number_format($total_keluar).",-";?></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4" style="text-align: center; font-size: 20px">Total</th>
                                        <td style="font-size: 17px; text-align: right;"><?php echo "Rp." . 
                                            number_format($saldo_akhir).",-";?></td>
                                    </tr>
                                 </table>
                             
</div>