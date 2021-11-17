<?php
    session_start();
    $title="Konfirmasi Pesanan";
    
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<div class="card-deck my-4">
                <div class="card mb-4 shadow">
                  <div class="card-body text-center my-4">
                    <a href="#"> 
                    </a>
                    <p class="text-muted"></p>
                    <span class="h1 mb-0">Pesanan Masuk</span>
                    <p class="text-muted"></p>
                    <ul class="list-unstyled">
                    
                    <?php
                  $Query = "SELECT * FROM pemesanan order by biaya desc LIMIT 1";
                  $Run = mysqli_query($conn, $Query);
                  
                  if(mysqli_num_rows($Run)>0){
                    while($Fetch = mysqli_fetch_assoc($Run)){
                      echo"
                        <tr>
                          <h1>".$Fetch['idp']."</h1>
                          <li></li>
                          <h2>".$Fetch['berat']."</h2>
                          <li></li>
                          <h3>".$Fetch['biaya']."</h3>
                          <li></li>
                      ";
                    }
                  }
                ?>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                    <div class="row">
                <div class="container">
                    <div class="row">
                      <div class="col-sm">
                        <button class="btn btn-block btn-danger rounded-pill">Tolak</button>
                      </div>
                      <div class="col-sm">
                        <button class="btn btn-block btn-success rounded-pill">Terima</button>
                    </div>
                  </div>
			</br>
        </div> <!-- .card-body -->
                </div> <!-- .card -->
