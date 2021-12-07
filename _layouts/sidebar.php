<?php
@session_start();
// require '_helpers/connect.php';
// require '_helpers/session.php';

?>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./?halaman=profil">
              <img src="PESAT.png" id="logo" class="navbar-brand-img brand-sm"  x="0px" y="0px" viewBox="0 0 300 300" xml:space="preserve">
            </a>
          </div>
      <?php
                  if ($_SESSION['kelas']=="pengguna") {
                ?>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=url('beranda')?>">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Beranda</span><span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=url('transaksi')?>">
                <i class="fe fe-credit-card fe-16"></i>
                <span class="ml-3 item-text">Transaksi</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="<?=url('riwayat-aktivitas')?>" class="nav-link">
                <i class="fe fe-clock fe-16"></i>
                <span class="ml-3 item-text">Riwayat Aktivitas</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="<?=url('profil')?>" class="nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Profil</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="index.php?halaman=logout"  aria-expanded="false" class="nav-link">
                <i class="fe fe-log-out fe-16"></i>
                <span class="ml-3 item-text">Logout</span>
                </a>
            </li>
          </ul>
            <?php } else { ?>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=url('dashboard')?>">
                <i class="fe fe-monitor fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=url('navigasi')?>">
                <i class="fe fe-map fe-16"></i>
                <span class="ml-3 item-text">Navigasi</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="<?=url('riwayat-transaksi')?>" class="nav-link">
                <i class="fe fe-clock fe-16"></i>
                <span class="ml-3 item-text">Riwayat Transaksi</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="<?=url('pengaturan_harga')?>" class="nav-link">
                <i class="fe fe-settings fe-16"></i>
                <span class="ml-3 item-text">Pengaturan Harga</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="<?=url('profil')?>" class="nav-link">
                <i class="fe fe-user fe-16"></i>
                <span class="ml-3 item-text">Profil</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="index.php?halaman=logout"  aria-expanded="false" class="nav-link">
                <i class="fe fe-log-out fe-16"></i>
                <span class="ml-3 item-text">Logout</span>
                </a>
            </li>
          </ul>
          <?php } ?>
        </nav>
      </aside>