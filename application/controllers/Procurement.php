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
        $status = $this->input->post('status');
        $date = $this->input->post('date');
        
        // Data Multiple insert
        $data = array();
        for ($i=0; $i < count($jenis); $i++) {
          array_push($data, array(
              'tiket' => $tiket[$i],
              'jenis' => $jenis[$i],
              'merek' => $merek[$i],
              'value_price' => $valueprice[$i],
              'deskripsi' => $description[$i],
              'payment_method' => $paymentmethod[$i],
              'status' => $status[$i],
              'date' => $date[$i],
            ));

            $this->m_data->input_data($data, 'tb_tr_requisition');
            redirect('Distribution/index');
        }

        //  Get ID ITEM yang di select
    //     $value = array(
    //       'id_item' => $jenis,
    //     );
    // }

    //     // Sortir Data ID ITEM
    //     sort($value['id_item']);


    //     // Get New Stok Data For Updating Item Data Table
    //       $aItem = 0;
    //       $aJumlah = 0;

    //       $stok = array();
    //       for ($a=0; $a < count($value['id_item']); $a++) {
    //               if($a == 0){
    //                 $aItem = $value['id_item'][$a];
    //                 $aJumlah++;
    //               } else {
    //                 if($value['id_item'][$a] == $aItem){
    //                   $aJumlah++;
    //                 } else {
    //                   array_push($stok, array(
    //                       'id_item' => $aItem,
    //                       'stok_input' => $aJumlah
    //                   ));

    //                   $aItem = $value['id_item'][$a];
    //                   $aJumlah = 1;
    //                 }
    //               }
    //       }

    //       if($a == count($value['id_item'])){
    //         array_push($stok, array(
    //             'id_item' => $aItem,
    //             'stok_input' => $aJumlah
    //         ));
    //       }


    //       // Get Old Stok Data FROM ITEM Table
    //       $itemID = array();
    //       for ($i=0; $i < count($stok); $i++) {
    //         $itemID[] = array(
    //           'id'=> $stok[$i]['id_item']
    //         );
    //       }

    //       $itemData = array();
    //       for ($i=0; $i < count($itemID) ; $i++) {
    //         $itemData[] = $this->db->select('stok')->get_where('tb_item', $itemID[$i])->result();
    //       }


    //       $resultData = array();
    //       for ($i=0; $i < count($stok); $i++) {
    //         array_push($resultData, array(
    //             'id' => $stok[$i]['id_item'],
    //             'stok' => $stok[$i]['stok_input'] + $itemData[$i][0]->stok
    //         ));
    //       }

    function pdf($id){

      $this->load->library('pdf');

      $this->pdf->setPaper('A4', 'potrait');
      $this->pdf->filename = "laporan-petanikode.pdf";
      $this->pdf->load_view('pdf/detail_report_procurement');
    }
}
}