
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
              <li class="scroll-to-section"><a href="#services">Layanan</a></li>
              <li class="scroll-to-section"><a href="#about">Tentang</a></li>
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
                    <div class="white-button first-button scroll-to-section">
                      <a href="#contact">IOS <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contact">ANDROID <i class="fab fa-google-play"></i></a>
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
            <h4><em>Fitur</em> yang tersedia di PESAT</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>PESAT menyediakan berbagai fitur yang dapat mempermudah penggunaan web</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            
            <h4>UPDATE HARGA</h4>
            <p>Web PESAT menyediakan halaman untuk melihat kenaikan atau penurunan harga dari masing-masing jenis sampah</p>
            <div class="text-button">

            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
           
            <h4>NAVIGASI</h4>
            <p>Fitur navigasi memiliki peta dan rute untuk mempermudah petugas menemukan lokasi tujuan pengambilan dengan cepat dan tepat</p>
            <div class="text-button">
 
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
           
            <h4>SETOR SAMPAH</h4>
            <p>Setor sampah merupakan program yang berfungsi sebagai tempat untuk menyetorkan sampah yang dipilah sesuai dengan jenis dan beratnya</p>
            <div class="text-button">
           
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
         
            <h4>PENARIKAN UANG</h4>
            <p>Merupakan program tempat dimana pengguna dapat melakukan penarikan uang yang dapat ditarik sesuai dengan saldo yang dimiliki</p>
            <div class="text-button">
   
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
            <h4><em>PESAT</em> (Pengolahan Sampah Terintegrasi)</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <h6>PESAT adalah sistem pengelolaan sampah yang terintegrasi dengan web yang bertujuan untuk mempermudah transaksi sampah<h6>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">PET (Polyethylene Terephthalate)</a></h4>
                <p>Merupakan jenis plastik yang biasanya digunakan sebagai bahan botol plastik untuk air minum kemasan dan tidak memiliki warna atau transparan</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">HDPE (High Density Polyethylene)</a></h4>
                <p>Botol plastik satu ini juga biasa digunakan untuk minuman dan cenderung dikemas dengan warna putih susu.</p><br>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">PVC (Polyvinyl Chloride)</a></h4>
                <p>Bentuknya fleksibel ataupun kaku dan biasa digunakan untuk pipa, plastik kemasan bungkus makanan, mainan anak.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</p><br>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">LDPE (Low Density Polyethylene)</a></h4>
                <p>Bahan plastik ini paling mudah didaur ulang dan sangat cocok untuk wadah kemasan yang kuat namun tetap fleksibel.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">PP (Polypropylene)</a></h4>
                <p>Jenis ini cukup sulit untuk didaur ulang digunakan untuk plastik yang terbuat dari Polypropylene. Misalnya tempat makanan/minuman, botol sirup,  kotak yogurt, sedotan plastik, selotip, dan tali berbahan plastik.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">PS (Polystyrene)</a></h4>
                <p>Plastik jenis ini banyak digunakan sebagai tempat atau minuman dan tempat makan styrofoam, tempat telur, sendok/garpu plastik, foam packaging hingga bahan bangunan (bahan flooring).</p>
              </div>
            </div>
            <div class="col-lg-12">

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/about-right-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>


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