<?php
   $title="Beranda";
?>    
<p class="lead text-muted">Selamat datang di SPST, mari bersama menjaga lingkungan yang bersih! </p>
            <div class="mb-2 align-items-center">
                <div class="card shadow mb-4">
                  <div class="card-body">
                    <div class="row mt-1 align-items-center">
                      <div class="col-12 col-lg-4 text-left pl-4">
                        <span class="fe fe-credit-card text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Saldo</p>
                        <span class="h2">Rp 12,600</span>
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-up text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Pemasukan terakhir</p>
                        <span class="h3">Rp 2,600</span><br />
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-up text-success fe-12"></span>
                        <p class="mb-1 small text-muted">Pemasukan Bulan ini</p>
                        <span class="h3">Rp 26,000</span><br />
                      </div>
                      <div class="col-6 col-lg-2 text-center py-4">
                        <span class="fe fe-arrow-down text-danger fe-12"></span>
                        <p class="mb-1 small text-muted">Pengeluaran Bulan ini</p>
                        <span class="h3">Rp 6,000</span><br />
                      </div>
                    </div>
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div>
      <div class ="row">
            <div class="col-md-6 mb-4">
                  <div class="card shadow">
                    <div class="card-header align-items-center">
                      <strong class="card-title">Daftar Harga Beli</strong>
                    </div>
                    <div class="card-body">
                    <div class="chart-widget">
                      <div id="columnChartWidget" width="300" height="200"></div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-6 text-center mb-3 border-right">
                        <p class="text-muted mb-1">PETE</p>
                        <h6 class="mb-1">Rp 300</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                      <div class="col-6 text-center mb-3">
                        <p class="text-muted mb-1">HDPE</p>
                        <h6 class="mb-1">Rp 830</h6>
                        <p class="text-muted">/kg</p>
                      </div>
                      <div class="col-6 text-center border-right">
                        <p class="text-muted mb-1">PVC</p>
                        <h6 class="mb-1">Rp 200</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                      <div class="col-6 text-center">
                        <p class="text-muted mb-1">LDPE</p>
                        <h6 class="mb-1">Rp 430</h6>
                        <p class="text-muted">/kg</p>
                      </div>
                      <div class="col-6 text-center border-right">
                        <p class="text-muted mb-1">PP</p>
                        <h6 class="mb-1">Rp 200</h6>
                        <p class="text-muted mb-2">/kg</p>
                      </div>
                      <div class="col-6 text-center">
                        <p class="text-muted mb-1">PS</p>
                        <h6 class="mb-1">Rp 430</h6>
                        <p class="text-muted">/kg</p>
                      </div>
                    </div>
                  </div> <!-- .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
               <!-- Recent Activity -->
               <div class="col-md-6 mb-4">
                  <div class="card shadow">
                    <div class="card-header">
                      <strong class="card-title float-left">Catatan Aktivitas</strong>
                      <a class="float-right small text-muted" href="<?=url('history-pemesan')?>">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                      <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-up text-success fe-24"></span>
                            </div>
                            <div class="col">
                              <small><strong>22 Oktober 2021</strong></small>
                              <div class="my-0 text-muted small">Menyerahkan PET, HDPE, PP</div>
                              <small class="badge badge-light text-muted">kemarin</small>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-up text-success fe-24"></span>
                            </div>
                            <div class="col">
                              <small><strong>22 Oktober 2021</strong></small>
                              <div class="my-0 text-muted small">Menyerahkan PET, HDPE, PP</div>
                              <small class="badge badge-light text-muted">kemarin</small>
                            </div>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="row">
                            <div class="col-auto">
                              <span class="fe fe-arrow-up text-success fe-24"></span>
                            </div>
                            <div class="col">
                              <small><strong>22 Oktober 2021</strong></small>
                              <div class="my-0 text-muted small">Menyerahkan PET, HDPE, PP</div>
                              <small class="badge badge-light text-muted">kemarin</small>
                            </div>
                          </div>
                        </div>
                      </div> <!-- / .list-group -->
                    </div> <!-- / .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
      </div>
<div class="row">
<?=content_open('Jenis-Jenis Plastik')?>
      <p class="card-text">Informasi seputar jenis-jenis plastik dan bagaimana penggunaanya dalam lingkungan sehari-hari</p>
      <?=button_modal('Lihat','konten1')?>
      <?=modal('konten1', 'Jenis-Jenis Plastik' , 'Plastik adalah komponen penting dan menjadi bahan baku dari banyak barang, contohnya seperti botol air, sisir, wadah minuman, peralatan makan, dan masih banyak lagi. Mengetahui perbedaan, jenis plastik, serta kode SPInya dapat membantu Anda dalam proses daur ulang sampah plastik.')?>
<?=content_close()?>

<?=content_open('Pentingnya lingkungan bersih')?>
      <p class="card-text">Kenapa kita harus menjaga agar lingkungan tetap bersih</p>
      <?=button_modal('Lihat','konten2')?>
      <?=modal('konten2', 'Lingkungan bersih' , 'Kebersihan lingkungan merupakan keadaan bebas dari kotoran, termasuk di dalamnya, debu,
sampah, dan bau. Di Indonesia, masalah kebersihan lingkungan selalu menjadi perdebatan
dan masalah yang berkembang. Kasus-kasus yang menyangkut masalah kebersihan
lingkungan setiap hari dan setiap tahun terus meningkat.
Oleh karena itu menjaga kebersihan lingkungan sangatlah berguna untuk kita semua karena
dapat menciptakan kehidupan yang aman, bersih, sejuk, dan sehat.
Manfaat menjaga kebersihan lingkungan antara lain:
1. Terhindar dari penyakit yang disebabkan lingkungan yang tidak sehat.
2. Lingkungan menjadi lebih sejuk.
3. Bebas dari polusi udara.
4. Air menjadi lebih bersih dan aman untuk di minum.
5. Lebih tenang dalam menjalankan aktivitas sehari hari.
')?>
<?=content_close()?>

<?=content_open('Waspadai Genangan Air')?>
      <p class="card-text">Informasi seputar bahaya yang ditimbulkan dari genangan air</p>
      <?=button_modal('Lihat','konten3')?>
      <?=modal('konten3', 'Lingkungan bersih' , 'Genangan air terdapat di tempat yang kotor. Genangan ini jika dibiarkan ada di sekitar rumah apalagi jika dilalui saat berjalan kaki akan menimbulkan bahaya kesehatan. Genangan air merupakan tempat berkembang biak nyamuk yang nantinya akan menjadi sumber penyakit yang ditularkan oleh nyamuk. 
      Pastikan segera membersihkan segala benda atau bagian tubuh yang bersentuhan dengan air genangan. Menjaga kaki tetap kering juga penting. Kontak yang terlalu lama dengan genangan air dapat menyebabkan pengembangan parasit kaki, yaitu suatu kondisi yang dapat menyebabkan lepuh dan pembusukan jaringan')?>
<?=content_close()?>
</div>
