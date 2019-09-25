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
        $data['title'] = 'Procurement Form';
        $this->load->view('Procurement/procurement_input', $data);
    }

    function details($id){
        $data['title'] = 'Procurement Form';
        $data['get'] = $this->m_data->join_table_detail_procurement($id)->result();
        $data['item_detail'] = $this->m_data->join_table_procurement_item($id)->result();
        $this->load->view('Procurement/procurement_details',$data);

    }

    function update_item($id){
      $data['title'] = 'Procurement Form';
      $data['get'] = $this->m_data->join_table_detail_procurement($id)->result();
      $data['item_detail'] = $this->m_data->join_table_procurement_item($id)->result();
      $this->load->view('Procurement/procurement_edit', $data);
    }

    function update_item_action($id){
      $itemID = $this->input->post('id_item');
      $item_detail = $this->input->post('id_detail_item');
      $serialnumber = $this->input->post('serialnumber');
      $assetnumber = $this->input->post('assetnumber');

      $item = array();
      for ($i=0; $i < count($itemID) ; $i++) {
        array_push($item, array(
          'id' => $itemID[$i],
          'status' => 1
        ));
      }

      $detailItem = array();
        for ($i=0; $i < count($item_detail) ; $i++) {
          array_push($detailItem, array(
            'id' => $item_detail[$i],
            'serial_number' => $serialnumber[$i],
            'asset_number' => $assetnumber[$i],
            'status' => 1
          ));
        }

      $where = array('id' => $id);
      $data = array('status' => 3);

      // echo '<pre>',print_r($detailItem),'</pre>';
      // die;
      $this->m_data->multiple_update('tb_item', $item,'id');
      $this->m_data->multiple_update('tb_detail_item', $detailItem,'id');
      $this->m_data->update_data($where, $data, 'tb_tr_procurement');
      redirect('Procurement/index');
    }

    public function create_req()
    {

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

        $timestamp = strtotime($date);
        $acttualDate = date("Y-m-d", $timestamp);

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
              'status' => 2
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

        $first = "ICT";
        $name  = "PDSI";
        $date = Date('dmY');
        $reqCode = "PROC";
        $reqTiket = $tiket['no_tiket'];
        $kode = $name.'/'.$first.'/'.$date.'/'.$reqCode.'/'.$reqTiket;

        $data = array(
          'id_tiket' => $getTiketID[0]->id,
          'transactionCode' => $kode,
          'payment_method' => $paymentmethod,
          'deskripsi' => $description,
          'date' => $acttualDate,
          'status' => 0
        );

        $this->m_data->input_data($data,'tb_tr_procurement');
        redirect('Procurement/index');
    }

    function approve($id)
    {
      $detailItem = $this->m_data->join_table_procurement_item($id)->result();

      $itemID = array();
      foreach ($detailItem as $a) {
        array_push($itemID, array(
          'id' => $a->id_item,
          'status' => 4
        ));
      }

    // echo '<pre>',print_r($itemID),'</pre>';
    // die;


      $where = array('id' => $id);
      $data = array('status' => 1);

      $this->m_data->multiple_update('tb_detail_item', $itemID,'id');
      $this->m_data->update_data($where, $data, 'tb_tr_procurement');
      redirect('Procurement/index');
    }

    function decline($id)
    {
      $detailItem = $this->m_data->join_table_procurement_item($id)->result();
      $itemID = array();
      foreach ($detailItem as $a) {
        array_push($itemID, array(
          'id_item' => $a->id_item,
          'status' => 5
        ));
      }

      $where = array('id' => $id);
      $data = array('status' => 2);
      // var_dump($itemID);
      // die;

      $this->m_data->multiple_update('tb_detail_item', $itemID,'id_item');
      $this->m_data->update_data($where, $data, 'tb_tr_procurement');
      redirect('Procurement/index');
    }

    function pdf($id){
      $data['tanggal'] = tanggal();
      $data['item_detail'] = $this->m_data->join_table_procurement_item($id)->result();
      $data['get'] = $this->m_data->join_table_detail_procurement($id)->result();

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "Surat Permohonan Pengadaan Asset ICT.pdf";
      $this->pdf->load_view('pdf/proc_permohonan', $data);
    }
}
