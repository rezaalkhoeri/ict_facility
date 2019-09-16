<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemDetail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['get'] = $this->m_data->join_table()->result();

        // print_r($data);

        $data['type'] = $this->m_data->tampil_data_item('tb_item','jenis')->result();
        $data['title'] = 'Asset Management | Item Details';
        $this->load->view('itemDetail/itemDetail', $data);
    }

    public function tambah()
    {
        $this->load->view('itemDetail');
    }

    public function tambah_aksi()
    {
        $jenis = $this->input->post('type');
        $serialnumber = $this->input->post('serialnumber');
        $assetnumber = $this->input->post('assetnumber');
        $valueprice = $this->input->post('valueprice');
        $condition = $this->input->post('condition');

        $data = array();

        for ($i=0; $i < count($serialnumber); $i++) {
          array_push($data, array(
              'id_item' => $jenis[$i],
              'serial_number' => $serialnumber[$i],
              'asset_number' => $assetnumber[$i],
              'value_price' => $valueprice[$i],
              'condition' => $condition[$i]
          ));

        }

        // $value = array();

        // $value = array(
        //   'id_item' => $jenis,
        // );
        //
        // // print_r(count($value['id_item']));
        // // die;
        //
        // $result = array();
        // for ($c=0; $c < count($value['id_item']); $c++) {
        //   $result = $value['id_item'][$c];
        // }
        // // $result = array();
        //
        //
        // echo '<pre>',print_r($result),'</pre>';
        // die;
        // print_r(array_count_values($value['id_item']));
        // echo '<pre>',print_r(array_count_values($value['id_item'])),'</pre>';

        $this->m_data->multiple_insert($data, 'tb_detail_item');
        redirect('itemDetail/index');

    }

    public function update($id)
    {
        $jenis = $this->input->post('type');
        $serialnumber = $this->input->post('serialnumber');
        $assetnumber = $this->input->post('assetnumber');
        $valueprice = $this->input->post('valueprice');
        $condition = $this->input->post('condition');

        $where = array(
            'id' => $id
        );

        $data = array(
            'id_item' => $jenis,
            'serial_number' => $serialnumber,
            'asset_number' => $assetnumber,
            'value_price' => $valueprice,
            'condition' => $condition
        );

        // print_r($id);

        $this->m_data->update_data($where, $data,'tb_detail_item');
        redirect('itemDetail/index');
    }

    // public function hapus($id){
    //     $where = array('id' => $id);
    //     $this->m_data->hapus_data($where,'tb_item');
    //     redirect('itemDetail/index');
    // }
}
