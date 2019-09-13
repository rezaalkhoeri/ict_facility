<?php

class Facility extends CI_Controller{

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
        $data['get'] = $this->m_data->tampil_data('facility')->result();
        // var_dump($data) ;

        $title['title'] = 'Facility View';
        $this->load->view('templates/index_sidebar', $title);
        $this->load->view('facility', $data);
        $this->load->view('templates/index_footer');
    }
}