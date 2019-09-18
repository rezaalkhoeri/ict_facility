<?php

class Distribution extends CI_Controller{

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
        $data['get'] = $this->m_data->join_table_distribution()->result();
        $data['title'] = 'Asset Management | Distribution';
        $this->load->view('Distribution/distribution', $data);
    }

    function index_input(){
        $title['title'] = 'Distribution Form';
        $this->load->view('templates/index_sidebar2', $title);
        $this->load->view('Distribution/distribution_input');
        $this->load->view('templates/index_footer');
    }
    
    function details($id){
        $data['get'] = $this->m_data->join_table_detail_distribution($id)->result();

        $title['title'] = 'Distribution Form';
        $this->load->view('templates/index_sidebar2', $title);
        $this->load->view('Distribution/distribution_details', $data);
        $this->load->view('templates/index_footer');
    }

    function tambah_aksi(){
        $ticket = $this->input->post('ticket');
        $receiptnumber = $this->input->post('receiptnumber');
        $item = $this->input->post('item');
        $date = $this->input->post('date');
        $location = $this->input->post('location');
        $status = $this->input->post('status');
        $description = $this->input->post('description');
        $uploadreceiptdoc = $this->input->post('uploadreceiptdoc');

        $data = array(
            'ticket' => $ticket,
            'receiptnumber' => $receiptnumber,
            'item' => $item,
            'date' => $date,
            'location' => $location,
            'status' => $status,
            'description' => $description,
            'uploadreceiptdoc' => $uploadreceiptdoc
        );
        $this->m_data->input_data($data, 'distribution');
        redirect('Distribution/index');
        
    }
}