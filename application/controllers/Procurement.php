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
        $this->load->view('Procurement/procurement_input');

    }

    function details($id){
        $data['get'] = $this->m_data->join_table_detail_procurement($id)->result();
        // print_r($data);
        // die;
        $data['title'] = 'Procurement Form';
        $this->load->view('Procurement/procurement_details',$data);

    }

    public function tambah_aksi()
    {
        // Get Input Data
        $tiket = $this->input->post('ticket');
        $jenis = $this->input->post('type');
        $merek = $this->input->post('brand');
        $valueprice = $this->input->post('valueprice');
        $description = $this->input->post('description');
        $paymentmethod = $this->input->post('paymentmethod');
        $date = $this->input->post('date');

        $tiket = array(
          'no_tiket' => $tiket,
          'status' => 2
        );

        $this->m_data->input_data($tiket,'tb_tiket');
        $getTiketID = $this->db->select('id')->get_where('tb_tiket', $tiket)->result();

        $item = array();
        for ($i=0; $i < count($jenis); $i++) {
          array_push($item, array(
              'jenis' => $jenis[$i],
              'merek' => $merek[$i],
              'stok' => 0,
              'status' => 0
            ));
        }

        $this->m_data->multiple_insert($item,'tb_item');

        $getItem = array();
        for ($i=0; $i < count($item); $i++) {
          $getItem[] = $this->db->select('id')->get_where('tb_item', $item[$i])->result();
        }

        $detailItem = array();
        for ($i=0; $i < count($getItem); $i++) {
          array_push($detailItem, array(
            'id_item' => $getItem[$i][0]->id,
            'serial_number' => '-',
            'asset_number' => '-',
            'value_price' => $valueprice[$i],
            'status' => 3
            ));
        }

        $this->m_data->multiple_insert($detailItem,'tb_detail_item');

        $getDetailItem = array();
        for ($i=0; $i < count($getItem); $i++) {
          $getDetailItem[] = $this->db->select('id')->get_where('tb_detail_item', $detailItem[$i])->result();
        }

        $detailTiket = array();
        for ($i=0; $i < count($getDetailItem); $i++) {
          array_push($detailTiket, array(
            'id_tiket' => $getTiketID[0]->id,
            'id_item' => $getDetailItem[$i][0]->id
            ));
        }

        $this->m_data->multiple_insert($detailTiket,'tb_detail_tiket');

        $data = array(
          'id_tiket' => $getTiketID[0]->id,
          'payment_method' => $paymentmethod,
          'deskripsi' => $description,
          'date' => $date,
          'status' => 0
        );

        // echo '<pre>',print_r($tiket),'</pre>';
        // echo '<pre>',print_r($item),'</pre>';
        // echo '<pre>',print_r($getItem),'</pre>';
        // echo '<pre>',print_r($detailItem),'</pre>';
        // echo '<pre>',print_r($getDetailItem),'</pre>';
        // echo '<pre>',print_r($detailTiket),'</pre>';
        // echo '<pre>',print_r($data),'</pre>';
        // die;

        $this->m_data->input_data($data,'tb_tr_procurement');
        redirect('Procurement/index');
    }

    function pdf($id){

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "laporan-petanikode.pdf";
      $this->pdf->load_view('pdf/detail_report_procurement');
    }
}
