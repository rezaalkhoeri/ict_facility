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
        $data['item'] = $this->m_data->detail_item_req()->result();
        $title['title'] = 'Procurement Form';
        $this->load->view('Procurement/procurement_input', $data);

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

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "laporan-petanikode.pdf";
      $this->pdf->load_view('pdf/detail_report_procurement');
    }
}
