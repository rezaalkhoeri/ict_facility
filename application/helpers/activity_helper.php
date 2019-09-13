<?php

function activity_log($tipe, $aksi, $item, $assign_to, $assign_type){
    $CI =& get_instance();

    $param['log_user'] = $CI->session->userdata('nama_user');
    $param['log_tipe'] = $tipe; //asset, assesoris, komponen, inventori
    $param['log_aksi'] = $aksi;
    $param['log_item'] = $item;
    $param['log_assign_to'] = $assign_to;
    $param['log_assign_type'] = $assign_type;

    //load model log
    $CI->load->model('m_log');

    //save database
    $CI->m_log->save_log($param);

}
?>