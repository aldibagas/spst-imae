<?php
function base_url($a=''){
    $getbase_url=$GLOBALS['setUri']['base'];
    return $getbase_url.$a;
}

function assets($a=''){
    $getbase_assets=$GLOBALS['setUri']['assets'];
    return base_url($getbase_assets.$a);
}

function url($a='',$b=''){
    return base_url($b.'?halaman='.$a);
}

function templates($a=''){
    return assets($GLOBALS['template'].$a);
}

function routes($a=''){
  return assets($GLOBALS['route'].$a);
}

function img($a=''){
  return assets($GLOBALS['img'].$a);
}

function content_open($judul=''){
  return '
  <div class="col-md-4 mb-4">
    <div class="card shadow">
      <div class="card-body">
        <p class="card-title"><strong>'.$judul.'</strong></p>';
}

function content_open_full($judul=''){
  return '
  <div class="col">
    <div class="card shadow">
      <div class="card-body">
        <p class="card-title"><strong>'.$judul.'</strong></p>';
}

function content_close(){
  return '
      </div>
    </div>
  </div>';
}

function button_modal($label='',$target=''){
  return'
  <!-- Button trigger modal -->
  <button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#'.$target.'"> '.$label.' </button>';
}

function modal($id='', $m_judul='', $isi=''){
  return'
  <!-- Modal -->
  <div class="modal fade" id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="defaultModalLabel">'.$m_judul.'</h5>
        </div>
        <div class="modal-body">
          '.$isi.'
        </div>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Pesan</button>
        </div>
        </br>
      </div>
    </div>
  </div>';
}

function modal_tanpa_button($id='', $m_judul='', $isi=''){
  return'
  <!-- Modal -->
  <div class="modal fade" id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="defaultModalLabel">'.$m_judul.'</h5>
        </div>
        <div class="modal-body">
          '.$isi.'
        </div>
        <br>
        </br>
      </div>
    </div>
  </div>';
}

function modal_transaksi($id='', $m_judul='', $isi=''){
  return'
  <!-- Modal -->
  <div class="modal fade" id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="defaultModalLabel">'.$m_judul.'</h5>
        </div>
        <div class="modal-body">
          '.$isi.'
        </div>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Pesan</button>
        </div>
        </br>
      </div>
    </div>
  </div>';
}

function mini_tab($t1='', $t1_link='', $t2='', $t2_link='', $t3='', $t3_link=''){
  return '
  <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="<?=url('.$t1_link.')?>" role="tab" aria-controls="home" aria-selected="true">'.$t1.'</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="<?=url('.$t2_link.')?>" role="tab" aria-controls="profile" aria-selected="false">'.$t2.'</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="<?=url('.$t3_link.')?>" role="tab" aria-controls="contact" aria-selected="false">'.$t3.'</a>
  </li>
</ul>';
}

function modal_select($id='', $m_judul='', $isi=''){
  return'
  <!-- Modal -->
  <div class="modal fade" id="'.$id.'" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="defaultModalLabel">'.$m_judul.'</h5>
        </div>
        <div class="modal-body">
          '.$isi.'
        </div>
        <div class="modal-footer">
        <br>
          <button type="button" class="btn btn-outline-primary">Pesan</button>
        </div>
      </div>
    </div>
  </div>';
}

function berita_head(){
  return'
  <section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text">Blog</span>
          <h1 class="text-capitalize mb-5 text-lg">Edukasi Sampah</h1>
        </div>
      </div>
    </div>
  </div>
</section>
  ';
}

function berita_header(){
  return '
  <section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">';
}

function berita_isi($gambar='', $tanggal='', $link='', $judul='', $cuplikan=''){
  return'
  <div class="col-lg-12 col-md-12 mb-5">
  <div class="blog-item">
    <div class="blog-thumb">
      <img src="'.$gambar.'" alt="" class="img-fluid ">
    </div>

    <div class="blog-item-content">
      <div class="blog-item-meta mb-3 mt-4">
        <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i>'.$tanggal.'</span>
      </div> 

      <h2 class="mt-3 mb-3"><a href="'.$link.'">'.$judul.'</a></h2>

      <p class="mb-4">'.$cuplikan.'</p>

      <a href="'.$link.'" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
    </div>
  </div>
</div> ';
}

function berita_tutup(){
  return'
  </div>
  </div>
  <div class="col-lg-4">
      <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
<div class="sidebar-widget search  mb-3 ">
<h5>Search Here</h5>
<form action="#" class="search-form">
<input type="text" class="form-control" placeholder="search">
<i class="ti-search"></i>
</form>
</div>


<div class="sidebar-widget latest-post mb-3">
<h5>Popular Posts</h5>

<div class="py-2">
<span class="text-sm text-muted">03 Mar 2018</span>
  <h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
</div>

<div class="py-2">
 <span class="text-sm text-muted">03 Mar 2018</span>
  <h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
</div>

<div class="py-2">
<span class="text-sm text-muted">03 Mar 2018</span>
  <h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
</div>
</div>

<div class="sidebar-widget category mb-3">
<h5 class="mb-4">Categories</h5>

<ul class="list-unstyled">
<li class="align-items-center">
<a href="#">Medicine</a>
<span>(14)</span>
</li>
<li class="align-items-center">
<a href="#">Equipments</a>
<span>(2)</span>
</li>
<li class="align-items-center">
<a href="#">Heart</a>
<span>(10)</span>
</li>
<li class="align-items-center">
<a href="#">Free counselling</a>
<span>(5)</span>
</li>
<li class="align-items-center">
<a href="#">Lab test</a>
<span>(5)</span>
</li>
</ul>
</div>


<div class="sidebar-widget tags mb-3">
<h5 class="mb-4">Tags</h5>

<a href="#">Doctors</a>
<a href="#">agency</a>
<a href="#">company</a>
<a href="#">medicine</a>
<a href="#">surgery</a>
<a href="#">Marketing</a>
<a href="#">Social Media</a>
<a href="#">Branding</a>
<a href="#">Laboratory</a>
</div>


<div class="sidebar-widget schedule-widget mb-3">
<h5 class="mb-4">Time Schedule</h5>

<ul class="list-unstyled">
<li class="d-flex justify-content-between align-items-center">
<a href="#">Monday - Friday</a>
<span>9:00 - 17:00</span>
</li>
<li class="d-flex justify-content-between align-items-center">
<a href="#">Saturday</a>
<span>9:00 - 16:00</span>
</li>
<li class="d-flex justify-content-between align-items-center">
<a href="#">Sunday</a>
<span>Closed</span>
</li>
</ul>

<div class="sidebar-contatct-info mt-4">
<p class="mb-0">Need Urgent Help?</p>
<h3>+23-4565-65768</h3>
</div>
</div>
</div>
  </div>   
</div>

<div class="row mt-5">
  <div class="col-lg-8">
      <nav class="pagination py-2 d-inline-block">
          <div class="nav-links">
              <span aria-current="page" class="page-numbers current">1</span>
              <a class="page-numbers" href="#">2</a>
              <a class="page-numbers" href="#">3</a>
              <a class="page-numbers" href="#"><i class="icofont-thin-double-right"></i></a>
          </div>
      </nav>
  </div>
</div>
</div>
</section>';

}

