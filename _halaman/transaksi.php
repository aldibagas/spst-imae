<?php
   $title="Transaksi";
   
?>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}



body .container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 100px 0;
}

body .container .card {
  position: relative;
  min-width: 400px;
  height: 440px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
}

body .container .card:nth-child(1) .box .content a {
  background: #2196f3;
}

body .container .card:nth-child(2) .box .content a {
  background: #2196f3;
}


body .container .card .box {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #2f318b;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

body .container .card .box:hover {
  transform: translateY(-50px);
}


body .container .card .box .content {
  padding: 20px;
  text-align: center;
}

body .container .card .box .content h2 {
  position: absolute;
  top: -10px;
  right: 30px;
  font-size: 8rem;
  color: rgba(255, 255, 255, 0.1);
}

body .container .card .box .content h3 {
  font-size: 1.5rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

body .container .card .box .content p {
  font-size: 1rem;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.9);
  z-index: 1;
  transition: 0.5s;
}

body .container .card .box .content a {
  position: relative;
  display: inline-block;
  padding: 10px 150px;
  background: blue;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  margin-top: 20px;
  
  transition: 0.5s;
}


</style>
<div class="container">
  <div class="card">
    <div class="box">
      <div class="content">
    
        <h3>SETOR SAMPAH</h3>
        <p>Sampah yang telah dikumpulkan dapat dijemput atau diantarkan ke Bank Sampah, kemudian akan menjadi saldo pada tabungan setiap pelanggan</p>
        <a href="<?=url('setor')?>">Pilih</a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
    
        <h3>PENARIKAN UANG</h3>
        <p>Uang yang telah terkumpul dari tabungan, dapat dicairkan melalui kantor. Nominal untuk penarikan uang sesuai dengan keinginan pelanggan</p>
        <a href="<?=url('penarikanuang')?>">Pilih</a>
      </div>
    </div>
  </div>

</div>