<?php
    $title = "Profil";
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
                <h5 class="mb-0 mt-5">Security Settings</h5>
                <p>These settings are helps you keep your account secure.</p>
                <div class="list-group mb-5 shadow">
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">
                        <strong class="mb-2">Enable Activity Logs</strong>
                        <p class="text-muted mb-0">Donec id elit non mi porta gravida at eget metus.</p>
                      </div> <!-- .col -->
                      <div class="col-auto">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="activityLog" checked>
                          <span class="custom-control-label"></span>
                        </div>
                      </div> <!-- .col -->
                    </div> <!-- .row -->
                  </div> <!-- .list-group-item -->
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">
                        <strong class="mb-2">2FA Authentication</strong>
                        <span class="badge badge-pill badge-success">Enabled</span>
                        <p class="text-muted mb-0">Maecenas sed diam eget risus varius blandit.</p>
                      </div> <!-- .col -->
                      <div class="col-auto">
                        <button class="btn btn-primary btn-sm">Disable</button>
                      </div> <!-- .col -->
                    </div> <!-- .row -->
                  </div> <!-- .list-group-item -->
                  <div class="list-group-item">
                    <div class="row align-items-center">
                      <div class="col">
                        <strong class="mb-2">Activate Pin Code</strong>
                        <p class="text-muted mb-0">Donec id elit non mi porta gravida at eget metus.</p>
                      </div> <!-- .col -->
                      <div class="col-auto">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="pinCode">
                          <span class="custom-control-label"></span>
                        </div>
                      </div> <!-- .col -->
                    </div> <!-- .row -->
                  </div> <!-- .list-group-item -->
                </div> <!-- .list-group -->
                <h5 class="mb-0">Recent Activity</h5>
                <p>Last activities with your account.</p>
                <table class="table border bg-white">
                  <thead>
                    <tr>
                      <th>Device</th>
                      <th>Location</th>
                      <th>IP</th>
                      <th>Time</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Chrome - Windows 10</th>
                      <td>Paris, France</td>
                      <td>192.168.1.10</td>
                      <td>Apr 24, 2019</td>
                      <td><a hreff="#" class="text-muted"><i class="fe fe-x"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="col"><i class="fe fe-smartphone fe-12 text-muted mr-2"></i>App - Mac OS</th>
                      <td>Newyork, USA</td>
                      <td>10.0.0.10</td>
                      <td>Apr 24, 2019</td>
                      <td><a hreff="#" class="text-muted"><i class="fe fe-x"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Chrome - iOS</th>
                      <td>London, UK</td>
                      <td>255.255.255.0</td>
                      <td>Apr 24, 2019</td>
                      <td><a hreff="#" class="text-muted"><i class="fe fe-x"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div> <!-- /.card-body -->