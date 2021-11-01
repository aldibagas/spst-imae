<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=url('beranda')?>">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Beranda</span><span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=url('dashboard')?>">
                <i class="fe fe-monitor fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=url('pengambilan')?>">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Pesan Pengambilan</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=url('navigasi')?>">
                <i class="fe fe-map fe-16"></i>
                <span class="ml-3 item-text">Navigasi</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="<?=url('history-petugas')?>" class="nav-link">
                <i class="fe fe-clock fe-16"></i>
                <span class="ml-3 item-text">Riwayat Pengambilan</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a href="<?=url('history-pemesan')?>" class="nav-link">
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
          </ul>
        </nav>
      </aside>