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
        $data['get'] = $this->m_data->join_table_procurement()->result();
        $data['title'] = 'Asset Management | Procurement';
        $this->load->view('Procurement/procurement', $data);
    }
    
    function index_input(){
        $title['title'] = 'Procurement Form';
        $this->load->view('templates/index_sidebar2', $title);
        $this->load->view('Procurement/procurement_input');
        $this->load->view('templates/index_footer');
    }

    function details($id){
        $data['get'] = $this->m_data->join_table_detail_procurement($id)->result();
        // print_r($data);
        // die;
        $data['title'] = 'Procurement Form';
        $this->load->view('Procurement/procurement_details',$data);
        
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

    function pdf($id){
        $this->load->library('dompdf_gen');
        $data['get'] = $this->m_data->join_table_detail_procurement($id)->result();
        $this->load->view('pdf/detail_report_procurement', $data);

        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("detail_report_procurement.pdf", array('Attachment' =>0));
    }
}   