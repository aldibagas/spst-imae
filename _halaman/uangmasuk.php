<?php
session_start();
  $title="Uang Masuk";
  include 'connect.php';

  $nama = $_SESSION['nama'];
  $sql ="SELECT * FROM `pemesanan` WHERE pesanan_1 = '$p1'";
  $run = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($run);
  $p1 = $_POST ['pesanan_1'];
  $j1 = $_POST ['jumlah_1'];
  $p2 = $_POST ['pesanan_2'];
  $j2 = $_POST ['jumlah_2'];
  $p3 = $_POST ['pesanan_3'];
  $j3 = $_POST ['jumlah_3'];
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
   <div class="modal-body">                                    
      <form role="form" method="POST">
      <div class="form-group">
      <label>Tanggal</label>
      <input class="form-control" type="date" name="tgl" />
      </div>
      
      <div class="form-group">                                          
        <label>Jenis Sampah</label>
        <input class="form-control" rows="3" name="jenis"></textarea>
        <input class="form-control" rows="3" name="jenis2"></textarea>
        <input class="form-control" rows="3" name="jenis3"></textarea>
      </div>
            
      <div class="form-group">                                          
        <label>Jumlah</label>                                        
        <input class="form-control" name="jml" type="number" $hasil1 />                                              
        <input class="form-control" name="jml2" type="number" />                                             
        <input class="form-control" name="jml3" type="number" />
      </div>
      
      <div class="form-group">
                                              
        <label>Harga</label>
        <input class="form-control" name="jml" type="number" />
        <input class="form-control" name="jml" type="number" />
        <input class="form-control" name="jml" type="number" />  
      </div>
              
      <div class="form-group">
      <label>Total Harga</label>
      <input class="form-control" name="jml" type="number" />  
    </div>