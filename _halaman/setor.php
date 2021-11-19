<?php
   session_start();
   $title="SETOR";
?>
<div class="row d-flex justify-content-center">
					<div class="col-sm px-0 my-3">
						<div class="border border-secondary"></div>
					</div>
<center> <h2>DATA SAMPAH</h2> </center>
<div class="col-sm px-0 my-3">
						<div class="border border-secondary"></div>
					</div>
				</div>

<form>
  <div class="row">
    <div class="col">
    <center> <h2>Jenis</h2> <br> </center>
    <select class="form-control" id="sel1">
    <option>Jenis Plastik</option>
    <option>PET</option>
    <option>HDPE</option>
    <option>PVC</option>
    <option>LDPE</option>
    <option>PP</option>
    <option>PS</option>
        <optgroup label ="Kertas">
    <option>HVS</option>
    <option>Karton</option>
    <option>Kardus</option>
  </select>
    </div>
    <div class="col">
    <center> <h2>Jumlah</h2> <br> </center>
      <input type="text" class="form-control" placeholder="Kilogram">
    </div>
    <div class="col">
    <center> <h2>Harga</h2> <br> </center>
      <input type="text" class="form-control" placeholder="Rupiah">
    </div>
  </div>

  <form>
  <div class="row">
    <div class="col">
    <select class="form-control" id="sel1">
    <option>Jenis Plastik</option>
    <option>PET</option>
    <option>HDPE</option>
    <option>PVC</option>
    <option>LDPE</option>
    <option>PP</option>
    <option>PS</option>
        <optgroup label ="Kertas">
    <option>HVS</option>
    <option>Karton</option>
    <option>Kardus</option>
  </select>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Kilogram">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Rupiah">
    </div>
  </div>

  <div class="row">
    <div class="col">
    <select class="form-control" id="sel1">
    <option>Jenis Plastik</option>
    <option>PET</option>
    <option>HDPE</option>
    <option>PVC</option>
    <option>LDPE</option>
    <option>PP</option>
    <option>PS</option>
        <optgroup label ="Kertas">
    <option>HVS</option>
    <option>Karton</option>
    <option>Kardus</option>
  </select>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Kilogram">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Rupiah">
    </div>
  </div>

<p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form>
  <div class="row">
    <div class="col">
    <select class="form-control" id="sel1">
    <option>Jenis Plastik</option>
    <option>PET</option>
    <option>HDPE</option>
    <option>PVC</option>
    <option>LDPE</option>
    <option>PP</option>
    <option>PS</option>
        <optgroup label ="Kertas">
    <option>HVS</option>
    <option>Karton</option>
    <option>Kardus</option>
  </select>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Kilogram">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Rupiah">
    </div>
  </div>
  </div>
</div>
<br>
  <a class="btn btn-primary" class="text-bottom" style="float: right;" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    +
  </a>
</p>
<br>
<br>

<div class="row d-flex justify-content-center">
					<div class="col-sm px-0 my-3">
						<div class="border border-secondary"></div>
					</div>
<center> <h2>METODE SETOR</h2> </center>
<div class="col-sm px-0 my-3">
						<div class="border border-secondary"></div>
					</div>
				</div>
        
        <div class="card-deck my-4">
                <div class="card mb-4 shadow">
                  <div class="card-body text-center my-4">
                    <a href="#"> 
                    </a>
                    <ul class="list-unstyled">
                    <p class="text-muted"></p>
                    <span class="h1 mb-0">AMBIL DI RUMAH</span>
                    <p class="text-muted"></p>
                      <li>Pilih Disini Jika Anda Hendak Mencairkan Uang Secara Tunai</li>
                    </ul>
                    <a href="<?=url('setor')?>">
                    <button type="button" class="btn mb-2 btn-primary btn-lg">Pilih</button>
</a>                    
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
<div class="card mb-4">      
                  <div class="card-body text-center my-4">
                    <a href="#">
</a>
                    <ul class="list-unstyled">
                    <p class="text-muted"></p>
                    <span class="h1 mb-0">SETOR KE BANK</span>
                    <p class="text-muted"></p>
                      <li>Pilih Disini Jika Anda Hendak Setor Ke Bank</li>
                    </ul>
                                        <a href="<?=url('setor')?>">
                    <button type="button" class="btn mb-2 btn-primary btn-lg">Pilih</button>
                </div>
                </a>                    
                  </div> <!-- .card-body -->
                </div> <!-- .card -->

    <button type="button" class="btn btn-secondary btn-lg" class="text-bottom" style="float: right;">SETOR</button>