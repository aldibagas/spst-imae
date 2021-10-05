<?php
   $title="Beranda";
?>    
<p class="lead text-muted">Selamat datang di SPST, mari bersama menjaga lingkungan yang bersih! </p>

<?=content_open('Jenis-Jenis Plastik')?>
      <p class="card-text">Informasi seputar jenis-jenis plastik dan bagaimana penggunaanya dalam lingkungan sehari-hari</p>
      <?=button_modal('Lihat','konten1')?>
      <?=modal('konten1', 'Jenis-Jenis Plastik' , 'konten1')?>
<?=content_close()?>

<?=content_open('Pentingnya lingkungan bersih')?>
      <p class="card-text">Kenapa kita harus menjaga agar lingkungan tetap bersih</p>
      <?=button_modal('Lihat','konten2')?>
      <?=modal('konten2', 'Lingkungan bersih' , 'konten2')?>
<?=content_close()?>

<?=content_open('Waspadai Genangan Air')?>
      <p class="card-text">Informasi seputar bahaya yang ditimbulkan dari genangan air</p>
      <?=button_modal('Lihat','konten3')?>
      <?=modal('konten3', 'Lingkungan bersih' , 'konten3')?>
<?=content_close()?>