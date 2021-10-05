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
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">'.$isi.'</div>
        <div class="modal-footer">
          <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>';
}

function slice_modal ($m2_judul=''){
  return '
  ';
}