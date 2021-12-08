<?php 
 include '_loader.php';
 $Template=true;
 if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
  }
  else{
    $halaman='landing';
  }
  ob_start();
  $file='_halaman/'.$halaman.'.php';
  if(!file_exists($file)){
    include '_halaman/error.php';
  }
  else{
    include $file;
  }
  $content = ob_get_contents();
  ob_end_clean();

  if($Template==true){
?>

<!DOCTYPE html>
<html lang="en">
    <?php include '_layouts/head.php'?>
    <body class="vertical  light  ">
      <div class="wrapper">
        <?php
            include '_layouts/header.php';
            include '_layouts/sidebar.php';
        ?>
          <main role="main" class="main-content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-12">
                  <h1 class="page-title"><?=$title?></h1>
                </div> <!-- .col-12 -->
              </div> <!-- .row -->
            </div> <!-- .container-fluid -->
            <?php
            echo $content;
            include '_layouts/footer.php';
            include '_layouts/javascript.php';
        ?>
      </div>
    </body>
</html>
<?php } else {
  echo $content;
}
if(isset($fileJS)){
  include '_halaman/js/'.$fileJS.'.php';
}
?>