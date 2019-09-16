<?php

class M_data extends CI_Model{
    function tampil_data($table){
        return $this->db->get($table);
    }

    function tampil_data_item($table, $column){
        $this->db->order_by($column,'ASC');
        $query = $this->db->get($table);
        return $query;
    }

    function join_table(){
        // $query = $this->db->select('*')->from($table1)->join($table2, $condition1.'='.$condition2)->get();
        $sql = "SELECT D.*, I.jenis, I.merek FROM tb_detail_item D JOIN tb_item I ON D.id_item = I.id";
        $query = $this->db->query($sql);
        return $query;
    }

    function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function multiple_insert($data, $table)
    {
      $this->db->insert_batch($table, $data);
    }

    function edit_data($where, $table){
        return $this->db->get_where($table, $where);
    }

    function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}

?>
