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

function img($a=''){
  return assets($GLOBALS['img'].$a);
}

function content_open($judul=''){
  return '
  <div class="row">
  <div class="col-md-4 mb-4">
    <div class="card shadow">
      <div class="card-body">
        <p class="card-title"><strong>'.$judul.'</strong></p>';
}

function content_close(){
  return '
      </div>
    </div>
  </div>
</div> <!-- end section -->';
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