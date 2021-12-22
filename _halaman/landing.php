
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>PESAT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

//https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <?php
           $title="";
		   $Template=false;
        ?>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="PESATatas.jpeg" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
              <li class="scroll-to-section"><a href="#services">Prosedur</a></li>
              <li class="scroll-to-section"><a href="#about">Fitur</a></li>
              <li><div class="gradient-button"><a id="modal_trigger" href="index.php?halaman=login"><i class="fa fa-sign-in-alt"></i> Masuk</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>PENGELOLAAN SAMPAH TERINTEGRASI</h2>
                    <h5>Bersama Menjaga Lingkungan Yang Bersih!</h5><br>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button scroll-to-section">
                      <a href="pesataplikasi.apk">ANDROID <i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="logo.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Cara Menggunakan Aplikasi <em>PESAT</em></h4>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
          <img src="layanan11.png" alt=""><br><br>
            <h4>Download Aplikasi PESAT di ANDROID</h4><br>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
          <img src="layanan97.png" alt=""><br><br>
            <h4>Masuk Menggunakan Akun Yang Sudah Terdaftar</h4><br>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
          <img src="layanan98.png" alt=""><br><br>
            <h4>Buka Aplikasi Di Smartphone</h4><br>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
          <img src="layanan99.png" alt=""><br><br>
            <h4>Mulai Penyetoran Sampah atau Penarikan Uang</h4><br>
            <div class="text-button">
            </div>
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
     
  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>Fitur - fitur <em>PESAT</em></h4>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Jemput Sampah </a></h4>
                <p>Fitur ini berfungsi untuk menjemput sampah dari pelanggan oleh petugas bank sampah</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Transparansi Harga</a></h4>
                <p>PESAT menyediakan halaman untuk melihat kenaikan atau penurunan harga dari masing-masing jenis sampah </p><br>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Edukasi Sampah</a></h4>
                <p>Informasi mengenai jenis sampah dan penanganan sampah yang harus dilakukan. &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p><br>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Tabungan</a></h4>
                <p>Fitur ini berfungsi untuk menyimpan uang pelanggan setelah melakukan transaksi </p><br>
              </div>
            </div>
            
            <div class="col-lg-12">

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="landingreal111.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
<br>
<br>
  <footer id="newsletter">
  <div class="container">

</div>

  </footer>

  

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>