<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additem extends CI_Controller
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
        $data['title'] = 'Asset Management | Add Item';
        $this->load->view('Additem/additem', $data);
    }

    public function tambah()
    {
        $this->load->view('additem');
    }

    public function tambah_aksi()
    {
        $jenis = $this->input->post('type');
        $serialnumber = $this->input->post('serialnumber');
        $assetnumber = $this->input->post('assetnumber');
        $valueprice = $this->input->post('valueprice');
        $condition = $this->input->post('condition');

        $data = array(
            'id_item' => $jenis,
            'serial_number' => $serialnumber,
            'asset_number' => $assetnumber,
            'value_price' => $valueprice,
            'condition' => $condition
        );
        $this->m_data->input_data($data, 'tb_detail_item');
        redirect('Additem/index');

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
        redirect('Additem/index');
    }

    // public function hapus($id){
    //     $where = array('id' => $id);
    //     $this->m_data->hapus_data($where,'tb_item');
    //     redirect('Additem/index');
    // }
}
