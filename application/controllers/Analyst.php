<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analyst extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email'))
        {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Asset Management - Dashboard';
        $this->load->view('analyst/index', $data);
    }

    public function requisition()
    {
        $this->load->view('templates/index_sidebar2');
        $this->load->view('requisition');
        $this->load->view('templates/index_footer');
    }

    public function procurement()
    {
        $this->load->view('templates/index_sidebar2');
        $this->load->view('procurement');
        $this->load->view('templates/index_footer');
    }

    public function distribution()
    {
        $this->load->view('templates/index_sidebar2');
        $this->load->view('distribution');
        $this->load->view('templates/index_footer');
    }

    public function facilities()
    {
        $this->load->view('templates/index_sidebar2');
        $this->load->view('facilities');
        $this->load->view('templates/index_footer');
    }
}
