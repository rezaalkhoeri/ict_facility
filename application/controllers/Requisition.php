<?php

class Requisition extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }
    }

    function index(){
        $data['get'] = $this->m_data->tampil_data('requisition')->result();
        // var_dump($data) ;
        
        $title['title'] = 'Requisition Form';
        $this->load->view('templates/index_sidebar', $title);
        $this->load->view('requisition', $data);    
        $this->load->view('templates/index_footer');
    }

    function tambah(){
        $this->load->view('requisition');
    }

    function tambah_aksi(){
        $ticket = $this->input->post('ticket');
        $item = $this->input->post('item');
        $costcenter = $this->input->post('costcenter');
        $requestor = $this->input->post('requestor');
        $date = $this->input->post('date');
        $status = $this->input->post('status');
        $description = $this->input->post('description');
        $quantity = $this->input->post('quantity');

        $data = array(
            'ticket' => $ticket,
            'item' => $item,
            'cost_center' => $costcenter,
            'requestor' => $requestor,
            'date' => $date,
            'status' => $status,
            'description' => $description,
            'quantity' => $quantity
        );
        $this->m_data->input_data($data, 'requisition');
        redirect('Requisition/index');
        
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->m_data->hapus_data($where,'requisition');
        redirect('Requisition/index');
    }

    function edit($id){
        $where = array('id' => $id);
        $data['requisition'] = $this->m_data->edit_data($where, 'requisition')->result();
        // var_dump($data);
        $this->load->view('requisition_edit', $data);
    }

    function update($id){
        $ticket = $this->input->post('ticket');
        $item = $this->input->post('item');
        $costcenter = $this->input->post('costcenter');
        $requestor = $this->input->post('requestor');
        $date = $this->input->post('date');
        $status = $this->input->post('status');
        $description = $this->input->post('description');
        $quantity = $this->input->post('quantity');
        
        $data = array(
            'ticket' => $ticket,
            'item' => $item,
            'cost_center' => $costcenter,
            'requestor' => $requestor,
            'date' => $date,
            'status' => $status,
            'description' => $description,
            'quantity' => $quantity
        );

        $where = array('id' => $id);
        $this->m_data->update_data($where, $data, 'requisition');
        redirect('Requisition/index');
        // var_dump($where);
    }
}