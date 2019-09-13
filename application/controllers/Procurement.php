<?php

class Procurement extends CI_Controller{

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
        $data['get'] = $this->m_data->tampil_data('procurement')->result();
        // var_dump($data) ;
        
        $title['title'] = 'Procurement Form';
        $this->load->view('templates/index_sidebar', $title);
        $this->load->view('procurement', $data);
        $this->load->view('templates/index_footer');
    }
    
    function tambah(){
        $this->load->view('procurement');
    }

    function tambah_aksi(){
        $ticket = $this->input->post('ticket');
        $item = $this->input->post('item');
        $costcenter = $this->input->post('costcenter');
        $requestor = $this->input->post('requestor');
        $serialnumber = $this->input->post('serialnumber');
        $valueprice = $this->input->post('valueprice');
        $quantitiy = $this->input->post('quantitiy');
        $description = $this->input->post('description');
        $paymentmethod = $this->input->post('paymentmethod');
        $status = $this->input->post('status');

        $data = array(
            'ticket' => $ticket,
            'item' => $item,
            'cost_center' => $costcenter,
            'requestor' => $requestor,
            'serialnumber' => $serialnumber,
            'valueprice' => $valueprice,
            'quantity' => $quantitiy,
            'description' => $description,
            'paymentmethod' => $paymentmethod,
            'status' => $status
        );
        $this->m_data->input_data($data, 'procurement');
        redirect('Procurement/index');
        
    }
}