<?php
	$title = "Profil"
?>
			<div class="my-4">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab"  href="<?=url('profil')?>" >Umum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab"  href="<?=url('profil1')?>" >Keamanan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab"  href="<?=url('profil2')?>" >Notifikasi</a>
                  </li>
                </ul>
                <form>
                  <div class="row mt-5 align-items-center">
                    <div class="col-md-3 text-center mb-5">
                      <div class="avatar avatar-xl">
                        <img src="<?=img()?>avatar1.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </div>
                    <div class="col">
                      <div class="row align-items-center">
                        <div class="col-md-7">
                          <h4 class="mb-1">Beruang Sambel</h4>
                          <p class="small mb-3"><span class="badge badge-dark">Indonesia</span></p>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col">
                          <p class="small mb-0 text-muted">Jalan Gebang Lor</p>
                          <p class="small mb-0 text-muted">Keputih City, Indonesia</p>
                          <p class="small mb-0 text-muted">(+62)8123456789</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="firstname">Nama Depan</label>
                      <input type="text" id="firstname" class="form-control" placeholder="nama depan">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="lastname">Nama Belakang</label>
                      <input type="text" id="lastname" class="form-control" placeholder="nama belakang">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress5">Alamat</label>
                    <input type="text" class="form-control" id="inputAddress5" placeholder="Alamat">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCompany5">Kecamatan</label>
                      <input type="text" class="form-control" id="inputCompany5" placeholder="Kecamatan">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState5">Kota/Kabupaten</label>
                      <select id="inputState5" class="form-control">
                        <option selected="">Pilih...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip5">Kode Pos</label>
                      <input type="text" class="form-control" id="inputZip5" placeholder="12345">
                    </div>
                  </div>
                  <hr class="my-4">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
              </div> <!-- /.card-body -->